<?php

namespace App\Providers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * GLOBAL pagination query string
         * */
        $this->app->resolving(LengthAwarePaginator::class, static function (LengthAwarePaginator $paginator) {
            return $paginator->appends(request()->query());
        });
        $this->app->resolving(Paginator::class, static function (Paginator $paginator) {
            return $paginator->appends(request()->query());
        });



        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });

        /*
         *
         * ADD SORT B MULTI ATTRIBUTE
         *
         * */

        if (!Collection::hasMacro('ungroup')) {
            /**
             * Ungroup a previously grouped collection (grouped by {@see Collection::groupBy()})
             */
            Collection::macro('ungroup', function () {
                // create a new collection to use as the collection where the other collections are merged into
                $newCollection = Collection::make([]);
                // $this is the current collection ungroup() has been called on
                // binding $this is common in JS, but this was the first I had run across it in PHP
                $this->each(function ($item) use (&$newCollection) {
                    // use merge to combine the collections
                    $newCollection = $newCollection->merge($item);
                });

                return $newCollection;
            });
        }

        if (!Collection::hasMacro('sortByMulti')) {
            /**
             * An extension of the {@see Collection::sortBy()} method that allows for sorting against as many different
             * keys. Uses a combination of {@see Collection::sortBy()} and {@see Collection::groupBy()} to achieve this.
             *
             * @param array $keys An associative array that uses the key to sort by (which accepts dot separated values,
             *                    as {@see Collection::sortBy()} would) and the value is the order (either ASC or DESC)
             */
            Collection::macro('sortByMulti', function (array $keys) {
                $currentIndex = 0;
                $keys = array_map(function ($key, $sort) {
                    return ['key' => (string) $key, 'sort' => $sort];
                }, array_keys($keys), $keys);

                $sortBy = function (Collection $collection) use (&$currentIndex, $keys, &$sortBy) {
                    if ($currentIndex >= count($keys)) {
                        return $collection;
                    }

                    $key = $keys[$currentIndex]['key'];
                    $sort = $keys[$currentIndex]['sort'];
                    $sortFunc = $sort === 'DESC' ? 'sortByDesc' : 'sortBy';
                    $currentIndex++;
                    return $collection->$sortFunc($key)->groupBy($key)->map($sortBy)->ungroup();
                };

                return $sortBy($this);
            });
        }
    }
}
