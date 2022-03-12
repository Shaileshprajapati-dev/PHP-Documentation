 <?php
include 'dbconnection.php';
$sql = "SELECT * FROM country";
$query = mysqli_query($conn,$sql);
?>

<h2>Dropdown</h2>
<form method="post" action=" ">
<input type="text" name="countryname"/>
<input type="submit" name="Register">
<?php 
include_once 'dbconnection.php';
if(isset($_POST['Register'])){
    $countryname=$_POST['countryname'];
   $query="INSERT INTO `country`(`countryname`) VALUES (' $countryname')"; 
   $q=mysqli_query($conn,$query);
   //crud using ajax
   //file uploading  
}

?>
<select name="test1">
            <option value="">Select Country</option>
            <?php if(mysqli_num_rows($query)>0): ?>
                <?php while($task1 = mysqli_fetch_assoc($query)): ?>
                    <option value="<?php echo $test1['id']?>">
                    <?php echo $task1['countryname']; ?>
                    </option>
                <?php endwhile; ?>
            <?php endif; ?>
        </select>
 </form>
</body>
</html>
