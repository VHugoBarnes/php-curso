<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {
        // Validación
        $validate = $this->validate($request, [
            'image_id' => 'integer|required',
            'content'  => 'string|required'
        ]);
        
        // Recorger datos
        $user     = \Auth::user();
        $image_id = $request->input('image_id');
        $content  = $request->input('content');

        // Asigno los valores a mi nuevo objeto a guardar
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->image_id = $image_id;
        $comment->content = $content;

        // Guardar en la BD
        $comment->save();

        // Redirección
        return redirect()->route('image.detail', ['id' => $image_id])
                         ->with(['message' => 'Comentario publicado exitosamente']);
    }

    public function delete($id)
    {
        // Conseguir datos del usuario identificado
        $user = \Auth::user();
        
        // Conseguir objeto del comentario
        $comment = Comment::find($id);

        // Comprobar si soy el dueño del comentario o de la publicación
        if($user && ($comment->user_id == $user->id || $comment->image->user_id == $user->id)) {
            $comment->delete();
            return redirect()->route('image.detail', ['id' => $comment->image->id])
                             ->with(['message' => 'Comentario eliminado exitosamente']);
        } else {
            return redirect()->route('image.detail', ['id' => $comment->image->id])
            ->with(['message' => 'No tienes permiso para borrar este comentario']);
        }
    }

}
