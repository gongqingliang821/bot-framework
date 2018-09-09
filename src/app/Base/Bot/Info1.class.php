<?php
namespace Base\Bot;
use DBModel;
class Info1 extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'bot_name','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'nick_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bot_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'icon_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'tool_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'resource_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'resource_info','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'version','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'template_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'template_md5','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'template_product_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'classify','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'connect_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'protocol_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'bns_timeout','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'net_config','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'developer','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'developer_home','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'summary','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'instructions','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'display_imgs','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'manual','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_desc','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'language','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'query_example','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'tags','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'is_system','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'bot_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'deploy_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'smarthome_webservice_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'tp_cloud_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'biz_info','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'display_status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'version_desc','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'oauth_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'info_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'is_device_debug','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'reason','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}