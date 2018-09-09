<?php
namespace Base\Suggestion;
use DBModel;
class Query extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'channel_name','type'=>"string",'key'=>true,'defalut'=>'default','null'=>true,],
            ['name'=>'query','type'=>"string",'key'=>false,'defalut'=>'','null'=>true,],
            ['name'=>'query_pinyin','type'=>"string",'key'=>false,'defalut'=>'','null'=>true,],
            ['name'=>'weight','type'=>"int",'key'=>false,'defalut'=>'0','null'=>true,],
            ['name'=>'version','type'=>"int",'key'=>false,'defalut'=>'0','null'=>true,],
                    ];
        return $FIELD_LIST;
    }
}