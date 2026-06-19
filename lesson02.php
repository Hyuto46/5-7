<?php

$box = [];

while (true) {
    echo "操作を選んでください（1:追加 2:取り出し 3:確認 4:空チェック その他:終了）: ";
    $select = trim(fgets(STDIN));

    if ($select == "1") {
        echo "追加するデータを入力してください: ";
        $item = trim(fgets(STDIN));
        array_push($box, $item);
    } elseif ($select == "2") {
        if (!empty($box)) {
            echo array_pop($box) . "\n";
        }
    } elseif ($select == "3") {
        if (!empty($box)) {
            echo $box[count($box) - 1] . "\n";
        }
    } elseif ($select == "4") {
        if (empty($box)) {
            echo "empty\n";
        } else {
            echo "not empty\n";
        }
    } else {
        break;
    }
}
