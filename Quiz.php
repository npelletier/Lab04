<?php
  $numCorrect=0;
  $numTotal=5;
  $q1Answer=$_POST["q1"];
  $q2Answer=$_POST["q2"];
  $q3Answer=$_POST["q3"];
  $q4Answer=$_POST["q4"];
  $q5Answer=$_POST["q5"];
  if($q1Answer=="25")
  {
    $numCorrect++;
  }
  if($q2Answer=="125")
  {
    $numCorrect++;
  }
  if($q3Answer==".2")
  {
    $numCorrect++;
  }
  if($q4Answer==".25")
  {
    $numCorrect++;
  }
  if($q5Answer=="625")
  {
    $numCorrect++;
  }
  echo "<p>Question 1: What is 5<sup>2</sup>?<br>You answered: $q1Answer<br>Correct Answer: 25<p>";
  echo "<p>Question 2: What is 5<sup>3</sup>?<br>You answered: $q2Answer<br>Correct Answer: 125 <p>";
  echo "<p>Question 3: What is 5<sup>-1</sup>?<br>You answered: $q3Answer<br>Correct Answer: .2 <p>";
  echo "<p>Question 4: Which is not an answer for another question?<br>You answered: $q4Answer<br>Correct Answer: .25 <p>";
  echo "<p>Question 5: What is 25<sup>2</sup>?<br>You answered: $q5Answer<br>Correct Answer: 625 <p>";
  echo "<p>$numCorrect / $numTotal correct</p>";
  echo "<p>". ($numCorrect/$numTotal)*100 . "% correct</p>";
  ?>
