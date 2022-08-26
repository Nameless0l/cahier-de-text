<?php
$_present_time = date("H:i:s-m/d/y");
$expiry = 60*24*60*60 + time();
setcookie("Lastvisit" , $_present_time,$expiry);

if(isset($_COOKIE["Lastvisit"])){

    echo $_COOKIE["Lastvisit"];
}
else{
    echo 'sorry';
}

/**
 * Get last seen value.
 */
function last_seen($last_time) {
  $last_time = new DateTime(date("Y-m-d H:i:s", $last_time));
  $current_time = new DateTime();
  $interval = $last_time->diff($current_time);

  // Get last seen value.
  $last_seen = $interval->format('%a days');
  if ($last_seen === '0 days') {
    $last_seen = $interval->format('%H hours');
    if ($last_seen === '00 hours') {
      $last_seen = $interval->format('%I min');
    }
  }

  // If last seen starts with 0, remove it.
  if (substr($last_seen, 0, strlen('0')) == '0') {
    $last_seen = substr($last_seen, strlen('0'));
  }

  // Exceptions.

  // If last seen is 1 days, set 1 day.
  if ($last_seen === '1 days') {
    $last_seen = '1 day';
  }

  // If last seen is 1 hours, set 1 hour.
  if ($last_seen === '1 hours') {
    $last_seen = '1 hour';
  }

  // If last seen is 0 min, return Online.
  if ($last_seen === '0 min') {
    $last_seen = 'Online';
  }

  return $last_seen;
}
?>