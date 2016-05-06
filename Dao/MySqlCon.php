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





class MySqlCon {
     
        public function connect ()
        {
            $yolo= mysql_connect('localhost', 'root', 'little20!');
             return$yolo;
           // return mysqli('localhost','root','little20!');
        }



        //put your code here
}
