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

<h2>Add a work</h2>

<?php if (isset($_POST['submit']) && $statement) { ?>
<p>Work successfully added.</p>
<?php } ?>

<!--form to collect data for each artwork-->

<form method="post">
    <label for="artistname">Artist Name</label>
    <input type="text" name="artistname" id="artistname">

    <label for="worktitle">Work Title</label>
    <input type="text" name="worktitle" id="worktitle">

    <label for="workdate">Work Date</label>
    <input type="text" name="workdate" id="workdate">

    <label for="worktype">Work Type</label>
    <input type="text" name="worktype" id="worktype">

    <!--
    <label for="work-description">Work Description</label>
    <input type="textarea" name="work-description" id="work-description">

    <label for="purchase-date">Purchase Date</label>
    <input type="textarea" name="purchase-date" id="purchase-date">

    <label for="purchase-details">Purchase Details</label>
    <input type="textarea" name="purchase-details" id="purchase-details">
-->

    <input type="submit" name="submit" value="Submit">

</form>

<?php include "templates/footer.php"; ?>
