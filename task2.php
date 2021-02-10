<?PHP
$programming_languages = ["php","ruby","python","javascript"];

# コードを追加
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);
# 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);
?>
