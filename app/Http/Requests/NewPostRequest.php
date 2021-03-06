<?php

namespace App\Http\Requests;

use App\Post;
use Illuminate\Foundation\Http\FormRequest;

class NewPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required',
            'topic_id' => 'required',
            'scope_type' => 'required',
            'scope_id' => 'required',
        ];
    }

    public function persist(){
        $post = Post::create([
            'body' => request('body'),
            'topic_id' => request('topic_id'),
            'scope_type' => "App\\" . request('scope_type'),
            'scope_id' => request('scope_id'),
            'user_id' => auth()->user()->id,
        ]);
        return $post;
    }
}
