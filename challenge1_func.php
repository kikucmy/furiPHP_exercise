<?php
function createMsg($member, $enemy, $damage) {
    $msg = <<<EOM
{$member}は、
{$enemy}に攻撃した。\n
クリティカルヒット！！ \n
{$enemy}は、{$damage}のダメージを受けた。\n\n
EOM;

    echo $msg;
}

function getDamage($attack_point) {
    $val = rand(100, 500);

    return $val * $attack_point;
}
