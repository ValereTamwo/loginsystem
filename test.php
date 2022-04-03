<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);

  // insert a row
  $firstname = "John";
  $lastname = "Doe";
  $email = "john@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Mary";
  $lastname = "Moe";
  $email = "mary@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Julie";
  $lastname = "Dooley";
  $email = "julie@example.com";
  $stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>





























<?php
  // $servername = "localhost";
  // $username = "root";
  // $password = "";
  // $dbname = "loginandregister";

  // // Create connection
  // $var1="goo"
  // $conn = new mysqli($servername, $username, $password, $dbname);
  // // Check connection
  // if ($conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
  // }

  // $sql = "INSERT INTO users (FirstName, LastName, email)
  // VALUES ('John', 'Doe', 'john@example.com')";

  // if ($conn->query($sql) === TRUE) {
  //   echo "New record created successfully";
  // } else {
  //   echo "Error: " . $sql . "<br>" . $conn->error;
  // }

  // $conn->close();
?>


<?php
    
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "loginandregister";
    
    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // // Check connection
    // if ($conn->connect_error) {
    //   die("Connection failed: " . $conn->connect_error);
    // }
    
    // $sql = "SELECT * FROM users";
    // $result = $conn->query($sql);
    
    // if ($result->num_rows > 0) {
      

    //     while($row = $result->fetch_assoc())
    //     {
    //         echo "<tr><td>".$row["id"]."</td><td>".$row["FirstName"]." ".$row["LastName"]."</td></tr>";
    //         // if($row['email'] == $email || $row['phone'] == $phone)
    //         // {
    //         //     die($row->phone);
    //         //     return true;
    //         // }
    //     }
    //   echo "</table>";
    // } else {
    //   echo "0 results";
    // }
    // $conn->close();
    
?>
    session_start();
    //connectio to the date base
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=loginandregister", $username, $password);
      $bdd = new PDO("mysql:host=localhost;dbname=loginandregister",$username,$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
        //reading of all user
        $sql = "SELECT * FROM Users ";
        //die($sql);
        $result = $conn->query($sql);
        $data = $result->fetchAll();
        foreach($data as $rows){

            echo"<br>".$row['id'];

        }
