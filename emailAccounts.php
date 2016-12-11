<?php
include('dbconnect.php');
$sql = "SELECT email FROM tbl_users ORDER BY email DESC LIMIT 4";
$result1 = mysqli_query($DBcon, $sql);

// making new connection because I kept getting an error unless I made a new  db connection used this thread as help -- http://stackoverflow.com/questions/9785649/how-to-convert-mysql-data-base-table-data-in-json-using-php
    $username = "root"; 
    $password = "";   
    $host = "localhost";
    $database="authentication";

    $server = mysql_connect($host, $username, $password);
    $connection = mysql_select_db($database, $server);

    $myquery = "SELECT email,username FROM tbl_users ";
    
    $query = mysql_query($myquery);

    if ( ! $query ) {
        echo mysql_error();
        die;
    }    
    $data = array();    

    for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
    }

      
    $var_str = var_export($data, true);
$var = "<?php\n\n\$text = $var_str;\n\n?>";
file_put_contents('emails.json', $var);
mysql_close($server);

//saving data in emails.json




