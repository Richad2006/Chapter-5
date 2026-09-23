=<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science Calculatort</title>
</head>
<body>
    <h1>Science Grade Calculator</h1>
    <form method="POST">
        <label for="name">Student name:</label>
        <input type="text" name="name" placeholder="Enter student name">
        <label for="kh">Khmer:</label>
        <input type="text" name="Kh" placeholder="Khmer (0-75)">
        <label for="Math">Math:</label>
        <input type="text" name="Math" placeholder="Math (0-125)">
        <label for="Bio">Biology:</label>
        <input type="text" name="Bio" placeholder="Biology (0-75)">
        <label for="His">History:</label>
        <input type="text" name="His" placeholder="History (0-50)">
        <label for="Che">Chemisty:</label>
        <input type="text" name="Che" placeholder="Chemisty (0-75)">
        <label for="Phy">Physics:</label>
        <input type="text" name="Phy" placeholder="Physics (0-75)">
        <label for="En">English:</label>
        <input type="text" name="En" placeholder="English (0-50)">
        <button class="btn" type="submit">
            Calculate
        </button>
         <a href="index.php">
            <i class="fa-solid fa-arrow-left-long"></i>
            Turn back
        </a>
    </form>
    <?php
      function find_grade($score){
         if($score > 90) $grade="A";
        elseif($score > 80) $grade="B";
        elseif($score > 70) $grade="C";
        elseif($score > 60) $grade="D";
        elseif($score > 50) $grade="E";
        else $grade="F";

        return $grade;

      }
     if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $name = $_POST['name'];
        $Kh = $_POST['Kh'];
        $Khgr = find_grade(($Kh*100)/75);
        $Math = $_POST['Math'];
        $Mathgr = find_grade(($Math*100)/125);
        $Bio = $_POST['Bio'];
        $Biogr = find_grade(($Bio*100)/75);
        $His = $_POST['His'];
        $Hisgr = find_grade(($His*100)/50);
        $Che = $_POST['Che'];
        $Chegr = find_grade(($Che*100)/75);
        $Phy = $_POST['Phy'];
        $Phygr = find_grade(($Phy*100)/75);
        $En = $_POST['En'];
        $Engr = find_grade(($En*100)/50);
        if($En>25) $En_bonus = 25;
         else $En_bonus=0;
         $total = $Kh + $Math + $Bio + $His + $Che + $Phy + $En_bonus;
         $totalgr = find_grade(($total*100)/428);

        echo "<h1>Grade Calculate Systerm</h1>";
        echo "<p>Student name : $name </p>";
        echo "<p>Total score: $total </p>";
        print "<p>Grade: $totalgr</p>";
    }
    ?>
</body>
</html>
