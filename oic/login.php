<?php 
 require_once "loginserver.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Page</h1>
    <div style="background-color:green;color:white;padding:16px;max-width:200px" id="success"> Login Successfully</div>
<form name="login">
    <p>Email: <br> <input type="email" name="email"></p>
    <p>Password: <br> <input type="password" name="password"></p>
    <input type="submit" value="Login" id="login" name="login">
</form>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  let loginState= document.getElementById('login');
    let successDis = document.getElementById('success');
    successDis.style.display="none";
let loginForm = document.forms['login'];
loginForm.addEventListener('submit', (e)=>{
e.preventDefault()
 loginState.value="Loading...";
 let email = loginForm['email'].value.trim();
 let password = loginForm['password'].value.trim();
axios.post('loginserver.php',{
 serverEmail: email,
 serverPassword: password
}).then(response => {
    if(response.data.success){
        successDis.style.display="block";
        loginState.value="Login";
        setTimeout(()=>{
            location.assign('index.php');
        }, 5000)
        
    }
}).catch(err=>{
    console.log(err)
})


})
</script>
</body>
</html>