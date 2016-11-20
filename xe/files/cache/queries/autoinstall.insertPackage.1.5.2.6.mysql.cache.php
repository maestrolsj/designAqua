<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl16_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl16_argument'}->checkFilter('number');
${'package_srl16_argument'}->checkNotNull();
if(!${'package_srl16_argument'}->isValid()) return ${'package_srl16_argument'}->getErrorMessage();
if(${'package_srl16_argument'} !== null) ${'package_srl16_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl17_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl17_argument'}->checkFilter('number');
if(!${'category_srl17_argument'}->isValid()) return ${'category_srl17_argument'}->getErrorMessage();
} else
${'category_srl17_argument'} = null;if(${'category_srl17_argument'} !== null) ${'category_srl17_argument'}->setColumnType('number');

${'path18_argument'} = new Argument('path', $args->{'path'});
${'path18_argument'}->checkNotNull();
if(!${'path18_argument'}->isValid()) return ${'path18_argument'}->getErrorMessage();
if(${'path18_argument'} !== null) ${'path18_argument'}->setColumnType('varchar');

${'updatedate19_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate19_argument'}->checkNotNull();
if(!${'updatedate19_argument'}->isValid()) return ${'updatedate19_argument'}->getErrorMessage();
if(${'updatedate19_argument'} !== null) ${'updatedate19_argument'}->setColumnType('date');

${'latest_item_srl20_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl20_argument'}->checkNotNull();
if(!${'latest_item_srl20_argument'}->isValid()) return ${'latest_item_srl20_argument'}->getErrorMessage();
if(${'latest_item_srl20_argument'} !== null) ${'latest_item_srl20_argument'}->setColumnType('number');

${'version21_argument'} = new Argument('version', $args->{'version'});
${'version21_argument'}->checkNotNull();
if(!${'version21_argument'}->isValid()) return ${'version21_argument'}->getErrorMessage();
if(${'version21_argument'} !== null) ${'version21_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl16_argument'})
,new InsertExpression('`category_srl`', ${'category_srl17_argument'})
,new InsertExpression('`path`', ${'path18_argument'})
,new InsertExpression('`updatedate`', ${'updatedate19_argument'})
,new InsertExpression('`latest_item_srl`', ${'latest_item_srl20_argument'})
,new InsertExpression('`version`', ${'version21_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>