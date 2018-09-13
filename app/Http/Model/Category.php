<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='blog_category';
    protected $primaryKey='cate_id';
    public $timestamps=false;
    protected $guarded=[];

    public static function tree(){
        $categorys = Category::orderBy('cate_order','asc')->get();
        return $data=(new Category)->getGroup($categorys,'cate_id','cate_pid','cate_name');
    } 

    public function getGroup($data,$field_id='id',$field_pid='pid',$field_name='name',$pid=0){
        $arr=array();
        foreach($data as $key=>$value){
            if($value->$field_pid==$pid){
                $data[$key]['_'.$field_name] = $data[$key][$field_name];
                $arr[] = $data[$key];
                foreach($data as $m=>$n){
                    if($n->$field_pid==$value->$field_id){
                        $data[$m]['_'.$field_name] = '|--'.$data[$m][$field_name];
                        $arr[] = $data[$m];
                    }
                }
            }
        }
        return $arr;
    }
}
