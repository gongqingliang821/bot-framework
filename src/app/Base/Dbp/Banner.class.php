<?php
namespace Base\Dbp;
use DBModel;
class Banner extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'icon_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'title','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'sub_title','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'click_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'pic_order','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'start_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'end_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}