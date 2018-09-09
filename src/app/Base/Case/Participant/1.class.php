<?php
namespace Base\Case\Participant;
use DBModel;
class 1 extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            ['name'=>'id','type'=>"int",'key'=>true,'defalut'=>NULL,'null'=>false,],
            ['name'=>'uuid','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'case_uuid','type'=>"string",'key'=>true,'defalut'=>'','null'=>false,],
            ['name'=>'user_id','type'=>"string",'key'=>false,'defalut'=>'','null'=>false,],
            ['name'=>'participant_type','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
            ['name'=>'is_del','type'=>"int",'key'=>false,'defalut'=>'0','null'=>false,],
                    ];
        return $FIELD_LIST;
    }
}