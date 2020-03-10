<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Lang;

class CommentController extends Controller
{

  public function show($id){
      $data = []; //to be sent to the view
      $comment = Comment::findOrFail($id);

      $data["title"] = Lang::get('messages.show');
      $data["comments"] = $comment;

      return view('comment.show')->with("data",$data);
  }

    public function create(){
      $data = [];
      $data["title"] = Lang::get('messages.create');
      return view('comment.create')->with("data",$data);
    }

    public function save(Request $request){

      $request->validate([
            "username" => "required",
            "comment" => "required"

        ]);

      $comment=new comment;
      $comment -> username = $request->username;
      $comment -> comment = $request->comment;
      $comment->save();
      return back()->with('success','Comentario agregado correctamente!');

   }

   public function comment($id){
        $data = []; //to be sent to the view
        $comment = Comment::findOrFail($id);

        $data["title"] = Lang::get('messages.comment');
        $data["comments"] = $comment;

        return view('comment.comment')->with("data",$data);
    }


    public function erase($id){
        Comment::where('id', $id)->delete();
        return redirect()->route('product.index');
    }
}
