<?php

function calendar() {
  $month = date('n');
  //$month = 2;
  $year = date('Y');
  $day = date('j');

  $first = mktime(0,0,0,$month,1,$year);

  $totalDays = date('t',$first);
  $firstDay = date('w',$first);
  $weeks = ceil(($totalDays + $firstDay) / 7);

  $x = $firstDay * -1;
  ?>
  <div class="date">
    <span class="month"><?= date('M') ?></span>
    <span class="day"><?= $day ?></span>
  </div>
  <table class="calendar_grid">
    <thead>
      <tr>
        <th>S</th>
        <th>M</th>
        <th>T</th>
        <th>W</th>
        <th>T</th>
        <th>F</th>
        <th>S</th>
      </tr>
    </thead>
    <tbody>
      <?php
       for ($i=0;$i<$weeks;$i++) {
      ?>
      <tr>
        <?php
          for($d=0;$d<7;$d++) {
            $x++;
        ?>
        <td<?php if ($x == $day) { echo ' class="current"'; } ?>><?php if($x > 0 && $x <= $totalDays) { echo $x; } ?></td>
        <?php
          }
        ?>
      </tr>
    <?php } ?>
    </tbody>
  </table>

  <?php
}
