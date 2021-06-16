<html>
  <head>
        <title>Home</title>
    </head>
    <link rel="stylesheet" href="home.css">
    <body>
        <div class="back">
        <h1>Kidzee Preschool Admission 2021-2022</h1><hr>
    </div>
  <form action="authent.php" method="POST">
    <div class="container">
      <i class='fas fa-users' style='font-size:48px;color:skyblue'></i>
      <h2>Login Here</h2>
      <input type="text" placeholder="User Name" name="name" required><br>
      <input type="password" placeholder="Enter Password" name="psw" required><br>
        <button type="submit" class="Submit">Login</button>
      
      <hr> 
    </div>
  </form>
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