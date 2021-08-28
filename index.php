
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <title>Contact Form</title>
</head>
<body>
    <form action="insert.php" method="POST">
    <div class="login-box">
        <h1>...CONTACT ME...</h1>
        <div class="textbox">
        <i class="fas fa-signature"></i>

            
            <input type="text" placeholder="firstname" name="firstname" required value=""> 
            
        </div>

        <div class="textbox">
        <i class="fas fa-signature"></i>
            
            <input type="text" placeholder="lastname" name="lastname" required value=""> 


        </div>

        <div class="textbox">
        <i class="fas fa-envelope-square"></i>
            
            <input type="Email" placeholder="email" name="email" required value=""> 


        </div>
        <div class="textbox">
        <i class="fas fa-baby"></i>
            
            <input type="date" placeholder="date" name="datee" required value=""> 


        </div>
        <div class="textbox">
        <i class="fas fa-phone-square-alt"></i>
            
            <input type="tel" placeholder="telephone number" name="phoneno" required value=""> 


        </div>

        <div class="textbox">
        <i class="fas fa-pen-nib"></i>
        
            
            <input type="name" placeholder="designation" name="designation" required value=""> 


        </div>

        

        


    <div class="first_one">
    <p>Choose your gender:-</p>
    <i class="fas fa-male"></i>
    
  <input type="radio" id="male" name="gender" required value="Male">
  <label for="male">Male</label><br>
<i class="fas fa-female"></i>
  <input type="radio" id="female" name="gender" required value="Female">
  <label for="female">Female</label><br>
<i class="fas fa-transgender"></i>
  <input type="radio" id="others" name="gender" required value="Others">
  <label for="others">Others</label>
</div>



<div class="last_one">
<p>Select your hobbies:-</p>
<i class="fas fa-baseball-ball"></i>
  <input type="checkbox" id="hobby1" name="sports[]" required value="">
  <label for="hobby1"> Cricket </label><br>
  <i class="fas fa-football-ball"></i>
  <input type="checkbox" id="hobby2" name="sports[]" required value="">
  <label for="hobby2"> Rugby </label><br>
  <i class="fas fa-golf-ball"></i>
  <input type="checkbox" id="hobby3" name="sports[]" required value="">
  <label for="hobby3"> Table Tennis </label><br>
  <i class="fas fa-dumbbell"></i>
  <input type="checkbox" id="hobby4" name="sports[]" required value="">
  <label for="hobby4"> Fitness </label><br><br>
  </div>







        
        <input type="button" value="Submit" class="btn" name="" value="">
        

    </div>
    </form>
    
</body>
</html>