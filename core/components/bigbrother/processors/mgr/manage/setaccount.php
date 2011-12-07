<?php
/**
 * Set the account in use for the CMP
 *
 * @package bigbrother
 * @subpackage processors
 */
$ga =& $modx->bigbrother;
$ga->updateOption('account', $_REQUEST['account']);

$response['text'] = $modx->lexicon('bigbrother.account_set_succesfully_wait');
$response['success'] = true;

return $modx->toJSON($response);