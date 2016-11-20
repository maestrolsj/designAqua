<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertDocument");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl6_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->checkNotNull();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');

${'module_srl7_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl7_argument'}->checkFilter('number');
${'module_srl7_argument'}->ensureDefaultValue('0');
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');

${'category_srl8_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl8_argument'}->checkFilter('number');
${'category_srl8_argument'}->ensureDefaultValue('0');
if(!${'category_srl8_argument'}->isValid()) return ${'category_srl8_argument'}->getErrorMessage();
if(${'category_srl8_argument'} !== null) ${'category_srl8_argument'}->setColumnType('number');

${'lang_code9_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code9_argument'}->ensureDefaultValue('');
if(!${'lang_code9_argument'}->isValid()) return ${'lang_code9_argument'}->getErrorMessage();
if(${'lang_code9_argument'} !== null) ${'lang_code9_argument'}->setColumnType('varchar');

${'is_notice10_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice10_argument'}->ensureDefaultValue('N');
${'is_notice10_argument'}->checkNotNull();
if(!${'is_notice10_argument'}->isValid()) return ${'is_notice10_argument'}->getErrorMessage();
if(${'is_notice10_argument'} !== null) ${'is_notice10_argument'}->setColumnType('char');

${'title11_argument'} = new Argument('title', $args->{'title'});
${'title11_argument'}->checkNotNull();
if(!${'title11_argument'}->isValid()) return ${'title11_argument'}->getErrorMessage();
if(${'title11_argument'} !== null) ${'title11_argument'}->setColumnType('varchar');

${'title_bold12_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold12_argument'}->ensureDefaultValue('N');
if(!${'title_bold12_argument'}->isValid()) return ${'title_bold12_argument'}->getErrorMessage();
if(${'title_bold12_argument'} !== null) ${'title_bold12_argument'}->setColumnType('char');

${'title_color13_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color13_argument'}->ensureDefaultValue('N');
if(!${'title_color13_argument'}->isValid()) return ${'title_color13_argument'}->getErrorMessage();
if(${'title_color13_argument'} !== null) ${'title_color13_argument'}->setColumnType('varchar');

${'content14_argument'} = new Argument('content', $args->{'content'});
${'content14_argument'}->checkNotNull();
if(!${'content14_argument'}->isValid()) return ${'content14_argument'}->getErrorMessage();
if(${'content14_argument'} !== null) ${'content14_argument'}->setColumnType('bigtext');

${'readed_count15_argument'} = new Argument('readed_count', $args->{'readed_count'});
${'readed_count15_argument'}->ensureDefaultValue('0');
if(!${'readed_count15_argument'}->isValid()) return ${'readed_count15_argument'}->getErrorMessage();
if(${'readed_count15_argument'} !== null) ${'readed_count15_argument'}->setColumnType('number');

${'blamed_count16_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count16_argument'}->ensureDefaultValue('0');
if(!${'blamed_count16_argument'}->isValid()) return ${'blamed_count16_argument'}->getErrorMessage();
if(${'blamed_count16_argument'} !== null) ${'blamed_count16_argument'}->setColumnType('number');

${'voted_count17_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count17_argument'}->ensureDefaultValue('0');
if(!${'voted_count17_argument'}->isValid()) return ${'voted_count17_argument'}->getErrorMessage();
if(${'voted_count17_argument'} !== null) ${'voted_count17_argument'}->setColumnType('number');

${'comment_count18_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count18_argument'}->ensureDefaultValue('0');
if(!${'comment_count18_argument'}->isValid()) return ${'comment_count18_argument'}->getErrorMessage();
if(${'comment_count18_argument'} !== null) ${'comment_count18_argument'}->setColumnType('number');

${'trackback_count19_argument'} = new Argument('trackback_count', $args->{'trackback_count'});
${'trackback_count19_argument'}->ensureDefaultValue('0');
if(!${'trackback_count19_argument'}->isValid()) return ${'trackback_count19_argument'}->getErrorMessage();
if(${'trackback_count19_argument'} !== null) ${'trackback_count19_argument'}->setColumnType('number');

${'uploaded_count20_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count20_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count20_argument'}->isValid()) return ${'uploaded_count20_argument'}->getErrorMessage();
if(${'uploaded_count20_argument'} !== null) ${'uploaded_count20_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password21_argument'} = new Argument('password', $args->{'password'});
if(!${'password21_argument'}->isValid()) return ${'password21_argument'}->getErrorMessage();
} else
${'password21_argument'} = null;if(${'password21_argument'} !== null) ${'password21_argument'}->setColumnType('varchar');

${'nick_name22_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name22_argument'}->checkNotNull();
if(!${'nick_name22_argument'}->isValid()) return ${'nick_name22_argument'}->getErrorMessage();
if(${'nick_name22_argument'} !== null) ${'nick_name22_argument'}->setColumnType('varchar');

${'member_srl23_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl23_argument'}->checkFilter('number');
${'member_srl23_argument'}->ensureDefaultValue('0');
if(!${'member_srl23_argument'}->isValid()) return ${'member_srl23_argument'}->getErrorMessage();
if(${'member_srl23_argument'} !== null) ${'member_srl23_argument'}->setColumnType('number');

${'user_id24_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id24_argument'}->ensureDefaultValue('');
if(!${'user_id24_argument'}->isValid()) return ${'user_id24_argument'}->getErrorMessage();
if(${'user_id24_argument'} !== null) ${'user_id24_argument'}->setColumnType('varchar');

