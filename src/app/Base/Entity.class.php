<?php
namespace Base;
use DBModel;
class Entity extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'entity_id','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'bot_id','type'=>"string",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'zh_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'description','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'entries','type'=>"string",'key'=>false,'defalut'=>NULL,'null'=>false,],
            ['name'=>'dict_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'bos_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'file_name','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'crawle_url','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'fid','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'wget_url','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'status','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'automated_expansion','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'synonyms','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}