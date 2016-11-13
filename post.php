<?php
include('konek.php');
$nama	=@$_POST['nama'];
$chat	= nl2br(@$_POST['chat']);
	if($nama=="" || $chat==""){
		?>
		<script>
		alert("Nama / Chat Belum Anda Input");
		window.location.href="index.php";
		</script>	
		<?php
		}else{
		$st_krm = $con->prepare('insert into isichat(nama,chat) values(:a,:b) ');
		$st_krm->bindParam(':a',$nama);
		$st_krm->bindParam(':b',$chat);
		if($st_krm->execute()){
		?><script>
		alert("Berhasil Input");
		window.location.href="index.php";
		</script>
		<?php
		}else{
		?>
		<script>
		alert("Tidak Berhasil Input");
		window.location.href="index.php";
		</script>
		<?php
		}
	}
?>