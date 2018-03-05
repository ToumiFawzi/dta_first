<?php
include 'vendor/autoload.php';
use Dta\FristComposer\Domain\Team;
use Carbon\Carbon;
use Respect\Validation\Validator as v;




    
$newteam = new Team('Real Madrid'); 
echo "<br/>";

$input = 3;
echo v::numeric()->positive()->between(1, 255)->validate($input)


?>

<!doctype html>
<html lang="fr">
  <head>
     <meta charset="utf-8">
     <title>FirstComposer</title>
      <link rel="stylesheet" href="styles/style.css">
  </head>
  
   <body>
          <?php echo $newteam->name; ?> <br/>
        <?php  $date = Carbon::now();
               echo $date; ?> 
               

   </body>
</html>