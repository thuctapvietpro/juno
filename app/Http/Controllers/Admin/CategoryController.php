<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorys;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use DB;
class CategoryController extends Controller
{
    //
    public function getCategory(){
    	$data['catelist']=Categorys::all();
        $data['catelist'] = DB::table('categorys')->paginate(5);
        return view('backend.danhsachdm',$data);
    }
    public function getAddCategory(){
    	$parent =Categorys::select('cate_id','cate_name','cate_parent')->get()->toArray();
        return view('backend.themdm',compact('parent'));
    }
    public function postAddCategory(AddCategoryRequest $request){
 
    	$Category = new Categorys;
    	$Category->cate_name = $request->ten_dm;
	    	
        if(isset($request->img)){
            $filename = $request->img->getClientOriginalName();
            $Category->cate_thumbnail = $filename;
	    	$request->img->storeAs('avatar',$filename, 'public');
        }	
    	$Category->cate_slug = str_slug($request->ten_dm);
    	$Category->cate_parent = $request->dm_cha;
    	$Category->save();

    	return redirect()->intended('admin/category');
    } 
    public function getEditCategory($id){
        $data =Categorys::findOrFail($id)->toArray();
        $parent =Categorys::select('cate_id','cate_name','cate_parent')->get()->toArray();
        return view('backend.suadm',compact('parent','data'));

    }
    public function postEditCategory(EditCategoryRequest $request,$id){
        $cate=Categorys::find($id);
        $cate->cate_name=$request->ten_dm;
        $cate->cate_parent=$request->dm_cha;
        if($request->hasFile('img')){
            $filename=$request->img->getClientOriginalName();
            $cate->cate_thumbnail = $filename;
            $request->img->storeAs('avatar', $filename, 'public'); 
        }else{
            $cate->cate_thumbnail = '/lib/public/backend/anh/new_seo-10-512.png';
        }
        $cate->save();
        return redirect()->intended('admin/category');
    }
    public function getDeleteCategory($id){
        Categorys::destroy($id);
        return back();

    }

}
