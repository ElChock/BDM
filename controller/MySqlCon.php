<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySqlCon
 *
 * @author Ayrton
 */

function _query ($query)
{
    mysql_connect('localhost', 'root', 'little20!');
    return $result =mysql_query('select * from pais where idPais=1');
}



class MySqlCon {
    private $reult;
    
    function query($query)
    {
        return _query($query);
    }
            
            
    //put your code here
}
