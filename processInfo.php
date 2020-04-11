<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>

<body>
  <?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];

$userObject = [
  "first name" => $fname,
  "Last name"=>$lname,
  'email'=>$email,
  'phone'=>$phone,
  'gender'=>$gender
];
$contacts = scandir("contactStorage/");
$contactsSliced = array_slice($contacts, 2);
for($counter = 0; $counter < count($contactsSliced); $counter++){
  $contactFilePath = "contactStorage/".$contactsSliced[$counter];
  // print_r($contactFilePath);
  $result = file_get_contents($contactFilePath);
  $resultArray = explode(" ", $result);
  print_r($resultArray[$counter]);
}

file_put_contents("contactStorage/" .$fname.'.txt',json_encode($userObject));
  $_SESSION['message'] = 'File sucessfully saved with the filename of '.$fname. ' thanks';
  // header("Location: index.php");
$contacts = scandir("contactStorage/");
$contactFilePath = "contactStorage/".$fname.'.txt';
print_r($contactFilePath);

echo file_get_contents($contactFilePath);
die();
file_get_contents()
  // if(in_array($email, $allContacts)){
  //   print_r(expression)
  //   $_SESSION['error'] = 'Contact of ' .$fname." " .$lname." " . 'with this email' .' '.$email.' '. 'already exists';
  // }elseif (isset($_POST['fname'])) {
  // file_put_contents("contactStorage/" .$fname.'.txt',json_encode($userObject));
  // $_SESSION['message'] = 'File sucessfully saved with the filename of '.$fname. ' thanks';
  // header("Location: index.php");
  // }
// }
?>
</body>

</html>