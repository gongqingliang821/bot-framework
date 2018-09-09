<?php
namespace Base\Bot\Install;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'install_count','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'score','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}