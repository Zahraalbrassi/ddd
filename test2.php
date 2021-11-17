  <?php
      $dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

   $conn = mysqli_connect($dbservername, $dbUsername, $dbPassword,$dbName);
 if ($conn === false) {

    
    die("Error: could not connect." . mysqli_connect_error());

 }
 if(isset($_GET['subject_name'])){
   $subjectName = $_GET['subject_name'];
 

$sql = "SELECT * FROM subjects WHERE id = $subjectName";
if($result = mysqli_query($conn,$sql)){
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $dbselected = $row['subject_name'];
    }
    mysqli_free_result($result);
}
else{
   echo "something went wrong ...";
}
  }
  else{
   echo " ERROR: could not execute $sql." . mysqli_error($conn);
  }
   
}

$options = array('hi','bye') 

<form>
<select>

foreach($options as $option){
   if($dbsellected == $option){
      echo "<option selected= 'selected' value='$option'>$option</option>";
   }
   else{
      echo "<option value='$option'>$option</option>";

   }
} 
</select>
</form>
?>  