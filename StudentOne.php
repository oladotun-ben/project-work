<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kings University Cafe</title>
    <link rel="stylesheet" href="StyleTwo.css">
    <script>
        var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function showCheck() {
  var checkbox = document.getElementById("checkbox");
  if (!expanded) {
    checkbox.style.display = "block";
    expanded = true;
  } else {
    checkbox.style.display = "none";
    expanded = false;
  }
}

function showCheckboxes3() {
  var checkboxes3 = document.getElementById("checkboxes3");
  if (!expanded) {
    checkboxes3.style.display = "block";
    expanded = true;
  } else {
    checkboxes3.style.display = "none";
    expanded = false;
  }
}

function showCheckboxes4() {
  var checkboxes4 = document.getElementById("checkboxes4");
  if (!expanded) {
    checkboxes4.style.display = "block";
    expanded = true;
  } else {
    checkboxes4.style.display = "none";
    expanded = false;
  }
}

function showCheckboxes5() {
  var checkboxes5 = document.getElementById("checkboxes5");
  if (!expanded) {
    checkboxes5.style.display = "block";
    expanded = true;
  } else {
    checkboxes5.style.display = "none";
    expanded = false;
  }
}

function showCheckboxes6() {
  var checkboxes6 = document.getElementById("checkboxes6");
  if (!expanded) {
    checkboxes6.style.display = "block";
    expanded = true;
  } else {
    checkboxes6.style.display = "none";
    expanded = false;
  }
  
}


</script> 
</head>

<body>
    <header class="head">
        <img src="images/kingsUniversity.png" alt="KU logo" iheight="300px" width="300">
        <div class="head-wrapper">
            <h1 id="logo">Ku Cafeteria</h1>

            <div class="nav-area">
             <ul>
                <li><a href="ProjectOneHome.html"> Home Page </a></li>
        </div>
        </div>
    </header>
      <br>
    <main>
      <table>
        <tr>
          <td>
        <img src="images/psp1.jpg" height="178px" width="147px" id="psp1"><br><br>

        <h1 id="Biodata">
            <ul id="data">
            <li>Name: Justus Emmanuel</li><br>
            <li>Department: Mathematical Sciences</li><br>
            <li>Programme: Computer Science</li><br>
            <li>Matric Number : CSC/2017/009</li><br>
            <li> Level: 400L</li><br>
            </ul>
        </h1>
        </td>
        <td>
        <div class="general">
         <form>
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
          </form> 
          <br>
          <form>
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
          </form><br></div> 
          </td>
          </tr>
          </table>
        </div><br>

      

        

        
    </main>
    <footer>
                
                <p id="footer-one">&copy; 2015 - 2021Kings University, OdeOmu <em id="foot">| Powered by Kings University Students</em></p>
                 </div>
                 
            
            </footer>

  

</body>

</html>