${'user_name25_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name25_argument'}->ensureDefaultValue('');
if(!${'user_name25_argument'}->isValid()) return ${'user_name25_argument'}->getErrorMessage();
if(${'user_name25_argument'} !== null) ${'user_name25_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address26_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address26_argument'}->checkFilter('email');
if(!${'email_address26_argument'}->isValid()) return ${'email_address26_argument'}->getErrorMessage();
} else
${'email_address26_argument'} = null;if(${'email_address26_argument'} !== null) ${'email_address26_argument'}->setColumnType('varchar');

${'homepage27_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage27_argument'}->checkFilter('homepage');
${'homepage27_argument'}->ensureDefaultValue('');
if(!${'homepage27_argument'}->isValid()) return ${'homepage27_argument'}->getErrorMessage();
if(${'homepage27_argument'} !== null) ${'homepage27_argument'}->setColumnType('varchar');
if(isset($args->tags)) {
${'tags28_argument'} = new Argument('tags', $args->{'tags'});
if(!${'tags28_argument'}->isValid()) return ${'tags28_argument'}->getErrorMessage();
} else
${'tags28_argument'} = null;if(${'tags28_argument'} !== null) ${'tags28_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars29_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars29_argument'}->isValid()) return ${'extra_vars29_argument'}->getErrorMessage();
} else
${'extra_vars29_argument'} = null;if(${'extra_vars29_argument'} !== null) ${'extra_vars29_argument'}->setColumnType('text');

${'regdate30_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate30_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate30_argument'}->isValid()) return ${'regdate30_argument'}->getErrorMessage();
if(${'regdate30_argument'} !== null) ${'regdate30_argument'}->setColumnType('date');

${'last_update31_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update31_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update31_argument'}->isValid()) return ${'last_update31_argument'}->getErrorMessage();
if(${'last_update31_argument'} !== null) ${'last_update31_argument'}->setColumnType('date');

${'ipaddress32_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress32_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress32_argument'}->isValid()) return ${'ipaddress32_argument'}->getErrorMessage();
if(${'ipaddress32_argument'} !== null) ${'ipaddress32_argument'}->setColumnType('varchar');

${'list_order33_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order33_argument'}->ensureDefaultValue('0');
if(!${'list_order33_argument'}->isValid()) return ${'list_order33_argument'}->getErrorMessage();
if(${'list_order33_argument'} !== null) ${'list_order33_argument'}->setColumnType('number');

${'update_order34_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order34_argument'}->ensureDefaultValue('0');
if(!${'update_order34_argument'}->isValid()) return ${'update_order34_argument'}->getErrorMessage();
if(${'update_order34_argument'} !== null) ${'update_order34_argument'}->setColumnType('number');

${'allow_trackback35_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback35_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback35_argument'}->isValid()) return ${'allow_trackback35_argument'}->getErrorMessage();
if(${'allow_trackback35_argument'} !== null) ${'allow_trackback35_argument'}->setColumnType('char');

${'notify_message36_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message36_argument'}->ensureDefaultValue('N');
if(!${'notify_message36_argument'}->isValid()) return ${'notify_message36_argument'}->getErrorMessage();
if(${'notify_message36_argument'} !== null) ${'notify_message36_argument'}->setColumnType('char');

${'status37_argument'} = new Argument('status', $args->{'status'});
${'status37_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status37_argument'}->isValid()) return ${'status37_argument'}->getErrorMessage();
if(${'status37_argument'} !== null) ${'status37_argument'}->setColumnType('varchar');

${'commentStatus38_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus38_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus38_argument'}->isValid()) return ${'commentStatus38_argument'}->getErrorMessage();
if(${'commentStatus38_argument'} !== null) ${'commentStatus38_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl6_argument'})
,new InsertExpression('`module_srl`', ${'module_srl7_argument'})
,new InsertExpression('`category_srl`', ${'category_srl8_argument'})
,new InsertExpression('`lang_code`', ${'lang_code9_argument'})
,new InsertExpression('`is_notice`', ${'is_notice10_argument'})
,new InsertExpression('`title`', ${'title11_argument'})
,new InsertExpression('`title_bold`', ${'title_bold12_argument'})
,new InsertExpression('`title_color`', ${'title_color13_argument'})
,new InsertExpression('`content`', ${'content14_argument'})
,new InsertExpression('`readed_count`', ${'readed_count15_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count16_argument'})
,new InsertExpression('`voted_count`', ${'voted_count17_argument'})
,new InsertExpression('`comment_count`', ${'comment_count18_argument'})
,new InsertExpression('`trackback_count`', ${'trackback_count19_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count20_argument'})
,new InsertExpression('`password`', ${'password21_argument'})
,new InsertExpression('`nick_name`', ${'nick_name22_argument'})
,new InsertExpression('`member_srl`', ${'member_srl23_argument'})
,new InsertExpression('`user_id`', ${'user_id24_argument'})
,new InsertExpression('`user_name`', ${'user_name25_argument'})
,new InsertExpression('`email_address`', ${'email_address26_argument'})
,new InsertExpression('`homepage`', ${'homepage27_argument'})
,new InsertExpression('`tags`', ${'tags28_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars29_argument'})
,new InsertExpression('`regdate`', ${'regdate30_argument'})
,new InsertExpression('`last_update`', ${'last_update31_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress32_argument'})
,new InsertExpression('`list_order`', ${'list_order33_argument'})
,new InsertExpression('`update_order`', ${'update_order34_argument'})
,new InsertExpression('`allow_trackback`', ${'allow_trackback35_argument'})
,new InsertExpression('`notify_message`', ${'notify_message36_argument'})
,new InsertExpression('`status`', ${'status37_argument'})
,new InsertExpression('`comment_status`', ${'commentStatus38_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>