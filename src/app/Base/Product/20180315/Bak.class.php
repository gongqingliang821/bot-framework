<?php
namespace Base\Product\20180315;
use DBModel;
class Bak extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'app_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'app_type','type'=>"int",'key'=>false,'defalut'=>'1','null'=>false,],
            ['name'=>'app_intr','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'app_service_list','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bot_service_list','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'app_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'app_key','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'ext_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'speech_app_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'speech_ak','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'speech_sk','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'iot_ret_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'package_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'upload_directive','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'directive_status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'sync_status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'reason','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'update_redis','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'open_speech','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'app_plat','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'os_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'app_code','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'alias_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}