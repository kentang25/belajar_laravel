<?php
    namespace App\Http\Controllers;

    use App\Models\Post;
    use App\Models\User;
    use App\Models\Category;
    use Illuminate\Validation\Validator;
    use Illuminate\Http\Request;

    Class AdminController extends Controller{

        public function index()
        {
            $posts = Post::with(['category', 'author'])->latest()->get();
            return view('admin.admin', compact('posts'));
        }

        public function inputForm()
        {
            return view('admin.input', [
                'authors' => User::all(),
                'categories' => Category::all()
            ]);
        }

        public function insertData(Request $request)
        {
            $validated = $request->validate([
                'title'     => 'required|max:225',
                'slug'      => 'required|unique:posts',
                'content'   => 'required',
                'author_id' => 'required|exists:users,id',
                'category_id'   => 'required|exists:categories,id'
            ]);

            // dd($validated);

            Post::create($validated);

            return redirect('/admin/post/')->with('succes', 'berhasil menambahkan data');
        }

        public function edit(Post $post)
        {
            return view('admin.edit', [
                'post'          => $post,
                'authors'       => User::all(),
                'categories'    => Category::all()
            ]);
        }

        public function update(Request $request, Post $post)
        {
            $validated = $request->validate([
                'title' => 'Required',
                'slug'  => 'Required|unique:posts,slug'. $post->id,
                'content'   => 'Required',
                'author_id' => 'required|exists:users,id',
                'category_id' => 'required|exists:categories,id',
            ]);

            $post->update($validated);

            return redirect('/admin/post');
        }

        public function delete(Post $post)
        {
            $post->delete();

            return back();
        }

    }
?>