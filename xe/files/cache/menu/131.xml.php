<?php define('__XE__', true); require_once('/hosting/yuyujinport42/html/xe/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="132" parent_srl="0" menu_name_key='질문과 답변' text="<?php if(true) { $_names = array("en"=>'질문과 답변',"ko"=>'질문과 답변',"jp"=>'질문과 답변',"zh-CN"=>'질문과 답변',"zh-TW"=>'질문과 답변',"fr"=>'질문과 답변',"de"=>'질문과 답변',"ru"=>'질문과 답변',"es"=>'질문과 답변',"tr"=>'질문과 답변',"vi"=>'질문과 답변',"mn"=>'질문과 답변',); print $_names[$lang_type]; }?>" url="<?php print(true?'sub05_03_qna':"")?>" href="<?php print(true?getSiteUrl('', '','mid','sub05_03_qna'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>