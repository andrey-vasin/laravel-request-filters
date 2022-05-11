<?php


namespace AndreyVasin\RequestFilters\Filters\Sanitization;

use AndreyVasin\RequestFilters\Filters\FilterInterface;

/**
 * A request filter that can sanitize an input to encode and strip characters, normally
 * from a URL.
 * @package AndreyVasin\RequestFilters\Filters
 */
class FilterSanitizeEncoded implements FilterInterface
{

    /**
     * @inheritDoc
     */
    function applyFilter(string $input): string
    {
        return filter_var($input, FILTER_SANITIZE_ENCODED, FILTER_FLAG_STRIP_HIGH);
    }
}