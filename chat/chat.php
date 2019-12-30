<?php 


include "db.php";

		$search = "SELECT * FROM tb_chat ORDER BY id DESC";
		$execute = $con->query($search);
		while($line = $execute->fetch_array()):
		?>	
			<div id="data-chat">
				<span style="color: #1C62C4;"><?php echo $line['name']; ?> </span>
				<span style="color: #848484;"><?php echo $line['message']; ?> </span>
				<span style="float: right;"><?php echo formatData($line['data']); ?> </span>
			</div>
		<?php endwhile; ?>