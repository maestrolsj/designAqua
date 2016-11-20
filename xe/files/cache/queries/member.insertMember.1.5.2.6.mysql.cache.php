<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'user_id3_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id3_argument'}->checkFilter('userid');
${'user_id3_argument'}->checkNotNull();
if(!${'user_id3_argument'}->isValid()) return ${'user_id3_argument'}->getErrorMessage();
if(${'user_id3_argument'} !== null) ${'user_id3_argument'}->setColumnType('varchar');

${'email_address4_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address4_argument'}->checkFilter('email');
${'email_address4_argument'}->checkNotNull();
if(!${'email_address4_argument'}->isValid()) return ${'email_address4_argument'}->getErrorMessage();
if(${'email_address4_argument'} !== null) ${'email_address4_argument'}->setColumnType('varchar');

${'password5_argument'} = new Argument('password', $args->{'password'});
${'password5_argument'}->checkNotNull();
if(!${'password5_argument'}->isValid()) return ${'password5_argument'}->getErrorMessage();
if(${'password5_argument'} !== null) ${'password5_argument'}->setColumnType('varchar');

${'email_id6_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id6_argument'}->checkNotNull();
if(!${'email_id6_argument'}->isValid()) return ${'email_id6_argument'}->getErrorMessage();
if(${'email_id6_argument'} !== null) ${'email_id6_argument'}->setColumnType('varchar');

${'email_host7_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host7_argument'}->checkNotNull();
if(!${'email_host7_argument'}->isValid()) return ${'email_host7_argument'}->getErrorMessage();
if(${'email_host7_argument'} !== null) ${'email_host7_argument'}->setColumnType('varchar');

${'user_name8_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name8_argument'}->checkNotNull();
if(!${'user_name8_argument'}->isValid()) return ${'user_name8_argument'}->getErrorMessage();
if(${'user_name8_argument'} !== null) ${'user_name8_argument'}->setColumnType('varchar');

${'nick_name9_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name9_argument'}->checkNotNull();
if(!${'nick_name9_argument'}->isValid()) return ${'nick_name9_argument'}->getErrorMessage();
if(${'nick_name9_argument'} !== null) ${'nick_name9_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question10_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question10_argument'}->isValid()) return ${'find_account_question10_argument'}->getErrorMessage();
} else
${'find_account_question10_argument'} = null;if(${'find_account_question10_argument'} !== null) ${'find_account_question10_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer11_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer11_argument'}->isValid()) return ${'find_account_answer11_argument'}->getErrorMessage();
} else
${'find_account_answer11_argument'} = null;if(${'find_account_answer11_argument'} !== null) ${'find_account_answer11_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage12_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage12_argument'}->isValid()) return ${'homepage12_argument'}->getErrorMessage();
} else
${'homepage12_argument'} = null;if(${'homepage12_argument'} !== null) ${'homepage12_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog13_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog13_argument'}->isValid()) return ${'blog13_argument'}->getErrorMessage();
} else
${'blog13_argument'} = null;if(${'blog13_argument'} !== null) ${'blog13_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday14_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday14_argument'}->isValid()) return ${'birthday14_argument'}->getErrorMessage();
} else
${'birthday14_argument'} = null;if(${'birthday14_argument'} !== null) ${'birthday14_argument'}->setColumnType('char');

${'allow_mailing15_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing15_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing15_argument'}->isValid()) return ${'allow_mailing15_argument'}->getErrorMessage();
if(${'allow_mailing15_argument'} !== null) ${'allow_mailing15_argument'}->setColumnType('char');

${'allow_message16_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message16_argument'}->ensureDefaultValue('Y');
if(!${'allow_message16_argument'}->isValid()) return ${'allow_message16_argument'}->getErrorMessage();
if(${'allow_message16_argument'} !== null) ${'allow_message16_argument'}->setColumnType('char');

${'denied17_argument'} = new Argument('denied', $args->{'denied'});
${'denied17_argument'}->ensureDefaultValue('N');
if(!${'denied17_argument'}->isValid()) return ${'denied17_argument'}->getErrorMessage();
if(${'denied17_argument'} !== null) ${'denied17_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date18_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date18_argument'}->isValid()) return ${'limit_date18_argument'}->getErrorMessage();
} else
${'limit_date18_argument'} = null;if(${'limit_date18_argument'} !== null) ${'limit_date18_argument'}->setColumnType('date');

${'regdate19_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate19_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate19_argument'}->isValid()) return ${'regdate19_argument'}->getErrorMessage();
if(${'regdate19_argument'} !== null) ${'regdate19_argument'}->setColumnType('date');

${'change_password_date20_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date20_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'change_password_date20_argument'}->isValid()) return ${'change_password_date20_argument'}->getErrorMessage();
if(${'change_password_date20_argument'} !== null) ${'change_password_date20_argument'}->setColumnType('date');

${'last_login21_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login21_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_login21_argument'}->isValid()) return ${'last_login21_argument'}->getErrorMessage();
if(${'last_login21_argument'} !== null) ${'last_login21_argument'}->setColumnType('date');

${'is_admin22_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin22_argument'}->ensureDefaultValue('N');
if(!${'is_admin22_argument'}->isValid()) return ${'is_admin22_argument'}->getErrorMessage();
if(${'is_admin22_argument'} !== null) ${'is_admin22_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description23_argument'} = new Argument('description', $args->{'description'});
if(!${'description23_argument'}->isValid()) return ${'description23_argument'}->getErrorMessage();
} else
${'description23_argument'} = null;if(${'description23_argument'} !== null) ${'description23_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars24_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars24_argument'}->isValid()) return ${'extra_vars24_argument'}->getErrorMessage();
} else
${'extra_vars24_argument'} = null;if(${'extra_vars24_argument'} !== null) ${'extra_vars24_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order25_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order25_argument'}->isValid()) return ${'list_order25_argument'}->getErrorMessage();
} else
${'list_order25_argument'} = null;if(${'list_order25_argument'} !== null) ${'list_order25_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`user_id`', ${'user_id3_argument'})
,new InsertExpression('`email_address`', ${'email_address4_argument'})
,new InsertExpression('`password`', ${'password5_argument'})
,new InsertExpression('`email_id`', ${'email_id6_argument'})
,new InsertExpression('`email_host`', ${'email_host7_argument'})
,new InsertExpression('`user_name`', ${'user_name8_argument'})
,new InsertExpression('`nick_name`', ${'nick_name9_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question10_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer11_argument'})
,new InsertExpression('`homepage`', ${'homepage12_argument'})
,new InsertExpression('`blog`', ${'blog13_argument'})
,new InsertExpression('`birthday`', ${'birthday14_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing15_argument'})
,new InsertExpression('`allow_message`', ${'allow_message16_argument'})
,new InsertExpression('`denied`', ${'denied17_argument'})
,new InsertExpression('`limit_date`', ${'limit_date18_argument'})
,new InsertExpression('`regdate`', ${'regdate19_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date20_argument'})
,new InsertExpression('`last_login`', ${'last_login21_argument'})
,new InsertExpression('`is_admin`', ${'is_admin22_argument'})
,new InsertExpression('`description`', ${'description23_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars24_argument'})
,new InsertExpression('`list_order`', ${'list_order25_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>