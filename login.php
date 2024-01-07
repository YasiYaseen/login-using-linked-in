<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="img/signinlogo.jpeg" alt="" width="200" id="signinli">


<script>
    const clientId =  '862wsm7tncsimi';
let signinLi =document.getElementById('signinli');
        const redirectUri = 'http%3A%2F%2Flocalhost%2Ftasks%2Floginusingli%2FprocessLogin.php';
        // const redirectUri ='https://xcteam.in/tw/ln-comment/processLogin.html';
signinLi.addEventListener('click',()=>{

signInUsingLinkedIn()
})
const signInUsingLinkedIn = async()=>{
// let response = await fetch('https://www.linkedin.com/oauth/v2/authorization?response_type=code&redirect_uri=https://www.linkedin.com/developers/tools/oauth/redirect&scope=profile%20email&client_id=862wsm7tncsimi');
try {
    // Redirect the user to the LinkedIn authorization page
    // window.location.href = `https://www.linkedin.com/oauth/v2/authorization?response_type=code&redirect_uri=${redirectUri}&scope=profile%20email%20openid&client_id=${clientId}&state=yaseensstate`;
 let loginWindow =  window.open(`https://www.linkedin.com/oauth/v2/authorization?response_type=code&redirect_uri=${redirectUri}&scope=profile%20email%20openid&client_id=${clientId}&state=yaseensstate`);
  loginWindow.opener=window;
} catch (error) {
    // Handle errors
    console.error(error);
}
}
</script>

</body>
</html>