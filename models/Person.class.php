<?php

class Person extends ModelBase{
    
    public function __construct(){
        parent::__construct(get_class());
    }
    
    public function get($field)
    {
        $func = "get" . ucfirst($field);
        $ret = $this->$func();
        return $ret;
    }
        
    public function getName() {
        return $this->fname;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }
    
    
}

?>
