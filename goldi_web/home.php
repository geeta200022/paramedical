<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>registration form</title>
   <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
   <div class="main">
      <div class="registration">
         <h2>ragistration here</h2>
         <form id="register" method="post" action="java_script/insert.php">
            <label>first name : </label>
            <br>
            <input type="text" name="firstname" id="name" placeholder="enter your first name">
            <br><br>
            <label>last name : </label>
            <br>
            <input type="text" name="lastname" id="name" placeholder="enter your last name ">
            <br><br>
            <label>email : </label>
            <br>
            <input type="email" name="email" id="name" placeholder="enter your valid email">
            <br><br>
            <label>dateofbirth : </label>
            <br>
            <input type="dateofbirth" name="dateofbirth" id="name" placeholder="enter your date of birth">
            <br><br>
            <label>gender : </label>
            <br>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="male">
            &nbsp;
            <span id="male">male</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="female">
            &nbsp;
            <span id="female">female</span>
            <br><br>
            <label>knownlanguage : </label>
            <br>
            &nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="knownlanguage" value="hindi">
            &nbsp;
            <span id="hindi">hindi</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="knownlanguage" value="english">
            &nbsp;
            <span id="english">english</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="knownlanguage" value="marathi">
            &nbsp;
            <span id="marathi">marathi</span>
            <br><br>
            <label>tenper : </label>
            <br>
            <input type="number" name="tenper" id="percentage" placeholder="enter your 10th%">
            <br><br>
            <label>tweper : </label>
            <br>
            <input type="number" name="tweper" id="percentage" placeholder="enter your 12th%">
            <br><br>

            <button name="submit"  value="submit">save</button>
         </form>
      </div>
   </div>
   
</body>
</html>