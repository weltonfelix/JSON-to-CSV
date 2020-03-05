<?php
  if (isset($_POST['confirm'])){
    $JSON_text = isset($_POST['JSON']) ? $_POST['JSON'] : NULL;
    if ($JSON_text == NULL) {
      print("<h3 class='error'>The JSON text box is empty!</h3>");
    };

    $confirm = true;
  }else{
    $confirm = false;
  };
  

  function confirmYN(){
    return isset($_POST['confirm']) ? "not" : "confirm";
  };

  function firstuse(){
    return isset($_POST['confirm']) ? "Clear" : "Convert";
  }

  function json2csv($json){
    
  };