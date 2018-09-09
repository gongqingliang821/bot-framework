<?php
namespace Base;
use DBModel;
class User extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'phone','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'user_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'real_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'nickname','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'weixin_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'baidu_uid','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'point','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'experience','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'ct_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'last_online_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'last_online_ip','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'gender','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'latitude','type'=>"string",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'longitude','type'=>"string",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'location_src','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'address','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'description','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'deleted','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}