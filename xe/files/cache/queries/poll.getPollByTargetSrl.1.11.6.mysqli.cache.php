<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPollByTargetSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->upload_target_srl)) {
${'upload_target_srl7_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl7_argument'}->createConditionValue();
if(!${'upload_target_srl7_argument'}->isValid()) return ${'upload_target_srl7_argument'}->getErrorMessage();
} else
${'upload_target_srl7_argument'} = NULL;if(${'upload_target_srl7_argument'} !== null) ${'upload_target_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_poll`', '`poll`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>