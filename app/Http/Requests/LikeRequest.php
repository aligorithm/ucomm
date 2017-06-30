<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Like;

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

    public function persist(){
        $like = new Like();
        $like->liked_type = 'App\\' . request('liked_type');
        $like->liked_id = request('liked_id');
        $like->user_id = auth()->user()->id;
        $like->save();
    }
}
