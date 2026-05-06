<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SecureTickets | Plataforma de Soporte</title>

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- ICONOS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:
    linear-gradient(rgba(7,12,24,0.9),rgba(7,12,24,0.95)),
    url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop');
    background-size:cover;
    background-position:center;
    background-attachment:fixed;
    color:white;
    overflow-x:hidden;
}

/* SIDEBAR */

.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:270px;
    height:100%;
    background:rgba(255,255,255,0.06);
    backdrop-filter:blur(14px);
    border-right:1px solid rgba(255,255,255,0.1);
    padding:25px;
    z-index:100;
}

.logo{
    display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:40px;
}

.logo img{
    width:55px;
    height:55px;
    border-radius:14px;
}

.logo h2{
    font-size:24px;
    font-weight:700;
}

.menu{
    list-style:none;
}

.menu li{
    margin:14px 0;
}

.menu a{
    text-decoration:none;
    color:white;
    display:flex;
    align-items:center;
    gap:15px;
    padding:15px;
    border-radius:15px;
    transition:0.3s;
    font-weight:500;
}

.menu a:hover{
    background:#00c2ff;
    transform:translateX(6px);
}

/* MAIN */

.main{
    margin-left:270px;
    padding:35px;
}

/* TOPBAR */

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:20px;
    margin-bottom:35px;
}

.search-box{
    background:rgba(255,255,255,0.08);
    padding:14px 18px;
    border-radius:16px;
    width:380px;
    display:flex;
    align-items:center;
    gap:12px;
    backdrop-filter:blur(10px);
}

.search-box input{
    width:100%;
    border:none;
    outline:none;
    background:none;
    color:white;
    font-size:15px;
}

.profile{
    display:flex;
    align-items:center;
    gap:14px;
}

.profile img{
    width:55px;
    height:55px;
    border-radius:50%;
    border:3px solid #00c2ff;
}

/* HERO */

.hero{
    background:
    linear-gradient(rgba(0,194,255,0.45),rgba(0,0,0,0.45)),
    url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop');
    background-size:cover;
    background-position:center;
    border-radius:30px;
    padding:45px;
    margin-bottom:35px;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.hero h1{
    font-size:42px;
    margin-bottom:10px;
    color:white;
    font-weight:700;
    text-shadow:0 4px 12px rgba(0,0,0,0.8);
}

.hero p{
    color:#f1f5f9;
    max-width:650px;
    font-size:17px;
    line-height:1.6;
    text-shadow:0 2px 10px rgba(0,0,0,0.8);
}

/* CARDS */

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:22px;
    margin-bottom:35px;
}

.card{
    background:rgba(255,255,255,0.08);
    border-radius:24px;
    padding:28px;
    backdrop-filter:blur(10px);
    transition:0.3s;
    border:1px solid rgba(255,255,255,0.08);
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 30px rgba(0,194,255,0.3);
}

.card i{
    font-size:38px;
    margin-bottom:15px;
    color:#00c2ff;
}

.card h2{
    font-size:34px;
}

.card p{
    color:#d1d5db;
}

/* TABLE */

.table-container{
    background:rgba(255,255,255,0.08);
    padding:25px;
    border-radius:24px;
    overflow-x:auto;
    margin-bottom:35px;
}

.table-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.btn{
    background:#00c2ff;
    border:none;
    color:white;
    padding:13px 20px;
    border-radius:14px;
    cursor:pointer;
    font-weight:600;
    transition:0.3s;
}

.btn:hover{
    background:#009ed1;
    transform:scale(1.05);
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:16px;
    text-align:left;
}

th{
    color:#00c2ff;
}

tr{
    border-bottom:1px solid rgba(255,255,255,0.08);
}

tr:hover{
    background:rgba(255,255,255,0.04);
}

.status{
    padding:8px 14px;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
}

.open{
    background:#22c55e33;
    color:#4ade80;
}

.progress{
    background:#00c2ff33;
    color:#38bdf8;
}

