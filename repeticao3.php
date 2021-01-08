<?php

for ($count = 1; $count <= 15; $count++) {
    if ($count == 13) {
        continue;
    }

    echo "#$count" . PHP_EOL;
}