<?php


namespace AndreyVasin\RequestFilters\Filters;


/**
 * A request filter that will filter the text to lower case
 * @package AndreyVasin\RequestFilters\Filters
 */
class FilterToLower implements FilterInterface
{

    function applyFilter(string $input): string
    {
        return mb_strtolower($input);
    }
}
