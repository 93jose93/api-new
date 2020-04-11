<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;

use App\Http\Requests\Post as PostRequests;  //--->este es la ruta del nuevo request que viene 
//use Illuminate\Http\Request; -->este ya no se usa ya que se creo un request para las validacion          
// siendo Post pero ya existe y se le crea un alias como se ve Post as PostRequests 

class PostController extends Controller
{
    //esto es PARA resumir codigo o mejorarlo o refactorizacion
    //se crea entidad $post pra asignar a post
    protected $posts;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            $this->post->paginate(), 200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequests $request)
    {
        $post = $this->post->create($request->all());
        //$post = Post::create($request->all());

        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequests $request, Post $post)
    {
        $post->update($request->all());

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return response()->json(null, 204);
    }
}
