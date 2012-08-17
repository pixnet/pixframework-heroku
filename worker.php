<?php

include(__DIR__ . '/init.inc.php');

define('WORKER_START_AT', microtime(true));

while (true) {
    // XXX: check new job...

    // worker die after 1hour, prevent memory leak
    if (microtime(true) - WORKER_START_AT > 3600) {
        break;
    }
    sleep(1);
}
