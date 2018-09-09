<?php
namespace Base\Product;
use DBModel;
class Audit extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'user_name','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'email','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'mobile','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'position','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'com_intr','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'product_intr','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'app_name','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'app_id','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'speech_ak','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'auth_num','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'complete_status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}