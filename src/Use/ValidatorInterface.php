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
 * ValidatorInterface.
 */
interface ValidatorInterface
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
    public function __invoke(array $options = []);
  
}

