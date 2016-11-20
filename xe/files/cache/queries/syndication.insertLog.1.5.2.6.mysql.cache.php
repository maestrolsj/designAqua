<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'log_srl20_argument'} = new Argument('log_srl', $args->{'log_srl'});
$db = &DB::getInstance(); $sequence = $db->getNextSequence(); ${'log_srl20_argument'}->ensureDefaultValue($sequence);
if(!${'log_srl20_argument'}->isValid()) return ${'log_srl20_argument'}->getErrorMessage();
if(${'log_srl20_argument'} !== null) ${'log_srl20_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl21_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl21_argument'}->isValid()) return ${'module_srl21_argument'}->getErrorMessage();
} else
${'module_srl21_argument'} = null;if(${'module_srl21_argument'} !== null) ${'module_srl21_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl22_argument'} = new Argument('document_srl', $args->{'document_srl'});
if(!${'document_srl22_argument'}->isValid()) return ${'document_srl22_argument'}->getErrorMessage();
} else
${'document_srl22_argument'} = null;if(${'document_srl22_argument'} !== null) ${'document_srl22_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title23_argument'} = new Argument('title', $args->{'title'});
if(!${'title23_argument'}->isValid()) return ${'title23_argument'}->getErrorMessage();
} else
${'title23_argument'} = null;if(${'title23_argument'} !== null) ${'title23_argument'}->setColumnType('varchar');
if(isset($args->summary)) {
${'summary24_argument'} = new Argument('summary', $args->{'summary'});
if(!${'summary24_argument'}->isValid()) return ${'summary24_argument'}->getErrorMessage();
} else
${'summary24_argument'} = null;if(${'summary24_argument'} !== null) ${'summary24_argument'}->setColumnType('varchar');

${'regdate25_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate25_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate25_argument'}->checkNotNull();
if(!${'regdate25_argument'}->isValid()) return ${'regdate25_argument'}->getErrorMessage();
if(${'regdate25_argument'} !== null) ${'regdate25_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`log_srl`', ${'log_srl20_argument'})
,new InsertExpression('`module_srl`', ${'module_srl21_argument'})
,new InsertExpression('`document_srl`', ${'document_srl22_argument'})
,new InsertExpression('`title`', ${'title23_argument'})
,new InsertExpression('`summary`', ${'summary24_argument'})
,new InsertExpression('`regdate`', ${'regdate25_argument'})
));
$query->setTables(array(
new Table('`xe_syndication_logs`', '`syndication_logs`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>