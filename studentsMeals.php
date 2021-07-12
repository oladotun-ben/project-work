<?php
if (isset($_POST['student_id'])) {
  $conn = mysqli_connect('localhost', 'root', '', 'projectwork');
  $student_id = $_POST['student_id'];
  $date = date('Y-m-d');
  $sql1= "SELECT * FROM meals WHERE student_id='$student_id'";
  $query1=mysqli_query($conn, $sql1);
  $meals = mysqli_fetch_all($query1, MYSQLI_ASSOC);
  if (count($meals)<2) {
    $sql= "INSERT INTO meals (student_id, date) VALUE ('$student_id', '$date') ";
    $query=mysqli_query($conn, $sql);
    echo "ticket Approved";
  }else{
      echo "Students only have two tickects per day";
  }
 
}