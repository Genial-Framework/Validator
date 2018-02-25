<?php
/**
 * This file is a part of Genial Validator.
 *
 * @link    <https://github.com/genial-framework/Validator> Github Repository.
 * @license <https://github.com/genial-framework/Validator/blob/master/LICENSE> New BSD License.
 */

define('VALIDATOR_VERSION', '1.0.0');

function array_depth(array $array): int
{
    $max_depth = 1;
    foreach ($array as $value)
    {
        if (is_array($value))
        {
            $depth = array_depth($value) + 1;
            if ($depth > $max_depth)
            {
                $max_depth = $depth;
            }
        }
    }
    return $max_depth;
}
