<?php
namespace Base\Bot\Category;
use DBModel;
class Rel extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_record_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'category_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'category_info','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}