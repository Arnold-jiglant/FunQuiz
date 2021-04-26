<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataCollector;
use App\Http\Resources\TagResource;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TagController extends Controller
{
    public function index()
    {
        $request = Request::capture();
        if ($request->has('tag') && $request->get('tag')) {
            $tags = Tag::where('name', 'like', $request->get('tag') . '%')->paginate(100);
        } else {
            $tags = Tag::paginate(100);
        }

        $tags->getCollection()->transform(function ($tag, $key) {
            return new TagResource($tag);
        });

        return new DataCollector($tags);
    }

    /*
    * ADD TAG
    * */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:tags',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $tag = Tag::create(['name'=>$request->get('name'),'user_id'=>Auth::id()]);
        return response()->json([
            new TagResource($tag)
        ]);
    }
    /*
    * UPDATE TAG
    * */
    public function update(Request $request,Tag $tag)
    {
        $validator = Validator::make($request->all(), [
            'name' =>[
                'required',
                Rule::unique('tags')->ignore($tag->id)
            ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $tag->update(['name'=>$request->get('name')]);
        $tag->refresh();
        return response()->json([
            new TagResource($tag)
        ]);
    }

}
