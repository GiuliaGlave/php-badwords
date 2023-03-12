<?php
$paragraph = $_GET["paragraph"];

$word_to_censor = $_GET["word-to-censor"] ;

$word_length =strlen($word_to_censor);


$censored_paragraph = str_replace($word_to_censor, "***", $paragraph   );


$paragraph_length =strlen($censored_paragraph);

?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>Badwords</title>
  </head>
  <body>
    <h1>CENSOR WORDS</h1>
    <form
      method="GET"
      action="./bad_words.php"
    >
      <label for="word-to-censor"></label>
      <textarea
        name="word-to-censor"
        id="word-to-censor"
        cols="30"
        rows="10"
        placeholder="inserisci le parole da censurare"
      ><?=$word_to_censor . " (" . $word_length . ")" 
      ?></textarea>
      <button>censura</button>
      <br>
      <label for="censored-paragraph"></label>
      <textarea
        name="censored-paragraph"
        id="censored-paragraph"
        cols="30"
        rows="10"
        placeholder="paragrafo censurato"
      ><?=$censored_paragraph . " (" . $paragraph_length . ")" ?>
</textarea>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, reiciendis!</p>
      
  </body>
</html>
