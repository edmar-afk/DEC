<!--code by webdevtrick (webdevtrick.com) -->
<html>

<head>
    <meta charset=UTF-8" />

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div id="page-wrap">

        <h1>Result | LEVEL 2 | <a href="index.html">BACK TO HOME</a></h1>

        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { 
				$totalCorrect++; 
			}
			
            if ($answer2 == "C") {
				 $totalCorrect++; 
			}
			
            if ($answer3 == "B") {
				$totalCorrect++; 
			}
			
            if ($answer4 == "C") { 
				$totalCorrect++; 
			}
			
            if ($answer5 == "B") { 
				$totalCorrect++; 
			}

            if ($answer6 == "C") { 
				$totalCorrect++; 
			}

            if ($answer7 == "B") { 
				$totalCorrect++; 
			}

            if ($answer8 == "C") { 
				$totalCorrect++; 
			}

            if ($answer9 == "A") { 
				$totalCorrect++; 
			}

            if ($answer10 == "B") { 
				$totalCorrect++; 
			}
            
			if($totalCorrect < 5){
				echo "<div id='results'>$totalCorrect / 10 correct. YOU FAILED.</div>";
				echo "CANNOT CONTINUE TO NEW LEVEL.<br>";
                echo '<a href="level2.php">RETRY</a>';
			}
			else{
				echo "<div id='results'>$totalCorrect / 10 correct. YOU PASSED.</div> You can proceed to next level. <br>";
				echo '<a href="level3.php">NEXT LEVEL</a>';
			}
			
            
            
        ?>

    </div>

</body>

</html>