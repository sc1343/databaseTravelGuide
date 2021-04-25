<?php
	$page='image';
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
    //Create an array of images 
var imageArray = ["../assets/images/ci1.jpg", "../assets/images/ci2.jpg", "../assets/images/ci3.jpg", "../assets/images/ci4.jpg",
		"../assets/images/5av1.jpg", "../assets/images/5av2.jpg", "../assets/images/am1.jpg", "../assets/images/am2.jpg",
		"../assets/images/am3.jpg", "../assets/images/am4.jpg", "../assets/images/bk1.jpg", "../assets/images/bk2.jpg",
		"../assets/images/bk3.jpg", "../assets/images/bk4.jpg", "../assets/images/bridge1.jpg", "../assets/images/bridge2.jpg",
		"../assets/images/bridge3.jpg", "../assets/images/bronx.jpg", "../assets/images/brooklyn.jpg", "../assets/images/central1.jpg",
		"../assets/images/central2.jpg", "../assets/images/central3.jpg", "../assets/images/central4.jpg", "../assets/images/centralpark.jpg",
		"../assets/images/food.jpg", "../assets/images/food2.jpg", "../assets/images/food3.jpg", "../assets/images/food6.jpg",
		"../assets/images/food7.jpg", "../assets/images/food8.jpg", "../assets/images/food9.jpg", "assets/images/food10.jpg",
		"../assets/images/food11.jpg", "../assets/images/food12.jpg", "../assets/images/index1.jpg", "../assets/images/index2.jpg",
		"../assets/images/index.jpg", "../assets/images/low1.jpg", "../assets/images/low2.jpg", "../assets/images/low3.jpg",
		"../assets/images/mah.jpg", "../assets/images/metro1.jpg", "../assets/images/metro2.jpg", "../assets/images/metro3.jpg",
		"../assets/images/metro4.jpg", "../assets/images/mid1.jpg", "../assets/images/mid2.jpg", "../assets/images/mid3.jpg",
		"../assets/images/mid4.jpg", "../assets/images/mo1.jpg", "../assets/images/mo2.jpg", "../assets/images/mo3.jpg",
		"../assets/images/mo4.jpg", "../assets/images/queens.jpg", "../assets/images/soho1.jpg", "../assets/images/soho2.jpg",
		"../assets/images/soho3.jpg", "../assets/images/st1.jpg", "../assets/images/st2.jpg", "../assets/images/st3.jpg",
		"../assets/images/stan.jpg", "../assets/images/tim.jpg", "../assets/images/tim3.jpg", "../assets/images/time1.jpg",
		"../assets/images/time2.jpg", "../assets/images/tra1.jpg", "../assets/images/tra2.jpg", "../assets/images/tra4.jpg"
		];

//Save total size of array to variable arraySize
var arraySize = imageArray.length;

//Set wait time between slides in milliseconds 
setInterval(runit, 2000);

var x = 1; //Used to count up to arraySize

//Function runit play slideshow when called 
function runit() {
    //Set image to next picture in image array
    document.getElementById('slideshow').src = imageArray[x];

    //Increase count by 1
    x++;

    //If count has reached the last index of imageArray than set count back to starting index.
    if (x === arraySize) {
        x = 0;
    }
}

    </script>
	


<?php
	include($path.'assets/inc/footer.php');
	mysqli_close($mysqli);
?>


