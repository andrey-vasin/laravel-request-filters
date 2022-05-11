<?php


namespace AndreyVasin\RequestFilters\Filters;


/**
 * A request filter that will filter out all non-numeric characters.
 * @package AndreyVasin\RequestFilters\Filters
 */
class FilterNumeric implements FilterInterface
{
    function applyFilter(string $input): string
    {
        return preg_replace('/[^0-9]/si', '', $input);
    }
}
