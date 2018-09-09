<?php
namespace Base\Bot;
use DBModel;
class Config extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'nick_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'connect_type','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'protocol_type','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bns_timeout','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'net_config','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bot_ak','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bot_sk','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'give_bduss','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'give_user_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'early_return','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'require_baidu_login','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'require_thirdparty_login','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'bot_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'tp_cloud_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'biz_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}