<?php

$scan = scandir("library/");

$tot = count($scan);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Hali</title>
	<link href="css/general.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/insert.js"></script>
	<script>
		function loadPlayer() {
			$(function() {
				$("#loadPlayer").load("player.php");
			});
		}
		function pilih(val) {
			$(function() {
				var judul = "judul="+val;
				$.ajax({
					type: "POST",
					url: "setSong.php",
					data: judul,
					success: function() {
						loadPlayer();
					}
				});
			});
		};
	</script>
</head>
<body>

<div class="atas">
	<h1 class="judul">Music Player</h1>
</div>

<div class="playlist">
	<div class="wrap">
		<?php
		for ($i=2; $i < $tot; $i++) {
			// echo "<li onclick='pilih('hai');' value='hai'>".$scan[$i]."</li>";
			?>
			<div>
				<button onclick="pilih(this.value);" value="<?php echo $scan[$i]; ?>"><?php echo $scan[$i]; ?></button>
			</div>
			<?php
		}
		?>
		<div id="choose">
			Atau pilih file
			<input type="file" id="file">
		</div>
	</div>
</div>

<div class="player-web">
	<div class="wrap" id="loadPlayer">
		
	</div>
</div>

<?php
if(isset($_COOKIE['judul'])) {
	echo "<script>loadPlayer();</script>";
}
?>

</body>
</html>