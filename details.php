<?php
include("partials/dataset.php");
include("partials/masthead.php");


?>
<!doctype html>

        
        <section class="main">
        	<h2>The Cupcake Details</h2>
            <?php
			//Inside here is where you will be looping through the cupcake array
			//and displaying the details for one cupcake.
			//get the cupcake id from the query string
			//display the name, price and description for the selected cupcake
			
            foreach($cupcakes as $cupcake)
            {
                if ($cupcake["id"] == $_GET["id"])
                {
                    echo '<h3>' . $cupcake["name"] .'</h3>';
                    echo '<p>$' . $cupcake["price"] .'</p>';
                    echo '<p>' . $cupcake["description"] .'</p>';
                }
            }
            ?>
        </section>
<?php
include("partials/sidebar.php");
include("partials/footer.php");

?>