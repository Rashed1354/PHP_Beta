<?php

$db  = new mysqli('localhost', 'rashed1354', 'asdfg', 'b129');

$db -> query("CREATE TABLE users(
    id int(11),
    name varchar(20),
    age int(3);

)"); 


?>