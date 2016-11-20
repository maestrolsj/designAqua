<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getGroups");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl17_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl17_argument'}->createConditionValue();
if(!${'site_srl17_argument'}->isValid()) return ${'site_srl17_argument'}->getErrorMessage();
} else
${'site_srl17_argument'} = null;if(${'site_srl17_argument'} !== null) ${'site_srl17_argument'}->setColumnType('number');

${'sort_index18_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index18_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index18_argument'}->isValid()) return ${'sort_index18_argument'}->getErrorMessage();

${'order_type19_argument'} = new SortArgument('order_type19', $args->order_type);
${'order_type19_argument'}->ensureDefaultValue('asc');
if(!${'order_type19_argument'}->isValid()) return ${'order_type19_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl17_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index18_argument'}, $order_type19_argument)
));
$query->setLimit();
return $query; ?>