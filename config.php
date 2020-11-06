<?php 
    function getDB() {
        return $db = pg_connect("host=ec2-3-208-224-152.compute-1.amazonaws.com
                          dbname=ddkt22u73svs5v
                          port=5432
                          user=mqubcmfdvcmgrx
                          password=106b01ea05822036f12218ef096928a17497f7d397ce134cb8b2e2d5fd2d1ec1")
                          or die("Connection failed!")
    }


   
 ?>