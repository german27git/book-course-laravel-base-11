<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PuthRequest;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


    //  Find es igual a SELECT * FROM POST WHERE ID = 1 

    $posts = Post::paginate(2);
    //dd($posts);
    return view('dashboard/post/index',compact('posts'));
    
    
    //$post = Post::find(4)->delete();
    // $post->update(
    //             [
    //                 'title' => 'new tittle',
    //                 'slug' => 'new tittle',
    //                 'content' => 'test tittle',
    //                 'image' => 'test image',
    //             ]
    //             );

//    Post::create(
//        [
//            'title' => $request->all()['title'],
//            'slug' => $request->all()['slug' ],
//            'content' => $request->all()['content'],
//            'category_id' => $request->all()['categogory_id'],
//            'description' => $request->all()['description'],
//            'posted' => $request->all()['posted'],
//            //'image' => $request->all()['image'],
//        ]
//        );



    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();
        

        return view('dashboard.post.create', compact('categories','post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Post::create($request->validated());
        return to_route('post.index');
        
        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:7',
        //     'category_id' => 'required|integer',
        //     'posted' => 'required',
        // ]);


        //-------FORMA ABREVIADA PARA CREAR POST----//
        //Post::create($request->all());


        //-----Forma tradicional para crear el POST----//
    //    Post::create(
    //        [
    //            'title' => $request->all()['title'],
    //            'slug' => $request->all()['slug' ],
    //            'content' => $request->all()['content'],
    //            'category_id' => $request->all()['category_id'],
    //            'description' => $request->all()['description'],
    //            'posted' => $request->all()['posted'],
    //            //'image' => $request->all()['image'],
    //        ]
    //    );

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
        return view ('dashboard/post/show',['post'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories= Category::pluck('id','title');
        return view('dashboard.post.edit',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        
        $data= $request->validated();
        
        //image
        if(isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('uploads/posts'),$filename);
        }
        //image
        $post->update($data);
        return to_route('post.index');

        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index');
    }
}
