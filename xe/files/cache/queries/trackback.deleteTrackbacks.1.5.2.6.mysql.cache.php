<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteTrackbacks");
$query->setAction("delete");
$query->setPriority("");

${'document_srl26_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl26_argument'}->checkFilter('number');
${'document_srl26_argument'}->checkNotNull();
${'document_srl26_argument'}->createConditionValue();
if(!${'document_srl26_argument'}->isValid()) return ${'document_srl26_argument'}->getErrorMessage();
if(${'document_srl26_argument'} !== null) ${'document_srl26_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_trackbacks`', '`trackbacks`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl26_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>