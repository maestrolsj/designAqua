<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteOpenIdAssociation");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->server_url)) {
${'server_url11_argument'} = new ConditionArgument('server_url', $args->server_url, 'equal');
${'server_url11_argument'}->createConditionValue();
if(!${'server_url11_argument'}->isValid()) return ${'server_url11_argument'}->getErrorMessage();
} else
${'server_url11_argument'} = null;if(${'server_url11_argument'} !== null) ${'server_url11_argument'}->setColumnType('text');
if(isset($args->handle)) {
${'handle12_argument'} = new ConditionArgument('handle', $args->handle, 'equal');
${'handle12_argument'}->createConditionValue();
if(!${'handle12_argument'}->isValid()) return ${'handle12_argument'}->getErrorMessage();
} else
${'handle12_argument'} = null;if(${'handle12_argument'} !== null) ${'handle12_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_member_openid_association`', '`member_openid_association`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`server_url`',$server_url11_argument,"equal")
,new ConditionWithArgument('`handle`',$handle12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>