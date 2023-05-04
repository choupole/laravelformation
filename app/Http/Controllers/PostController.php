<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        $posts = Post::orderBy('title') ->take(3) -> get();

        //return view ('articles')->with('title', $title);
        // 2 façon de faire 
         return view('articles', compact(('posts')) );

         /**
          * return view('articles', ['title'=> $title,'title2'=>$title2;])
          
          */
    }

    public function show($id) {

        $posts = Post::findorFail($id);



        return view('article', [
            'post' => $posts,
        ]);
    }

    public function contact() {
        

        return view('contact');
    }

    public function create() {
        
        return view('form');
    }

    public function store(Request $request) {

        // $posts = new Post();
        // $posts->title = $request->title;
        // $posts->content = $request->content;
        // // ici on sauvegarde dans la base de données 
        // $posts->save();

        // les bonnes pratiques 
        Post::create([
            'title' => $request->title,
            'content' => $request->title,
        ]);
        dd('post créer ');
    }

    public function edit($id) {
        $post = post::find($id);
        return view('students.edit')->with('students', $post);

    }

    public function update(Request $request, $id) {
        $post = Post::find($id);
        $input = $request->all();
        $post->update($input);
        return redirect('student')->with('flash_message', 'post Updated!');  

    }
    public function destroy($id) {
        Post::destroy($id);
        return redirect('articles')->with('flash_message', 'Articles deleted!');  

    }
}
