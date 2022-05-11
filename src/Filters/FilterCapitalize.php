<?php


namespace AndreyVasin\RequestFilters\Filters;


/**
 * A request filter that capitalizes the first letter of each words using UTF-8
 * @package AndreyVasin\RequestFilters\Filters
 */
class FilterCapitalize implements FilterInterface
{
    function applyFilter(string $input): string
    {
        return mb_convert_case(mb_strtolower($input, 'UTF-8'),  MB_CASE_TITLE);
    }
}
