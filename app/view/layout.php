<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $this->getDescription();?>">
  <meta name="keywords" content="<?php echo $this->getKeywords();?>">
  <title><?php echo $this->getTitle();?></title>
  <!-- importing jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
    crossorigin="anonymous">
  </script> 
  <link rel="stylesheet" href="<?php echo DIRCSS.'default.css'?>">

  <?php echo $this->addHead();?>
</head>
<body>
  <header>
    <?php echo $this->addHeader();?>
  </header>

  <div class="main">
    <?php echo $this->addMain();?>
  </div>
  
  <footer>
    <?php echo $this->addFooter();?>
  </footer>

  <?php echo $this->addDarkMode();?>
</body>
</html>