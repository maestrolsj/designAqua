<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl32_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl32_argument'}->checkFilter('number');
${'member_srl32_argument'}->checkNotNull();
if(!${'member_srl32_argument'}->isValid()) return ${'member_srl32_argument'}->getErrorMessage();
if(${'member_srl32_argument'} !== null) ${'member_srl32_argument'}->setColumnType('number');

${'point33_argument'} = new Argument('point', $args->{'point'});
${'point33_argument'}->checkFilter('number');
${'point33_argument'}->ensureDefaultValue('0');
${'point33_argument'}->checkNotNull();
if(!${'point33_argument'}->isValid()) return ${'point33_argument'}->getErrorMessage();
if(${'point33_argument'} !== null) ${'point33_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl32_argument'})
,new InsertExpression('`point`', ${'point33_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>