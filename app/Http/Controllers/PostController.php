<?php

    namespace App\Http\Controllers;

    use App\Models\Post;
    use App\Models\User;

    Class PostController extends Controller {
        public function index()
        {
            return view('post', [
                'posts' => Post::all()
            ]);
        }

        public function detail(Post $post)
        {
            return view('detail', [
                'title'     => $post->title,
                'detail'    => $post
            ]);
        }

        public function authors(User $user)
        {
            return view('posts', [
                'title'     => $user->name,
                'author'    => $user->posts
            ]);
        }
    }

?>