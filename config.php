<?
if (ereg("config.php",$PHP_SELF))
{
header("location:index.php");
die;
}
//***********konfigurasi untuk database**************
$mysql["db_host"] = "localhost";
$mysql["db_user"] = "root";
$mysql["db_pass"] = "";
$mysql["db_name"] = "db_latihan";
//********* deklarasi tabel yang digunakan **********
$table["kota"] = "tb_kota";
?>