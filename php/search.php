<?php
$search_q=$_POST['search_q'];
$l= mysqli_connect('localhost', 'root', '', 'site');
$search_q = trim($search_q);
$search_q = strip_tags($search_q);
$q= mysqli_query($l, "SELECT title_value,content FROM `title` WHERE title_value LIKE '%$search_q%'");
$itog=mysqli_fetch_assoc($q);
  while ($itog = mysqli_fetch_assoc($q)) {
        printf("%s (%s)\n",$r["title_value"],$r["content"]);
    }
 mysqli_free_result($q);
  mysqli_close($l);
?>