.closed{
    background:#ef444433;
    color:#f87171;
}

.status-select{
    padding:8px 14px;
    border:none;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
    color:white;
    outline:none;
    cursor:pointer;
    background:#22c55e33;
}

.status-select option{
    background:#0b1220;
    color:white;
}

/* FORM */

.form-container{
    background:rgba(255,255,255,0.08);
    padding:30px;
    border-radius:24px;
    backdrop-filter:blur(10px);
}

.form-container h2{
    margin-bottom:25px;
}

.form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

.input-box{
    display:flex;
    flex-direction:column;
}

.input-box label{
    margin-bottom:8px;
    color:#dbeafe;
}

.input-box input,
.input-box select,
.input-box textarea{
    padding:15px;
    border:none;
    border-radius:14px;
    background:rgba(255,255,255,0.08);
    color:white;
    outline:none;
}

textarea{
    resize:none;
    height:130px;
}

.full{
    grid-column:1/3;
}

/* MICROFONO */

.voice-box{
    display:flex;
    align-items:center;
    gap:15px;
    margin-top:15px;
}

.mic-btn{
    width:60px;
    height:60px;
    border-radius:50%;
    border:none;
    background:#ff0055;
    color:white;
    font-size:25px;
    cursor:pointer;
    transition:0.3s;
}

.mic-btn:hover{
    transform:scale(1.1);
}

/* WHATSAPP */

.whatsapp{
    position:fixed;
    width:70px;
    height:70px;
    bottom:25px;
    right:25px;
    background:#28a5d6;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    font-size:38px;
    text-decoration:none;
    z-index:999;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
    animation:pulse 2s infinite;
}

.whatsapp:hover{
    transform:scale(1.12);
}

@keyframes pulse{
    0%{
        box-shadow:0 0 0 0 rgba(37,211,102,0.7);
    }

    70%{
        box-shadow:0 0 0 18px rgba(37,211,102,0);
    }

    100%{
        box-shadow:0 0 0 0 rgba(37,211,102,0);
    }
}

/* RESPONSIVE */

@media(max-width:900px){

.sidebar{
    position:relative;
    width:100%;
    height:auto;
}

.main{
    margin-left:0;
}

.form-grid{
    grid-template-columns:1fr;
}

.full{
    grid-column:1/2;
}

.search-box{
    width:100%;
}

.hero h1{
    font-size:30px;
}

}
/* FIX VISUAL SELECT (sin modificar estructura) */

.input-box select {
    background-color: rgba(255,255,255,0.08);
    color: white;
}

/* Opciones del dropdown */
.input-box select option {
    background-color: #0b1220; /* fondo oscuro */
    color: #ffffff;
}

/* Cuando está seleccionada */
.input-box select option:checked {
    background-color: #00c2ff;
    color: #000;
}

/* Para algunos navegadores */
.input-box select:focus {
    outline: none;
    box-shadow: 0 0 0 2px #00c2ff;
}
/* ALERTAS MODERNAS */

.custom-alert{
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%) scale(0.8);
    min-width:340px;
    max-width:90%;
    padding:28px;
    border-radius:26px;
    text-align:center;
    color:white;
    z-index:999999;
    opacity:0;
    transition:0.4s ease;
     backdrop-filter:blur(18px);
    box-shadow:0 20px 45px rgba(0,0,0,0.4);
}

.custom-alert.show{
    opacity:1;
    transform:translate(-50%, -50%) scale(1);
}

