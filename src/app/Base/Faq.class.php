<?php
namespace Base;
use DBModel;
class Faq extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'app_record_id','type'=>"int",'key'=>true,'defalut'=>'0','null'=>false,],
            ['name'=>'app_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'passport_id','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'query_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'standard_question','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'standard_answer','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'ext_questions','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'ext_answers','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'faq_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'create_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'update_time','type'=>"string",'key'=>false,'defalut'=>'0000-00-00 00:00:00','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'is_pushed','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'mode','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}