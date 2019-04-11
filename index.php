<?php
$allanHeadings = array(
   'Allans svar til dig',
   'Allan ved besked',
   'Allan er ikke i tvivl',
   'Tukanen har talt',
   'Tukanens vise ord',
   'Oralkets svar',
   'Oraklets råd er klart'
);

$allanAnswers = array(
   'Oraklet siger ja! Ingen tvivl om det.',
   'Det bliver et nej fra Allan!',
   'Den var svær. Spørg igen senere.',
   'Har du overhovedet tænkt det igennem? Han er målløs!',
   'Han har hørt, det skulle være en dum idé. Lad være!',
   'Ja, ja, ja! Kom i gang! Det er helt perfekt!',
   'Sikke et mærkeligt spørgsmål, men ja! Klart ja!',
   'NEEEEJ! KÆMPE NEEEJ!!',
   'JA DA!? 100 %',
   'NIX, DU! ALDRIG!',
   'Hmmmm... Allan er sulten!',
   'Skru op for varmen. Alting løser sig.',
   'Er du klar over hvad det koster? Spar lige op først!'
);
?>
<!DOCTYPE html>
<html lang="da-DK">
<head>
   <title>Spørg Tukanen Allan</title>
   <!-- META TAGS -->
   <meta charset="UTF-8">
   <meta name="description" content="Spørg oraklet Allan om alt!">
   <meta name="author" content="N4.DK">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- STYLESHEETS -->
   <!-- Custom CSS -->
   <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
   <!-- Bootstrap 4.0 -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <!-- SCRIPTS -->
   <!-- Custom Scripts -->
   <script src="script.js"></script>
</head>
<body>
   <div id="contentDiv">
      <div class="boxDiv">
         <h1>Spørg Tukanen Allan</h1>
         <p>Allan er intet mindre end et orakel. Han har svar på stort set alt.<br>
         Stil ham et spørgsmål og tryk på knappen, så vil han vil guide dig gennem livets problemer.</p>
      </div>
      <!-- Handles the Magic of Allan's Knowledge -->
      <div class="boxDiv">
         <h2 id="allanHeading"><?php echo $allanHeadings[rand(0, count($allanHeadings) - 1)]; ?></h2>
         <p id="allanAnswer"><?php echo $allanAnswers[rand(0, count($allanAnswers) - 1)]; ?></p>
         <img id="imgAllan" src="allan.png" width="200px" height="160px" alt="Tukanen Allan"><br>
         <input id="questionInput" type="text" placeholder="Skriv dit spørgsmål...">
         <button id="askQuestionButton" onClick="getAnswer()">Spørg Allan</button>
         <button id="newQuestionButton" onClick="history.go(0)">Nyt spørgsmål?</button>
      </div>
      <p id="footerDiv">Udviklet af N4.DK</p>
   </div>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>