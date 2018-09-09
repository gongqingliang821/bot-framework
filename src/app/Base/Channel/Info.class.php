<?php
namespace Base\Channel;
use DBModel;
class Info extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'channel_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'real_channel_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'channel_desc','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'scene','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'template_path','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'non_install_bot_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}