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
        <input type="text" name="Kh" placeholder="Khmer (0-125)">
        <label for="Math">Math:</label>
        <input type="text" name="Math" placeholder="Math (0-75)">
        <label for="Envi">Enironmental Science:</label>
        <input type="text" name="Envi" placeholder="Enironmental Science (0-50)">
        <label for="His">History:</label>
        <input type="text" name="His" placeholder="History (0-75)">
        <label for="Geo">Geography:</label>
        <input type="text" name="Geo" placeholder="Geography (0-75)">
        <label for="Moral">Moral Civics:</label>
        <input type="text" name="Moral" placeholder="Moral Civics (0-75)">
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
        $Khgr = find_grade(($Kh*100)/125);
        $Math = $_POST['Math'];
        $Mathgr = find_grade(($Math*100)/75);
        $Envi = $_POST['Envi'];
        $Envigr = find_grade(($Envi*100)/50);
        $His = $_POST['His'];
        $Hisgr = find_grade(($His*100)/75);
        $Geo = $_POST['Geo'];
        $Geogr = find_grade(($Geo*100)/75);
        $Moral = $_POST['Moral'];
        $Moralgr = find_grade(($Moral*100)/75);
        $En = $_POST['En'];
        $Engr = find_grade(($En*100)/50);
        if($En>25) $En_bonus = 25;
         else $En_bonus=0;
         $total = $Kh + $Math + $Geo + $His + $Envi + $Moral + $En_bonus;
         $totalgr = find_grade(($total*100)/428);

        echo "<h1>Grade Calculate Systerm</h1>";
        echo "<p>Student name : $name </p>";
        echo "<p>Total score: $total </p>";
        print "<p>Grade: $totalgr</p>";
    }
    ?>
</body>
</html>
