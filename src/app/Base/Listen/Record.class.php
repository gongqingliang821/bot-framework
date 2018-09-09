<?php
namespace Base\Listen;
use DBModel;
class Record extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'track_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'album_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'dumi_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'offset','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}