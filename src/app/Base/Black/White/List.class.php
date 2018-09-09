<?php
namespace Base\Black\White;
use DBModel;
class List extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'category_id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'identifier','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'CURRENT_TIMESTAMP','null'=>false,],
            ['name'=>'remark','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'ext_data','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}