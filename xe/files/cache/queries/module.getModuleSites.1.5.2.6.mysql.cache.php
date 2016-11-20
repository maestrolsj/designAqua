<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSites");
$query->setAction("select");
$query->setPriority("");

${'module_srls10_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls10_argument'}->checkNotNull();
${'module_srls10_argument'}->createConditionValue();
if(!${'module_srls10_argument'}->isValid()) return ${'module_srls10_argument'}->getErrorMessage();
if(${'module_srls10_argument'} !== null) ${'module_srls10_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`modules`.`module_srl`', '`module_srl`')
,new SelectExpression('`sites`.`domain`', '`domain`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`modules`.`module_srl`',$module_srls10_argument,"in")
,new ConditionWithoutArgument('`sites`.`site_srl`','`modules`.`site_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>