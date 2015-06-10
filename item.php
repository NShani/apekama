
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/bootstrap_import_style.php';?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/items.css">

    <title>Time Line</title>
</head>

<body>
    <div class="row navigation">
        <?php require './includes/navigation.php'; ?>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $database = 'apekama_db';
        $dbserver;
        $result;
    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    if($conn->connect_error)
    {
        die($conn->connect_errno);
    }
        
        
        
//if(isset($_POST['catagory'])){
  //      $catagory = $_POST['catagory'];
    //}
    $cat='lether';
    $row;
    $sql = "select * from items where category ='$cat'";
    
    $result = $conn->query($sql);
    if(!$result)die("No data in database!!!".mysql_error());
    if ($conn->error) 
    {
        die($conn->error);
    }

    while ($row = $result->fetch_assoc()) 
    {
        $stored_url =  $row['image'];
    ?>
        <div class="container">
            <div class="rig columns-3">
                <ul class="row-md-3 well">
	               <li>
                    <img src="<?php echo $stored_url ?>" />
                    <h3>Elephant</h3>
		            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
	               </li>
                </ul>
            </div>
        </div>
    <?php
    }
?>
        
<div class="row footer well">
    <?php require './includes/footer.php'; ?>
</div>
</div>
    <?php include './includes/bootstrap_import_script.php'?>
</body>

</html>