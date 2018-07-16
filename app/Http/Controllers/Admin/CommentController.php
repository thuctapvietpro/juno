<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Http\Requests\EditCommentRequest;
class CommentController extends Controller
{
    /**
    *  
    *
    *
    *
    *
    */
    public function getComment(){
    	$data['commentlist'] = Comments::all();
        $data['commentlist'] = DB::table('comments')->paginate(5);
    	return view('backend.danhsachbl',$data);
    }

    public function getEditComment($id){
    	$data['comment']=Comments::find($id);
    	return view('backend.suabl',$data);
    }

    public function postEditComment(EditCommentRequest $request,$id){
		$comment = Comments::find($id);
    	$comment->comment_content = $request->noi_dung;
		$comment->comment_status = (int)$request->hien_thi;
		$comment->save();
		return redirect()->intended('admin/comment');
    }
    public function getDeleteComment($id){
    	Comments::destroy($id);
    	return back();
    }
}
