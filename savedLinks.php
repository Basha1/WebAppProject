<?php
if (isset($_POST['submit']))
  {
  $data = array(
  "results" => array(
    "course" => "CC167",
    "books" => array(
      "book" =>
      array(
        array(
          "-id" => "585457",
          "-title" => "Beginning XNA 20 game programming : from novice to professional",
          "-isbn" => "1590599241",
          "-borrowedcount" => "16"
        ),
        array(
          "-id" => "325421",
          "-title" => "Red Hat Linux 6",
          "-isbn" => "0201354373",
          "-borrowedcount" => "17"
        )
      )
    )
  )
);
echo json_encode($data);
   
  }