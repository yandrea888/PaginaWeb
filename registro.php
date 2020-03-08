<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>

<body>
    <div class="formulario">
        <div class= "container">
        <form method="post" action="" onsubmit="return validar();">
            
                
                    <div class="form-group">
                        <label for="exampleFirstName">First Name</label>
                        <input type="firstname" class="form-control-file" id="firstname" aria-describedby="firstnameHelp" placeholder="Enter First Name">                   
                    </div>
                    <div class="form-group">
                        <label for="exampleLastName">Last Name</label>
                        <input type="lastname" class="form-control-file" id="lastname" aria-describedby="lastnameHelp" placeholder="Enter Last Name">                   
                    </div>
                    <div class="form-group text-left">
                    <label for="exampleGender">Gender</label>
                    </div>                  
                    <div class="form-check">                    
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">                    
                    <label class="form-check-label" for="exampleCheck1">Male</label>
                    <br>
                    <input type="checkbox" class="form-check-input" id="exampleCheck2">                    
                    <label class="form-check-label" for="exampleCheck2">Female</label>                    
                    </div>
                    <br>
                    <form name="formulario" method="post" action="http://pagina.com/send.php">
                    <!-- Campo de entrada de fecha -->
                    Date:
                    <input type="date" name="fecha" min=""
                                  max="" step="2">
                    <br>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleCel">Phone Cel</label>
                        <input type="cel" class="form-control-file" id="cel" aria-describedby="celHelp" placeholder="Enter Number Cel">                   
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleSubject">Subject</label>
                        
                    <form action="datos.php" method="post">	<select name="options">	 <option value="choose option">Choose Option</option>   <option value=""></option>  	<option value="A">A</option>		<option value="B">B</option>		<option value="C">C</option>		<option value="D">D</option>	</select>	</form>
                    
                    <br>
                    <br>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                
            
        </form>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
    <script src="validate.js"></script>
    < </body> </html>