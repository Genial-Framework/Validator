<?php
/**
 * Genial Framework.
 *
 * @author    Nicholas English <https://github.com/Nenglish7>
 * @author    Genial Contributors <https://github.com/orgs/Genial-Framework/people>
 *
 * @link      <https://github.com/Genial-Framework/Validator> for the canonical source repository.
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Validator/blob/master/LICENSE> New BSD License.
 */

namespace Genial\Validator\Use;

/**
 * HashEquals.
 */
class HashEquals implements ValidatorInterface, HashValidatorInterface
{
 
    /**
     * __invoke().
     *
     * Set options for proper use.
     *
     * @param array|[] $options The validator options.
     *
     * @return void.
     */
    public function __invoke(array $options = [])
    {
        /* ... */
    }
  
    /**
     * valid().
     *
     * Check to see if the hashes are equal.
     *
     * @param string $hashA The hash the other hash should be equal to.
     * @param string $hashB The hash to test against the first hash.
     *
     * @return bool True if the hashes are equal and false if they are not.
     */
    public function valid(string $hashA, string $hashB)
    {
        return hash_equals($hashA, $hashB); 
    }
  
}
