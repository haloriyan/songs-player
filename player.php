<?php
$judul = $_COOKIE['judul'];
?>
<audio autoplay id="song">
	<source src="library/<?php echo $judul; ?>" type="audio/mp3">
</audio>
<div id="judulLagu">
	<?php echo $judul; ?>
</div>
<button id="playPause" aksi="pause"><i class="fa fa-pause"></i></button>
<script>
	function playPause() {
		var audio = document.getElementById('song');
		var aksi = $("#playPause").attr("aksi");
		if(aksi == "pause") {
			audio.pause();
			$("#playPause").html("<i class='fa fa-play'></i>");
			$("#playPause").attr("aksi", "play");
		}else {
			audio.play();
			$("#playPause").html("<i class='fa fa-pause'></i>");
			$("#playPause").attr("aksi", "pause");
		}
	}
	$(function() {
		$("#playPause").click(function() {
			playPause();
		});
	});
	$(document).keydown(function(e) {
		if(e.which == 32) {
			playPause();
		}
	});
</script>