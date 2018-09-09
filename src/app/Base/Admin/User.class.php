<?php
namespace Base\Admin;
use DBModel;
class User extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'nick_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'real_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'password','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'password_hash','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'is_staff','type'=>"int",'key'=>false,'defalut'=>'0','null'=>true,],
            ['name'=>'is_supper','type'=>"int",'key'=>false,'defalut'=>'0','null'=>true,],
            ['name'=>'baiduid','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'kefu_id','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'description','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'user_max','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_by','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'ct_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'md_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'debug','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}