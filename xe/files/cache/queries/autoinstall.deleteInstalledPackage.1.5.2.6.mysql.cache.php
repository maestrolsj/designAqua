<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteInstalledPackage");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->package_srl)) {
${'package_srl22_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl22_argument'}->checkFilter('number');
${'package_srl22_argument'}->createConditionValue();
if(!${'package_srl22_argument'}->isValid()) return ${'package_srl22_argument'}->getErrorMessage();
} else
${'package_srl22_argument'} = null;if(${'package_srl22_argument'} !== null) ${'package_srl22_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl22_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>