<?PHP
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼"];

# 以下に回答を記載
foreach ($foods as $value) {
  if (preg_match('/うに/' , $value)) {
    echo "好物です" . PHP_EOL;
  } else {
    echo "まぁまぁ好きです" . PHP_EOL;
  }
}

echo PHP_EOL;
?>
