<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysqli',
    'db_port' => '3306',
    'db_hostname' => 'localhost',
    'db_userid' => 'yuyujinport42',
    'db_password' => 'yuyujin24pf**',
    'db_database' => 'yuyujinport42',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysqli',
      'db_port' => '3306',
      'db_hostname' => 'localhost',
      'db_userid' => 'yuyujinport42',
      'db_password' => 'yuyujin24pf**',
      'db_database' => 'yuyujinport42',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'http://yuyujinport42.dothome.co.kr/xe/',
  'lang_type' => 'ko',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'Y',
  'time_zone' => '+0900',
);