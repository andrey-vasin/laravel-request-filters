<?php


namespace AndreyVasin\RequestFilters\Filters\Sanitization;


use AndreyVasin\RequestFilters\Filters\FilterInterface;

/**
 * A request filter that will sanitize input to remove tags and special characters.
 * @package AndreyVasin\RequestFilters\Filters\Sanitization
 */
class FilterSantizeText implements FilterInterface
{
    /**
     * @inheritDoc
     */
    function applyFilter(string $input): string
    {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
}