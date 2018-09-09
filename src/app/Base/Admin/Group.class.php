<?php
namespace Base\Admin;
use DBModel;
class Group extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'description','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'create_by','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'ct_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'md_time','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}