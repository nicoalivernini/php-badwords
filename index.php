<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bad Words</title>
  <link rel="stylesheet" href="assets/css/master.css">
</head>
<body>
  <div class="paragrafo">
    <?php $paragrafo = "Ipsum lorem ipsum dolor sit amet, consectetur adipisicing lorem,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
    minim veniam, quis nostrud exercitation lorem laboris nisi ut aliquip ex ea
    lorem consequat. Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat lorem
    non proident, lorem in culpa qui officia deserunt mollit anim id est laborum." ?>
  </div>
  <div class="search-world">
    <?php $bad = $_GET["word"]; ?>
    <?php echo str_replace($bad, '***', $paragrafo) ?>
  </div>
  <div class="length">
    <span>Il paragrafo è lungo <?php echo strlen($paragrafo) ?> caratteri.</span>
  </div>
</body>
</html>
