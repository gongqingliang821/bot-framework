<?php
namespace Base\Kit;
use DBModel;
class Audit extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'com_name','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'email','type'=>"string",'key'=>false,'defalut'=>' ','null'=>false,],
            ['name'=>'com_intr','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'user_name','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'mobile','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'user_info','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'product_intr','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'product_type','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'scale','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'options','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'reason','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'biz_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'hardware_info','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}