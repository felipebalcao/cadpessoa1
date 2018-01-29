
<script type="text/javascript">
<!--
//window.location.assign("http://localhost/smsm/");

// -->
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72059630-1', 'auto');
  ga('send', 'pageview');

</script>
<!DOCTYPE html>

<html lang=pt-br>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<title>Cad Pessoa</title>
<link rel=stylesheet type=text/css media=all href=style.css />
<link href=css/bootstrap.css rel=stylesheet>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel=stylesheet type=text/css>
<script language="javascript" src="ajax.js"></script>
<script language="javascript" src="instrucao.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

</head>
<body>

<?php
        /* Inclui a classe do phpmailer */       
//require("phpmail/PHPMailerAutoload.php");

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$servidor="localhost";
$banco="u125668700_cadpe";
$usuario="u125668700_usu";
$senha="felipe1792";

$nome = $_POST['form-nome'];
$cpf = $_POST['form-cpf'];
$nascimento = $_POST['form-nascimento'];
$peso = $_POST['form-peso'];
$uf = $_POST['form-uf'];


//$msg2 = $_POST['opiniao'];


$link = mysqli_connect($servidor, $usuario, $senha, $banco);
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
 
 $cpfsemponto = str_replace(".", "", $cpf);
 $cpfsemtraco = str_replace("-", "", $cpfsemponto);




 buscacpf($nome,$cpfsemtraco,$nascimento,$peso,$uf);

?>


<?php

                        $contador=$contador+1;

                    
          
?>

<?php

function buscacpf($nome,$cpf,$datanasc,$peso,$uf){

  $servidor="localhost";
$banco="u125668700_cadpe";
$usuario="u125668700_usu";
$senha="felipe1792";

$link = mysqli_connect($servidor, $usuario, $senha, $banco);

$sql = "SELECT * from Pessoa WHERE cpf =".$cpf;

$result = 0;

$result = $link->query($sql);




if ($result->num_rows >0 ) {


echo "<h1>CPF Já Cadastrado</h1></br></br></br>";

     while($row = $result->fetch_assoc()) {
        


        echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. "<br> CPF: " . $row["cpf"]."<br> Data de Nascimento:" .$row["data_nascimento"]. 
        "<br>Peso:". $row["peso"] ."<br><br>";

      
    }

}else{
salvar($nome,$cpf,$datanasc,$peso,$uf);

}


   







}


function salvar($nome,$cpf,$datanasc,$peso,$uf){


$servidor="localhost";
$banco="u125668700_cadpe";
$usuario="u125668700_usu";
$senha="felipe1792";

$link = mysqli_connect($servidor, $usuario, $senha, $banco);

  
$sql = "INSERT INTO Pessoa (nome, cpf, data_nascimento, peso, uf) VALUES 
('".$nome."','".$cpf."','".$datanasc."','".$peso."','".$uf."')";

if ($link->query($sql) === TRUE) {
    echo "<h3>Cadastrado com Sucesso!</h4>";
    echo "<h5>Nome:".$nome."</h5>";
 echo "<h5>CPF:".$cpf."</h5>";
 echo "<h5>Data de Nascimento:".$datanasc."</h5>";
 echo "<h5>Peso:".$peso."</h5>";
 echo "<h5>UF:".$uf."</h5><br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




}

    
    mysqli_close($link);  

?>

<div class="col-md-12">
                <div class="col-md-6">
                  <a href="http://felipao1792.esy.es/cadpessoas/">
                    <button type="submit" class="btn btn-success btn-lg center-block text-center">&nbsp;&nbsp;&nbsp;&nbsp;VOLTAR&nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-send"></span></button></a>
                </div>

                 <div class="col-md-6">
                      <a href="http://felipao1792.esy.es/cadpessoas/list.php">
                     <button  class="btn-default btn-lg center-block text-center">&nbsp;&nbsp;&nbsp;&nbsp;Listar&nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-th-list"></span></button></a>
                     </div>

         </div> 

  <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js></script>
<script src=js/bootstrap.min.js></script>
</body>
</div>
</html>







