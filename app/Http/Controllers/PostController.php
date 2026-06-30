<?php

    namespace App\Http\Controllers;

    use App\Models\Post;
    use App\Models\User;
    use App\Models\Category;
    use Illuminate\Validation\Validator;
    use Illuminate\Http\Request;

    Class PostController extends Controller {
        public function index()
        {
            
            $posts = Post::with(['category', 'author'])->filter(request(['category', 'author', 'search']))->latest()->paginate(6)->withQueryString();
            return view('post', compact('posts')); 
            // return view('post', [
            //     // 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(5)->get()
            // ]);
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

        public function categories(Category $category)
        {
            return view('category', [
                'title' => $category->name,
                'category' => $category->posts
            ]);
        }

        

        public function edit(Post $post)
        {
            return view('edit', compact('post'));
        }

        public function update(Request $request, Post $post)
        {
            $validated = request->validate([
                'title'     => 'required',
                'slug'      => 'required|unique:posts:slug'. $post->id,
                'content'   => 'required',
                'author_id'    => 'required|exists:users,id',
                'category_id'  => 'required|exists:categories,id'
            ]);

            $post->update($validated);

            return redirect('/post');
        }
    }

?>