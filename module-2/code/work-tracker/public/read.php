<?php 

// this code will only execute after the submit button is clicked
//if (isset($_POST['submit'])) {
	

//Just disaply all the data awhen you view the page

    // include the config file that we created before
    require "../config.php"; 
    
    // this is called a try/catch statement 
	try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Create the SQL 
        $sql = "SELECT * FROM works";
        
        // THIRD: Prepare the SQL
        $statement = $connection->prepare($sql);
        $statement->execute();
        
        // FOURTH: Put it into a $result object that we can access in the page
        $result = $statement->fetchAll();

	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	}	
//}
?>

<?php include "templates/header.php"; ?>

<div class="container">
    <div class="row">

        <h2>All works</h2>

    </div>

    <div class="row allworks">

        <!-- This is a loop, which will loop through each result in the array -->
        <?php foreach($result as $row) { ?>

        <div class="six columns">
            <div class="inner">
                <h6 class="title">Artist Name</h6>
                <h2><?php echo $row['artistname']; ?></h2>

                <h6 class="title">Work title</h6>
                <p>
                    <?php echo $row['worktitle']; ?>
                </p>

                <h6 class="title">Work Date and type</h6>
                <p>
                    <?php echo $row['workdate']; ?> &middot;
                    <?php echo $row['worktype']; ?>
                </p>

                <h6 class="title">ID</h6>
                <p>
                    <?php echo $row['id']; ?>
                </p>



                <?php // this willoutput all the data from the array
            //echo '<pre>'; var_dump($row); ?>

            </div>

        </div>

        <?php }; //close the foreach ?>

    </div>



</div>
<?php include "templates/footer.php"; ?>
