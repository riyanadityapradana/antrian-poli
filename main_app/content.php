<?php 
$page = isset($_GET['page']) ? $_GET['page'] : '';
//Dashboard
if ($page == "beranda"){
  require_once("page/beranda.php");
}
if ($page == "poli_anak"){
  require_once("page/poli_anak.php");
}
if ($page == "poli_gigi"){
  require_once("page/poli_gigi/poli_gigi.php");
}
// Veiw Poli Gigi
if ($page == "view_poli_gigi_U0057"){
  require_once("page/poli_gigi/view_poli_gigi_U0057.php");
}
if ($page == "view_poli_gigi_U0043"){
  require_once("page/poli_gigi/view_poli_gigi_U0043.php");
}
if ($page == "view_poli_gigi_U0042"){
  require_once("page/poli_gigi/view_poli_gigi_U0057.php");
}
if ($page == "view_poli_gigi_U0065"){
  require_once("page/poli_gigi/view_poli_gigi_U0057.php");
}
if ($page == "view_poli_gigi"){
  require_once("page/poli_gigi/view_poli_gigi.php");
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