<!--code by webdevtrick (webdevtrick.com) -->
<html>

<head>
    <meta charset=UTF-8" />

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div id="page-wrap">

        <h1>Result | LEVEL 3 | <a href="index.html">BACK TO HOME</a></h1>

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
            $answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { 
				$totalCorrect++; 
			}
			
            if ($answer2 == "B") {
				 $totalCorrect++; 
			}
			
            if ($answer3 == "A") {
				$totalCorrect++; 
			}
			
            if ($answer4 == "C") { 
				$totalCorrect++; 
			}
			
            if ($answer5 == "A") { 
				$totalCorrect++; 
			}

            if ($answer6 == "C") { 
				$totalCorrect++; 
			}

            if ($answer7 == "A") { 
				$totalCorrect++; 
			}

            if ($answer8 == "C") { 
				$totalCorrect++; 
			}

            if ($answer9 == "B") { 
				$totalCorrect++; 
			}

            if ($answer10 == "B") { 
				$totalCorrect++; 
			}

            if ($answer11 == "B") { 
				$totalCorrect++; 
			}

            if ($answer12 == "B") { 
				$totalCorrect++; 
			}

            if ($answer13 == "B") { 
				$totalCorrect++; 
			}

            if ($answer14 == "B") { 
				$totalCorrect++; 
			}

            if ($answer15 == "B") { 
				$totalCorrect++; 
			}
            
			if($totalCorrect < 8){
				echo "<div id='results'>$totalCorrect / 10 correct. YOU FAILED.</div>";
				echo "CANNOT CONTINUE TO NEW LEVEL.<br>";
                echo '<a href="level3.php">RETRY</a>';
			}
			else{
				echo "<div id='results'>$totalCorrect / 10 correct. YOU PASSED.</div> You can proceed to next level. <br>";
				echo 'CONGRATS, YOU PASSED ALL QUIZZES';
			}
			
            
            
        ?>

    </div>

</body>

</html>