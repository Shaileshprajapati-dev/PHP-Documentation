<?php

include 'dbconnection.php';

$sql = "SELECT * FROM city";

$query = mysqli_query($conn,$sql);

?>
<h2>Dropdown</h2>
 
 <form method="post" action=" ">
<input type="text" name="cityname"/>
<input type="submit" name="Register">
<?php 
include_once 'dbconnection.php';
if(isset($_POST['Register'])){
    $cityname=$_POST['cityname'];
   $query="INSERT INTO `city`(`cityname`) VALUES (' $cityname')"; 
   $q=mysqli_query($conn,$query);
}

?>
<select cityname="task1">
            <option value="">Select City</option>
            <?php if(mysqli_num_rows($query)>0): ?>
                <?php while($task1 = mysqli_fetch_assoc($query)): ?>
                    <option value="<?php echo $task1['id']?>">
                    <?php echo $task1['cityname']; ?>
                    </option>
                <?php endwhile; ?>
            <?php endif; ?>
        </select>
 
 </form>

</body>
</html>
<?php


?>