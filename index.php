<?php
	$hitung = ("statistik.txt");
	$nilai = file($hitung);
	$nilai[0] ++;
	$fp = fopen($hitung, "w");
	fputs($fp, "$nilai[0]");
	fclose($fp);
?>

Dilihat <?php echo number_format($nilai[0], 0, '', '.'); ?> kali
