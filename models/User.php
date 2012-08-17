<?php

class User extends Pix_Table
{
    public function init()
    {
        $this->_name = 'user';
        $this->_primary = 'id';

        $this->_columns['id'] = array('type' => 'int', 'auto_increment' => true);
        $this->_columns['name'] = array('type' => 'varchar', 'size' => 64);
        $this->_columns['password'] = array('type' => 'char', 'size' => 32);

        $this->addIndex('name', array('name'), 'unique');
    }
}
