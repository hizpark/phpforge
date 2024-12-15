<?php

declare(strict_types=1);

namespace Hizpark\PhpForge\Interfaces;

use Exception;
use Hizpark\PhpForge\Entities\UploadedFile;

interface UploadFileValidatorInterface
{
    /**
     * Validate the uploaded file.
     *
     * @param UploadedFile $file
     * @return void
     * @throws Exception
     */
    public function validate(UploadedFile $file): void;
}
