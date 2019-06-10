<?php
 $db = mysqli_connect('wiad5ra41q8129zn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','wxxl4ykpjxita1zv','ntyxgfb9x2dpyr4x','nn63dg6ksfqti6ih')
 or die('Error connecting to MySQL server.');
?>

<!DOCTYPE html>
<html>
  <head>
  <!-- For Mobile ---------->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--- Stylesheet ---------->
      <link rel="stylesheet" href="src/style.css">
      <link rel="stylesheet" href="src/media-style.css">
     <link rel="stylesheet" href="src/fonts/stylesheet.css">

  <!--- Fonts ---------->
  	  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
      <link href='font-family: "Times New Roman", Times, serif;' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700&display=swap" rel="stylesheet">
      <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
      <link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico" />
      <title>Foliospace</title>
  </head>
  <body>

    <section id="home">
      <!-- NAVIGATION BAR ------------------>
       <div class="nav-container"> 
        <div id="nav-name"> <?php
					$query = "SELECT * FROM users WHERE id IN (2, 3) ";
					mysqli_query($db, $query) or die('Error querying database.');

					$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);

					while ($row = mysqli_fetch_array($result)) {
 					echo $row['displayName'];
					}
					
				?> </div> <!-- ADDS NAME TO LEFT HAND SIDE -->
       	<div id="nav-links"> <!-- LINKS ON RIGHT HAND SIDE -->   
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#education">Education</a></li> <!-- must match section id -->
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
         </div> <!-- end of nav-links div -->  
      </div> <!-- end of nav-container div -->    
    <!-- FRONT PAGE - HI IM ____ -------------->
      <div class= "container">
    			<h2> Hi, I'm </h2>
    			<h1>
    			<?php
					$query = "SELECT * FROM users WHERE id IN (2, 3) ";
					mysqli_query($db, $query) or die('Error querying database.');

					$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);

					while ($row = mysqli_fetch_array($result)) {
 					echo $row['displayName'];
					}
					
				?>	 <br>
    			<a href="#education" class="button">Thanks for stopping by.</a> </h1>
    	</div>
    	
    </section>
    

  <!-------- EDUCATION SECTION ----------------->
    <section id="education">
      	<div class= "container">
      	<hr>
    		<h5>Education</h5>
    		<p>
				<?php
					$query = "SELECT * FROM users WHERE id IN (2, 3) ";
					mysqli_query($db, $query) or die('Error querying database.');

					$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);

					while ($row = mysqli_fetch_array($result)) {
 					echo $row['schoolName'] . ' <br />' . $row['degree'] . '<br /> ' . $row['gradDate'] .'<br />';
					}
					
				?>		
			</p>
      </div>
    </section>
    <!-------- PORTFOLIO SECTION ----------------->
    <section id="portfolio"> 
      	<div class= "container"> </div>
      	<hr>
    	<h5>Portfolio</h5>
    		
    	<!-- source for image layout: https://codepen.io/SitePoint/pen/bEvVqP -->
  		<div class="images"> 
    		<a href="https://res.cloudinary.com/foliospace/image/upload/v1559599367/testing/boat.jpg" >
    		<figure>
    			<img src="https://res.cloudinary.com/foliospace/image/upload/v1559599367/testing/boat.jpg"	alt="boat.jpg">
				<figcaption>
        			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
      			</figcaption>
    		</figure>
    		</a>
    			
			<a href="https://res.cloudinary.com/foliospace/image/upload/v1559599367/testing/boat.jpg" >
    		<figure>
    			<img src="https://res.cloudinary.com/foliospace/image/upload/v1559599367/testing/boat.jpg"	alt="boat2.jpg">
    			
				<figcaption>
        			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
      			</figcaption>
    		</figure>
    		</a>
    			
    		
    		<a href="https://res.cloudinary.com/foliospace/image/upload/v1559599367/testing/boat.jpg" >
    		<figure>
    			<img src="https://res.cloudinary.com/foliospace/image/upload/v1559599367/testing/boat.jpg"	alt="boat3.jpg">
    			
				<figcaption>
    				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
    			</figcaption>
    		</figure>
    		</a>
    			
    		
    		<a href="https://res.cloudinary.com/foliospace/image/upload/v1559599367/testing/boat.jpg" >
    		<figure>
    			<img src="https://res.cloudinary.com/foliospace/image/upload/v1559599367/testing/boat.jpg"	alt="boat4.jpg">
    			
				<figcaption>
        			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
      			</figcaption>
    		</figure>
    		</a>
				
		</div>	
	</section>		
    
    <!-------- CONTACT SECTION ----------------->
    <section id="contact">
    	<div class= "container">
    	<hr>
    		<h5>Contact</h5>
    		
    		<p>
				<?php
					$query = "SELECT * FROM users WHERE id IN (2, 3) ";
					mysqli_query($db, $query) or die('Error querying database.');

					$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);

					while ($row = mysqli_fetch_array($result)) {
 					echo $row['userEmail'] . ' <br />' . $row['linkedinURL'] . '<br /> ' . $row['githubURL'] .'<br />';
					}
					mysqli_close($db);
					?>		
			</p>

      	</div>
      	      	
      	
    </section>
    <!--- JS stuff  ------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://media-library.cloudinary.com/global/all.js"></script>
    
    <script>
    var elements = document.getElementsByClassName("column");

	// Declare a loop variable
	var i;

	// Two images side by side
	function two() {
  		for (i = 0; i < elements.length; i++) {
    		elements[i].style.msFlex = "50%";  // IE10
    		elements[i].style.flex = "50%";
  		}
	}
    </script>
    
  </body>

</html>
