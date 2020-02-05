<?php include 'config/config.php';


function SearchDB(){
	global $conn;
if (isset($_GET['submit'])) {
			
			$q = $conn->real_escape_string($_GET['keyword']);
			

			$sql = $conn->query("SELECT * FROM tbljplisting WHERE LastName LIKE '%$q%' AND City = 'Spanish Town';");
			
			if ($sql->num_rows > 0) {
				while ($row = $sql->fetch_assoc())
					echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["LastName"] . "</td><td>"
						. $row["FirstName"]. "</td><td>".$row["Address"]. "</td><td>". $row["City"]."</td><td>". $row["PhoneNumber"]."</td></tr>";
					echo "</table>";
			}else{
				echo ($_GET['keyword']).'No records found for that Justice of the Peace';}
			}

}

?>