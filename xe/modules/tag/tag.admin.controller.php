<?php
/* Copyright (C) XEHub <https://www.xehub.io> */
/**
 * @class  tagAdminController
 * @author XEHub (developers@xpressengine.com)
 * @brief admin controller class of the tag module
 */
class tagAdminController extends tag
{
	/**
	 * @brief Delete all tags for a particular module
	 */
	function deleteModuleTags($module_srl)
	{
		$args = new stdClass();
		$args->module_srl = $module_srl;
		return executeQuery('tag.deleteModuleTags', $args);
	}
}
/* End of file tag.admin.controller.php */
/* Location: ./modules/tag/tag.admin.controller.php */
