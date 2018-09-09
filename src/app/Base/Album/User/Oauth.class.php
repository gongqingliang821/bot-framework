<?php
namespace Base\Album\User;
use DBModel;
class Oauth extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'passport_id','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'device_id','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'access_token','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'expires_in','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'refresh_token','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'is_filter','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'is_classify','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}