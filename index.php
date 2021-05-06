<?php
require_once "./inc/controller.php";
$task = $_GET['task'] ?? 'report';
echo "Super Global GET Variiable Value = ".$task ."\n";
if($task=='seed'):seed(); echo "seed Compleated!";
endif;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container text-center">
<h1>Basic Student Database</h1>
<p>
<a href="?task=report">Show Table</a>
<a href="?task=insert">Insert Table</a>
<a href="?task=seed">Seed</a>
</p>
<div class="row text-center">
<?php
if($task=='report'):report();
endif;
?>
</div>
</div>
</body>
</html>