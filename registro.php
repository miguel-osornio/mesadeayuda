<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">

*
{
	
}

input:focus
{
	border-color: #85CCEA;
	box-shadow: 0 0 2px #5cd053;
	padding: 0.4em 1em 0.4em 0.5em;
	
}

.verdesin:focus
{
	border-color: #85CCEA;
	box-shadow: 0 0 2px #5cd053;
	padding: 0.4em 1em 0.4em 0.5em;
}

#caja
{
margin: 0 auto;
margin-top: 2em;
width: 37.7em;
height: auto;
padding: 2em;
box-sizing: border-box;
background: #EDF1FC;
border-radius: 10px;
}

#botonc
{
	margin: 0 auto;
	text-align: center;
}

body
{
background: #85CCEA;
font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
font-size: 16px;
}

h1
{
	color: black;
	text-align: center;
}

h2
{
	color: black;
	text-align: center;
}

h4
{
	color: white;
	text-align: center;
}

.inputform
{
	border-color: #BEC4D3;
	width: 15em;
padding: 4px 8px;
border-style: solid;
border-width: 2px;
margin-right: 2em;
transition: padding .25s;

}

.inputform2
{
	border-color: #BEC4D3;
	width: 33.4em;
padding: 4px 8px;
border-style: solid;
border-width: 2px;
margin-right: 2em;
transition: padding .25s;

}

.inputform3
{
	border-color: #BEC4D3;
	width: 8em;
padding: 4px 8px;
border-style: solid;
border-width: 2px;
margin-left: 0.5em;
transition: padding .25s;

}

.izqder
{
	float: left;
}

.centrar
{
	text-align: center;
	margin: 0 auto;
}

#base
{
	color: white;
	font-size: 0.8em;
	float: right;
	font-weight: bold;	
}

.break
{
clear: both;
}

.letracolor
{
	color: #BEC5D3;
}

#boton
{
	border: none;
	background: #F26F4B;
	padding: 1em;
	border-radius: 50px;
	font-weight: bold;
	transition: padding .5s;
	text-decoration: none;
	color: black;
}

#boton:active
{
	border-color: #85CCEA;
	box-shadow: 0 0 5px black;
	padding: 1.1em;
}

.bold
{
	font-weight: bold;
}

</style>

</head>

<body>

<div id="caja">

<h2>Registro de nuevo usuario</h2>

<div class="caja_centro">

<form method="POST" action="registrop2.php">

<div class="izqder">
Nombre(s)<br />
<input type="text" name="nombre" class="inputform">
</div>
<div class="izqder">
Apellidos<br />
<input type="text" name="apellidos" class="inputform">
</div>

<div class="break"></div>
<br />
Nombre de usuario<br />
<input type="text" name="id_usuario" class="inputform2">

<br />
<br />
Password<br />
<input type="text" name="password" class="inputform2">

<br />
<br />
E-mail<br />
<input type="text" name="correo" class="inputform2">

<br />
<br />
Confirmar E-mail<br />
<input type="text" name="correo2" class="inputform2">


<br />
<br />
Estado<br/>
<select name="estado" id="state" class="inputform verdesin">
	<option value="Aguascalientes">Aguascalientes</option>
	<option value="Baja California">Baja California</option>
	<option value="Baja California Sur">Baja California Sur</option>
	<option value="Campeche">Campeche</option>
	<option value="Chiapas">Chiapas</option>
	<option value="Chihuahua">Chihuahua</option>
	<option value="Coahuila">Coahuila</option>
	<option value="Colima">Colima</option>
	<option value="Distrito Federal">Distrito Federal</option>
	<option value="Durango">Durango</option>
	<option value="Estado de México">Estado de Mexico</option>
	<option value="Guanajuato">Guanajuato</option>
	<option value="Guerrero">Guerrero</option>
	<option value="Hidalgo">Hidalgo</option>
	<option value="Jalisco">Jalisco</option>
	<option value="Michoacán">Michoacan</option>
	<option value="Morelos">Morelos</option>
	<option value="Nayarit">Nayarit</option>
	<option value="Nuevo León">Nuevo Leon</option>
	<option value="Oaxaca">Oaxaca</option>
	<option value="Puebla">Puebla</option>
	<option value="Querétaro">Queretaro</option>
	<option value="Quintana Roo">Quintana Roo</option>
	<option value="San Luis Potosí">San Luis Potosi</option>
	<option value="Sinaloa">Sinaloa</option>
	<option value="Sonora">Sonora</option>
	<option value="Tabasco">Tabasco</option>
	<option value="Tamaulipas">Tamaulipas</option>
	<option value="Tlaxcala">Tlaxcala</option>
	<option value="Veracruz">Veracruz</option>
	<option value="Yucatán">Yucatan</option>
	<option value="Zacatecas">Zacatecas</option>
</select>



<br />
<br />
Fecha de nacimiento
<br />
<br />

<div class="izqder">
<input type="number" name="dia" min="1" max="31" placeholder="Dia" class="inputform3">
</div>
<div class="izqder">
<select name="mes" class="inputform3 verdesin">
	<option value="Mes" selected="selected" class="letracolor">Mes</option>
	<option value="Enero">Enero</option>
	<option value="Febrero">Febrero</option>
	<option value="Marzo">Marzo</option>
	<option value="Abril">Abril</option>
	<option value="Mayo">Mayo</option>
	<option value="Junio">Junio</option>
	<option value="Julio">Julio</option>
	<option value="Agosto">Agosto</option>
	<option value="Septiembre">Septiembre</option>
	<option value="Octubre">Octubre</option>
	<option value="Noviembre">Noviembre</option>
	<option value="Diciembre">Diciembre</option>

</select>
</div>
<div class="izqder">
<input type="number" name="anio" min="1930" max="1998" placeholder="A&ntilde;o" class="inputform3">
</div>

<div class="break"></div>
<br/>
Sexo<br />

<select name="sexo" class="inputform verdesin">
	<option value="Mes" selected="selected" class="letracolor">Seleccionar..</option>
	<option value="Hombre">Hombre</option>
	<option value="Mujer">Mujer</option>
	<option value="Sin especificar">Sin especificar</option>


</select>

<br />
<br />

Telefono<br />
<input type="text" name="telefono" class="inputform">
<br />
<br />
Tipo de Usuario<br />
<br />
Cliente<input type="radio" name="tipo" value="Usuario">
Trabajador<input type="radio" name="tipo" value="Trabajador">

<br />
<br />

Area y especialidad <span class="bold">(sólo si es trabajador)</span>
<br /><br />

<input type="text" name="area" placeholder="Área" class="inputform" >
<br /><br />
<input type="text" name="especialidad" placeholder="Especialidad" class="inputform">
</div>
</div>

<br />
<div id="botonc">
<a href="index.html" id="boton">Cancelar</a>
<input type="submit" value="Registrar" id="boton">
</form>
</div>
<br />
<br />


</body>	

</html>
