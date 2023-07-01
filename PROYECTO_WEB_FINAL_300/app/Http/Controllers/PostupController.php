<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('postUp');
    }
    public function postGuardar(request $request)
    {
       $post = new Post();
       $post->titulo=$request->titulo;

       if($request->hasFile("imagen")){
        $imagen= $request->file("imagen");
        $tituloimagen = Str::slug($request->titulo).".".$imagen->guessExtension();
        $ruta = public_path("img/post/");
        $imagen->move($ruta,$tituloimagen);
        $post->imagen=$tituloimagen;
       }
        
       $post->save();
       redirect();
       
    }
}

