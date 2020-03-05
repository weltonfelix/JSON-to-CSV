<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>JSON to CSV</title>
</head>
<body>
  <h1 class='page-title'>JSON TO CSV</h1>
  <div id='main'>
    <div class="res">
      <?php 
        include "result.php";
      ?>
    </div>
    <form action="index.php" method="POST">
      <input type="hidden" name=<?php echo confirmYN(); ?>>
      <div class="input-result">      
        <div id="JSON-input">
          <h3 class="input-name">JSON:</h3>
          <textarea name="JSON" placeholder="Write here your JSON..." class='textareas' id="JSON-text" cols="50" rows="20"></textarea>
        </div>
        <i class="fas fa-arrow-right"></i>
        <div id="CSV-result">        
          <h3 class="input-name">CSV:</h3>
          <textarea name="CSV" placeholder="The CSV spreadsheet will appear here..." readonly class='textareas' id="CSV-text" cols="50" rows="20" ></textarea>
        </div>
      </div>  
      <div class="action">
        <input type="submit" onclick="mudarCor()" id="main_action" value=<?php echo firstuse(); ?>>
      </div>      
    </form>    
  </div>
  <script>
    function mudarCor(){
      document.querySelector('#main_action').style.background = "#aaa  "
    }
  </script>
  <script src="https://kit.fontawesome.com/33e8903236.js" crossorigin="anonymous"></script>
</body>
</html>