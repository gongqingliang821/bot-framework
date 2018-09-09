<?php
namespace Base\Test;
use DBModel;
class 17 extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'mobile','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'user_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'is_del','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'hardware_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'product_intr','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}