<?php


namespace AndreyVasin\RequestFilters\Filters\Sanitization;


use AndreyVasin\RequestFilters\Filters\FilterInterface;

/**
 * A request filter than can be used to sanitize email input,
 * removing all illegal characters from an email address.
 * @package AndreyVasin\RequestFilters\Filters
 */
class FilterSanitizeEmail implements FilterInterface
{
    /**
     * @inheritDoc
     */
    function applyFilter(string $input): string
    {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
}