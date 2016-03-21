<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 14/03/2016
 * Time: 10:19
 */
define('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','b126171871fa5a');
define('DB_PASSWORD','a0abb12e');
DEFINE('DB_DATABASE','nikdata');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}