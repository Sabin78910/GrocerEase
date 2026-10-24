<!-- Everyone create the same schema and password.. -->
<?php
$conn = oci_connect(getenv('DB_USER') ?: 'GROCEREASE1', getenv('DB_PASS') ?: '', getenv('DB_DSN') ?: 'localhost/XE');

if (!$conn) {
	$e = oci_error();
	echo "Error";
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?>

  