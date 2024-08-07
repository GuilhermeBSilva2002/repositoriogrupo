<?php

use app\database\builder\InsertQuery;
use app\database\Connection;

require __DIR__ . '/../vendor/autoload.php';

//$con = Connection::open();

InsertQuery::table("bank")->save();