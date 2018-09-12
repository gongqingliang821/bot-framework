<?php
//生成表结构
define ('WEB_PATH', getcwd());
//require (getcwd() . "/vendor/autoload.php");
require (getcwd() . "/vendor/bot/bot-framework/autoload.php");
require (getcwd() . "/config/conf.php");
require (getcwd() . "/vendor/autoload.php");
$tables=array_slice($argv,1);
if(!$tables){
    $tables=DBTool::showTables();
}
$modelTemplate = DefaultViewSetting::getTemplateWithSettings();
foreach ($tables as $table){
    $fields=DBTool::descTable($table);
    $paths=array_map("ucfirst",explode("_",$table));
    array_unshift($paths,"Base");
    $className=array_pop($paths);
    $namespaces=implode("\\",$paths);
    $fileName=$className.".class.php";
    $realpath=getcwd() . "/app/".implode("/",$paths);
    @mkdir($realpath,0777,true);
    $modelTemplate->assign('fields',$fields);
    $modelTemplate->assign('table',$table);
    $modelTemplate->assign('className',$className);
    $modelTemplate->assign('namespaces',$namespaces);
    $baseModelClass=<<<END_CLASS
<?php
namespace {%\$namespaces%};
use DBModel;
class {%\$className%} extends DBModel{

    public function getFieldList(){
        static \$FIELD_LIST=[
            {%foreach \$fields as \$field%}{%strip%}
            [
            'name'=>'{%\$field.Field%}',
            'type'=>
                {%if preg_match('/int/',\$field.Type)%}
                "int",
                {%else%}
                "string",
                {%/if%}
            'key'=>{%var_export(!!\$field.Key,1)%},
            'defalut'=>{%var_export(\$field.Default,1)%},
            'null'=>{%if \$field.Null=='YES'%}true{%else%}false{%/if%},
            ],
            {%/strip%}
            {%/foreach%}
        ];
        return \$FIELD_LIST;
    }
}
END_CLASS;
    file_put_contents("$realpath/$fileName",$modelTemplate->fetch("string:".$baseModelClass));
    $modelTemplate->clearAllAssign();
    echo "gen table base model $table;\n";
}

//generate model class

foreach ($tables as $table){
    $fields=DBTool::descTable($table);
    $paths=array_map("ucfirst",explode("_",$table));
    $className=array_pop($paths);
    $namespaces=implode("\\",$paths);
    $fileName=$className.".class.php";
    $realpath=getcwd() . "/app/".implode("/",$paths);
    @mkdir($realpath,0777,true);
    
    foreach($fields as $i=>$field){
        $fields[$i]['AttrName']=DBModel::zipKey($fields[$i]['Field']);
    }
    $modelTemplate->assign('fields',$fields);
    $modelTemplate->assign('table',$table);
    $modelTemplate->assign('className',$className);
    $modelTemplate->assign('namespaces',$namespaces);
    $baseModelClass=<<<END_CLASS
<?php
{%if \$namespaces%}
namespace {%\$namespaces%};
{%/if%}
class {%\$className%} extends \Base\{%if \$namespaces%}{%\$namespaces%}\{%/if%}{%\$className%} {

}

END_CLASS;
    if(!file_exists("$realpath/$fileName")){
        file_put_contents("$realpath/$fileName",$modelTemplate->fetch("string:".$baseModelClass));
        //var_dump($table,$fields);
        echo "gen table model $table;\n";
    }else{
        echo "table $table model already gen;\n";
    }
    $modelTemplate->clearAllAssign();
}

