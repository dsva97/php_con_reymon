<?php require_once "./calcular.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="GET">
    <fieldset>
      <legend>Entrada</legend>

      <label for="repetidas">Escribe tu entrada</label>
      <br>
      <textarea name="entrada" id="entrada" cols="30" rows="10"><?= $entrada ?></textarea>
    </fieldset>
    
    <fieldset>
      <legend>Repetidas</legend>
      
      <label for="repetidas">Eliminar Repetidas</label>
      <input type="checkbox" name="repetidas" id="repetidas" <?= $repetidas === "on" ? "checked": ""; ?>>
    </fieldset>
    
    <fieldset>
      <legend>Ordenar</legend>

      <label>Ascendente</label>
      <input type="radio" name="orden" value="ascendente" <?= $orden === "ascendente" ? "checked" : ""; ?>>

      <label>Descendente</label>
      <input type="radio" name="orden" value="descendente" <?= $orden === "descendente" ? "checked" : ""; ?>>
    </fieldset>

    <button>Filtrar</button>
  </form>

  <div>
    <strong>Resultado</strong>
    <p> <?= $resultado; ?> </p>
  </div>
</body>
</html>