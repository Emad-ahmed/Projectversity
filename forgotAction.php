<!-- 

// include 'config.php';

// $email = $_POST['email'];


// $_result = mysqli_query($conn, "SELECT * FROM `user` WHERE email ='$email'");


// if (mysqli_num_rows($_result)) {
//     $userdata = mysqli_fetch_array($query);
//     $username = $userdata['name'];
//     $subject = "Password Reset";
//     $body = "Hi $username. Click here to activate your account
//     http://localhost/1emailverifregistr/activate.php?token=$token ";
//     $sender_email = "From : amadahmed1234678@gmail.com";

//     if (mail($email, $subject, $body, $sender_email)) {
//         $_SESSION['msg'] = "check your mail to activate your account";
//         echo "<script>alert('Email Successfull')</script>";
//         echo "<script>location.href = 'forgot.php'</script>";
//     } else {
//         echo "<script>alert('Email Sending failed')</script>";
//         echo "<script>location.href = 'forgot.php'</script>";
//     }
// } else {
//     echo "<script>alert('Incorrect Email')</script>";
//     // echo "<script>location.href = 'login.php'</script>";
// }
 -->

<?php
$to_email = "amadahmed1234678@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: amadahmed1234678@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>