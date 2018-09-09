<?php
namespace Base\Oauth;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'oauth_type','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'oauth_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'oauth_token_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'oauth_client_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'scope','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'oauth_client_secret','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'redirect_hash','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'response_type','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'method','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}