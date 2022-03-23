<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public  function  store(Request  $request,$id){
        $table = new  Comment();
        if (Auth::check()) {
            $table->name = Auth::user()->name;
            $table->email = Auth::user()->email;


        }else{
            $table->name = $request->name;
            $table->email = $request->email;
            $table->website = $request->website;

        }
        $table->article_id = $id;
        $table->commentaire = $request->commentaire;
        $table->photoProfil = "blog-post1.jpg";
        $table->save();
		return  redirect()->back();
    }
    public function destroy($id){
		$destroy = Comment::find($id);
		$destroy->delete();
		return  redirect()->back();

	}


}
