<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataCollector;
use App\Http\Resources\TopicResource;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class TopicController extends Controller
{
    //show all topics
    public function index()
    {
        $request = Request::capture();

        if ($request->has('filter') && $request->get('filter')
            && $request->has('per_page') &&
            $request->get('per_page')) {
            $topics = Topic::filter($request->get('filter'))->paginate($request->get('per_page'));
        } elseif ($request->has('filter') && $request->get('filter')) {
            $topics = Topic::filter($request->get('filter'));
        } elseif ($request->has('per_page') && $request->get('per_page')) {
            $topics = Topic::orderByDesc('created_at')->paginate($request->get('per_page'));
        } else {
            $topics = Topic::orderByDesc('created_at')->paginate(10);
        }

        $topics->getCollection()->transform(function ($topic, $key) {
            return new TopicResource($topic);
        });
        return new DataCollector($topics);

    }

    /*
     *ADD TOPIC
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:topics',
            'image' => 'required|image',
            'tags' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        //saving topic
        $topic = Topic::create(['name' => $request->get('name'), 'user_id' => Auth::id()]);

        //attaching tags
        $tags = explode(',', $request->get('tags'));
        $topic->tags()->sync($tags);

        //Save image file
        $path = $request->file('image')
            ->storeAs('images/topic', $topic->id . "_" . Str::random(5) . '.' . $request->file('image')->extension());

        $topic->image()->create(['path' => $path]);

        return response()->json([
            new TopicResource($topic)
        ]);
    }

    /*
     * GET TOPIC
     */
    public function show(Topic $topic)
    {
        return new TopicResource($topic);
    }

    /*
     *UPDATE TOPIC
     */

    public function update(Topic $topic, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique('topics')->ignore($topic->id)
            ],
            'image' => 'image',
            'tags' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        //update topic
        $topic->update(['name' => $request->get('name')]);

        //attaching tags
        $tags = explode(',', $request->get('tags'));
        $topic->tags()->sync($tags);

        //change Image image file
        if ($request->hasFile('image')) {
            //delete old image
            $path = storage_path('app/' . $topic->image->path);
            if (File::exists($path)) {
                unlink($path);
            }
            $topic->image()->delete();

            $path = $request->file('image')
                ->storeAs('images/topic', $topic->id . "_" . Str::random(5) . '.' . $request->file('image')->extension());

            $topic->image()->create(['path' => $path]);
        }

        return response()->json([
            new TopicResource($topic)
        ]);
    }
}
