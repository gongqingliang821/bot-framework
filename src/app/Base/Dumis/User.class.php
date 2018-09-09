<?php
namespace Base\Dumis;
use DBModel;
class User extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'user','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'role_list','type'=>"string",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'dcs_app_list','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bot_app_list','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'botconfig_app_list','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'faq_app_list','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bot_id_list','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}