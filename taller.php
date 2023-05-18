<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estuduantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="taller.css">
</head>
<body>
    <!-- Punto #1 -->
    <div class="caja"> 
        <h2>notas Estudiantes <strong>#1</strong></h2>
        <form action="taller.php" method="POST">
            <label for="inputPassword5" class="form-label">nota 1 </label>
            <input type="number" id="inputPassword5" class="form-control" name="nota1" aria-labelledby="passwordHelpBlock" step="0.00001">
            <label for="inputPassword5" class="form-label">nota 2</label>
            <input type="number" id="inputPassword5" class="form-control" name="nota2" aria-labelledby="passwordHelpBlock" step="0.00001">
            <label for="inputPassword5" class="form-label">nota 3</label>
            <input type="number" id="inputPassword5" class="form-control" name="nota3" aria-labelledby="passwordHelpBlock" step="0.00001">
            <button type="submit" class="btn btn-warning m-2">calcular</button>
        </form>
        <?php
            if($_POST){
                $nota1= $_POST["nota1"];
                $nota2= $_POST["nota2"];
                $nota3= $_POST["nota3"];
                $notaTotal = ($nota1+$nota2+$nota3)/3;
                if($notaTotal>=3.9){
                    echo "Becado";
                }else{
                    echo '<h1 style="color:red;margin:2rem">Estudie</h1>';
                };
            }
        ?>
    </div>
    <!-- Punto #2 -->
    <div class="caja">
        <h2>Par Inpar <strong>#2</strong></h2>
        <form action="taller.php" method="POST">
            <label >Digite un namber</label>
            <input type="number" class="form-control" name="numero" aria-labelledby="passwordHelpBlock" step="0.00001">
            <button type="submit" class="btn btn-warning m-2">enviar</button>
        </form>
        <?php
            $numero = $_POST["numero"];
            $calculo = $numero%2;
            if($_POST){
                if( $calculo==0){
                    echo '<h1 style="color:green;margin:2rem">es par</h1>';
                }else{
                    echo '<h1 style="color:red;margin:2rem">es impar </h1>';
                };

                if($numero>=10){
                    echo '<h1 style="color:green;margin:2rem">es mayor a 10 </h1>';
                }else{
                    echo '<h1 style="color:red;margin:2rem">es menor a 10 </h1>';
                }
            }
        ?> 
    </div>
    <!-- Punto #3 -->
    <div class="caja">
        <h2>voltaje <strong>#3</strong></h2>
        <form action="taller.php" method="POST">
            <label>Digite la resistencia</label>
            <input type="number" class="form-control" placeholder="Digite la resistencia" step="0.00001" name="resistencia">
            <label>Digite la intencidad de la Corriente</label>
            <input type="number" placeholder="digite La Intencidad de ka corriente" class="form-control" step="0.00001" name="intencidad">
            <button type="submit" class="btn btn-warning m-2">calcular</button>
        </form>
        <?php
        $resistencia = $_POST["resistencia"];
        $intencidad = $_POST["intencidad"];
        if($_POST){
            $voltaje = $resistencia * $intencidad;
            echo "El voltaje es de $voltaje V";
        };
        ?>
    </div>
    <!-- Punto #4 -->
    <div class="caja">
        <form action="taller.php" method="POST" class="taller4">
            <h2>Nombre y edad <strong>#4</strong></h2>
            <label>Persona #1</label>
            <input type="text" placeholder="Digite el nombre de la persona" class="form-control" name="persona1">
            <input type="number" placeholder="digite la edad de la persona" class="form-control" name="ePersona1" step="0.0001">
            <label>Persona #2</label>
            <input type="text" placeholder="Digite el nombre de la persona" class="form-control" name="persona2">
            <input type="number" placeholder="digite la edad de la persona" class="form-control" name="ePersona2" step="0.0001">
            <label>Persona #3</label>
            <input type="text" placeholder="Digite el nombre de la persona" class="form-control" name="persona3">
            <input type="number" placeholder="digite la edad de la persona" class="form-control" name="ePersona3" step="0.0001">
            <button type="submit" class="btn btn-warning m-2">calcular</button>
        </form>
        <?php
        $persona1 = $_POST["persona1"];
        $persona2 = $_POST["persona2"];
        $persona3 = $_POST["persona3"];
        $ePersona1 = $_POST["ePersona1"];
        $ePersona2 = $_POST["ePersona2"];
        $ePersona3 = $_POST["ePersona3"];
        $array = [
            $persona1 => $ePersona1,
            $persona2 => $ePersona2,
            $persona3 => $ePersona3
        ];
        if($_POST){
            $posicion = max($array);
            if($posicion === $ePersona1){
                echo "la persona $persona1 tiene mayor edad: $ePersona1";
            }elseif($posicion === $ePersona2){
                echo "la persona $persona2 tiene mayor edad: $ePersona2";
            }else{
                echo "la persona $persona3 tiene mayor edad: $ePersona3";
            };
        };
        ?>
    </div>
    <!-- punto #5 -->
    <div class="caja">
        <form action="taller.php" method="POST" >
            <h2>Numero mayor al segundo <strong>#5</strong></h2>
            <label>Ingrese Un Nuemero</label>
            <input type="number" placeholder="digite un numero" class="form-control" name="numero1" step="0.0001">
            <label>Ingrese Otro Numero</label>
            <input type="number" placeholder="digite otro mumero" class="form-control" name="numero2" step="0.0001">
            <button type="submit" class="btn btn-warning m-2">Calcular</button>
        </form>
        <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
            if($_POST){
                if($numero1 > $numero2){
                    $total1 = $numero1 + $numero2; 
                    echo "el Primero es Mayor, y su suma es: $total1 "; 
                }else{
                    $total2 = $numero1 - $numero2;
                    echo "EL sugundo en Mayor, y su resta es: $total2";
                };
            };
        ?>
    </div>
    <!-- Punto #6 -->
    <div class="caja6">
        <form action="taller.php" method="post">
            <label for="contador">Ingrese la cantidad de estudiantes: </label>
            <input type="number" name="contador">
            <input type="submit" value="Enviar" class="btn btn-warning m-2">
        </form>
        <form action="" method="post">
            <?php
                $contador = $_POST["contador"];
                $nombres = [];
                $sexos = [];
                $notas = [];
                $numeroMujeres = 0;
                $numeroHombres = 0;
                for ($i=1; $i <= $contador; $i++) {
                    echo "
                    <label>Digitar Nombre {$i}</label>
                    <input type='text' name='nombre$i' >
                    <label>Digitar Sexo {$i}</label>
                    <select name='genero$i'>
                        <option value=''>Seleccione</option>
                        <option value='hombre'>hombre</option>
                        <option value='mujer'>mujer</option>
                    </select>
                    <label>Digitar Nota {$i}</label>
                    <input type='number' name='nota$i' step='0.1'><br><br>";
                }
                echo "<input type='hidden' name='contador' value='$contador'>";
                echo "<input type='submit' value='subir datos' name='envio'class='btn btn-warning m-2' ><br>";
                for ($i=1; $i <= $contador; $i++) {
                    $nombre = $_POST["nombre$i"];
                    $sexo = $_POST["genero$i"];
                    $nota = $_POST["nota$i"];
                    $nombres[] = $nombre;
                    $sexos[] = $sexo;
                    $notas[] = $nota;
                
                    if($sexo){
                        if($sexo == 'hombre'){
                            $numeroHombres++;
                        }else{
                            $numeroMujeres++;
                        }
                    }
                } 

                $notaMayor = max($notas);
                $notaMenor = min($notas);
                $posicionMayor = array_search($notaMayor, $notas);
                $posicionMenor = array_search($notaMenor, $notas);
                $estudianteMax = array_values($nombres)[$posicionMayor];
                $estudianteMin = array_values($nombres)[$posicionMenor];    
            
                echo "<br>El estudiante con mayor nota es: $estudianteMax con una nota de $notaMayor";
                echo "<br>El estudiante con menor nota es: $estudianteMin con una nota de $notaMenor";
                echo "<br>Hay un total de $numeroHombres hombres y $numeroMujeres mujeres"
                ?>
    </div>
    <!-- Punto #7 -->
    <div class="caja">
        <form action="taller.php" method="POST" >
            <h2>Nombre y Precio de un Producto <strong>#7</strong></h2>
            <label>Nombre del Producto</label>
            <input type="text" placeholder="Digite el Producto" class="form-control" name="producto">
            <label>Precio del Producto</label>
            <input type="number" placeholder="Digite el Precio" class="form-control" name="precio" step="0.1">
            <label>Cantidad de Productos</label>
            <input type="number" placeholder="Digite la Cantidad de Productos" class="form-control" name="cantidad">
            <button type="submit" class="btn btn-warning m-2">Facturar</button>
        </form>
        <?php
            if($_POST){
                $producto = $_POST["producto"];
                $precio = $_POST["precio"];
                $cantidad = $_POST["cantidad"];
                $factura = $precio*$cantidad;
                echo "FACTURA <br> Producto: $producto... <br> Precio: $precio... <br> Cantidad: $cantidad... <br> TOTAL: $factura";
            };
        ?>
    </div>
    <!-- Punto #8 -->
    <div class="caja">
        <form action="taller.php" method="POST" >
            <h2>Perimetro y Area <strong>#8</strong></h2>
            <label>Ingrese el lado de un cuadrado</label>
            <input type="number" placeholder="Digite la medida" class="form-control" name="lado" step="0.1">
            <label>Ingrese la base de un rectangulo</label>
            <input type="number" placeholder="Digite la base" class="form-control" name="base" step="0.1">
            <label>Ingrese la altura del rectangulo</label>
            <input type="number" placeholder="Digite la altura" class="form-control" name="altura" step="0.1">
            <button type="submit" class="btn btn-warning m-2">calcular</button>
        </form>
        <?php
            if($_POST){
                /* Perimetro */
                $lado = $_POST["lado"];
                $perimetro = $lado*4;
                echo "El perimetro del cuadrado es: $perimetro <br>";
                /* Area */
                $base = $_POST["base"];
                $altura = $_POST["altura"];
                $area = $base*$altura;
                echo "El Area del Rectangulo es $area";
            };
        ?>
    </div>
    <!-- Punto #9 -->
    <div class="caja">
        <form action="taller.php" method="POST" >
            <h2>Atletas <strong>#9</strong></h2>
            <label>Digitar los datos de la atleta 1</label>
            <label>nombre</label>
            <input type="text" name="nameA1" placeholder="Digite el nombre" class="form-control">
            <label>salto</label>
            <input type="text" name="marca1" placeholder="Digite la marca" class="form-control">
            <label>Digitar los datos de la atleta 2</label>
            <label>nombre</label>
            <input type="text" name="nameA2" placeholder="Digite el nombre" class="form-control">
            <label>salto</label>
            <input type="text" name="marca2" placeholder="Digite la marca" class="form-control">
            <label>Digitar los datos de la atleta 3</label>
            <label>nombre</label>
            <input type="text" name="nameA3" placeholder="Digite el nombre" class="form-control">
            <label>salto</label>
            <input type="text" name="marca3" placeholder="Digite la marca" class="form-control">
            <input type="submit" class="btn btn-warning m-2" value="Premiar">
        </form>
        <?php
            $record = 15.50;
            $maximoSalto = 0;
            $minimoSalto = 999;
            $nombreMayor = "";
            $marca1 = $_POST["marca1"];
            $marca2 = $_POST["marca2"];
            $marca3 = $_POST["marca3"];
            $nombre1 = $_POST["nameA1"];
            $nombre2 = $_POST["nameA2"];
            $nombre3 = $_POST["nameA3"];

            if ( $marca1 > $maximoSalto) {
                $maximoSalto = $marca1;
                $nombreMayor = $nombre1;
            if( $marca2 > $maximoSalto){
                $maximoSalto = $marca2;
                $nombreMayor = $nombre2;
            }
            if( $marca3 > $maximoSalto){
                $maximoSalto = $marca3;
                $nombreMayor = $nombre3;
            }
            if ( $marca1 == $marca2 && $marca1 > $marca3) {
                $nombreMayor = $nombre2." y ".$nombre1;
            }
            if ( $marca1 == $marca3 && $marca1 > $marca2) {
                $nombreMayor = $nombre1." y ".$nombre3;
            }
            if ( $marca2 == $marca3 && $marca2 > $marca1) {
                $nombreMayor = $nombre2." y ".$nombre3;
            } 
            }
            if ($maximoSalto > $record){
                echo "se rompio el record y fue impuesto por la o los atletas {$nombreMayor} llevandose el bono de 500 millones <br>";
            }
            echo "la atleta ganadora del oro fue {$nombreMayor} con un salto de {$maximoSalto} metros";
        ?> 
    </div>
    <!-- Punto #10 -->
    <div class="caja">
        <form action="taller.php" method="POST" >
            <h2>Operaciones con valores <strong>#10</strong></h2>
            <label>Primer Numero</label>
            <input type="number" name="nam1" placeholder="Digite un numero" class="form-control">
            <label for="">Segundo Numero</label>
            <input type="number" name="nam2" placeholder="Digite un numero" class="form-control">
            <label for="">Tercer Numero</label>
            <input type="number" name="nam3" placeholder="Digite un numero" class="form-control">
            <input type="submit" class="btn btn-warning m-2" value="calcular">
        </form>
        <?php
            if($_POST){
                $numero_1 = $_POST["nam1"];
                $numero_2 = $_POST["nam2"];
                $numero_3 = $_POST["nam3"];
                $suma = $numero_1 + $numero_2 + $numero_3;
                $promedio = ($numero_1 + $numero_2 + $numero_3)/3;
                $Total_valores = 3;
                $mayorNumero = 0; 
                $menorNumero = 999; 
                if ($numero_1 > $mayorNumero) {
                    $mayorNumero = $numero_1;
                };
                if ($numero_2 > $mayorNumero) {
                    $mayorNumero = $numero_2;
                };
                if ($numero_3 > $mayorNumero) {
                    $mayorNumero = $numero_3;
                };
                if ($numero_1 < $menorNumero) {
                    $menorNumero = $numero_1;
                };
                if ($numero_2 < $menorNumero) {
                    $menorNumero = $numero_2;
                };
                if ($numero_3 < $menorNumero) {
                    $menorNumero = $numero_3;
                };
                echo "la suma de los valores es de {$suma} su promedio es de {$promedio}<br>
                el total de los valores registrados fue de {$Total_valores}<br>
                el numero mayor fue {$mayorNumero} y el menor fue {$menorNumero}";
            };
        ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html> 