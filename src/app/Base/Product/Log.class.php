<?php
namespace Base\Product;
use DBModel;
class Log extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'product_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'trigger_server','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'trigger_user','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'ct_time','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'info','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}