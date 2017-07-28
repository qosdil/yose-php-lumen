<html>
	<head></head>
	<body>
		<div id="title">Minesweeper</div>
		<table border="1">
		  <?php for($i = 1; $i <= 8; $i++) { ?>
		  <tr>
		  	<?php for($j = 1; $j <= 8; $j++) { ?>
		  		<td id="cell-{{ $i }}x{{ $j }}">&nbsp;</td>
		  	<?php } ?>	
		  </tr>
		  <?php } ?>
	</table>
	</body>
</html>