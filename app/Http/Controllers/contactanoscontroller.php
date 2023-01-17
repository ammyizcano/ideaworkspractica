<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class contactanoscontroller extends Controller
{
    public function index()
    {
        return view('contactanos');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->nombre = $request->nombre;
        $post->correo = $request->correo;
        $post->telefono = $request->telefono;
        $post->mensaje = $request->mensaje;
        $post->save();
        return redirect('contactanos')->with('status', 'Se ha enviado correctamente');
    }
}