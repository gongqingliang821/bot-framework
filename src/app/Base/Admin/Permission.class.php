<?php
namespace Base\Admin;
use DBModel;
class Permission extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'module','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'action','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'ptype','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}