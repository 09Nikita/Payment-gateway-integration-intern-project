<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
      <title>The Sparks Donation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------<title> Website Layout | CodingLab</title>------>
    <link rel="stylesheet" href="donate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

  <style>
    .center{
      padding-top: 30px;
      margin-left: 20px;
      position: absolute;
      top: 52%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      padding: 0 20px;
      padding-left: 140px;
    
    }

    .title h3{
      font-size: 37px;
      font-weight: bold;
      color: darkred;
      align-items: center;
      margin-top: 120px;
    }

    .img{
      background: url('img/set.jpg')no-repeat;
      width: 100%;
      height: 110vh;
      background-size: cover;
      background-position: center;
      position: relative; 
}
.center .title {
  color: yellow;
  font-size: 40px;
  font-weight: 400;
  padding-top: 15px;
  margin-left: 190px;
}
.center .sub_title{
  color: #fff;
  font-size: 52px;
  font-weight: 600;
  
}


  </style>

   </head>
<body>
  <nav>

    <div class="menu">
      <div class="logo">
          
        <a class="navbar-brand logo" href="index.php"><img src="img/logo.png" alt="logo" height=120px width=120px ></a>
        <h1>The Sparks Donation</h1>
      </div>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT US </a></li>
        <li><a href="donate.php">DONATE</a></li>
        <li><a href="contact.php">CONTACT US </a></li>
    
      </ul>
    </div>
  </nav>

  <div class="img" id="element-with-background-image"></div>

  <div class="center">
    <div class="title" style="position: relative"><h3> <br>" The measure of life is not its duration, but its donation.
"</h3><br><br></div>

            <form style="margin-left: 480px;">
            <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Hv1G1Gyt5fEvpO" async> </script> </form>
             </form>
      </div>
</div>