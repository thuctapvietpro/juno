<?php

function cate_parent($data,$parent=0,$str="--",$select=0){
	foreach ($data as $val) {
		$val['str'] = $str;
		$val['selected'] = $select;

		if($val["cate_parent"]==$parent){
			printf(View('welcome', $val));
			cate_parent($data,$val['cate_id'],$str."--");
		}
		
	}
	
}

?>