<?php 
$page = isset($_GET['page']) ? $_GET['page'] : '';
//Dashboard
if ($page == "beranda"){
  require_once("page/beranda.php");
}
if ($page == "poli_anak"){
  require_once("page/poli_anak.php");
}
if ($page == "poli_dalam"){
  require_once("page/poli_dalam.php");
}
if ($page == "poli_kandungan"){
  require_once("page/poli_kandungan.php");
}
if ($page == "poli_syaraf"){
  require_once("page/poli_syaraf.php");
}
?>