<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Lang;

class CommentController extends Controller
{

    public function create(){
      $data = [];
      $data["title"] = Lang::get('messages.create');
      return view('comment.create')->with("data",$data);
    }

    public function save(Request $request, $id){
      $user_id = Auth()->user()->id;
      $validatedData = $request->validate(Comment::$createRules);
      $comment=new comment; /// create model object
      $comment-> product_id = $id;
      $comment-> user_id = $user_id;
      $comment-> text = $request->text;
      $comment->save();
      return back()->with('success','Comentario agregado correctamente!');
   }

    public function destroy($id) {
      $id->delete();
      return redirect()->route('product.index');
  }
}
