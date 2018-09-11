<?php
class UrlMapper
{
    private $url;
    private $controller;
    private $action;
    private $method;
    private $appPath;
    public function __construct($appPath, $url)
    {
        $this->url = trim($url," \t\n/");
        $this->appPath = $appPath;
        $this->controller=$this->getController();
        if(! method_exists($this->controller,"indexAction")){
            throw new SystemException("no match method: $url", 404);
        }
        $this->method=array($this->controller,"indexAction");
    }

    public function getController(&$tokens=null)
    {
        if ($this->controller)
        {
            return $this->controller;
        }
        $classFile = $this->appPath . '/controller/' . ucfirst($this->url) . 'Controller.class.php';
        if (file_exists($classFile)){
            require_once($classFile);
            $controllerClass=ucfirst($this->url."Controller");
            if (class_exists($controllerClass))
            {
                $this->controller=new $controllerClass();
            }else{
                throw new SystemException("file: $classFile does not have class: $controllerClass", 404);
            }
        }

        return $this->controller;
    }

    public function getMethod()
    {
        if($this->method){
            return $this->method;
        }
        throw new SystemException("no method:".implode($tokens,"/"), 404);
    } 
}

