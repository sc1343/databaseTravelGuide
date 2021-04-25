<?php
	$page='index';
	$path='./';
	include($path.'assets/inc/header.php');
?>

<?php
	include($path.'assets/inc/nav.php');
?>



	<!--<h1>Home page stuff...</h1>
	<div>(eventually, each page will be some includes and a db call only!)</div>-->
	<?php

	    require $path.'../../../dbConnect.inc';            //'".$page."'";
	    
	    
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




