<?php

function getComments($conn) {
	$sql = "SELECT * FROM comments";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()){
		$id = $row['uid'];
		$sql2 = "SELECT * FROM user WHERE id='$id'";
		$result2 = $conn->query($sql2);
		if ($row2 = $result2->fetch_assoc()) {
			echo "<div class='comment-box'><p>";
			echo $row2['uid']."<br>";
			echo $row['date']."<br><br>";
			echo nl2br($row['message']);
			echo "</p>";
			if (isset($_SESSION['id'])) {
				if ($_SESSION['id'] == $row2['id']) {
					echo "<form class='delete-form' method='POST' action='deleteComments.php'>
						<input type='hidden' name='cid' value='".$row['cid']."'>
						<button type='submit' name='commentDelete'>Delete</button>
					</form>";
				}
			}
			echo "</div>";
		}
	}
}
