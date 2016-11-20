<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl23_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl23_argument'}->checkFilter('number');
${'package_srl23_argument'}->checkNotNull();
if(!${'package_srl23_argument'}->isValid()) return ${'package_srl23_argument'}->getErrorMessage();
if(${'package_srl23_argument'} !== null) ${'package_srl23_argument'}->setColumnType('number');

${'version24_argument'} = new Argument('version', $args->{'version'});
${'version24_argument'}->checkNotNull();
if(!${'version24_argument'}->isValid()) return ${'version24_argument'}->getErrorMessage();
if(${'version24_argument'} !== null) ${'version24_argument'}->setColumnType('varchar');

${'current_version25_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version25_argument'}->checkNotNull();
if(!${'current_version25_argument'}->isValid()) return ${'current_version25_argument'}->getErrorMessage();
if(${'current_version25_argument'} !== null) ${'current_version25_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update26_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update26_argument'}->isValid()) return ${'need_update26_argument'}->getErrorMessage();
} else
${'need_update26_argument'} = null;if(${'need_update26_argument'} !== null) ${'need_update26_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl23_argument'})
,new InsertExpression('`version`', ${'version24_argument'})
,new InsertExpression('`current_version`', ${'current_version25_argument'})
,new InsertExpression('`need_update`', ${'need_update26_argument'})
));
$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>