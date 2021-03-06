<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Resources\AuthorsResource;
use App\Models\Author;

class StoreAuthorRequest extends FormRequest
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
      /* $faker = \Faker\Factory::create(1);
        $author = Author::create([
            'name' => $faker->name
        ]);
        return new AuthorsResource($author);  */
          return [
            //new AuthorsResource($author)
        ]; 
    }
}
