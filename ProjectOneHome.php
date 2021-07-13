<?php
 session_start();
if (!isset($_SESSION['id'])) {
  header("location:index.php");
}
$conn = mysqli_connect('localhost', 'root', '', 'projectwork');
// var_dump($_SESSION);
$result = null;
if (isset($_POST['submit'])) {
  $meal_id = $_POST['meal_id'];
  $sql= "SELECT * FROM students WHERE meal_id='$meal_id'";
  $query=mysqli_query($conn, $sql);
  $result = mysqli_fetch_assoc($query);    
}

if ($result !== null) {
  $id = $result['id'];
  $sql= "SELECT * FROM meals WHERE student_id='$id'";
  $query=mysqli_query($conn, $sql);
  $meals = mysqli_fetch_all($query, MYSQLI_ASSOC);
  $days=[];
  $newList=[];

  foreach ($meals as $meal) {
    $newList[$meal['date']]=[]; 
  }
  foreach ($meals as $meal) {
    array_push($newList[$meal['date']],$meal);
  }
  $days= array_unique($days);
 
  
}else{
  $id = $_SESSION['id'];
  $sql= "SELECT * FROM meals WHERE student_id='$id'";
  $query=mysqli_query($conn, $sql);
  $meals = mysqli_fetch_all($query, MYSQLI_ASSOC);
  $days=[];
  $newList=[];

  foreach ($meals as $meal) {
    $newList[$meal['date']]=[]; 
  }
  foreach ($meals as $meal) {
    array_push($newList[$meal['date']],$meal);
  }
  $days= array_unique($days);
}


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
             <?php if ($_SESSION['role']!=='student'){ ?>
                <li><a href="records.php"> Records </a></li>
              <?php } ?>
                <li><a href="logout.php"> Logout </a></li>
              </ul>
                
        </div>
        </div>
    </header>
    <?php if ($_SESSION['role']!=='student') { ?>
    <main>
        <div class="Identification">
            <h1 id="fill-form"> IDENTIFICATION NUMBER  </h1><br>
            <form action="" method="post" >
                <label for="surname"></label>
                <input type="text" name="meal_id" id="first" ><br><br>
                <button name='submit' type='submit' >Submit</button>
            </form>
        </div>
    </main>
    <?php } ?>
    <p>
      &nbsp  
    </p>
    <p>
      &nbsp  
    </p>
   
<?php if ($_SESSION['role']!=='student' && $result != null) { ?>
    <hr>
    <main>
      <table>
        <tr>
          <td>
        <img src="images/psp1.jpg" height="178px" width="147px" id="psp1"><br><br>

        <h1 id="Biodata">
            <ul id="data">
            <li>Name: <?php echo $result['name'] ?></li><br>
            <li>Department: <?php echo $result['name'] ?></li><br>
            <li>Programme: <?php echo $result['name'] ?></li><br>
            <li>Matric Number : <?php echo $result['matric_no'] ?></li><br>
            <li> Level: <?php echo "Part".$result['part'] ?></li><br>
            </ul>
        </h1>
        </td>
        <td>
        <div class="general">
        <div>
          <table>
          <tr>
            <td class='row'> 
              Date
            </td>
            <td class='row'>
              First Meal
            </td>
            <td class='row'>
              Second Meal
            </td>
          </tr>
          <?php foreach ($newList as $key=>$lists ) {?>
          <tr>
            <td>
              <?php echo $key ?>
            </td>
            <?php foreach ($lists as $list ) {?>
            <td>
              <i class="fas fa-check"></i>
            </td>
            <?php  }?>
          </tr>
          <?php  }?>
          <tr>
            <td>
              <?php echo date('D-M-Y'); ?>
            </td>
            <td>
              <input type="checkbox" id='meal' onchange="postMeal()">
              <input type="hidden" id='student_id' value="<?php echo $result['id'] ?>">
            </td>
          </tr>
        </table>
        </div>
        
          </td>
          </tr>
          </table>
        </div><br>
        
    </main>
    <?php }?>
    <?php if ($_SESSION['role']=='student') { ?>
    <hr>
    <main>
      <table>
        <tr>
          <td>
        <img src="images/psp1.jpg" height="178px" width="147px" id="psp1"><br><br>

        <h1 id="Biodata">
            <ul id="data">
            <li>Name: <?php echo $_SESSION['name'] ?></li><br>
            <li>Department: <?php echo $_SESSION['name'] ?></li><br>
            <li>Programme: <?php echo $_SESSION['name'] ?></li><br>
            <li>Matric Number : <?php echo $_SESSION['matric_no'] ?></li><br>
            <li> Level: <?php echo "Part".$_SESSION['part'] ?></li><br>
            </ul>
        </h1>
        </td>
        <td>
        <div class="general">
        <div>
          <table>
          <tr>
            <td class='row'> 
              Date
            </td>
            <td class='row'>
              First Meal
            </td>
            <td class='row'>
              Second Meal
            </td>
          </tr>
          <?php foreach ($newList as $key=>$lists ) {?>
          <tr>
            <td>
              <?php echo $key ?>
            </td>
            <?php foreach ($lists as $list ) {?>
            <td>
              <i class="fas fa-check"></i>
            </td>
            <?php  }?>
          </tr>
          <?php  }?>
        </table>
        </div>
        
          </td>
          </tr>
          </table>
        </div><br>
        
    </main>
    <?php }?>
    <footer>  
        <p id="footer-one">&copy; 2015 - 2021Kings University, OdeOmu <em id="foot">| Powered by Kings University Students</em></p>
            </div>  
    </footer>

  <script src="StudentOne.js"></script>

</body>

</html>