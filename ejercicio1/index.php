<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="resultado.php" target='_blank' method="post"> 
        <h1>Registro de Pago de Haberes</h1>       
        <div class="form-group">
            <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombres">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="categoria" placeholder="Ingrese categoría">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="basico" placeholder="Ingrese sueldo básico">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="bonificacion" placeholder="Ingrese bonificación">
        </div>
        <div class="form-group">
            <select class="form-control" name="tipo" >
                <option value="AFP">AFP</option>
                <option value="ONP">ONP</option>
            </select>
        </div>
        
        <button type="submit" name="enviar" class="btn btn-primary" style="margin:20px 80px 0 80px;">Enviar</button>

    </form>



</body>
</html>