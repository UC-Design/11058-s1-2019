<?php 

// this code will only execute after the submit button is clicked
if (isset($_POST['submit'])) {
	
    // include the config file that we created before
    require "../config.php"; 
    
    // this is called a try/catch statement 
	try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Get the contents of the form and store it in an array
        $new_work = array( 
            "artistname" => $_POST['artistname'], 
            "worktitle" => $_POST['worktitle'],
            "workdate" => $_POST['workdate'],
            "worktype" => $_POST['worktype'], 
        );
        
        // THIRD: Turn the array into a SQL statement
        $sql = "INSERT INTO works (artistname, worktitle, workdate, worktype) VALUES (:artistname, :worktitle, :workdate, :worktype)";        
        
        // FOURTH: Now write the SQL to the database
        $statement = $connection->prepare($sql);
        $statement->execute($new_work);

	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	}	
}
?>


<?php include "templates/header.php"; ?>

<div class="container">
    <div class="row">

        <h2>Add a work</h2>

        <?php if (isset($_POST['submit']) && $statement) { ?>
        <p class="success">Work successfully added.</p>
        <?php } ?>

    </div>

    <!--form to collect data for each artwork-->

    <form method="post">

        <div class="row">
            <div class="eight columns">
                <label for="artistname">Artist Name</label>
                <input type="text" name="artistname" id="artistname" class="u-full-width">
            </div>
        </div>

        <div class="row">
            <div class="eight columns">
                <label for="worktitle">Work Title</label>
                <input type="text" name="worktitle" id="worktitle" class="u-full-width">
            </div>
        </div>

        <div class="row">
            <div class="eight columns">
                <div class="row">
                    <div class="six columns">
                        <label for="workdate">Work Date</label>
                        <input type="text" name="workdate" id="workdate" class="u-full-width">
                    </div>
                    <div class="six columns">
                        <label for="worktype">Work Type</label>
                        <input type="text" name="worktype" id="worktype" class="u-full-width">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <input type="submit" name="submit" value="Submit" class="button-primary">
            <input type="clear" name="clear" value="Clear fields" class="button">
        </div>
    </form>

</div>

<?php include "templates/footer.php"; ?>
