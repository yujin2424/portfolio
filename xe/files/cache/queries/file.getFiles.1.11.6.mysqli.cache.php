<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl4_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl4_argument'}->checkFilter('number');
${'upload_target_srl4_argument'}->checkNotNull();
${'upload_target_srl4_argument'}->createConditionValue();
if(!${'upload_target_srl4_argument'}->isValid()) return ${'upload_target_srl4_argument'}->getErrorMessage();
if(${'upload_target_srl4_argument'} !== null) ${'upload_target_srl4_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid5_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid5_argument'}->createConditionValue();
if(!${'isvalid5_argument'}->isValid()) return ${'isvalid5_argument'}->getErrorMessage();
} else
${'isvalid5_argument'} = NULL;if(${'isvalid5_argument'} !== null) ${'isvalid5_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();
} else
${'sort_index6_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl4_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "asc")
));
$query->setLimit();
return $query; ?>