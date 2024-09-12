<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDeclaredComments");
$query->setAction("delete");
$query->setPriority("");

${'comment_srl8_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'in');
${'comment_srl8_argument'}->checkFilter('number');
${'comment_srl8_argument'}->checkNotNull();
${'comment_srl8_argument'}->createConditionValue();
if(!${'comment_srl8_argument'}->isValid()) return ${'comment_srl8_argument'}->getErrorMessage();
if(${'comment_srl8_argument'} !== null) ${'comment_srl8_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_comment_declared`', '`comment_declared`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comment_srl`',$comment_srl8_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>