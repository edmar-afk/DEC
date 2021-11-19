<!--code by webdevtrick (webdevtrick.com) -->
<html>

<head>
    <meta charset=UTF-8" />

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div id="page-wrap">

        <h1>Result | LEVEL 1 | <a href="index.html">BACK TO HOME</a></h1>

        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { 
				$totalCorrect++; 
			}
			
            if ($answer2 == "A") {
				 $totalCorrect++; 
			}
			
            if ($answer3 == "B") {
				$totalCorrect++; 
			}
			
            if ($answer4 == "B") { 
				$totalCorrect++; 
			}
			
            if ($answer5 == "C") { 
				$totalCorrect++; 
			}
            
			if($totalCorrect < 3){
				echo "<div id='results'>$totalCorrect / 5 correct. YOU FAILED.</div>";
				echo "CANNOT CONTINUE TO NEW LEVEL.<br>";
                echo '<a href="level1.php">RETRY</a>';
			}
			else{
				echo "<div id='results'>$totalCorrect / 5 correct. YOU PASSED.</div> You can proceed to next level. <br>";
				echo '<a href="level2.php">NEXT LEVEL</a>';
			}
			
            
            
        ?>

    </div>

</body>

</html>