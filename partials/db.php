<?php

$dsn = "mysql:host=localhost;dbname=e-com";

$con = new PDO($dsn,'root','');

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);