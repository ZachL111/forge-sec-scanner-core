<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(41, 21, 20, 79);
assert(DomainReviewLens::score($item) === 122);
assert(DomainReviewLens::lane($item) === "watch");
