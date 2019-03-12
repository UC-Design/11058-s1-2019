<?php 

    // include the config file 
    require "../config.php";
    require "common.php";

    // This code will only run if the delete button is clicked
    if (isset($_GET["id"])) {
	    // this is called a try/catch statement 
        try {
            // define database connection
            $connection = new PDO($dsn, $username, $password, $options);
            
            // set id variable
            $id = $_GET["id"];
            
            // Create the SQL 
            $sql = "DELETE FROM works WHERE id = :id";

            // Prepare the SQL
            $statement = $connection->prepare($sql);
            
            // bind the id to the PDO
            $statement->bindValue(':id', $id);
            
            // execute the statement
            $statement->execute();

            // Success message
            $success = "Work successfully deleted";

        } catch(PDOException $error) {
            // if there is an error, tell us what it is
            echo $sql . "<br>" . $error->getMessage();
        }
    };

    // This code runs on page load
    try {
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Create the SQL 
        $sql = "SELECT * FROM works";
        
        // THIRD: Prepare the SQL
        $statement = $connection->prepare($sql);
        $statement->execute();
        
        // FOURTH: Put it into a $result object that we can access in the page
        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

?>

<?php include "templates/header.php"; ?>


<h2>Delete a user</h2>

<?php if ($success) echo $success; ?>

<!-- This is a loop, which will loop through each result in the array -->
<?php foreach($result as $row) { ?>

<p>
    ID:
    <?php echo escape($row['id']); ?><br> Artist Name:
    <?php echo $row['artistname']; ?><br> Work Title:
    <?php echo $row['worktitle']; ?><br> Work Date:
    <?php echo $row['workdate']; ?><br> Work type:
    <?php echo $row['worktype']; ?><br>
    <a href='delete.php?id=<?php echo $row['id']; ?>'>Delete</a>
</p>

<hr>
<?php }; //close the foreach
?>



<?php include "templates/footer.php"; ?>
