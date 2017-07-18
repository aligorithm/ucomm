<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Like;
use App\Post;

class LikeRequest extends FormRequest
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
            'liked_type' => 'required',
            'liked_id' => 'required',
        ];
    }

    public function persist(Post $post){
        $like = $post->like(auth()->user());

        return $like;
    }
}
