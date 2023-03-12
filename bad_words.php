<?php
$paragraph = $_POST["paragraph"];
$paragraph_length =strlen($paragraph);

$word_to_censor = $_POST["word-to-censor"] ;
$word_length =strlen($word_to_censor);


$censored_paragraph = str_replace($word_to_censor, "***", $paragraph   );

$censored_paragraph_length =strlen($censored_paragraph);

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
      method="POST"
      action="./bad_words.php"
    >
     <label for="paragraph"></label>
      <textarea
        name="paragraph"
        id="paragraph"
        cols="30"
        rows="10"
        placeholder="scrivi qualcosa"
      ><?=$censored_paragraph . " (" . $censored_paragraph_length . " caratteri)"?></textarea>

      <label for="word-to-censor"></label>
      <textarea
        name="word-to-censor"
        id="word-to-censor"
        cols="30"
        rows="10"
        placeholder="inserisci la parola da censurare"
      ><?=$word_to_censor. " (" . $word_length . " caratteri)"?></textarea>
      <br>
      <button>censura</button>  
      <p>il paragrafo riginale aveva <span><?=$paragraph_length." caratteri"?></span></p>
  </body>
</html>
