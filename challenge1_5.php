<?php
$hp = 10000;

while ($hp > 0) {
    echo "攻撃技は？\n";
    echo "1.剣  2.魔法  3.打撃\n";
    $num = trim(fgets(STDIN));

    if ($num == 1 || $num == 2 || $num == 3) {
        $attack_point = rand(500, 3000);

        if ($attack_point >= 2000) {
            echo "クリティカルヒット！！\n";
        }

        if ($hp - $attack_point > 0) {
            $hp -= $attack_point;
        } else {
            $hp = 0;
        }

        echo "攻撃力" . $attack_point . " の攻撃！\n";
        echo "HP: " . $hp . "\n";

    } else {
        echo "攻撃に失敗\n";
    }
}

echo "敵を倒した！";
