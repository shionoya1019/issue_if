<?php
echo 'Welcome TECH QUEST!';

//echo "\n";　ブラウザ用の改行ではないので入れても改行されない
<br><br/>


//$num に代入されている値が1~3の場合に[凶]と出力され、4~7の場合に[吉]と出力され、
//それ以外の場合に[大吉]と出力されるコードを提出してください。
$num = 8;

if (1 <= $num && $num <= 3 ) {
  echo '凶';
} elseif (4 <= $num && $num <= 7 ) {
  echo '吉';
} else {
  echo '大吉';
}