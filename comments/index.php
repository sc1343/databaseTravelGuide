<?php
	$page='comments';
	$path='../';
	include($path.'assets/inc/header.php');
?>

<?php
	include($path.'assets/inc/nav.php');
?>




	<?php
	    require $path.'../../../dbConnect.inc';     
	    
	    	if ($mysqli) {
	  //IF we are adding a new user
	  if( !empty($_GET['name']) && !empty($_GET['comment']) ){
        /*
	   we are using client entered data - therefore we HAVE TO USE a prepared statement
			1)prepare my query
			2)bind
			3)execute
			4)close
	*/
$stmt=$mysqli->prepare("insert into comments (name, comment) values (?, ?)");
$stmt->bind_param("ss",$_GET['name'],$_GET['comment']);
$stmt->execute();
		$stmt->close();
	  }
	  //get contents of table and send back...
	  $sql='select * from comments';	
	  $results=$mysqli->query($sql);
	 
	  if($results->num_rows > 0){
		
		     while($rowHolder = mysqli_fetch_array($results,MYSQLI_ASSOC)){
			    $records[] = $rowHolder;
		      }//end of while loop to store all the records
	         }//end of true path of if
         else {
		  echo '<h3>Something is wrong with the $sql</h3>';
		  echo "<p>$sql</p>";
		  die("Unable to select any recordes");
	  }//end of false path
	}//end of if connected to the database

      

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
		function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	
   //    var_dump($records);  
		foreach($records as $this_row){
	echo'<tr>';
	echo'<td>' .$this_row['id'] .'</td>';
	echo'<td>' .$this_row['name'] .'</td>';
	echo'<td>' .$this_row['comment'] .'</td>';
	echo'</tr>';

		
			
		}
	?>
	
	
	</table>
</div>



<script>


function validateName() {
    isName = true;
    if (document.getElementById("name").value == "") {
        document.getElementById("name").style.borderColor = "red";
        document.getElementById("name").style.backgroundColor = 'pink';
        isName = false;
    } 
    else {
        document.getElementById("name").style = null;
        isName = true;
    }
    return isFirstValid;
}

function validateComment() {
    isComment = true;
    if (document.getElementById("comment").value == "") {
        document.getElementById("comment").style.borderColor = "red";
        document.getElementById("comment").style.backgroundColor = 'pink';
        isComment = false;
    } 
    else {
        document.getElementById("comment").style = null;
        isComment = true;
    }
    return isComment;
}

function validateForm() {
			"use strict"
			validateName()
      		validateComment();
			return (validateName() && validateComment());
		}
		
		


</script>


<?php
	include($path.'assets/inc/footer.php');
	mysqli_close($mysqli);
?>


