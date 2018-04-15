<h3>Daftar Barang</h3>


<?php

	foreach ($list as $brg ) {
		# code...
		echo '<li> ID # '.$brg->id. ' - '. $brg->nama.'</li>';
	}
?>