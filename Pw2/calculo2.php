
<html>
<Head><Title>CALCULADORA BASKARA</Title></Head>

</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>CALCULADORA</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/owl.css">

</head>
<title>Calculadora de BASKARA</title>
</head>
<body>

<div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                    <!-- <li><a href="#"><i class="fa fa-lock"></i>Logar</a></li>     -->
                    <li><a href="#"><i class="fa fa-envelope"></i>contato@calculo.com.br</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>11-4788-6028</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="https://www.facebook.com/etecsr"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h2>Baskara  <em> Calculando</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="calculo1.php">Home
                  <span class="sr-only">(current)</span>
                </a>
                      
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Para os numeros dados temos o seguintes resultados</h1>
            <span>EQUAÇÃO DO 2º GRAU</span>
          </div>
        </div>
      </div>
    </div>

<!DOCTYPE html>
<html>
<head>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>Trabalho e Oportunidades CO-JOB</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/owl.css">
</head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
        body {
            background-color: darkslategray;
        }
        </style>
<title>Lista</title>
</head>
<body>



</div>
</pre>

<form>
<div class="row">

<div class="form-group col-md-4">.
    <p><img style="float:right" src="https://s3.static.brasilescola.uol.com.br/be/2020/03/shutterstock-355155302.jpg"></p>
    </div>
    
</form>

</form>
</body>
<?php

include("conexao.php");
//recebendo os dados:
$a = $_POST['txta'];
$b = $_POST['txtb'];
$c = $_POST['txtc'];
if($a="" or $b="" or $c="" ){
    echo"<font size=10 color=red > <pre>ERRO</font> ";  
}
else{
//Delta
$delta = ($b*$b)-((4*$a)*$c);

if ($delta<0){
    echo"<font size=10 color=red > <pre>Não há solução para tal equação dentro<br> <pre>dos numeros reais dado Δ= $delta (numero negativo)</font> ";
}
//Equação
else{
$x1 = (-$b + sqrt ($delta)) / (2 * $a);
$x2 = (-$b - sqrt ($delta)) / (2 * $a);



$sqlinsert = "insert into bdelta values ( 0, '$a', '$b', '$c', '$delta', '$x1', '$x2')";


//executando instruções sql
$resultado= @mysqli_query($conexao, $sqlinsert);
if(!$resultado){
    die('Query inválida:' . @mysqli_error($conexao));
}else{
    echo"<font size=14 color=white>Calculo realizado com sucesso <br> ";
}

mysqli_close($conexao);

echo "Para a igual á: $a <br>";
echo "Para b igual á: $b <br>";
echo "Para c igual á: $c <br>";
echo "O Δ é : $delta <br>";
echo "O x1 é: $x1 <br>";
echo "O x2 é: $x2 <br></font>";
}
}
?>
<div class="container">
      <div class="form-group col-md-2">
        <div class="row">
          <div class="col-md-12">
<a href="calculo1.php" class="btn btn-info btn-voltar" role="button">
    <i class="glyphicon glyphicon-trash"></i>Voltar</a>
    </div>
    </div>
    </div>



   
    
</html>
