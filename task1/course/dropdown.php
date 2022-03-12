<?php

include 'dbconnection.php';

$sql = "SELECT * FROM course";

$query = mysqli_query($conn,$sql);

?>
<h2>Dropdown</h2>
 
 <form method="post" action=" ">
<input type="text" name="name"/>
<input type="submit" name="Register">
<?php 
include_once 'dbconnection.php';
if(isset($_POST['Register'])){
    $name=$_POST['name'];
   $query="INSERT INTO `course`(`name`) VALUES (' $name')"; 
   $q=mysqli_query($conn,$query);
}

?>
<select name="test1">
            <option value="">Select Course</option>
            <?php if(mysqli_num_rows($query)>0): ?>
                <?php while($test1 = mysqli_fetch_assoc($query)): ?>
                    <option value="<?php echo $test1['id']?>">
                    <?php echo $test1['name']; ?>
                    </option>
                <?php endwhile; ?>
            <?php endif; ?>
        </select>
 
 </form>

</body>
</html>
<?php


?>