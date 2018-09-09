<?php
namespace Base\Warning;
use DBModel;
class Conf extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'app_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'warning_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'warning_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'receiver_email','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'receiver_mobile','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}