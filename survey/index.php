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
    if (document.getElementById("place").value == "") {
        document.getElementById("place").style.borderColor = "red";
        document.getElementById("place").style.backgroundColor = 'pink';
        isComment = false;
    } 
    else {
        document.getElementById("place").style = null;
        isComment = true;
    }
    return isComment;
}

function validateInt() {
    isint = true;
    if (document.getElementById("rating").value == "") {
        document.getElementById("rating").style.borderColor = "red";
        document.getElementById("rating").style.backgroundColor = 'pink';
        isint = false; 
    }
    else {
        document.getElementById("rating").style = null;
        isint = true;
    }
    return isint;
}

function validateDate() {
    isDate = true;
    if (document.getElementById("date").value == "") {
        document.getElementById("date").style.borderColor = "red";
        document.getElementById("date").style.backgroundColor = 'pink';
        isDate = false;
    }
    else {
        document.getElementById("date").style = null;
        isDate = true;
    }
    return isDate;
}

function validateForm() {
			"use strict"
			validateName()
      		validateComment();
      		validateInt();
      		validateDate();
			return (validateName() && validateComment()&& validateInt() &&isDate());
		}
		
		

</script>


<?php
	include($path.'assets/inc/footer.php');
	mysqli_close($mysqli);
?>







