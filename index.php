<?php
$nombre= "Jair Fernando";
$apellidopat = "Plancarte";
$apellidomat = "Sanches";
$promedio = "9.4";
$matricula = "32928399H";
$folio = "500a-dd2f-d9gg-s52n-ns99-vamm-1bcv";
$fecha = "26/12/23    16:21:11";
$promlet = "NUEVE PUNTO CUATRO";
$notas = "|  Los documentos estarán disponibles de 24 a 48 horas posteriores a su emisión  |";
?>





<style type="text/css" >
    .sub-navbar{
        margin-top: 40px !important;
    }

    .alert{
        border-radius: 5px;
        border: none;
        font-size: 1em;
        padding: 5px;
        margin-top: 40px;
    }
</style>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
  <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,700" rel="stylesheet">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src=" https://framework-gb.cdn.gob.mx/gobmx.js"></script> <!--NUEVO-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--> <!--VIEJO-->
  <script src="js/validator.js"></script>
  <link href="css/images/favicon.ico" rel="shortcut icon">
</head>
<body>
<div class="container">
     <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
    <!--<nav class="navbar navbar-inverse navbar-fixed-top">-->
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">SICE</a>
            </div>

            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-search"> </span>  Buscar</a></li>              </ul>
            </div>
        </div>
    </nav>
    <!--<img src="css/images/logoColbachHome.png" class="img-responsive left-block" width="50%"/> -->
      <br><br><br><br><br><br><br>
  <div class="logos-sice">
    <div class="logos-siceint">
      <div class="logo1"><img src="https://sice.cbachilleres.edu.mx/css/images/logo-bachilleres.png"  alt="Colegio de Bachilleres" title="Colegio de Bachilleres"> </div>
      <div class="logo2"><img src="https://sice.cbachilleres.edu.mx/css/images/logoSICE2.png" alt="SICE - Sistema de Certificación Electrónica para EXACER" title="SICE - Sistema de Certificación Electrónica para EXACER"></div>
        </div>	
      </div>    <br>
        <br><main class="page">
  <h1>Certificados</h1>
  <hr class="red">
  <div class="vertical-buffer">
    <div class="alert alert-success">
      <strong><span class = "etiqueta">Alumno:</span></strong> <?php echo $nombre?> <?php echo $apellidopat ?> <?php echo $apellidomat?>
      <br>
      <strong><span class = "etiqueta">Matrícula:</span></strong> <?php echo $matricula ?> 
 <br>
    </div>
  </div>
  <div class="vertical-buffer">
    <div class="alert alert-warning">
      <strong><span class = "etiqueta">Institución educativa emisora:</span></strong> Colegio de Bachilleres<br>
      <strong><span class = "etiqueta">Plantel o servicio educativo:</span></strong> Colegio de Bachilleres, Plantel 26 Villa Coapa, EXACER<br>
      <strong><span class = "etiqueta">Clave de centro de trabajo:</span></strong> 09DCB1021C
    </div>
  </div>

  <div class="vertical-buffer">
    <div class="alert alert-danger">
      <strong><span class = "etiqueta">Plan de estudios:</span></strong> Bachillerato con formación básica para el trabajo en Administración de recursos humanos<br>
      <strong><span class = "etiqueta">Promedio:</span></strong> <?php echo $promedio ?> 
 <br>
      <strong><span class = "etiqueta">Créditos obtenidos:</span></strong> 360 de un total de 360.
    </div>	
  </div>
  <div class="vertical-buffer">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <table class="table tb table-bordered table-striped">
          <tr class="info">
            <th class="text-center">Folio Certificado</th>
            <th class="text-center">Verificar en SIGED <br>(SEP)</th>
            <th class="text-center">Estatus certificado</th>
          </tr>
          <tr><tr>
            <td class="text-center"> <?php echo $folio?> 
</td>
            <!--<td class="text-center"><a href="https://www.siged.sep.gob.mx/certificados/iems/ed33f53b-21b2-49f8-a44d-66478c2da947"style="color:blue" target="_blank">Consulta</a></td>-->
            <td class="text-center"><a href="siged.php"style="color:blue" target="_blank">Consulta</a></td>
            <td class="text-center">Vigente</td>
        </tr></tr>
        </table>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12" align="center">
      Para descargar el PDF dirigirse a:  <a href="php.php">https://sirec.cbachilleres.edu.mx/index/accesar
      </a>
    </div>	
  </div>
  </main>
<style>
  .etiqueta{
    font-size: 1.2em;
  }
</style><br><br>
<hr style="color:blue">
<div class="text-center">
  <small> Prolongación Rancho Vista Hermosa 105 Col. Los Girasoles, C.P. 04920 México, D.F. Tel:5624.4100</small>
</div>
<br><br>
  </div>
  </body>
</html>
