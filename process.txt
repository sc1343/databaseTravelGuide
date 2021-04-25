<?php
	$page='survey';
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
	  if( !empty($_GET['name']) && !empty($_GET['date']) &&!empty($_GET['place']) && !empty($_GET['rating']) ){
        /*
	   we are using client entered data - therefore we HAVE TO USE a prepared statement
			1)prepare my query
			2)bind
			3)execute
			4)close
	*/
$stmt=$mysqli->prepare("insert into Ex8_comments (name, date,place,rating) values (?, ?,?,?)");
$stmt->bind_param("ssss",$_GET['name'],$_GET['date'],$_GET['place'],$_GET['rating']);
$stmt->execute();
		$stmt->close();
	  }
	  //get contents of table and send back...
	  $sql='select * from Ex8_comments';	
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


	?>

	
<?php
 
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}


$name =  test_input($_GET['name']) ;
$date =    test_input($_GET['date']) ;
$place = test_input($_GET['place']);
$rating =   test_input($_GET['rating']);
$destination_email = "sc1343@g.rit.edu, RITISTprofessor@gmail.com";
 
 //    When your code is DONE  send form's data to   RITISTprofessor@gmail.com
 
$email_subject = "NEW YORK CITY, NY  - visitor  Chen, Shuying";
$email_body    = "Visitor name  $name\n";
$email_body   .= "Date Visited Town $date\n";
$email_body   .= "Favorite Place $place\n";
$email_body   .= "Rating -> $rating\n";
mail($destination_email, $email_subject, $email_body);
echo "<h2>Thank you! Data save in database.</h2>";


setlocale(LC_MONETARY, 'en_US'); //try 'it_IT'
			?>
           	
	<?php

   //    var_dump($records);  
	echo'<div class = "survey">';
	echo'<h1>Survey result</h1>';
    echo'<h5>Visitor name: ' .$name .'</h5>';
	echo'<h5>Date that visit: ' .$date .'</h5>';
	echo'<h5>Favoriate place: ' .$place .'</h5>';
	echo'<h5>Rating: ' .$rating .'</h5>';
	echo'</div>';

	
	?>


	

<?php
	include $path.'assets/inc/footer.php';
	mysqli_close($mysqli);
?>