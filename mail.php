// <?php
// echo "hello world";


// // if(isset($_POST['submit'])){
// //     $to = "dsanjay9027@gmail.com";
// //     $subject = "Mail From website";
// //     $message= $_POST['message'];
// //     $from=$_POST['cs@sudozap.com'];
// //     $headers="From:". $from;
// //     mail($to,$subject,$txt,$headers);
// //     echo "Mail Sent";
    
// // }
//     // $name = $_POST['name'];
//     // $email= $_POST['email'];
//     // $message= $_POST['message'];
//     // $to = "youremail@mail.com";
//     // $subject = "Mail From website";
//     // $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
//     // $headers = "From: noreply@yoursite.com" . "\r\n" .
//     // "CC: somebodyelse@example.com";
//     // if($email!=NULL){
//     //     mail($to,$subject,$txt,$headers);
//     // }
    
//     // header("Location:thankyou.html");
// ?>
        <?php
        $to = 'dsanjay9027@gmail.com';
        $subject = 'Marriage Proposal';
        $name = $_POST['name'];
        $email= $_POST['email'];
        $message= $_POST['message'];
        $from = 'cs@sudozap.com';
         
        // Sending email
        if(mail($to,$subject,$name,$message, $email)){
            echo 'Your mail has been sent successfully.';
        } else{
            echo 'Unable to send email. Please try again.';
        }
        ?>
