<?php
namespace Base\Scene\Bot;
use DBModel;
class Relation extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'scene_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'os_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'is_default','type'=>"int",'key'=>false,'defalut'=>'1','null'=>false,],
            ['name'=>'biz_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}