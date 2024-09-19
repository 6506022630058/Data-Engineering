<?php
define('DB_HOST', 'fdb29.awardspace.net');
define('DB_USERNAME','4529897_panuwatdht');
define('DB_PASSWORD','r3UDNT1L4R/(FcLD');
define('DB_NAME','4529897_panuwatdht');

define('POST_DATA_URL','http://panuwatdht.atwebpages.com/sensordata.php');


define('PROJECT_API_KEY','panuwatmysqldht');

date_default_timezone_set('Asia/Bangkok');

$db = new mysqli(DB_HOST, DB_USERNAME , DB_PASSWORD , DB_NAME);


if ($db->connect_errno){
        echo "Connection to database is failed: ".$db->connect_error;
        exit();
// }else{
        //echo "Connected successfully";
}

?>
       