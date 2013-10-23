<?php
include("partials/dataset.php");
include("partials/masthead.php");

?>




        
        <section class="main">
          	<h2>The Cupcake List</h2>
            <ul>
           <?php
			//Inside here is where you will be looping through the cupcake array
			//and displaying the list of cupcake names and prices
			//the cupcake id should be passed from this page to details.php
			//Display the list on this page as a <ul> with each name as an <a> inside an <li> 
			//The anchor tag links to details.php.
			//Add a query string parameter to pass the id each cupcake to details.php
			//create a cupcake icon to use as the bullet image for each cupcake in the list
            foreach($cupcakes as $cupcake)
            {
                echo '<li class = "cupcake"><a href="details.php?id=' . $cupcake["id"] . '">' . $cupcake["name"] . '</a></li>';
			}
            ?>
            </ul>
        </section>
<?php
include("partials/sidebar.php");
include("partials/footer.php");

?>