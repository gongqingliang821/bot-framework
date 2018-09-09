<?php
namespace Base\Bot\Version;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bot_info_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'bot_speeches','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'courier_number','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'reprompt_num','type'=>"int",'key'=>false,'defalut'=>'1','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'package_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'signature_key','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'declared_permissions','type'=>"string",'key'=>false,'defalut'=>'','null'=>true,],
                    ];
        return $FIELD_LIST;
    }
}