<?php

declare(strict_types=1);

namespace Hizpark\PhpForge\Validators;

use Exception;
use Hizpark\PhpForge\Entities\UploadedFile;
use Hizpark\PhpForge\Interfaces\UploadFileValidatorInterface;

/**
 * Class UploadFileValidator
 *
 * This is an example implementation of the UploadFileValidatorInterface.
 * Users are encouraged to implement their own validation logic based
 * on their specific requirements.
 */
class UploadFileValidator implements UploadFileValidatorInterface
{
    /**
     * Validate the uploaded file.
     *
     * @param UploadedFile $file The uploaded file instance
     * @throws Exception if validation fails
     */
    public function validate(UploadedFile $file): void
    {
        // Check file MIME type
        $allowedMimeTypes = ['image/jpeg', 'images/png'];
        if (!in_array($file->type, $allowedMimeTypes)) {
            throw new Exception('File type is not allowed');
        }

        // Check file size (max 1MB)
        $allowedMaxSize = 1024 * 1024;
        if ($file->size > $allowedMaxSize) {
            throw new Exception('File is too big');
        }
    }
}
