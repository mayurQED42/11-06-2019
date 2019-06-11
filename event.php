<style>
    body{
      color: red;
      font-size: 80px;
      background: black;
    }
</style>
<?php
  $event1_from = $_GET['event1_from'];
  $event1_to = $_GET['event1_to'];
  $event2_from = $_GET['event2_from'];
  $event2_to = $_GET['event2_to']; 
  echo "<br>Event1 from    ".$event1_from." to    ".$event1_to;
  echo "<br>Event2 from    ".$event2_from." to    ".$event2_to."<br>";
  if($event1_from < $event2_to && $event1_to > $event2_to)
  {
      $temp = $event2_to;
      while($temp > $event1_from)
      {
        $temp = strtotime ( '-1 day' , strtotime ( $temp ) ) ;
        $temp = date ( 'Y-m-j' , $temp );
        if($temp != $event1_from)
          echo "<br>".$temp;
      }
  }
?>