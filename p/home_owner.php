<?php include "head.php"; ?>
<script type="text/javascript">
	document.title="Dashboard";
	document.getElementById('dash').classList.add('active');
</script>
<div class="content">
	<div class="padding">
		<div class="box">
			<div class="padding">
			<i class="fa fa-money"></i>
			Pendapatan
			<span class="status greend">
			<?php
			$tgl_transaksi=date('y-m-d');
			$getsum=$root->con->query("select sum(total_bayar) as grand_total from transaksi where tgl_transaksi='$tgl_transaksi'");
			$getsum1=$getsum->fetch_assoc();
			?>
			<span> Rp. <?= number_format($getsum1['grand_total']) ?></span>
			</div>
		</div>
		<div class="box">
			<div class="padding">
				<i class="fa fa-clock-o"></i>
				Waktu
				<span class="status blued"> <?= date("d-m-Y") ?></span>
			</div>
		</div>
		<div class="box">
			<div class="padding">
				<i class="fa fa-bars"></i>
				Data Barang
				<span class="status blued"><?= $root->show_jumlah_barang2() ?></span>
			</div>
		</div>
		<div class="box">
			<div class="padding">
				<i class="fa fa-book"></i>
				Jumlah Potong
				<span class="status blued"><?= $root->show_jumlah_trans3() ?></span>
			</div>
		</div>
	</div>
</div>
<?php include"foot.php" ?>
