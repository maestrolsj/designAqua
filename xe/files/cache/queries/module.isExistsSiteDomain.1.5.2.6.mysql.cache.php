<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("isExistsSiteDomain");
$query->setAction("select");
$query->setPriority("");

${'domain10_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain10_argument'}->checkNotNull();
${'domain10_argument'}->createConditionValue();
if(!${'domain10_argument'}->isValid()) return ${'domain10_argument'}->getErrorMessage();
if(${'domain10_argument'} !== null) ${'domain10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`domain`',$domain10_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>