<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Http\Requests\AddAccountRequest;
use DB;
class AccountController extends Controller
{
    //
    public function getAccount(){
    	$data['accountlist']=Account::all();
        $data['accountlist'] = DB::table('accounts')->paginate(5);
    	return view('backend.danhsachtv',$data);
    }
    public function getAddAccount(){
    	return view('backend.themtv');
    }
    public function postAddAccount(AddAccountRequest $request){
    	$Account = new Account;
    	$Account->user_name = $request->ten_tv;
    	$Account->user_email = $request->email;
    	$Account->password = bcrypt($request->mk);
        if($request->img){
	    	$filename = $request->img->getClientOriginalName();
	    	$Account->user_avatar = $filename;
	    	$request->img->storeAs('avatar',$filename,'public');	
    	}
    	$Account->user_phone = $request->phone;
    	$Account->user_role = $request->lv;
    	$Account->save();

    	return redirect()->intended('admin/account');
    }
    public function getEditAccount($id){
        $data['account']=Account::find($id);
        return view('backend.suatv',$data);
    }
    public function postEditAccount(Request $request,$id){
        $account =new Account;
        $arr['user_name']=$request->ten_tv;
        $arr['user_email']=$request->email;
        if($request->hasFile('img')){
            $img=$request->img->getClientOriginalName();
            $arr['user_avatar']=$img;
            $request->img->storeAs('avatar',$img,'public'); 
        }
        $arr['user_phone']=$request->phone;
        $arr['user_role']=$request->lv;
        $account::where('user_id',$id)->update($arr);
        return redirect()->intended('admin/account');
    }
    public function getDeleteAccount($id){
        Account::destroy($id);
        return back();
    }

}
