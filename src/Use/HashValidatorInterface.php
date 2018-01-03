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
 * HashValidatorInterface.
 */
interface HashValidatorInterface
{

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
    public function valid(string $hashA, string $hashB);
  
}
