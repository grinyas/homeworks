<?php

$string =
'яблоко черешня вишня вишня черешня груша
яблоко черешня вишня яблоко вишня вишня
черешня груша яблоко черешня черешня вишня
яблоко вишня вишня черешня вишня черешня
груша яблоко черешня черешня вишня яблоко
вишня вишня черешня черешня груша яблоко черешня вишня';

echo "<pre>";
echo $string;
echo "</pre>";

$arr = str_word_count($string, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");


echo "<pre>";
print_r(array_count_values($arr));
echo "</pre>";