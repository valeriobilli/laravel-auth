<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:3|max:100",
            "content" => "max:65435",
            "image" => "url|max:255",
        ];
    }

}




Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string("title", 100)->unique();
    $table->text("content");
    $table->string("image", 255)->nullable();
    $table->timestamps();
});