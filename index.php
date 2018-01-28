<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro de Pessoas</title>

    <!-- css -->
   
    <link rel=stylesheet type=text/css media=all href=style.css />
<link href=css/bootstrap.css rel=stylesheet>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 



  </head>
  
  <body>


    <?php

?>

<div class="container">
<div class="center-block text-center corpo col-md-offset-3 col-md-8 form-group">

        <form action=submit.php id="contact-form"  method="post">
            

                
                <div class="col-lg-12">
                  <h4 style="text-align: left;">Nome: </h4>
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"> </i></span>
                    <input type="text" class="form-control" id="form-nome" name="form-nome" required>
                  </div>
                </div>
           
                
                <div class="col-lg-12">
                  <h4 style="text-align: left;">CPF:</h4>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-tasks"> </i></span>
                    <input type="text" class="form-control"    id="form-cpf" name="form-cpf" placeholder="(000.000.000-00)" required>
                  </div>
                </div>
            
                
                <div class="col-lg-12">
                 <h4 style="text-align: left;">Data de Nascimento:</h4>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"> </i></span>
                    <input type="date" class="form-control" id="form-nascimento" name="form-nascimento" placeholder="Data de Nascimento" >
                  </div>
                </div>
            
                
                <div class="col-lg-12">
                  <h4 style="text-align: left;">Peso(kg):</h4>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-scale"></i></span>
                    <input type="text" class="form-control" id="form-peso" name="form-peso" placeholder="KG" >
                  </div>

              
                          
               
                  </div>
              
                <div class="col-lg-12">  
                <h4 style="text-align: left;">UF:</h4>  
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                          <select class="form-control" name="form-uf">
                           <option value="">UF</option>
          
                           <?php 
                            $arquivo = file_get_contents('http://www.geonames.org/childrenJSON?geonameId=3469034');
                            $json = json_decode($arquivo);
                            foreach($json->geonames as $registro){
                            ?>
                            <option value="<?php echo $registro->toponymName; ?>"><?php 
                            echo $registro->toponymName;
                            } ?>              
                            </option>
                          </select>
                      </div>
                      <br><br>
                </div>


                <div class="col-md-12">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-lg center-block text-center">&nbsp;&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                   
                </div>
  
    


          

<br>  <br>  <br>
            </div><br>
       

       </div>
        </form>
                   
                        
                     
                
      <br><br>
    
      



 
    
  
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  
    
  </body>
 
</html>