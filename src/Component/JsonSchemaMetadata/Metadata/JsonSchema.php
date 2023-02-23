<?php

namespace Jane\Component\JsonSchemaMetadata\Metadata;

class JsonSchema
{
    public function __construct(
        // Vocabulary for Basic Meta-Data Annotations
        public ?string $title = null,
        public ?string $description = null,
        public mixed $defaultValue = null,
        public bool $hasDefaultValue = false,
        public bool $deprecated = false,
        public bool $readOnly = false,
        public bool $writeOnly = false,

        // Core keywords
        public bool|self $additionalProperties = true,
        /** @var array<string, self> $properties */
        public array $properties = [],
        /** @var array<string, self> $patternProperties */
        public array $patternProperties = [],

        // Keywords for Any Instance Type
        /** @var array<Type> $type */
        public array $type = [Type::OBJECT],
        /** @var mixed[] $enum */
        public array $enum = [],
        public mixed $constValue = null,
        public bool $hasConstValue = false,

        // Keywords for Numeric Instances (number and integer)
        public ?int $multipleOf = null,
        public ?int $minimum = null,
        public ?int $exclusiveMinimum = null,
        public ?int $maximum = null,
        public ?int $exclusiveMaximum = null,

        // Keywords for Strings
        public ?int $minLength = null,
        public ?int $maxLength = null,
        public ?string $pattern = null,

        // Keywords for Arrays
        public ?self $items = null,
        /** @var array<self> $prefixItems */
        public array $prefixItems = [],
        public ?int $minItems = null,
        public ?int $maxItems = null,
        public bool $uniqueItems = false,
        public mixed $contains = null,
        public bool $hasContains = false,
        public ?int $minContains = null,
        public ?int $maxContains = null,

        // Keywords for Objects
        public ?int $minProperties = null,
        public ?int $maxProperties = null,
        /** @var string[] $required */
        public array $required = [],
        /** @var array<string, string[]> $dependentRequired */
        public array $dependentRequired = [],

        // Vocabularies for Semantic Content With "format"
        public ?Format $format = null,

        // Vocabulary for the Contents of String-Encoded Data
        public ?string $contentEncoding = null,
        public ?string $contentMediaType = null,
        public ?self $contentSchema = null,
    ) {
        if (true === $this->additionalProperties) {
            $this->additionalProperties = new self();
        }
    }

    public function merge(self $schema): void
    {
        $updateIfNotNull = fn (mixed $source, mixed & $target) => (null !== $source) ? $target = $source : null;

        $updateIfNotNull($schema->title, $this->title);
        $updateIfNotNull($schema->description, $this->description);
        if ($schema->hasDefaultValue) {
            $this->hasDefaultValue = true;
            $this->defaultValue = $schema->defaultValue;
        }

        $updateIfNotNull($schema->deprecated, $this->deprecated);
        $updateIfNotNull($schema->readOnly, $this->readOnly);
        $updateIfNotNull($schema->writeOnly, $this->writeOnly);

        if (false === $schema->additionalProperties) {
            $this->additionalProperties = $schema->additionalProperties;
        }
        if (\count($schema->properties) > 0) {
            $this->properties = $schema->properties;
        }

        $this->type = $schema->type;
        if (\count($schema->enum) > 0) {
            $this->enum = $schema->enum;
        }
        if ($schema->hasConstValue) {
            $this->hasConstValue = true;
            $this->constValue = $schema->constValue;
        }

        $updateIfNotNull($schema->multipleOf, $this->multipleOf);
        $updateIfNotNull($schema->minimum, $this->minimum);
        $updateIfNotNull($schema->exclusiveMinimum, $this->exclusiveMinimum);
        $updateIfNotNull($schema->maximum, $this->maximum);
        $updateIfNotNull($schema->exclusiveMaximum, $this->exclusiveMaximum);

        $updateIfNotNull($schema->minLength, $this->minLength);
        $updateIfNotNull($schema->maxLength, $this->maxLength);
        $updateIfNotNull($schema->pattern, $this->pattern);

        $updateIfNotNull($schema->items, $this->items);
        if (\count($schema->prefixItems) > 0) {
            $this->prefixItems = $schema->prefixItems;
        }
        $updateIfNotNull($schema->minItems, $this->minLength);
        $updateIfNotNull($schema->maxItems, $this->maxLength);
        $this->uniqueItems = $schema->uniqueItems;
        if ($schema->hasContains) {
            $this->hasContains = true;
            $this->contains = $schema->contains;
        }
        $updateIfNotNull($schema->minContains, $this->minContains);
        $updateIfNotNull($schema->maxContains, $this->maxContains);

        $updateIfNotNull($schema->minProperties, $this->minProperties);
        $updateIfNotNull($schema->maxProperties, $this->maxProperties);
        if (\count($schema->required) > 0) {
            $this->required = $schema->required;
        }
        if (\count($schema->dependentRequired) > 0) {
            $this->dependentRequired = $schema->dependentRequired;
        }

        $updateIfNotNull($schema->format, $this->format);

        $updateIfNotNull($schema->contentEncoding, $this->contentEncoding);
        $updateIfNotNull($schema->contentMediaType, $this->contentMediaType);
        $updateIfNotNull($schema->contentSchema, $this->contentSchema);
    }
}
