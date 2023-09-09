<?php
if(isset($_POST['submit'])){
   $studentname = "Name: ".$_POST['studentname']."\n";
   $email = "Email: ".$_POST['email']."\n";
   $gender = "Gender: ".$_POST['gender']."\n";
   $phone = "Phone: ".$_POST['phone']."\n";
   $qualification = "Qualification: ".$_POST['qualification']."\n";
   $course = "Course: ".$_POST['course']."\n";
   $country = "Country: ".$_POST['country']."\n";
   $address = "Address: ".$_POST['address']."\n";

   $file = fopen("file.txt", "a");
   echo "PHP code is executing";
   fwrite($file, $studentname);
   fwrite($file, $email);
   fwrite($file, $gender);
   fwrite($file, $phone);
   fwrite($file, $qualification);
   fwrite($file, $course);
   fwrite($file, $country);
   fwrite($file, $address);
   fclose($file);

   header("Location: ThankYou.html");
   exit();
}
?>
