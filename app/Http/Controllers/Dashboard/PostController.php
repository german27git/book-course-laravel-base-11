<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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

    $post = Post::find(1);
    $category = Category::find(1);
    //$post = Post::find(4)->delete();
    dd($category->posts[1]->title);
    


    // $post->update(
    //             [
    //                 'title' => 'new tittle',
    //                 'slug' => 'new tittle',
    //                 'content' => 'test tittle',
    //                 'image' => 'test image',
    //             ]
    //             );

    // Post::create(
    //     [
    //         'title' => 'test tittle',
    //         'slug' => 'test tittle',
    //         'content' => 'test tittle',
    //         'category_id' => 1,
    //         'description' => 'test tittle',
    //         'posted' => 'not',
    //         'image' => 'test image',
    //     ]
    //     );


        return "Index";
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
