<?php
 session_start();
if (!isset($_SESSION['id'])) {
  header("location:index.php");
}
$conn = mysqli_connect('localhost', 'root', '', 'projectwork');
$sql="SELECT m.student_id, m.date, s.*
FROM students s, meals m where m.student_id=s.id";
 $query=mysqli_query($conn, $sql);
 $records = mysqli_fetch_all($query, MYSQLI_ASSOC);
//  print_r($meals);


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kings University Cafe</title>
    <link rel="stylesheet" href="styleOne.css">
    <link rel="stylesheet" href="StyleTwo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>


<body>
    <header class="head">
        <img src="images/kingsUniversity.png" alt="KU logo" iheight="300px" width="300">
        <div class="head-wrapper">
            <h1 id="logo">Ku Cafeteria</h1>

            <div class="nav-area">
             <ul>
                <li><a href="ProjectOneHome.php"> Meal tickets </a></li>
                <li><a href="logout.php"> Logout </a></li>
              </ul>
                
        </div>
        </div>
    </header>

    <main class='container'>
        <table>
            <tr>
                <td>
                    Date 
                </td>
                <td>
                    Meal ID
                </td>
                <td>
                    Full Name 
                </td>
                <td>
                    Matric Number
                </td>
            </tr>  
            <?php foreach ($records as $record) { ?>
            <tr>
                <td>
                    <?php echo $record['date'] ?> 
                </td>
                <td>
                    <?php echo $record['meal_id'] ?> 
                </td>
                <td>
                <?php echo $record['name'] ?> 
                </td>
                <td>
                <?php echo $record['matric_no'] ?> 
                </td>
           
            </tr>
            <?php  }?>
        </table>

    </main>
    <footer>  
        <p id="footer-one">&copy; 2015 - 2021Kings University, OdeOmu <em id="foot">| Powered by Kings University Students</em></p>
            </div>  
    </footer>

  <script src="StudentOne.js"></script>

</body>

</html>