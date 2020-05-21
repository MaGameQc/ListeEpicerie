<?php

$servername = "mysql.helpinghost.net:3306";
$username = "magameca_diemetop";
$password = "Soadfan2011";
$dbname = "magameca_listeEpicerie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 



if(isset($_POST['nameChecked'])){
    echo $_POST['nameChecked'] ;



$itemToInsert = $_POST['nameChecked'];



$sql = "INSERT INTO Epicerie (items)
VALUES ('$itemToInsert')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



}





if(isset($_POST['nameUnchecked'])){
    echo $_POST['nameUnchecked'] ;



$itemToInsert = $_POST['nameUnchecked'];



$sql =  "DELETE FROM Epicerie WHERE items = '$itemToInsert'";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



}



/////////////////////////////////////////////

if( isset( $_POST['item'] ) )
{
    
  
    $servername = "mysql.helpinghost.net:3306";
$username = "magameca_diemetop";
$password = "Soadfan2011";
$dbname = "magameca_listeEpicerie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

    
    
   
$sql = "SELECT items FROM Epicerie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["items"];
    echo $row['items']. ",";
   
  }
} else {
  echo "0 results";
}




}

//////////////////////////////////////////////////////////


if(isset($_POST['erase'])){
    
      

    
   $sql = "DELETE FROM Epicerie";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

}

?>