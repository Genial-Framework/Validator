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

define('VALIDATOR_DEPENDENT_ACTIVE', true);

if (!defined('ENV_ADAPTER_ACTIVE'))
{
    trigger_error(
        '`Genial-Framework\Env` is required for `Genial-Framework\Validator` to function properly.',
        E_USER_ERROR
    );
}
