<?php
echo "Hi";

//     //Get Heroku ClearDB connection information
//     $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//     $cleardb_server = $cleardb_url["host"];
//     $cleardb_username = $cleardb_url["user"];
//     $cleardb_password = $cleardb_url["pass"];
//     $cleardb_db = substr($cleardb_url["path"],1);
//     $active_group = 'default';
//     $query_builder = TRUE;
//     // Connect to DB
//     $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

//         if (!$conn) {
//         die("Connection failed: " . mysqli_connect_error());
//     }
    
//     //echo "Connected successfully";

//     //if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // if( $_POST["story"] || $_POST["feeling"] ) {
//      if( $_POST ) {

//         print_r($_POST);
       
//     // $sql = "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com')";
   
    
//     $story = $_POST['story'];
//     $feeling = $_POST['feeling'];
//     $sql = "INSERT INTO heroku_3fa92357decd51e.logdet ( userid,individual,need,action,) VALUES (, '$story','$feeling')";
//     if (mysqli_query($conn, $sql)) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
   
//     $sql = "SELECT MAX(userId) as maxId FROM  heroku_3fa92357decd51e.userdet LIMIT 1";
//     $result = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//        $highest_id = $row["maxId"];
//     }
//     } else {
//     echo "0 results";
//     }

     
//     // $highest_id = mysqli_fetch_row(mysqli_query($conn,'SELECT MAX(userId) FROM  heroku_3fa92357decd51e.userdet LIMIT 1'), 0);

//        mysqli_close($conn);
      
//     // header("Location: /stickynote.php?WACC=".$highest_id);
//     header("Location: /stickynote.php?WACC=".$highest_id);

//     exit;
// }

?>