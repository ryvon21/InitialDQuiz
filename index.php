<?php



$connect = mysqli_connect('162.241.217.231', 'ryanvonb_mendax', 'KOKO2009$', 'ryanvonb_WPXU2');



if (!$connect) 

{

    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';

    echo 'Error Message: ' . mysqli_connect_error() . '<br>';

    exit;

}



?>





<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Initial Meme</title>

    <link href="stylesheet.css" rel="stylesheet">

</head>

<body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>



<header class="title"> <div class="logo_container"><img src="LOGO.png" class="logo"></div> <div class="title_container"><h1> Which Intitial D Car Are You?</h1></div> <div class="null"></div> </header>



<div class="container">

<form action="" method="post" class="quiz" id="quiz" onsubmit= "">

<P>What music do you prefer to listen to?<BR>

<input type="radio" name="question-1" value="A">Punk<BR>

<input type="radio" name="question-1" value="B">Hip Hop<BR>

<input type="radio" name="question-1" value="C">Soul<BR>

<input type="radio" name="question-1" value="D">Eurobeat<BR>

</p>



<P>What would you rather eat?<BR>

<input type="radio" name="question-2" value="A">Tacos<BR>

<input type="radio" name="question-2" value="B">Ramen<BR>

<input type="radio" name="question-2" value="C">Sushi<BR>

<input type="radio" name="question-2" value="D">Fried Tofu<BR>

</p>



<P>What would you rather do on the weekend?<BR>

<input type="radio" name="question-3" value="A">Party<BR>

<input type="radio" name="question-3" value="B">Perfect your slip angle<BR>

<input type="radio" name="question-3" value="C">Have a beer and watch the sunset<BR>

<input type="radio" name="question-3" value="D">Go to the beach<BR>

</p>



<P>Which of these bothers you the most?<BR>

<input type="radio" name="question-4" value="A">Bossy people<BR>

<input type="radio" name="question-4" value="B">Losing<BR>

<input type="radio" name="question-4" value="C">Lazy people<BR>

<input type="radio" name="question-4" value="D">Duct Tape Deathmatch<BR>

</p>



<br>

<input type="submit" value="Submit Answers" class="submit_btn" id="submit_btn">

</form>



<?php



$answer1 = $_POST['question-1'];

$answer2 = $_POST['question-2'];

$answer3 = $_POST['question-3'];

$answer4 = $_POST['question-4'];





$total = 0;



if($answer1 == "A") { $total += 1;}

if($answer1 == "B") { $total += 2;}

if($answer1 == "C") { $total += 3;}

if($answer1 == "D") { $total += 4;}



if($answer2 == "A") { $total += 1;}

if($answer2 == "B") { $total += 2;}

if($answer2 == "C") { $total += 3;}

if($answer2 == "D") { $total += 4;}



if($answer3 == "A") { $total += 1;}

if($answer3 == "B") { $total += 2;}

if($answer3 == "C") { $total += 3;}

if($answer3 == "D") { $total += 4;}



if($answer4 == "A") { $total += 1;}

if($answer4 == "B") { $total += 2;}

if($answer4 == "C") { $total += 3;}

if($answer4 == "D") { $total += 4;}



?>



<?php



if ($total <= 6 && $total > 0)

{

    $query = "SELECT * FROM initial_cars WHERE id BETWEEN 1 AND 4 ORDER BY RAND() LIMIT 1";

    $result = mysqli_query($connect, $query);


    while ($record = mysqli_fetch_assoc($result))

    {

        echo '<div class= "tile" id="tile">';

        echo '<h1>'.$record['make'].'</h1>';

        echo '<h3>'.$record['model'].'</h2>';

        echo '<img src="'.$record['img'].'">';

        echo '</div>';

    }

} 

else if ($total <= 11 && $total > 6)

{

    $query = "SELECT * FROM initial_cars WHERE id BETWEEN 6 AND 9 ORDER BY RAND() LIMIT 1";

    $result = mysqli_query($connect, $query);



    while ($record = mysqli_fetch_assoc($result))

    {

        echo '<div class= "tile" id="tile">';

        echo '<h1>'.$record['make'].'</h1>';

        echo '<h3>'.$record['model'].'</h2>';

        echo '<img src="'.$record['img'].'">';

        echo '</div>';

    }

}

else if ($total > 11 && $total < 15)

{

    $query = "SELECT * FROM initial_cars WHERE id BETWEEN 10 AND 12 ORDER BY RAND() LIMIT 1";

    $result = mysqli_query($connect, $query);



    while ($record = mysqli_fetch_assoc($result))

    {

        echo '<div class= "tile" id="tile">';

        echo '<h1>'.$record['make'].'</h1>';

        echo '<h3>'.$record['model'].'</h2>';

        echo '<img src="'.$record['img'].'">';

        echo '</div>';

    }

}

else if ($total == 16)

{

    $query = "SELECT * FROM initial_cars WHERE id= 13";

    $result = mysqli_query($connect, $query);



    while ($record = mysqli_fetch_assoc($result))

    {

        echo '<div class= "tile" id="tile">';

        echo '<h1>'.$record['make'].'</h1>';

        echo '<h3>'.$record['model'].'</h2>';

        echo '<img src="'.$record['img'].'">';

        echo '</div>';

    }

}



?>




  <script> 
  
    $(document).ready(function() {

    $('html, body').animate({scrollTop: $(".tile").offset().top}, 2000); 

    });
   
   </script>




</div>



</body>
</html>



