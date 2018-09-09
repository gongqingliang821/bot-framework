<?php
namespace Base\Bot\List;
use DBModel;
class Bak extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'chinese_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'query_list','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'intro','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}