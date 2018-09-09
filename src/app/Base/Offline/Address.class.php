<?php
namespace Base\Offline;
use DBModel;
class Address extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'cuid','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'user_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'audioproxy_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'ui_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'us_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'da_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'version','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'start_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'end_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'qda_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'nda_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}