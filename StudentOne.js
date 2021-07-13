var expanded = false;



function postMeal() {
  // e.preventDefault();
  var student_id = document.getElementById('student_id').value
  console.log(student_id)
  var params ='student_id='+ student_id
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'studentsMeals.php', true);
  xhr.setRequestHeader('Content-type', 'Application/x-www-form-urlencoded')
  xhr.onload = function (){
    alert(this.responseText)
  }
  xhr.send(params)
  

}
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

// function postMeals() {
//   console.log('fff');
// }