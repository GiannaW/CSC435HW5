<?php
$triviafiles = "trivia/random";
if (isset($_GET["mode"])) {
  $mode = strtolower($_GET["mode"]);
  if ($mode == "categories") {
       json_encode("categories");
       array_rand($triviafiles);
       print(json_encode(array("question" => $question, "answer" => $answer)));
      
      
      
      
      
  # your php code here

  } else if ($mode == "category") {
    if (!isset($_GET["name"])) {
      $categories = scandir($triviafiles);
      $categoryName = $categories[array_rand($categories)];
    } else {
      $categoryName = strtolower($_GET["name"]);
    }
   # your php code here
  }
} else {
  header("HTTP/1.1 400 Error");
  print("Missing mode query parameter");
  #print($_GET["category"] . " is not a existing category.");
}
?>
