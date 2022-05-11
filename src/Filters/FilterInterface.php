<?php


namespace AndreyVasin\RequestFilters\Filters;


/**
 * An interface that can be used to implement a Laravel request filter
 * @package AndreyVasin\RequestFilters\Filters
 */
interface FilterInterface
{
    /**
     * Apply the filter to an input string and return a filtered input string
     * @param string $input the input value that should not be null
     * @return string a filtered input value
     */
    function applyFilter(string $input) : string;
}
