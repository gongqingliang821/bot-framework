<?php
namespace Base\Bot;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>true,],
            ['name'=>'bot_name','type'=>"string",'key'=>true,'defalut'=>'','null'=>true,],
            ['name'=>'nick_name','type'=>"string",'key'=>true,'defalut'=>'','null'=>true,],
                    ];
        return $FIELD_LIST;
    }
}
