<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="calcular.php" method="post">
      <label for="">Valor 1:</label>
      <input type="text" name="valor1" value=""><br>
      <label for="">Valor 2:</label>
      <input type="text" name="valor2" value=""><br>


      <label for="">Operação</label>
      <input type="radio" name="operacao" value="+">+
      <input type="radio" name="operacao" value="-">-
      <input type="radio" name="operacao" value="*">*
      <input type="radio" name="operacao" value="/">/
      <input type="submit" name="" value="CALCULAR">
    </form>
  </body>
</html>
