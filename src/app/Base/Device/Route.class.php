<?php
namespace Base\Device;
use DBModel;
class Route extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'route_type','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'route_url','type'=>"string",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'route_desc','type'=>"string",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}