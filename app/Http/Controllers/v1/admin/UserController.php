<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataCollector;
use App\Http\Resources\TagResource;
use App\Http\Resources\TopicResource;
use App\Http\Resources\UserProfileResource;
use App\Topic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $request = Request::capture();

        if ($request->has('filter') && $request->get('filter') && $request->has('per_page') && $request->get('per_page')) {
            $users = User::users()->filter($request->get('filter'))->paginate($request->get('per_page'));
        } elseif ($request->has('filter') && $request->get('filter')) {
            $users = User::users()->filter($request->get('filter'));
        } elseif ($request->has('per_page') && $request->get('per_page')) {
            $users = User::users()->orderByDesc('created_at')->paginate($request->get('per_page'));
        } else {
            $users = User::users()->orderByDesc('created_at')->paginate(10);
        }

        $users->getCollection()->transform(function ($user, $key) {
            return new \App\Http\Resources\UserProfileResource($user);
        });

        return new DataCollector($users);
    }

    /*
     * ADD USER
     * */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'role_id' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $user = new User([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'role_id' => $request->get('role_id'),
            'status' => $request->get('status'),
            'password' => bcrypt(123)
        ]);
        $user->save();
        $user->refresh();

        return response()->json([
            new UserProfileResource($user)
        ]);
    }

    /*
     * SHOW USER
     */
    public function show(User $user)
    {
        return new UserProfileResource($user);
    }


    /*
     * UPDATE USER
     * */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id)
            ],
            'phone' => [
                'required',
                Rule::unique('users')->ignore($user->id)
            ],
            'role_id' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $user->update([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'role_id' => $request->get('role_id'),
            'status' => $request->get('status'),
        ]);
        $user->refresh();

        return response()->json([
            new UserProfileResource($user)
        ]);
    }

    /*
     * USER TOPICS
     */
    public function topics(User $user)
    {
        $topics = $user->topics()->orderByDesc('created_at')->paginate(10);
        $topics->getCollection()->transform(function ($topic, $key) {
            return new TopicResource($topic);
        });
        return new DataCollector($topics);
    }

    /*
     * USER TAGS
     */
    public function tags(User $user)
    {
        $tags = $user->tags()->paginate(10);
        $tags->getCollection()->transform(function ($tags, $key) {
            return new TagResource($tags);
        });
        return new DataCollector($tags);
    }

    /*
     * UPDATE IMAGE
     */
    public function updateImage(Request $request, User $user)
    {
        if (!$request->hasFile('image')) return response()->json([
            'error' => 'Image file required'
        ]);
        //delete old image
        if ($user->image()->count() > 0) {
            $path = storage_path('app/' . $user->image->path);
            if (File::exists($path)) {
                unlink($path);
            }
            $user->image()->delete();
        }
        $path = $request->file('image')
            ->storeAs('images/user', $user->id . "_" . Str::random(5) . '.' . $request->file('image')->extension());

        $image = $user->image()->create(['path' => $path]);

        return route('image', $image->id);
    }
}
