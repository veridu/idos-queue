<?php
/*
 * Copyright (c) 2012-2016 Veridu Ltd <https://veridu.com>
 * All rights reserved.
 */

declare(strict_types = 1);

namespace App\Validator\Traits;

use Respect\Validation\Validator;

/*
 * Version validation rules.
 */
trait Version {
    /**
     * Asserts a valid version number (optional).
     *
     * @param mixed $version
     *
     * @throws \Respect\Validation\Exceptions\ExceptionInterface
     *
     * @return void
     */
    public function assertOptionalVersion($version) {
        Validator::optional(
            Validator::regex('/^((?:(\d+)\.)?(?:(\d+)\.)?(\*|\d+)|)$/')
        )->assert($version);
    }
}
