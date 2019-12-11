<?php

foreach ($faq as $value) {
  echo '<div class = row>';
  echo '<h2>'. $value ['query']. '</h2>';
  echo '<p>'. $value ['answer'];. '</p>';
  echo '</div>';
}

 ?>
