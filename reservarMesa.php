<?php



# Fill our vars and run on cli
# $ php -f db-connect-test.php


$dbhost = 'localhost:8001';
$dbname = 'u893384050_jpRestPatrick';
$dbpass = 'admin';
$dbname = 'admin';
?>

<script type="text/javascript">
  alert('Deus te ama muito');
</script>

<?php
$connect = mysql_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");

?>
<?php

//mysql_select_db($dbname) or die("Could not open the db '$dbname'");

// Check connection
if (!$connect) {
    die("Connection failed: " . mysql_connect_error());
}
echo "Connected successfully";
mysql_close($connect);


$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);

$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";




// This function will run within each post array including multi-dimensional arrays
function ExtendedAddslash(&$params){
    foreach($params as &$var){
        // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
        is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
    }
}

// Initialize ExtendedAddslash() function for every $_POST variable
ExtendedAddslash($_POST);


		$QuantidadeDePessoas = $_POST['persons'];
		$numeroDeTelefone = $_POST['phone'];
		$nomeDaPessoa = $_POST['name'];
		$horaDeChegada = $_POST['hour'];
		$diaDeChegada = $_POST['day'];



		
		//mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
		//mysql_select_db($db_name);





// search submission ID
//$query = "SELECT * FROM `table_name` WHERE `submission_id` = '$submission_id'";
//$sqlsearch = mysql_query($query);
//$resultcount = mysql_numrows($sqlsearch);

    mysql_query(
    		"INSERT INTO `rsv_reservarMesa` (`rsv_DiaDaSemana`, `rsv_Hora`, `rsv_NomeCompleto`, `rsv_Telefone`, `rsv_QuantidadeDePessoas`) VALUES ('$diaDeChegada', '$horaDeChegada', '$nomeDaPessoa', '$numeroDeTelefone', '$QuantidadeDePessoas') "
    	) or die(mysql_error());
?>