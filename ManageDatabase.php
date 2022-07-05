<?php

function saveToDatabase(&$formvars)
{
    if(!$this -> DBlogin()){
        $this->HandleError("Database login failed.");
        return false;
    }
    // TODO finish here
}

//Creating mySQL table
function createTable()
{
    $qry = "Create Table $this->tablename (".
        "id_user INT NOT NULL AUTO_INCREMENT ,".
        "name VARCHAR (128) NOT NULL ,".
        "email VARCHAR (64) NOT NULL ,".
        "password VARCHAR (32) NOT NULL ,".
        "PRIMARY KEY (id_user)".
        ")";

    if(!mysql_query($qry, $this->connection)){
        $this->HandleDBError("Error creating the table \nquery was \n $qry");
        return false;
    }
    return true;
}

?>
