<?php
	$page='reference';
	$path='../';
	include($path.'assets/inc/header.php');
?>

<?php
	include($path.'assets/inc/nav.php');
?>




	<?php
	    require $path.'../../../dbConnect.inc';           

             //Looking for internal CSS specific to this one page - To override external CSS
               $sql = "SELECT CSS_Internal  FROM modularSite where page='$page'";
                $result = $mysqli->query($sql);

                if($result->num_rows > 0){
                        //output the data for each row
                        while ($row = $result->FETCH_ASSOC()) {
                                echo $row['CSS_Internal'];
                        }// if internal CSS was supplied in the record for the page
                }//end of if to get internal CSS



		$sql = "SELECT content FROM modularSite where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results, did something wrong!";
		}
	?>

	


<?php
	include($path.'assets/inc/footer.php');
	mysqli_close($mysqli);
?>