.custom-alert.success{
    background:linear-gradient(135deg,#22c55e,#16a34a);
}

.custom-alert.warning{
    background:linear-gradient(135deg,#f59e0b,#d97706);
}

.custom-alert.info{
    background:linear-gradient(135deg,#00c2ff,#0284c7);
}
</style>
</head>
<body>


<!-- LOGIN SCREEN -->
<div id="loginScreen" style="
position:fixed;
top:0;
left:0;
width:100%;
height:100vh;
background:linear-gradient(rgba(7,12,24,0.97),rgba(7,12,24,0.98)),
url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop');
background-size:cover;
background-position:center;
display:flex;
justify-content:center;
align-items:center;
z-index:99999;
padding:20px;
">

<div style="
width:100%;
max-width:420px;
background:rgba(255,255,255,0.08);
padding:35px;
border-radius:28px;
backdrop-filter:blur(15px);
border:1px solid rgba(255,255,255,0.1);
box-shadow:0 10px 35px rgba(0,0,0,0.4);
color:white;
">

<div style="text-align:center;margin-bottom:25px;">
<img src="https://www.grupocibernos.com/hubfs/27-1.png"
style="width:80px;height:80px;border-radius:20px;margin-bottom:10px;">

<h1 style="font-size:30px;">SecureTickets</h1>
<p style="color:#cbd5e1;">Acceso seguro a la plataforma</p>
</div>

<div style="display:flex;flex-direction:column;gap:18px;">

<input
id="user"
type="text"
placeholder="Usuario"
style="
padding:15px;
border:none;
border-radius:14px;
background:rgba(255,255,255,0.08);
color:white;
outline:none;
"
>

<input
id="pass"
type="password"
placeholder="Contraseña"
style="
padding:15px;
border:none;
border-radius:14px;
background:rgba(255,255,255,0.08);
color:white;
outline:none;
"
>

<button onclick="login()" style="
padding:15px;
border:none;
border-radius:14px;
background:#00c2ff;
color:white;
font-weight:600;
cursor:pointer;
font-size:16px;
">
Ingresar

</button>

<button onclick="generarQR()" style="
padding:15px;
border:none;
border-radius:14px;
background:#8b5cf6;
color:white;
font-weight:600;
cursor:pointer;
font-size:16px;
">
<i class="fa-solid fa-qrcode"></i>
 Generar QR MFA
</button>

<input
id="mfaCode"
type="text"
placeholder="Código MFA"
style="
padding:15px;
border:none;
border-radius:14px;
background:rgba(255,255,255,0.08);
color:white;
outline:none;
"
>

<button onclick="verifyMFA()" style="
padding:15px;
border:none;
border-radius:14px;
background:#22c55e;
color:white;
font-weight:600;
cursor:pointer;
font-size:16px;
">
Verificar Código
</button>

</div>

<div id="loginStatus" style="text-align:center;color:#fca5a5;"></div>

</div>

<div id="qrContainer" style="
display:none;
text-align:center;
margin-top:20px;
">

<p style="margin-bottom:15px;color:#cbd5e1;">
Escanea este QR en Google Authenticator
</p>

<img id="qrImage" style="
width:230px;
height:230px;
background:white;
padding:10px;
border-radius:20px;
">

</div>

</div>
</div>

<script>

// ===== LOGIN =====

const USER = "securetickets";
const PASS = "Support2026.";
const MFA = "2026";

function login(){

const user = document.getElementById("user").value;
const pass = document.getElementById("pass").value;
const status = document.getElementById("loginStatus");

if(user === USER && pass === PASS){

    status.style.color = "#4ade80";

    document.getElementById("mfaBox").style.display = "flex";

    status.innerHTML = "🔐 Verificación MFA requerida";

}else{

    status.style.color = "#f87171";
    status.innerHTML = "❌ Usuario o contraseña incorrectos";

}

}

function verifyMFA(){

const code = document.getElementById("mfaCode").value;

fetch("verificar_mfa.php", {

method: "POST",

headers:{
"Content-Type":"application/x-www-form-urlencoded"
},

body: new URLSearchParams({
    codigo: code
})

})

.then(response => response.text())

.then(data => {

const status = document.getElementById("loginStatus");

if(data === "success"){

status.style.color = "#4ade80";

status.innerHTML = "✅ Acceso autorizado";

setTimeout(()=>{

document.getElementById("loginScreen").style.display = "none";

},1200);

}else{

status.style.color = "#f87171";

status.innerHTML = "❌ Código MFA incorrecto";

}

});

}

function generarQR(){

    fetch("generar_qr.php")
    .then(response => response.text())
    .then(data => {

        // abrir modal
        document.getElementById("qrModal").style.display = "flex";

        // poner imagen QR
        document.querySelector("#qrModal img").src = data;

    })
    .catch(error => {
        console.log(error);
        alert("Error generando QR");
    });

}

function cerrarQR(){
    document.getElementById("qrModal").style.display = "none";
}

</script>

<!-- SIDEBAR -->

<div class="sidebar">

<div class="logo">
<img src="https://www.grupocibernos.com/hubfs/27-1.png">
<h2>SecureTickets</h2>
</div>

<ul class="menu">

<li><a href="#"><i class="fa-solid fa-house"></i> Dashboard</a></li>

<li><a href="#"><i class="fa-solid fa-ticket"></i> Tickets</a></li>

<li><a href="#"><i class="fa-solid fa-headset"></i> Soporte</a></li>

</ul>

</div>

<!-- MAIN -->

<div class="main">

<!-- TOPBAR -->

<div class="topbar">

<div class="search-box">
<i class="fa-solid fa-magnifying-glass"></i>
<input type="text" placeholder="Buscar tickets...">
</div>

<div class="profile">
<span>Administrador</span>
<img src="https://png.pngtree.com/png-vector/20250823/ourmid/pngtree-cartoon-snoopy-with-sunglasses-on-the-blue-background-clipart-png-image_17280526.png">
</div>

</div>

<!-- HERO -->

<div class="hero">

<h1>Plataforma Inteligente de Soporte Técnico</h1>

<p>
Gestiona tickets, incidencias, soporte y seguridad informática 
desde una sola plataforma moderna y profesional.
</p>

</div>

<!-- CARDS -->

<div class="cards">

<div class="card">
<i class="fa-solid fa-ticket"></i>
<h2 id="totalTickets">0</h2>
<p>Tickets Activos</p>
</div>

<div class="card">
<i class="fa-solid fa-circle-check"></i>
<h2 id="ticketsCerrados">0</h2>
<p>Resueltos</p>
</div>

<div class="card">
<i class="fa-solid fa-spinner"></i>
<h2 id="ticketsProceso">0</h2>
<p>En proceso</p>
</div>

<div class="card">
<i class="fa-solid fa-lock"></i>
<h2 id="ticketsCerradosResumen">0</h2>
<p>Tickets Totales</p>
</div>

</div>

<!-- TABLA -->

<div class="table-container">

<div class="table-header">
<h2>Tickets recientes</h2>
<button class="btn" id="btnNuevoTicket">+ Nuevo Ticket</button>
</div>

<table>

<thead>
<tr>
<th>ID</th>
<th>Usuario</th>
<th>Problema</th>
<th>Prioridad</th>
<th>Estado</th>
</tr>
</thead>

<tbody>

<?php

include("conexion.php");

$sql = "SELECT * FROM tickets ORDER BY id DESC";

$resultado = mysqli_query($conexion, $sql);

while($fila = mysqli_fetch_assoc($resultado)){

?>

<tr>

<td><?php echo $fila['codigo_ticket']; ?></td>

<td><?php echo $fila['usuario']; ?></td>

<td><?php echo $fila['problema']; ?></td>

<td><?php echo $fila['prioridad']; ?></td>

<td>

<select class="status-select">

<option <?php if($fila['estado']=="Abierto") echo "selected"; ?>>
Abierto
</option>

<option <?php if($fila['estado']=="En proceso") echo "selected"; ?>>
En proceso
</option>

<option <?php if($fila['estado']=="Cerrado") echo "selected"; ?>>
Cerrado
</option>

</select>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<!-- FORMULARIO -->

<div class="form-container">

<h2>Crear Nuevo Ticket</h2>

<form>

<div class="form-grid">

<div class="input-box">
<label>Nombre</label>
<input id="nombre" type="text" placeholder="Ingrese su nombre">
</div>

<div class="input-box">
<label>Correo</label>
<input id="correo" type="email" placeholder="correo@ejemplo.com">
</div>

<div class="input-box">
<label>Prioridad</label>
<select id="prioridad">
<option>Alta</option>
<option>Media</option>
<option>Baja</option>
</select>
</div>

<div class="input-box">
<label>Categoría</label>
<select id="categoria">
<option>Seguridad</option>
<option>Software</option>
<option>Hardware</option>
<option>Redes</option>
</select>
</div>

<div class="input-box full">
<label>Descripción del problema</label>

<textarea id="descripcion" placeholder="Describe el problema..."></textarea>

<div class="voice-box">

<button type="button" class="mic-btn" onclick="startRecognition()">
<i class="fa-solid fa-microphone"></i>
</button>

<span id="estadoVoz">Presiona el micrófono para hablar</span>

</div>

</div>

</div>

<br>

<button type="button" class="btn" onclick="crearTicket()">
Enviar Ticket
</button>

</form>

</div>

</div>

<!-- WHATSAPP -->

<a href="https://wa.me/573008871533"
class="whatsapp"
target="_blank">

<i class="fa-brands fa-whatsapp"></i>

</a>

<!-- SCRIPT VOZ -->

<script>

function cambiarEstado(select, guardar = true){

    select.classList.remove("open","progress","closed");

    if(select.value === "Abierto"){
        select.classList.add("open");
        select.style.background = "#22c55e33";
        select.style.color = "#4ade80";
    }

    if(select.value === "En proceso"){
        select.classList.add("progress");
        select.style.background = "#00c2ff33";
        select.style.color = "#38bdf8";
    }

    if(select.value === "Cerrado"){
        select.classList.add("closed");
        select.style.background = "#ef444433";
        select.style.color = "#f87171";
    }


    actualizarDashboard();
}
function startRecognition(){

const recognition = new(window.SpeechRecognition || window.webkitSpeechRecognition)();

recognition.lang = 'es-ES';

recognition.start();

document.getElementById("estadoVoz").innerHTML = "🎤 Escuchando...";

recognition.onresult = function(event){

const texto = event.results[0][0].transcript;

document.getElementById("descripcion").value += texto;

document.getElementById("estadoVoz").innerHTML = "✅ Texto agregado";

};

recognition.onerror = function(){

document.getElementById("estadoVoz").innerHTML = "❌ Error de reconocimiento";

};

}

</script>
<script>

// ===== MENÚ FUNCIONAL =====
const hero = document.querySelector(".hero");
const cards = document.querySelector(".cards");
const tablaCont = document.querySelector(".table-container");
const formCont = document.querySelector(".form-container");
const menuLinks = document.querySelectorAll(".menu a");
const btnNuevoTicket = document.getElementById("btnNuevoTicket");

// ocultar todo
function ocultarTodo(){
    hero.style.display = "none";
    cards.style.display = "none";
    tablaCont.style.display = "none";
    formCont.style.display = "none";
}

// eventos menú
menuLinks.forEach((link, index) => {

    link.addEventListener("click", (e) => {
        e.preventDefault();
        ocultarTodo();

        // DASHBOARD
        if(index === 0){

    hero.style.display = "block";
    cards.style.display = "grid";

    hero.innerHTML = `
        <h1>Plataforma Inteligente de Soporte Técnico</h1>

        <p>
        Gestiona tickets, incidencias, soporte y seguridad informática 
        desde una sola plataforma moderna y profesional.
        </p>
    `;

    actualizarDashboard();
}

        // TICKETS
        if(index === 1){
            tablaCont.style.display = "block";
            hero.style.display = "block";

            hero.innerHTML = `
                <h1>Gestión de Tickets</h1>
                <p>Visualiza, filtra y administra los tickets del sistema.</p>
            `;
        }

        // SOPORTE
        if(index === 2){
            formCont.style.display = "block";
            hero.style.display = "block";

            hero.innerHTML = `
                <h1>Soporte Técnico</h1>
                <p>Registra nuevos incidentes o solicitudes.</p>
            `;
        }


    });

});

btnNuevoTicket.addEventListener("click", () => {

    ocultarTodo();

    formCont.style.display = "block";
    hero.style.display = "block";

    hero.innerHTML = `
        <h1>Soporte Técnico</h1>
        <p>Registra nuevos incidentes o solicitudes.</p>
    `;

});
</script>
<script>

// ===============================
// GUARDAR Y MOSTRAR TICKETS
// ===============================

function actualizarDashboard(){

    // tomar todos los tickets de la tabla
    const filas = document.querySelectorAll("tbody tr");

    let abiertos = 0;
    let proceso = 0;
    let cerrados = 0;

    filas.forEach(fila => {

        const estado = fila.querySelector("select").value;

        if(estado === "Abierto"){
            abiertos++;
        }

        if(estado === "En proceso"){
            proceso++;
        }

        if(estado === "Cerrado"){
            cerrados++;
        }

    });

    const total = filas.length;

    // actualizar cards
    document.getElementById("totalTickets").innerText = abiertos;

    document.getElementById("ticketsCerrados").innerText = cerrados;

    document.getElementById("ticketsProceso").innerText = proceso;

    document.getElementById("ticketsCerradosResumen").innerText = total;
}

function crearTicket() {

    const nombre = document.getElementById("nombre").value;
    const correo = document.getElementById("correo").value;
    const prioridad = document.getElementById("prioridad").value;
    const categoria = document.getElementById("categoria").value;
    const descripcion = document.getElementById("descripcion").value;

    if(
        nombre.trim() === "" ||
        correo.trim() === "" ||
        descripcion.trim() === ""
    ){
        alert("Completa todos los campos");
        return;
    }

    fetch("guardar_ticket.php", {

        method: "POST",

        headers:{
            "Content-Type":"application/x-www-form-urlencoded"
        },

        body:

        "nombre=" + encodeURIComponent(nombre) +
        "&correo=" + encodeURIComponent(correo) +
        "&prioridad=" + encodeURIComponent(prioridad) +
        "&categoria=" + encodeURIComponent(categoria) +
        "&descripcion=" + encodeURIComponent(descripcion)

    })

    .then(response => response.text())

    .then(data => {

        alert(data);

        if(data === "success"){

            alert("✅ Ticket guardado");

            location.reload();

        }

    });

}// Aplicar colores a los tickets iniciales
document.querySelectorAll(".status-select").forEach(select => {
    cambiarEstado(select, false);
});


    actualizarDashboard();

</script>
<!-- MODAL QR -->

<div id="qrModal" style="
display:none;
position:fixed;
top:0;
left:0;
width:100%;
height:100vh;
background:rgba(0,0,0,0.7);
backdrop-filter:blur(8px);
z-index:999999;
justify-content:center;
align-items:center;
">

<div style="
background:#0f172a;
padding:35px;
border-radius:24px;
text-align:center;
width:90%;
max-width:420px;
color:white;
position:relative;
box-shadow:0 10px 40px rgba(0,0,0,0.5);
">

<button onclick="cerrarQR()" style="
position:absolute;
top:15px;
right:15px;
background:#ef4444;
border:none;
width:35px;
height:35px;
border-radius:50%;
color:white;
cursor:pointer;
font-size:16px;
">
✕
</button>

<h2 style="margin-bottom:15px;">
<i class="fa-solid fa-shield-halved"></i>
 Activar MFA
</h2>

<p style="margin-bottom:20px;color:#cbd5e1;">
Escanea este código QR con Google Authenticator
</p>

<img 
src="generar_qr.php"
style="
width:250px;
height:250px;
border-radius:20px;
background:white;
padding:10px;
"
>

<p style="
margin-top:20px;
font-size:14px;
color:#94a3b8;
">
Después de escanear, usa el código generado para iniciar sesión.
</p>

</div>
</div>

</body>
</html>