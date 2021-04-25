<div id="menu">	
	<ul>
			        			<li><img src = "http://serenity.ist.rit.edu/~sc1343/240/project2/assets/images/nyc1.png" alt = "main" id = "logo1"/></li>

			<li class="dropdown">

			<a href="javascript:void(0)" class="dropbtn"> ☰ Main</a>
   				<div class="dropdown-content">
   				
		<?php echo (isset($page) && $page=='index') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>index.php" title="">index</a>
		<?php echo (isset($page) && $page=='about') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>about/index.php" title="">About</a>
		<?php echo (isset($page) && $page=='reference') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>reference/index.php" title="">Reference</a>
		<?php echo (isset($page) && $page=='grading') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>grading/index.php" title="">Grading Rubric</a>
		<?php echo (isset($page) && $page=='comments') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>comments/index.php" title="">Comments</a>
        <?php echo (isset($page) && $page=='survey') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>survey/index.php" title="">Survey</a>
        <?php echo (isset($page) && $page=='image') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>image/index.php" title="">Image Gallery</a>
        
        </div> 

        
        
        <li<?php echo (isset($page) && $page=='region') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>region/index.php" title="">Five Boroughs</a></li>
		<li<?php echo (isset($page) && $page=='restaurants') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>restaurants/index.php" title="">Foods</a></li>
		<li<?php echo (isset($page) && $page=='must') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>must/index.php" title="">Must</a></li>
        <li<?php echo (isset($page) && $page=='museum') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>museum/index.php" title="">Museum</a></li>
        <li<?php echo (isset($page) && $page=='transportation') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>transportation/index.php" title="">Transportation</a></li>
        <li<?php echo (isset($page) && $page=='shopping') ? ' class="active"' : ''; ?>><a href="<?php echo $path;?>shopping/index.php" title="">Shopping</a></li>


	</ul>
</div>

<br>
<!--nav-->


   				  
    			
    			

 
		
