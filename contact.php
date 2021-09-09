<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
      <title>The Sparks Donation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------<title> Website Layout | CodingLab</title>------>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
          
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" height=70px width=70px ></a>
       
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

h3{
  font-weight: bold;
  font-size: 40px;
  margin-left: 520px;
  color: black;
}

.navbar-brand{
  align-items: center;
  margin-left: 100px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: navy;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 650px;
}

input[type=submit]:hover {
  background-color: cyan;
}

.container {
  border-radius: 5px;
  background-color: darkgrey;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Get In Touch With Us !</h3>

<div class="container">
  <form action="connect.php" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email">

    <label for="number">Phone Number</label>
    <input type="text" id="number" name="number" placeholder="Your Phone number">

    <br>

    <label for="comments">Comments</label>
    <textarea id="comments" name="comments" placeholder="Write something.." style="height:200px"></textarea>

    <input class="btn" type="submit" value="Submit">
  </form>
</div>

</body>
</html>
