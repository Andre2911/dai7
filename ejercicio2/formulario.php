<!DOCTYPE html>
<head>
    <title>Formulario</title>
</head>
<body>
    <form action="resultado.php" target='_blank' method="post"> 
        <h1>Formulario</h1>
        <div class="form-group">
            <select class="form-control" name="empresa" >
                <option value="">Seleccione la empresa</option>
                <option value="IVOVIC">IVOVIC</option>
                <option value="Leonidas">Leonidas</option>
            </select>
        </div>       
        <div class="form-group">
            <input type="text" class="form-control" name="destinatario" placeholder="Ingrese Destinatario">
        </div>
        <div class="form-group">
            <select class="form-control" name="destino" >
                <option value="">Seleccionar destino</option>
                <option value="Arequipa">Arequipa</option>
                <option value="Ilo">Lima</option>
                <option value="Tacna">Tumbes</option>
                <option value="Piura">Piura</option>
                <option value="Tumbes">Ilo</option>
                <option value="Cajamarca">Loreto</option>
                <option value="Lambayeque">Lambayeque</option>
                <option value="Lima">Tacna</option>
                <option value="Loreto">Cajamarca</option>
                <option value="Loreto">Otro Destino</option>
            </select>
        </div>  
        <div class="form-group">
            <input type="number" class="form-control" name="toneladas" placeholder="Ingrese TM">
        </div>
        
        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>

    </form>

</html>