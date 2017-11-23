<?php 
header("Access-Control-Allow-Origin: *");

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'password';
         $dbname = 'information_kbt';
         
        //  $dbhost = 'sql108.epizy.com';
        //  $dbuser = 'epiz_20672394';
        //  $dbpass = 'YwzhfMJEmA';
        //  $dbname = 'epiz_20672394_message';
         
        // $conn = mysql_connect($dbhost, $dbuser, $dbpass);
        // if( $conn ) {
        //     $selected = mysql_select_db($dbname, $conn)
        //    or die("Could not select DB");
        // }else{
        //    die('Could not connect: ' . mysql_error());
        // }
        // $query = mysql_query("select * from info");
        // $num = mysql_num_rows($query);
        // $rows = array();
        // while($row = mysql_fetch_assoc($query)) {
        //     $rows[] = $row;
        // }
	$rows = ['Lorem ipsum eris serav','purj aeos nair mauri','iosne iares veria msive','aier eiexli jviesn afsie', 'livs vaser jivesl xjveli','laveislr alsif alfsei vsiler'];
         $randomNum = rand(0,5);
        //  echo $randomNum;
        //  print_r($rows[1]);
         print json_encode($rows[$randomNum]);
        //  mysql_close($conn);
?>
