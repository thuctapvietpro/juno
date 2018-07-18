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
    *  hien thi du lieu bang comments ra view danh sach binh luan
    *   @param App\Models\Comments
    *   @param Illuminate\Support\Facades\DB   
    *   @return   description of the view
    */
    public function getComment(){
    	$data['commentlist'] = Comments::all();
        $data['commentlist'] = DB::table('comments')->paginate(5);
    	return view('backend.danhsachbl',$data);
    }
    /**
    *  hien thi du lieu bang comments ra view sua binh luan
    *
    *  @param $id 
    *  @param App\Models\Comments
    *  @return description of the view
    */
    public function getEditComment($id){
    	$data['comment']=Comments::find($id);
    	return view('backend.suabl',$data);
    }
    /**
    *  update du lieu tu view sua binh luan len co so su lieu
    *
    *  @param  $id
    *  @param  App\Http\Requests\EditCommentRequest $request
    *  
    *  @return Illuminate\Http\RedirectResponse|Illuminate\Routing\Redirector
    *  
    */
    public function postEditComment(EditCommentRequest $request,$id){
		$comment = Comments::find($id);
    	$comment->comment_content = $request->noi_dung;
		$comment->comment_status = (int)$request->hien_thi;
		$comment->save();
		return redirect()->intended('admin/comment');
    }
    /**
    *  xoa du lieu bang comment
    *
    *  @param  $id
    *  @param App\Models\Comments  
    *  
    *  @return Illuminate\Routing\Redirector
    */
    public function getDeleteComment($id){
    	Comments::destroy($id);
    	return back();
    }
}
