<?php 
class Connect extends PDO
{
    public function _construct()
    {
        parent::_construct("mysql:host=localhost; dbname=api",'root','',
        array(PDO::MySQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
?>