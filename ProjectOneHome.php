<?php
 session_start();
if (!isset($_SESSION['id'])) {
  header("location:index.php");
}
$conn = mysqli_connect('localhost', 'root', '', 'projectwork');
// var_dump($_SESSION);
$result = null;
if (isset($_POST['submit'])) {
  $matric_no = $_POST['matric_no'];
  $sql= "SELECT * FROM students WHERE matric_no='$matric_no'";
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
                <li><a href="logout.php"> Records </a></li>
                
        </div>
        </div>
    </header>

    <main>
        <div class="Identification">
            <h1 id="fill-form"> IDENTIFICATION NUMBER  </h1><br>
            <form action="" method="post" >
                <label for="surname"></label>
                <input type="text" name="matric_no" id="first" ><br><br>
                <button name='submit' type='submit' >Submit</button>
            </form>
        </div>
    </main>
    <p>
      &nbsp  
    </p>
    <p>
      &nbsp  
    </p>
   
<?php if ($result != null) { ?>
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
            <td>
              Date
            </td>
            <td>
              First Meal
            </td>
            <td>
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
            <td>
              <!-- <form id="meal2">
                <input type="checkbox" name='meal2'>
              </form> -->
            </td>
          </tr>
          </table>
        </div>
         <!-- <form class="form">
            <div class="multiselect">
              <div class="selectBox" onclick="showCheckboxes()">
                <select>
                  <option>First Week</option>
                </select>
                <div class="overSelect"></div>
              </div>
              <div id="checkboxes">
                <label for="one">
                  <input type="checkbox" id="one"  onclick="checkMe()" />Sunday ticket 1</label>
                <label for="two">
                  <input type="checkbox" id="two" />Sunday ticket 2</label>
                <label for="three">
                  <input type="checkbox" id="three" />Monday Ticket 1</label>
                <label for="four">
                  <input type="checkbox" id="four" />Monday Ticket 2</label>
                <label for="five">
                  <input type="checkbox" id="five" />Tuesday Ticket 1</label>
                <label for="six">
                  <input type="checkbox" id="six" />Tuesday Ticket 2</label>
                <label for="seven">
                  <input type="checkbox" id="seven" />Wednesday Ticket 1</label>
                <label for="eight">
                  <input type="checkbox" id="eight" />Wednesday Ticket 2</label> 
                <label for="nine">
                  <input type="checkbox" id="nine" />Thursday Ticket 1</label>
                <label for="ten">
                  <input type="checkbox" id="ten" />Thursday Ticket 2</label>
                <label for="eleven">
                  <input type="checkbox" id="eleven" />Friday Ticket 1</label>
                <label for="twelve">
                  <input type="checkbox" id="twelve" />Friday Ticket 2</label>
                <label for="thirteen">
                  <input type="checkbox" id="thirteen" />Saturday Ticket 1</label>
                <label for="fourteen">
                  <input type="checkbox" id="fourteen" />Saturday Ticket 2</label>

                  
              </div>
            </div>
          </form><br> 
          <form>
            <div class="multiselect">
              <div class="selectBox" onclick="showCheck()">
                <select>
                  <option>Second Week</option>
                </select>
                <div class="overSelect"></div>
              </div>
              <div id="checkbox">
                <label for="one">
                  <input type="checkbox" id="one" />Sunday ticket 1</label>
                <label for="two">
                  <input type="checkbox" id="two" />Sunday ticket 2</label>
                <label for="three">
                  <input type="checkbox" id="three" />Monday Ticket 1</label>
                <label for="four">
                  <input type="checkbox" id="four" />Monday Ticket 2</label>
                <label for="five">
                  <input type="checkbox" id="five" />Tuesday Ticket 1</label>
                <label for="six">
                  <input type="checkbox" id="six" />Tuesday Ticket 2</label>
                <label for="seven">
                  <input type="checkbox" id="seven" />Wednesday Ticket 1</label>
                <label for="eight">
                  <input type="checkbox" id="eight" />Wednesday Ticket 2</label> 
                <label for="nine">
                  <input type="checkbox" id="nine" />Thursday Ticket 1</label>
                <label for="ten">
                  <input type="checkbox" id="ten" />Thursday Ticket 2</label>
                <label for="eleven">
                  <input type="checkbox" id="eleven" />Friday Ticket 1</label>
                <label for="twelve">
                  <input type="checkbox" id="twelve" />Friday Ticket 2</label>
                <label for="thirteen">
                  <input type="checkbox" id="thirteen" />Saturday Ticket 1</label>
                <label for="fourteen">
                  <input type="checkbox" id="fourteen" />Saturday Ticket 2</label>

                  
              </div>
            </div>
          </form>  -->
          <br>
          <!-- <form>
            <div class="multiselect">
              <div class="selectBox" onclick="showCheckboxes3()">
                <select>
                  <option>Third Week</option>
                </select>
                <div class="overSelect"></div>
              </div>
              <div id="checkboxes3">
                <label for="one">
                  <input type="checkbox" id="one" />Sunday ticket 1</label>
                <label for="two">
                  <input type="checkbox" id="two" />Sunday ticket 2</label>
                <label for="three">
                  <input type="checkbox" id="three" />Monday Ticket 1</label>
                <label for="four">
                  <input type="checkbox" id="four" />Monday Ticket 2</label>
                <label for="five">
                  <input type="checkbox" id="five" />Tuesday Ticket 1</label>
                <label for="six">
                  <input type="checkbox" id="six" />Tuesday Ticket 2</label>
                <label for="seven">
                  <input type="checkbox" id="seven" />Wednesday Ticket 1</label>
                <label for="eight">
                  <input type="checkbox" id="eight" />Wednesday Ticket 2</label> 
                <label for="nine">
                  <input type="checkbox" id="nine" />Thursday Ticket 1</label>
                <label for="ten">
                  <input type="checkbox" id="ten" />Thursday Ticket 2</label>
                <label for="eleven">
                  <input type="checkbox" id="eleven" />Friday Ticket 1</label>
                <label for="twelve">
                  <input type="checkbox" id="twelve" />Friday Ticket 2</label>
                <label for="thirteen">
                  <input type="checkbox" id="thirteen" />Saturday Ticket 1</label>
                <label for="fourteen">
                  <input type="checkbox" id="fourteen" />Saturday Ticket 2</label>

                  
              </div>
            </div>
          </form><br> 

          <form>
            <div class="multiselect">
              <div class="selectBox" onclick="showCheckboxes4()">
                <select>
                  <option>Fourth Week</option>
                </select>
                <div class="overSelect"></div>
              </div>
              <div id="checkboxes4">
                <label for="one">
                  <input type="checkbox" id="one" />Sunday ticket 1</label>
                <label for="two">
                  <input type="checkbox" id="two" />Sunday ticket 2</label>
                <label for="three">
                  <input type="checkbox" id="three" />Monday Ticket 1</label>
                <label for="four">
                  <input type="checkbox" id="four" />Monday Ticket 2</label>
                <label for="five">
                  <input type="checkbox" id="five" />Tuesday Ticket 1</label>
                <label for="six">
                  <input type="checkbox" id="six" />Tuesday Ticket 2</label>
                <label for="seven">
                  <input type="checkbox" id="seven" />Wednesday Ticket 1</label>
                <label for="eight">
                  <input type="checkbox" id="eight" />Wednesday Ticket 2</label> 
                <label for="nine">
                  <input type="checkbox" id="nine" />Thursday Ticket 1</label>
                <label for="ten">
                  <input type="checkbox" id="ten" />Thursday Ticket 2</label>
                <label for="eleven">
                  <input type="checkbox" id="eleven" />Friday Ticket 1</label>
                <label for="twelve">
                  <input type="checkbox" id="twelve" />Friday Ticket 2</label>
                <label for="thirteen">
                  <input type="checkbox" id="thirteen" />Saturday Ticket 1</label>
                <label for="fourteen">
                  <input type="checkbox" id="fourteen" />Saturday Ticket 2</label>

                  
              </div>
            </div>
          </form><br> 

          <form>
            <div class="multiselect">
              <div class="selectBox" onclick="showCheckboxes5()">
                <select>
                  <option>Fifth Week</option>
                </select>
                <div class="overSelect"></div>
              </div>
              <div id="checkboxes5">
                <label for="one">
                  <input type="checkbox" id="one" />Sunday ticket 1</label>
                <label for="two">
                  <input type="checkbox" id="two" />Sunday ticket 2</label>
                <label for="three">
                  <input type="checkbox" id="three" />Monday Ticket 1</label>
                <label for="four">
                  <input type="checkbox" id="four" />Monday Ticket 2</label>
                <label for="five">
                  <input type="checkbox" id="five" />Tuesday Ticket 1</label>
                <label for="six">
                  <input type="checkbox" id="six" />Tuesday Ticket 2</label>
                <label for="seven">
                  <input type="checkbox" id="seven" />Wednesday Ticket 1</label>
                <label for="eight">
                  <input type="checkbox" id="eight" />Wednesday Ticket 2</label> 
                <label for="nine">
                  <input type="checkbox" id="nine" />Thursday Ticket 1</label>
                <label for="ten">
                  <input type="checkbox" id="ten" />Thursday Ticket 2</label>
                <label for="eleven">
                  <input type="checkbox" id="eleven" />Friday Ticket 1</label>
                <label for="twelve">
                  <input type="checkbox" id="twelve" />Friday Ticket 2</label>
                <label for="thirteen">
                  <input type="checkbox" id="thirteen" />Saturday Ticket 1</label>
                <label for="fourteen">
                  <input type="checkbox" id="fourteen" />Saturday Ticket 2</label>

                  
              </div>
            </div>
          </form><br> 

          <form>
            <div class="multiselect">
              <div class="selectBox" onclick="showCheckboxes6()">
                <select>
                  <option>Sixth Week</option>
                </select>
                <div class="overSelect"></div>
              </div>
              <div id="checkboxes6">
                <label for="one">
                  <input type="checkbox" id="one" />Sunday ticket 1</label>
                <label for="two">
                  <input type="checkbox" id="two" />Sunday ticket 2</label>
                <label for="three">
                  <input type="checkbox" id="three" />Monday Ticket 1</label>
                <label for="four">
                  <input type="checkbox" id="four" />Monday Ticket 2</label>
                <label for="five">
                  <input type="checkbox" id="five" />Tuesday Ticket 1</label>
                <label for="six">
                  <input type="checkbox" id="six" />Tuesday Ticket 2</label>
                <label for="seven">
                  <input type="checkbox" id="seven" />Wednesday Ticket 1</label>
                <label for="eight">
                  <input type="checkbox" id="eight" />Wednesday Ticket 2</label> 
                <label for="nine">
                  <input type="checkbox" id="nine" />Thursday Ticket 1</label>
                <label for="ten">
                  <input type="checkbox" id="ten" />Thursday Ticket 2</label>
                <label for="eleven">
                  <input type="checkbox" id="eleven" />Friday Ticket 1</label>
                <label for="twelve">
                  <input type="checkbox" id="twelve" />Friday Ticket 2</label>
                <label for="thirteen">
                  <input type="checkbox" id="thirteen" />Saturday Ticket 1</label>
                <label for="fourteen">
                  <input type="checkbox" id="fourteen" />Saturday Ticket 2</label>

                  
              </div>
            </div>
          </form><br></div>  -->
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