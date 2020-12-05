<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Details </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body class="bgcolour">
    <link rel="stylesheet" href="css/style.css">
    <div class="container">
    <div class="row">
     <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
     <table class="table">
         <h1>LOG IN</h1>
         <tr>
             <td>Email id</td>
             <td><input type="text" class="formcontrol" id="mail"></td>
         </tr>
         <tr>
             <td>Password</td>
             <td><input type="password"class="formcontrol" id="pass"></td>
         </tr>
         <tr>
             <td></td>
             <td><button onclick="buttonclick()"class="btn btn-primary">Log in</button></td>
         </tr>
     </table>
     </div>
     <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
         <table class="table">
             <h1>REGISTER</h1>
             <tr>
                 <td>Name</td>
                 <td><input type="text" class="formcontrol" id="name"></td>
             </tr>
             <tr>
                 <td>D.O.B</td>
                 <td><input type="text" class="formcontrol" id="date"></td>
             </tr>
             <tr>
                 <td>Place</td>
                 <td><input type="text" class="formcontrol" id="place"></td>
             </tr>
             <tr>
                 <td>Email id</td>
                 <td><input type="text" class="formcontrol" id="mail1"></td>
             </tr>
             <tr>
                 <td>Password</td>
                 <td><input type="password" class="formcontrol" id="pword"></td>
             </tr>
             <tr>
                 <td>Confirm password</td>
                 <td><input type="password" class="formcontrol" id="cpword"></td>
             </tr>
             <tr>
                 <td></td>
                 <td><button onclick="clickme()"class="btn btn-success">Register</button></td>
             </tr>
         </table>

     </div>
    </div>
    <script>
        function buttonclick()
        {
            var getmail=document.getElementById("mail").value
            var getidd=document.getElementById("pass").value
            console.log(getmail)
            console.log(getidd)
        }
        function clickme()
        {
            var getname=document.getElementById("name").value
            var getdate=document.getElementById("date").value
            var getplace=document.getElementById("place").value
            var getmail1=document.getElementById("mail1").value
            var getpword=document.getElementById("pword").value
            var getcpword=document.getElementById("cpword").value  
            console.log(getname)
            console.log(getdate)
            console.log(getplace)
            console.log(getmail1)
            console.log(getpword)
            console.log(getcpword)

        }
    </script>
    
     
    

   
</body>
</html>