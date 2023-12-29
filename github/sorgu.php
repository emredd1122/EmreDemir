<?php
require("connection.php");



$sorgu1=mysqli_query($baglanti,"SELECT * from ayakkabilar,veriler where ayakkabilar.ayakkabi_id=veriler.ayakkabi_id and ayakkabilar.ayakkabi_id=1");
$tarih1='';
$satis_miktari1='';
$stok_miktari1='';
$iade_miktari1='';
$trend_orani1='';

while($satir1=mysqli_fetch_array($sorgu1)){
	$satis_miktari11=$satir1["satis_miktari"];
	$stok_miktari11=$satir1["stok_miktari"];
	$iade_miktari11=$satir1["iade_miktari"];
	$trend_orani11=$satir1["trend_orani"];
	$tarih11=date('M, Y', strtotime($satir1['tarih']));
	
	$tarih1 = $tarih1.'"'.$tarih11.'",';
	$satis_miktari1 = $satis_miktari1.'"'.$satis_miktari11.'",';
	$stok_miktari1 = $stok_miktari1.'"'.$stok_miktari11.'",';
	$iade_miktari1 = $iade_miktari1.'"'.$iade_miktari11.'",';
	$trend_orani1 = $trend_orani1.'"'.$trend_orani11.'",';
}
$tarih1=trim($tarih1, ",");
$satis_miktari1=trim($satis_miktari1, ",");
$stok_miktari1=trim($stok_miktari1, ",");
$iade_miktari1=trim($iade_miktari1, ",");
$trend_orani1=trim($trend_orani1, ",");

