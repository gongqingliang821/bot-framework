<?php
namespace Base\Bot;
use DBModel;
class Dict extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'file_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'bos_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'crawle_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'fid','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'wget_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'url_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}