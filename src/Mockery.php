<?php

declare(strict_types=1);

namespace Thinkverse\Pest\Mockery;

use Mockery;

if (class_exists(Mockery::class)) {
    Mockery::globalHelpers();
}
