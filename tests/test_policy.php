<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(68, 80, 19, 16, 7);
assert(Policy::score($signal_case_1) === 98);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(94, 73, 22, 16, 11);
assert(Policy::score($signal_case_2) === 154);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(84, 92, 22, 9, 8);
assert(Policy::score($signal_case_3) === 180);
assert(Policy::classify($signal_case_3) === "review");
