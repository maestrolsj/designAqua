<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteOpenIdNonce");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->nonce)) {
${'nonce10_argument'} = new ConditionArgument('nonce', $args->nonce, 'equal');
${'nonce10_argument'}->createConditionValue();
if(!${'nonce10_argument'}->isValid()) return ${'nonce10_argument'}->getErrorMessage();
} else
${'nonce10_argument'} = null;if(${'nonce10_argument'} !== null) ${'nonce10_argument'}->setColumnType('char');

$query->setTables(array(
new Table('`xe_member_openid_nonce`', '`member_openid_nonce`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`nonce`',$nonce10_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>