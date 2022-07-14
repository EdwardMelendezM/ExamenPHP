
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA DOCENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
</head>
<body>
<div class="container mt-5">

    <div class="row">

        <div class = "cold-md-3">
            <h1>EXAMEN</h1> <br>
            <h2> Detectar a los alumnos que ya no
deben integrar el sistema de tutoría. </h2><br><br>
            <form action="Tutorados.php" method ="POST" enctype="multipart/form-data">
                <h3>INGRESAR CSV UNIVERSAL</h3>
                <input type="file" class="form-control mb-3" name="csvUni" ><br><br><br>
                <h3>INGRESAR CSV TUTORADOS</h3>
                <input type="file" class="form-control mb-3" name="csvTuto" ><br>
                <input type="submit" name ="submit"  class="btn btn-primary" href="Tutorados.php">
            </form>
            
        </div> 
    </div>
</div>  
</body>
</html>