<?php
namespace Base\Dbp;
use DBModel;
class Recall extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'query_url','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'-1','null'=>false,],
            ['name'=>'result_url','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>true,],
            ['name'=>'timeout','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}