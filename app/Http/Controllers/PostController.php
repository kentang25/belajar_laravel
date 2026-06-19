<?php

    namespace App\Http\Controllers;

    use App\Models\Post;

    Class PostController {
        public function index()
        {
            return view('post', [
                'posts' => Post::all()
            ]);
        }
    }

?>