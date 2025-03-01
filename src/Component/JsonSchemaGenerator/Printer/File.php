<?php

namespace Jane\Component\JsonSchemaGenerator\Printer;

use PhpParser\Node;

class File
{
    public const TYPE_MODEL = 'model';
    public const TYPE_NORMALIZER = 'model';
    public const TYPE_VALIDATOR = 'model';

    public function __construct(
        public readonly string $filename,
        public readonly Node $node,
        public readonly string $type
    ) {
    }
}
