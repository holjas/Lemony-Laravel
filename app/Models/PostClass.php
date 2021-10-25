<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostClass
{

    public static function findMethod($slug)
    {
        //if (!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
        //return redirect('/');
        //}
        //find a post, and if there is no post then 'not found'
        //if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
        //    throw new ModelNotFoundException();
        //}
        //
        //return cache()->remember("posts.{slug}", 2, fn () => file_get_contents($path));
    }
};
