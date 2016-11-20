<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentPage");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
} else
${'module_srl4_argument'} = null;if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->categorySrlList)) {
${'categorySrlList5_argument'} = new ConditionArgument('categorySrlList', $args->categorySrlList, 'in');
${'categorySrlList5_argument'}->createConditionValue();
if(!${'categorySrlList5_argument'}->isValid()) return ${'categorySrlList5_argument'}->getErrorMessage();
} else
${'categorySrlList5_argument'} = null;if(${'categorySrlList5_argument'} !== null) ${'categorySrlList5_argument'}->setColumnType('number');
if(isset($args->comment_count)) {
${'comment_count6_argument'} = new ConditionArgument('comment_count', $args->comment_count, 'more');
${'comment_count6_argument'}->checkFilter('number');
${'comment_count6_argument'}->createConditionValue();
if(!${'comment_count6_argument'}->isValid()) return ${'comment_count6_argument'}->getErrorMessage();
} else
${'comment_count6_argument'} = null;if(${'comment_count6_argument'} !== null) ${'comment_count6_argument'}->setColumnType('number');
if(isset($args->rev_comment_count)) {
${'rev_comment_count7_argument'} = new ConditionArgument('rev_comment_count', $args->rev_comment_count, 'less');
${'rev_comment_count7_argument'}->checkFilter('number');
${'rev_comment_count7_argument'}->createConditionValue();
if(!${'rev_comment_count7_argument'}->isValid()) return ${'rev_comment_count7_argument'}->getErrorMessage();
} else
${'rev_comment_count7_argument'} = null;if(${'rev_comment_count7_argument'} !== null) ${'rev_comment_count7_argument'}->setColumnType('number');
if(isset($args->voted_count)) {
${'voted_count8_argument'} = new ConditionArgument('voted_count', $args->voted_count, 'more');
${'voted_count8_argument'}->checkFilter('number');
${'voted_count8_argument'}->createConditionValue();
if(!${'voted_count8_argument'}->isValid()) return ${'voted_count8_argument'}->getErrorMessage();
} else
${'voted_count8_argument'} = null;if(${'voted_count8_argument'} !== null) ${'voted_count8_argument'}->setColumnType('number');
if(isset($args->rev_voted_count)) {
${'rev_voted_count9_argument'} = new ConditionArgument('rev_voted_count', $args->rev_voted_count, 'less');
${'rev_voted_count9_argument'}->checkFilter('number');
${'rev_voted_count9_argument'}->createConditionValue();
if(!${'rev_voted_count9_argument'}->isValid()) return ${'rev_voted_count9_argument'}->getErrorMessage();
} else
${'rev_voted_count9_argument'} = null;if(${'rev_voted_count9_argument'} !== null) ${'rev_voted_count9_argument'}->setColumnType('number');
if(isset($args->blamed_count)) {
${'blamed_count10_argument'} = new ConditionArgument('blamed_count', $args->blamed_count, 'less');
${'blamed_count10_argument'}->checkFilter('number');
${'blamed_count10_argument'}->createConditionValue();
if(!${'blamed_count10_argument'}->isValid()) return ${'blamed_count10_argument'}->getErrorMessage();
} else
${'blamed_count10_argument'} = null;if(${'blamed_count10_argument'} !== null) ${'blamed_count10_argument'}->setColumnType('number');
if(isset($args->rev_blamed_count)) {
${'rev_blamed_count11_argument'} = new ConditionArgument('rev_blamed_count', $args->rev_blamed_count, 'more');
${'rev_blamed_count11_argument'}->checkFilter('number');
${'rev_blamed_count11_argument'}->createConditionValue();
if(!${'rev_blamed_count11_argument'}->isValid()) return ${'rev_blamed_count11_argument'}->getErrorMessage();
} else
${'rev_blamed_count11_argument'} = null;if(${'rev_blamed_count11_argument'} !== null) ${'rev_blamed_count11_argument'}->setColumnType('number');
if(isset($args->readed_count)) {
${'readed_count12_argument'} = new ConditionArgument('readed_count', $args->readed_count, 'more');
${'readed_count12_argument'}->checkFilter('number');
${'readed_count12_argument'}->createConditionValue();
if(!${'readed_count12_argument'}->isValid()) return ${'readed_count12_argument'}->getErrorMessage();
} else
${'readed_count12_argument'} = null;if(${'readed_count12_argument'} !== null) ${'readed_count12_argument'}->setColumnType('number');
if(isset($args->rev_readed_count)) {
${'rev_readed_count13_argument'} = new ConditionArgument('rev_readed_count', $args->rev_readed_count, 'less');
${'rev_readed_count13_argument'}->checkFilter('number');
${'rev_readed_count13_argument'}->createConditionValue();
if(!${'rev_readed_count13_argument'}->isValid()) return ${'rev_readed_count13_argument'}->getErrorMessage();
} else
${'rev_readed_count13_argument'} = null;if(${'rev_readed_count13_argument'} !== null) ${'rev_readed_count13_argument'}->setColumnType('number');
if(isset($args->list_order)) {
${'list_order14_argument'} = new ConditionArgument('list_order', $args->list_order, 'less');
${'list_order14_argument'}->checkFilter('number');
${'list_order14_argument'}->createConditionValue();
if(!${'list_order14_argument'}->isValid()) return ${'list_order14_argument'}->getErrorMessage();
} else
${'list_order14_argument'} = null;if(${'list_order14_argument'} !== null) ${'list_order14_argument'}->setColumnType('number');
if(isset($args->rev_list_order)) {
${'rev_list_order15_argument'} = new ConditionArgument('rev_list_order', $args->rev_list_order, 'more');
${'rev_list_order15_argument'}->checkFilter('number');
${'rev_list_order15_argument'}->createConditionValue();
if(!${'rev_list_order15_argument'}->isValid()) return ${'rev_list_order15_argument'}->getErrorMessage();
} else
${'rev_list_order15_argument'} = null;if(${'rev_list_order15_argument'} !== null) ${'rev_list_order15_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title16_argument'} = new ConditionArgument('title', $args->title, 'more');
${'title16_argument'}->checkFilter('number');
${'title16_argument'}->createConditionValue();
if(!${'title16_argument'}->isValid()) return ${'title16_argument'}->getErrorMessage();
} else
${'title16_argument'} = null;if(${'title16_argument'} !== null) ${'title16_argument'}->setColumnType('varchar');
if(isset($args->rev_title)) {
${'rev_title17_argument'} = new ConditionArgument('rev_title', $args->rev_title, 'less');
${'rev_title17_argument'}->checkFilter('number');
${'rev_title17_argument'}->createConditionValue();
if(!${'rev_title17_argument'}->isValid()) return ${'rev_title17_argument'}->getErrorMessage();
} else
${'rev_title17_argument'} = null;if(${'rev_title17_argument'} !== null) ${'rev_title17_argument'}->setColumnType('varchar');
if(isset($args->regdate)) {
${'regdate18_argument'} = new ConditionArgument('regdate', $args->regdate, 'more');
${'regdate18_argument'}->checkFilter('number');
${'regdate18_argument'}->createConditionValue();
if(!${'regdate18_argument'}->isValid()) return ${'regdate18_argument'}->getErrorMessage();
} else
${'regdate18_argument'} = null;if(${'regdate18_argument'} !== null) ${'regdate18_argument'}->setColumnType('date');
if(isset($args->rev_regdate)) {
${'rev_regdate19_argument'} = new ConditionArgument('rev_regdate', $args->rev_regdate, 'less');
${'rev_regdate19_argument'}->checkFilter('number');
${'rev_regdate19_argument'}->createConditionValue();
if(!${'rev_regdate19_argument'}->isValid()) return ${'rev_regdate19_argument'}->getErrorMessage();
} else
${'rev_regdate19_argument'} = null;if(${'rev_regdate19_argument'} !== null) ${'rev_regdate19_argument'}->setColumnType('date');
if(isset($args->update_order)) {
${'update_order20_argument'} = new ConditionArgument('update_order', $args->update_order, 'less');
${'update_order20_argument'}->checkFilter('number');
${'update_order20_argument'}->createConditionValue();
if(!${'update_order20_argument'}->isValid()) return ${'update_order20_argument'}->getErrorMessage();
} else
${'update_order20_argument'} = null;if(${'update_order20_argument'} !== null) ${'update_order20_argument'}->setColumnType('number');
if(isset($args->rev_update_order)) {
${'rev_update_order21_argument'} = new ConditionArgument('rev_update_order', $args->rev_update_order, 'more');
${'rev_update_order21_argument'}->checkFilter('number');
${'rev_update_order21_argument'}->createConditionValue();
if(!${'rev_update_order21_argument'}->isValid()) return ${'rev_update_order21_argument'}->getErrorMessage();
} else
${'rev_update_order21_argument'} = null;if(${'rev_update_order21_argument'} !== null) ${'rev_update_order21_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList22_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList22_argument'}->createConditionValue();
if(!${'statusList22_argument'}->isValid()) return ${'statusList22_argument'}->getErrorMessage();
} else
${'statusList22_argument'} = null;if(${'statusList22_argument'} !== null) ${'statusList22_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title23_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title23_argument'}->createConditionValue();
if(!${'s_title23_argument'}->isValid()) return ${'s_title23_argument'}->getErrorMessage();
} else
${'s_title23_argument'} = null;if(${'s_title23_argument'} !== null) ${'s_title23_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content24_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content24_argument'}->createConditionValue();
if(!${'s_content24_argument'}->isValid()) return ${'s_content24_argument'}->getErrorMessage();
} else
${'s_content24_argument'} = null;if(${'s_content24_argument'} !== null) ${'s_content24_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name25_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name25_argument'}->createConditionValue();
if(!${'s_user_name25_argument'}->isValid()) return ${'s_user_name25_argument'}->getErrorMessage();
} else
${'s_user_name25_argument'} = null;if(${'s_user_name25_argument'} !== null) ${'s_user_name25_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id26_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id26_argument'}->createConditionValue();
if(!${'s_user_id26_argument'}->isValid()) return ${'s_user_id26_argument'}->getErrorMessage();
} else
${'s_user_id26_argument'} = null;if(${'s_user_id26_argument'} !== null) ${'s_user_id26_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name27_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name27_argument'}->createConditionValue();
if(!${'s_nick_name27_argument'}->isValid()) return ${'s_nick_name27_argument'}->getErrorMessage();
} else
${'s_nick_name27_argument'} = null;if(${'s_nick_name27_argument'} !== null) ${'s_nick_name27_argument'}->setColumnType('varchar');
if(isset($args->s_email_addres)) {
${'s_email_addres28_argument'} = new ConditionArgument('s_email_addres', $args->s_email_addres, 'like');
${'s_email_addres28_argument'}->createConditionValue();
if(!${'s_email_addres28_argument'}->isValid()) return ${'s_email_addres28_argument'}->getErrorMessage();
} else
${'s_email_addres28_argument'} = null;if(${'s_email_addres28_argument'} !== null) ${'s_email_addres28_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage29_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage29_argument'}->createConditionValue();
if(!${'s_homepage29_argument'}->isValid()) return ${'s_homepage29_argument'}->getErrorMessage();
} else
${'s_homepage29_argument'} = null;if(${'s_homepage29_argument'} !== null) ${'s_homepage29_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags30_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags30_argument'}->createConditionValue();
if(!${'s_tags30_argument'}->isValid()) return ${'s_tags30_argument'}->getErrorMessage();
} else
${'s_tags30_argument'} = null;if(${'s_tags30_argument'} !== null) ${'s_tags30_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl31_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl31_argument'}->createConditionValue();
if(!${'s_member_srl31_argument'}->isValid()) return ${'s_member_srl31_argument'}->getErrorMessage();
} else
${'s_member_srl31_argument'} = null;if(${'s_member_srl31_argument'} !== null) ${'s_member_srl31_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count32_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count32_argument'}->createConditionValue();
if(!${'s_readed_count32_argument'}->isValid()) return ${'s_readed_count32_argument'}->getErrorMessage();
} else
${'s_readed_count32_argument'} = null;if(${'s_readed_count32_argument'} !== null) ${'s_readed_count32_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count33_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count33_argument'}->createConditionValue();
if(!${'s_voted_count33_argument'}->isValid()) return ${'s_voted_count33_argument'}->getErrorMessage();
} else
${'s_voted_count33_argument'} = null;if(${'s_voted_count33_argument'} !== null) ${'s_voted_count33_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count34_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count34_argument'}->createConditionValue();
if(!${'s_blamed_count34_argument'}->isValid()) return ${'s_blamed_count34_argument'}->getErrorMessage();
} else
${'s_blamed_count34_argument'} = null;if(${'s_blamed_count34_argument'} !== null) ${'s_blamed_count34_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count35_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count35_argument'}->createConditionValue();
if(!${'s_comment_count35_argument'}->isValid()) return ${'s_comment_count35_argument'}->getErrorMessage();
} else
${'s_comment_count35_argument'} = null;if(${'s_comment_count35_argument'} !== null) ${'s_comment_count35_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count36_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count36_argument'}->createConditionValue();
if(!${'s_trackback_count36_argument'}->isValid()) return ${'s_trackback_count36_argument'}->getErrorMessage();
} else
${'s_trackback_count36_argument'} = null;if(${'s_trackback_count36_argument'} !== null) ${'s_trackback_count36_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count37_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count37_argument'}->createConditionValue();
if(!${'s_uploaded_count37_argument'}->isValid()) return ${'s_uploaded_count37_argument'}->getErrorMessage();
} else
${'s_uploaded_count37_argument'} = null;if(${'s_uploaded_count37_argument'} !== null) ${'s_uploaded_count37_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate38_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate38_argument'}->createConditionValue();
if(!${'s_regdate38_argument'}->isValid()) return ${'s_regdate38_argument'}->getErrorMessage();
} else
${'s_regdate38_argument'} = null;if(${'s_regdate38_argument'} !== null) ${'s_regdate38_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update39_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update39_argument'}->createConditionValue();
if(!${'s_last_update39_argument'}->isValid()) return ${'s_last_update39_argument'}->getErrorMessage();
} else
${'s_last_update39_argument'} = null;if(${'s_last_update39_argument'} !== null) ${'s_last_update39_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress40_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress40_argument'}->createConditionValue();
if(!${'s_ipaddress40_argument'}->isValid()) return ${'s_ipaddress40_argument'}->getErrorMessage();
} else
${'s_ipaddress40_argument'} = null;if(${'s_ipaddress40_argument'} !== null) ${'s_ipaddress40_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl4_argument,"equal")
,new ConditionWithArgument('`category_srl`',$categorySrlList5_argument,"in", 'and')
,new ConditionWithArgument('`comment_count`',$comment_count6_argument,"more", 'and')
,new ConditionWithArgument('`comment_count`',$rev_comment_count7_argument,"less", 'and')
,new ConditionWithArgument('`voted_count`',$voted_count8_argument,"more", 'and')
,new ConditionWithArgument('`voted_count`',$rev_voted_count9_argument,"less", 'and')
,new ConditionWithArgument('`blamed_count`',$blamed_count10_argument,"less", 'and')
,new ConditionWithArgument('`blamed_count`',$rev_blamed_count11_argument,"more", 'and')
,new ConditionWithArgument('`readed_count`',$readed_count12_argument,"more", 'and')
,new ConditionWithArgument('`readed_count`',$rev_readed_count13_argument,"less", 'and')
,new ConditionWithArgument('`list_order`',$list_order14_argument,"less", 'and')
,new ConditionWithArgument('`list_order`',$rev_list_order15_argument,"more", 'and')
,new ConditionWithArgument('`title`',$title16_argument,"more", 'and')
,new ConditionWithArgument('`title`',$rev_title17_argument,"less", 'and')
,new ConditionWithArgument('`regdate`',$regdate18_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$rev_regdate19_argument,"less", 'and')
,new ConditionWithArgument('`update_order`',$update_order20_argument,"less", 'and')
,new ConditionWithArgument('`update_order`',$rev_update_order21_argument,"more", 'and')
,new ConditionWithArgument('`status`',$statusList22_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title23_argument,"like")
,new ConditionWithArgument('`content`',$s_content24_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name25_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id26_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name27_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_addres28_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage29_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags30_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl31_argument,"equal", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count32_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count33_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count34_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count35_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count36_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count37_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate38_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update39_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress40_argument,"like_prefix", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>