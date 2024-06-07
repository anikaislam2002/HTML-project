<?php
$v;
$visited = array();
$queue = array();
$adj = array();
$a = -1;
$b = -1;

function bfs($src) {
    global $v, $visited, $queue, $adj, $a, $b;
    for ($i = 1; $i <= $v; $i++) {
        if ($adj[$src][$i] && !$visited[$i]) {
            $queue[++$b] = $i;
        }
        if ($a <= $b) {
            $visited[$queue[$a]] = 1;
            bfs($queue[$a++]);
        }
    }
}


$handle = fopen ("php://stdin","r");
$v = intval(fgets($handle));

for ($i = 1; $i <= $v; $i++) {
    $visited[$i] = 0;
    $queue[$i] = 0;
}


for ($i = 1; $i <= $v; $i++) {
    $adj[$i] = array();
    $line = fgets($handle);
    $adj[$i] = array_map('intval', explode(' ', $line));
}


$src = intval(fgets($handle));
fclose($handle);

bfs($src);


$allReachable = true;
for ($i = 1; $i <= $v; $i++) {
    if ($visited[$i]) {
        echo $i . "\t";
    } else {
        $allReachable = false;
    }
}

if (!$allReachable) {
    echo "All nodes are not reachable\n";
}
?>
