<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteCommentVotedLog");
$query->setAction("delete");
$query->setPriority("");

${'comment_srl10_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'in');
${'comment_srl10_argument'}->checkFilter('number');
${'comment_srl10_argument'}->checkNotNull();
${'comment_srl10_argument'}->createConditionValue();
if(!${'comment_srl10_argument'}->isValid()) return ${'comment_srl10_argument'}->getErrorMessage();
if(${'comment_srl10_argument'} !== null) ${'comment_srl10_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_comment_voted_log`', '`comment_voted_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comment_srl`',$comment_srl10_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>