<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>  
<body>  
    <!-- Library management system -->
    <h1 id="library">Library Management System</h1>
    <!-- Login form starts here -->
    <div id = "form">  
        <h1 id="admin">ADMIN LOGIN</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
         <label id="user"> username </label>  
         <input type = "text" id ="user" name  = "user" required> 
         <div class="password">
         <label id="passw"> Password</label>  
         <input type = "password" id ="pass" name  = "pass" required>  
    </div>
    <div class="buttons">
        <input type =  "submit" id = "btn" value = "Login">  
        <button class = "btn" type='button'>Cancel</button>
    </div>
     </form>   
    </div>  
    <!-- Login form ends here -->
    <!-- //validation for empty field    -->
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  
