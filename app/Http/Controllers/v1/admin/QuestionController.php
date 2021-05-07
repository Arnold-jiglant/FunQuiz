<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataCollector;
use App\Http\Resources\QuestionResource;
use App\Question;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class QuestionController extends Controller
{
    public function index(Topic $topic)
    {
        $request = Request::capture();

        if ($request->has('filter') && $request->get('filter')
            && $request->has('per_page') &&
            $request->get('per_page')) {
            $questions = $topic->questions()->filter($request->get('filter'))->paginate($request->get('per_page'));
        } elseif ($request->has('filter') && $request->get('filter')) {
            $questions = $topic->questions()->filter($request->get('filter'));
        } elseif ($request->has('per_page') && $request->get('per_page')) {
            $questions = $topic->questions()->orderByDesc('created_at')->paginate($request->get('per_page'));
        } else {
            $questions = $topic->questions()->orderByDesc('created_at')->paginate(10);
        }

        $questions->getCollection()->transform(function ($question, $key) {
            return new QuestionResource($question);
        });
        return new DataCollector($questions);
    }

    /*
     * ADD QUESTION
     */
    public function store(Request $request, Topic $topic)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
            'answers' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }


        $question = $topic->questions()->save(new Question([
            'body' => $request->get('body'),
            'answers' => $request->get('answers'),
        ]));

        //save image
        if ($request->hasFile('image')) {
            $path = $request->file('image')
                ->storeAs('images/question', $question->id . "_" . Str::random(5) . '.' . $request->file('image')->extension());

            $question->image()->create(['path' => $path]);
        }
        return new QuestionResource($question);
    }

    /*
     * UPDATE QUESTION
     */
    public function update(Request $request, Question $question)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
            'answers' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }


        $question->update([
            'body' => $request->get('body'),
            'answers' => $request->get('answers'),
        ]);

        if (!$request->has('preserve')) {
            //delete old image if any
            if ($question->image()->count() > 0) {
                $path = storage_path('app/' . $question->image->path);
                if (File::exists($path)) {
                    unlink($path);
                }
                $question->image()->delete();
            }

            //add image if present
            if ($request->hasFile('image')) {
                $path = $request->file('image')
                    ->storeAs('images/question', $question->id . "_" . Str::random(5) . '.' . $request->file('image')->extension());

                $question->image()->create(['path' => $path]);
            }
        }

        return new QuestionResource($question);
    }

    /*
     * DELETE QUESTION
     */
    public function destroy(Question $question)
    {
        if ($question->image()->count() > 0) {
            $question->image()->delete();
        }

        $question->delete();
        return response()->json([
            'success' => 'Question deleted'
        ]);
    }
}
