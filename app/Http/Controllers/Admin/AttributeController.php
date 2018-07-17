<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Http\Requests\AddAttributeRequest;
use App\Http\Requests\EditAttributeRequest;
class AttributeController extends Controller
{

    /**
     * Get data from 2 tables: Attribute and AttributeValue then display the view 'danhsachtt'
     * @return \Illuminate\View\View
     */
    public function getAttribute(){
     	$data['attlist']= Attribute::with('value')->get();
    	return view('backend.danhsachtt',$data);
    }

    /**
    * Get data from 2 tables: Attribute and AttributeValue then display the view 'danhsachtt'
    * @return \Illuminate\View\View
    */
    public function getAddAttribute(){
     	$data['attlist']= Attribute::with('value')->get();
    	return view('backend.themtt',$data);
    }
 
    /**
     * After receiving data from input cells, data will be stored in the database
     * @param  App\Http\Requests\AddAttributeRequest $request 
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAddAttribute(AddAttributeRequest $request){
    	if(isset($request->ten_tt)){
        $attribute = new Attribute;
        $attribute->att_name = $request->ten_tt;
        $attribute->att_slug = str_slug($request->ten_tt);
        $attribute->save();    
        }
        if(isset($request->gt)){
        $arr = explode(",",$request->gt);
            foreach ($arr as $key => $value) {
                $attvalue = new AttributeValue;
                $attvalue->att_value = $value;
                $attvalue->att_id = $attribute->att_id;
                $attvalue->save();                     
            }        
        }
    	return redirect()->intended('admin/attribute');
    }
  
    /**
     * Get data from the database where ID = the ID parameter then display to view
     * @param  int $id
     * @return \Illuminate\View\View
     */
    public function getEdittAttribute($id){
        // $data['att']= Attribute::find($id);
        // $value['attvalue']= Attribute::with('value')->get();
        $data['att']= Attribute::find($id);
        // $data1['attvaluelist'] = AttributeValue::find($id);
        $data1['attlist'] = Attribute::find($id)->value;
        // dd($data1);
         return view('backend.suatt',$data,$data1);
        //dd($value);
    }
  
    /**
     * Edit attribute and attribute value, can add more value in one time.
     * @param  App\Http\Requests\EditAttributeRequest $request
     * @param  int               $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postEditAttribute(EditAttributeRequest $request,$id){
        
        $attribute = Attribute::find($id);
        $attribute->att_name = $request->ten_tt;
        $attribute->att_slug = str_slug($request->ten_tt);
        $attribute->save();    

       if(isset($request->name_id)){
            for($i=0;$i<count($request->name_id);$i++){
                $attvalue = new AttributeValue;
                $arr['att_value']=$request->name_id[$i];
                $attvalue::where('att_value_id',$request->idatt[$i])->update($arr);
                $attvalue->update($arr);

            }
        }

       if(isset($request->gt_moi)){
        $arr = explode(",",$request->gt_moi);
            foreach ($arr as $key => $value) { 
            $attvalue = new AttributeValue;
            $attvalue->att_value =$value;
            $attvalue->att_id = $id;
            // $attvalue->att_id = $request->att_id;
            $attvalue->save(); 
            }
        }
        return redirect()->intended('admin/attribute');   
    }
   
    /**
     * Delete attribute based on parameter id
     * @param  int $id 
     * @return Illuminate\Database\Events\TransactionRolledBack
     */
    public function getDeleteAttribute($id){
        Attribute::destroy($id);
        return back();
    }

    /**
     * Delete attribute value based on parameter id
     * @param  int $id
     * @return Illuminate\Database\Events\TransactionRolledBack
     */
    public function getDeleteAttValue($id){
        AttributeValue::destroy($id);
        return back();
    }


}
