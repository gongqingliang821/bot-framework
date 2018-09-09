<?php
namespace Base\Bot;
use DBModel;
class Category extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'category_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'parent_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'icon','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'category_desc','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'category_level','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'bot_type','type'=>"int",'key'=>false,'defalut'=>'-1','null'=>false,],
            ['name'=>'display_order','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}