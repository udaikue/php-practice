<?php
declare(strict_types=1);

$now = new DateTime();
const DAY_OF_WEEK = ['日', '月', '火', '水', '木', '金', '土'];
$lastDate = $now->format('t'); // t: その月の日数(28~31)
$firstDate = new Datetime('first day of this month'); // 今月の月初の日
$firstDay = $firstDate->format('w'); // 曜日(0~7、日曜はじまり)

// $dateに空白と日付をセット
$date = [];
// 月初が日曜(0)以外の場合は空白をpush
while($firstDay > 0) {
  array_push($date, ' ');
  $firstDay--;
}
for($i = 1; $i < $lastDate; $i++) {
  array_push($date, $i);
}

// カレンダータイトル
echo $now->format('      m月 Y'), PHP_EOL;

// 曜日
foreach (DAY_OF_WEEK as $value) {
  echo $value . ' ';
}
echo PHP_EOL;

// 日付を土曜日で折り返して表示
foreach ($date as $value) {
  if ($value !== ' ') {
    if (array_search($value, $date) % 7 === 0) {
      echo PHP_EOL;
    }
  }
  if (strlen((string)$value) === 1) {
    echo ' ' . $value . ' ';
  } else {
  echo $value . ' ';
  }
}
echo PHP_EOL;

?>
