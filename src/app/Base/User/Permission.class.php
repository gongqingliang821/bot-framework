<?php
namespace Base\User;
use DBModel;
class Permission extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'dumi_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'permission_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'scope','type'=>"string",'key'=>false,'defalut'=>'','null'=>true,],
                    ];
        return $FIELD_LIST;
    }
}