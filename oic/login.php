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
<form name="login">
    <p>Email: <br> <input type="email" name="email"></p>
    <p>Password: <br> <input type="password" name="password"></p>
    <input type="submit" value="Login" name="login">
</form>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
let loginForm = document.forms['login'];
login.addEventListener('submit', (e)=>{
e.preventDefault()
 let email = loginForm['email'].value.trim();
 let password = loginForm['password'].value.trim();
axios.post('loginserver.php',{
 serverEmail: email,
 serverPassword: password
}).then(response => {
    console.log(response.data)
}).catch(err=>{
    console.log(err)
})


})
</script>
</body>
</html>