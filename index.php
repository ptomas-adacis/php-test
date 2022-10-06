<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Hello, World!</title>
</head>
<body>
  <h1>
<?php

$url = $_SERVER['EDCS_ENV_TEST_URL'];
$path = $_SERVER['EDCS_ENV_TEST_PATH'];
$user = $_SERVER['EDCS_ENV_TEST_USER'];

echo "url = '$url'\n";
echo "path = '$path'\n";
echo "user = '$user'\n";

?>
  </h1>
</body>
</html>
