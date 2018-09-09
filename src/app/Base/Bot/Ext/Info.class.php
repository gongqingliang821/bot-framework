<?php
namespace Base\Bot\Ext;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'bot_info_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'install_count','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'courier_number','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bot_speeches','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'reprompt_num','type'=>"int",'key'=>false,'defalut'=>'1','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'signature_key','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'package_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'sort_num','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'op','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'op_desc','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
                    ];
        return $FIELD_LIST;
    }
}