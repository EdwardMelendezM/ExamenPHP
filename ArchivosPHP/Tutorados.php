<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA DOCENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
</head>

<?php if(empty($_FILES['csvUni']['name'])) {
          $nuevaURL="Main.php";
          header("Location: ".$nuevaURL);
  }?>
<body>
<h1>Detectar a los alumnos que ya no
deben integrar el sistema de tutoría.</h1>
<div class="container mt-5">

            <table class="table" >
                <thead class="table-success table-striped" >
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                    </tr>
                </thead>

                <tbody>
                    <br><br><br><br>
                    
                     <?php echo "<br><br>";
                        $valor=false;
                        $Validar1=$_FILES["csvUni"];
                        $Validar2=$_FILES["csvTuto"];
                        if(!empty($Validar1) & !empty($Validar2))
                        {
                            
                            include("Operaciones.php");
                            foreach ($ListaFinal as $key => $value) {

                      ?>
                    <tr>
                        <th><?php  echo $key;   ?></th>
                        <th><?php  echo $value;  ?></th>
                    </tr>
                    <?php }}
                    else
                    {
                        echo "href='Examn.php'";

                    } ?>
                </tbody>
            </table>
        

</div>  
</body>
</html>