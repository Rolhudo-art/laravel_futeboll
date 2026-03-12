<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ArenaStats | Registro</title>

<style>

:root{
--primary:#e2fd10;
--white:#ffffff;
--dark:#0a0a0a;
--gray:#888;
}

*{margin:0;padding:0;box-sizing:border-box;}

body{
font-family:Arial;
background:var(--dark);
color:var(--white);
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.hero-bg{
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:
linear-gradient(135deg,rgba(10,10,10,0.9)30%,transparent),
url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&q=80&w=1600')
center/cover;
z-index:-1;
}

.register-box{
background:rgba(0,0,0,0.8);
padding:40px;
border-radius:10px;
width:350px;
}

.logo{
font-size:1.8rem;
font-weight:bold;
margin-bottom:20px;
}

.logo span{
color:var(--primary);
}

input{
width:100%;
padding:12px;
margin:10px 0;
border:none;
border-radius:4px;
}

button{
width:100%;
padding:12px;
background:var(--primary);
border:none;
font-weight:bold;
cursor:pointer;
}

button:hover{
background:white;
}

.message{
margin-top:10px;
font-size:14px;
color:var(--gray);
}

a{
color:var(--primary);
text-decoration:none;
font-size:14px;
}

</style>

</head>

<body>

<div class="hero-bg"></div>

<div class="register-box">

<div class="logo">ARENA<span>STATS</span></div>

<input type="text" id="name" placeholder="Nome">
<input type="email" id="email" placeholder="Email">
<input type="password" id="password" placeholder="Senha">

<button onclick="register()">Criar Conta</button>

<p class="message" id="mensagem"></p>

<p style="margin-top:15px">
Já possui conta?
<a href="login.html">Entrar</a>
</p>

</div>

<script>

async function register(){

let name = document.getElementById("name").value
let email = document.getElementById("email").value
let password = document.getElementById("password").value

try{

let resposta = await fetch("http://127.0.0.1:8000/api/register",{
method:"POST",
headers:{
"Content-Type":"application/json",
"Accept":"application/json"
},
body:JSON.stringify({
name:name,
email:email,
password:password
})
})

let dados = await resposta.json()

console.log(dados)

if(resposta.ok){

localStorage.setItem("token",dados.token)

document.getElementById("mensagem").innerText="Conta criada com sucesso!"

}else{

document.getElementById("mensagem").innerText="Erro no cadastro"

}

}catch(erro){

console.error(erro)

document.getElementById("mensagem").innerText="Erro ao conectar com servidor"

}

}

</script>



</body>
</html>