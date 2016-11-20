<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteSavedDoc");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl7_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl7_argument'}->createConditionValue();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
} else
${'module_srl7_argument'} = null;if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl8_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl8_argument'}->createConditionValue();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
} else
${'member_srl8_argument'} = null;if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress9_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress9_argument'}->createConditionValue();
if(!${'ipaddress9_argument'}->isValid()) return ${'ipaddress9_argument'}->getErrorMessage();
} else
${'ipaddress9_argument'} = null;if(${'ipaddress9_argument'} !== null) ${'ipaddress9_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl7_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl8_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>