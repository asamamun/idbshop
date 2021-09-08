<?php
/**
 * Created by PhpStorm.
 * User: Lab-2
 * Date: 02-10-17
 * Time: 09.57
 */

namespace App\Ecclass;
use App\Category;

class CategoryList
{
    public function build_list(){
        $catlist = Category::all();
        //dd($catlist);
        $returnArr = [];
        foreach ($catlist as $cat)
            $returnArr[]= [
                'id'=>$cat->id,
                'catname'=>$cat->catname,
                'parent_id'=>$cat->parent_id,
            ];
        return $returnArr;
    }

    public function get_opt($array, $parent=0, $indent="") {
        $return = array();
        foreach($array as $key => $val) {
            if($val["parent_id"] == $parent) {
                $return["x".$val["id"]] = $indent.$val["catname"];
                $return = array_merge($return, $this->get_opt($array, $val["id"], $indent."-&nbsp;"));
            }
        }
        return $return;
    }
}