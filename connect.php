<?php
  $fullname = $_POST['fullname'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  try {
    $conn = new PDO("sqlsrv:server = tcp:portfoliserver.database.windows.net,1433; Database = portfoli", "ankitbhujeja", "Ankit@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    
  $stmt = $conn->prepare("insert into port(fullname,number,email,subject,message) values(?,?,?,?,?)");
  $stmt->blind_param("sisss",$fullname,$number,$email,$subject,$message);
  $stmt->execute();
  echo "Thanks for contacting";
  $stmt->close();
  $conn->close();

  ?>