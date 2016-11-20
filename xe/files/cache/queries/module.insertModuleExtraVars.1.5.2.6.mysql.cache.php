<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl33_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl33_argument'}->checkFilter('number');
${'module_srl33_argument'}->checkNotNull();
if(!${'module_srl33_argument'}->isValid()) return ${'module_srl33_argument'}->getErrorMessage();
if(${'module_srl33_argument'} !== null) ${'module_srl33_argument'}->setColumnType('number');

${'name34_argument'} = new Argument('name', $args->{'name'});
${'name34_argument'}->checkNotNull();
if(!${'name34_argument'}->isValid()) return ${'name34_argument'}->getErrorMessage();
if(${'name34_argument'} !== null) ${'name34_argument'}->setColumnType('varchar');

${'value35_argument'} = new Argument('value', $args->{'value'});
${'value35_argument'}->checkNotNull();
if(!${'value35_argument'}->isValid()) return ${'value35_argument'}->getErrorMessage();
if(${'value35_argument'} !== null) ${'value35_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl33_argument'})
,new InsertExpression('`name`', ${'name34_argument'})
,new InsertExpression('`value`', ${'value35_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>