$sorgu2=mysqli_query($baglanti,"SELECT *
from ayakkabilar,veriler
where ayakkabilar.ayakkabi_id=veriler.ayakkabi_id and ayakkabilar.ayakkabi_id=2");
$tarih2='';
$satis_miktari2='';
$stok_miktari2='';
$iade_miktari2='';
$trend_orani2='';

while($satir2=mysqli_fetch_array($sorgu2)){
	$satis_miktari22=$satir2["satis_miktari"];
	$stok_miktari22=$satir2["stok_miktari"];
	$iade_miktari22=$satir2["iade_miktari"];
	$trend_orani22=$satir2["trend_orani"];
	$tarih22=date('M, Y', strtotime($satir2['tarih']));
	
	$tarih2 = $tarih2.'"'.$tarih22.'",';
	$satis_miktari2 = $satis_miktari2.'"'.$satis_miktari22.'",';
	$stok_miktari2 = $stok_miktari2.'"'.$stok_miktari22.'",';
	$iade_miktari2 = $iade_miktari2.'"'.$iade_miktari22.'",';
	$trend_orani2 = $trend_orani2.'"'.$trend_orani22.'",';
}
$tarih2=trim($tarih2, ",");
$satis_miktari2=trim($satis_miktari2, ",");
$stok_miktari2=trim($stok_miktari2, ",");
$iade_miktari2=trim($iade_miktari2, ",");
$trend_orani2=trim($trend_orani2, ",");

$sorgu3=mysqli_query($baglanti,"SELECT *
from ayakkabilar,veriler
where ayakkabilar.ayakkabi_id=veriler.ayakkabi_id and ayakkabilar.ayakkabi_id=3");
$tarih3='';
$satis_miktari3='';
$stok_miktari3='';
$iade_miktari3='';
$trend_orani3='';

while($satir3=mysqli_fetch_array($sorgu3)){
	$satis_miktari33=$satir3["satis_miktari"];
	$stok_miktari33=$satir3["stok_miktari"];
	$iade_miktari33=$satir3["iade_miktari"];
	$trend_orani33=$satir3["trend_orani"];
	$tarih33=date('M, Y', strtotime($satir3['tarih']));
	
	$tarih3 = $tarih3.'"'.$tarih33.'",';
	$satis_miktari3 = $satis_miktari3.'"'.$satis_miktari33.'",';
	$stok_miktari3 = $stok_miktari3.'"'.$stok_miktari33.'",';
	$iade_miktari3 = $iade_miktari3.'"'.$iade_miktari33.'",';
	$trend_orani3 = $trend_orani3.'"'.$trend_orani33.'",';
}
$tarih3=trim($tarih3, ",");
$satis_miktari3=trim($satis_miktari3, ",");
$stok_miktari3=trim($stok_miktari3, ",");
$iade_miktari3=trim($iade_miktari3, ",");
$trend_orani3=trim($trend_orani3, ",");

$sorgu4=mysqli_query($baglanti,"SELECT *
from ayakkabilar,veriler
where ayakkabilar.ayakkabi_id=veriler.ayakkabi_id and ayakkabilar.ayakkabi_id=4");
$tarih4='';
$satis_miktari4='';
$stok_miktari4='';
$iade_miktari4='';
$trend_orani4='';

while($satir4=mysqli_fetch_array($sorgu4)){
	$satis_miktari44=$satir4["satis_miktari"];
	$stok_miktari44=$satir4["stok_miktari"];
	$iade_miktari44=$satir4["iade_miktari"];
	$trend_orani44=$satir4["trend_orani"];
	$tarih44=date('M, Y', strtotime($satir4['tarih']));
	
	$tarih4 = $tarih4.'"'.$tarih44.'",';
	$satis_miktari4 = $satis_miktari4.'"'.$satis_miktari44.'",';
	$stok_miktari4 = $stok_miktari4.'"'.$stok_miktari44.'",';
	$iade_miktari4 = $iade_miktari4.'"'.$iade_miktari44.'",';
	$trend_orani4 = $trend_orani4.'"'.$trend_orani44.'",';
}
$tarih4=trim($tarih4, ",");
$satis_miktari4=trim($satis_miktari4, ",");
$stok_miktari4=trim($stok_miktari4, ",");
$iade_miktari4=trim($iade_miktari4, ",");
$trend_orani4=trim($trend_orani4, ",");

$sorgu5=mysqli_query($baglanti,"SELECT *
from ayakkabilar,veriler
where ayakkabilar.ayakkabi_id=veriler.ayakkabi_id and ayakkabilar.ayakkabi_id=5");
$tarih5='';
$satis_miktari5='';
$stok_miktari5='';
$iade_miktari5='';
$trend_orani5='';

while($satir5=mysqli_fetch_array($sorgu5)){
	$satis_miktari55=$satir5["satis_miktari"];
	$stok_miktari55=$satir5["stok_miktari"];
	$iade_miktari55=$satir5["iade_miktari"];
	$trend_orani55=$satir5["trend_orani"];
	$tarih55=date('M, Y', strtotime($satir5['tarih']));
	
	$tarih5 = $tarih5.'"'.$tarih55.'",';
	$satis_miktari5 = $satis_miktari5.'"'.$satis_miktari55.'",';
	$stok_miktari5 = $stok_miktari5.'"'.$stok_miktari55.'",';
	$iade_miktari5 = $iade_miktari5.'"'.$iade_miktari55.'",';
	$trend_orani5 = $trend_orani5.'"'.$trend_orani55.'",';
}
$tarih5=trim($tarih5, ",");
$satis_miktari5=trim($satis_miktari5, ",");
$stok_miktari5=trim($stok_miktari5, ",");
$iade_miktari5=trim($iade_miktari5, ",");
$trend_orani5=trim($trend_orani5, ",");

$tarihler="";

$tarihSorgu1=mysqli_query($baglanti,"select DISTINCT concat(monthname(veriler.tarih),' ', year(veriler.tarih)) as tarihler from veriler order by veriler.veri_id");

while($date1=mysqli_fetch_array($tarihSorgu1)){
	$tarihler1=$date1['tarihler'];
	$tarihler=$tarihler."'".$tarihler1."',";
}
$tarihler=trim($tarihler, ",");

?>