<?php
/**
 * @link      <https://github.com/SyzerPHP/Validator> for the canonical source repository.
 * @copyright Copyright (c) 2018, SyzerPHP <https://github.com/SyzerPHP>.
 * @license   <https://github.com/SyzerPHP/Validator/blob/master/LICENSE> New BSD License.
 */
define('VALIDATOR_COMPONENT', 'PRE_LOADED');
define('VALIDATOR_NAMESPACE', 'Syzer\Validator');
define('VALIDATOR_DIR',
[
    'Exception'
]);
function ad(array $a) {
    $mxd = 1;
    foreach ($a as $v) {
        if (is_array($v)) {
            $cd = ad($v) + 1;
            if ($cd > $mxd) {
                $mxd = $cd;
            }
        }
    }
    return $mxd;
}
