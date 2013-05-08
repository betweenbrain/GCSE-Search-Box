<?php defined('_JEXEC') or die;

/**
 * File       searchEngineIDs.php
 * Created    5/8/13 1:56 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

class JElementSearchengineids extends JElement {

	var $_name = 'searchengineids';

	function fetchElement($name, $value, &$node, $control_name) {

		$cid     = JRequest::getVar('cid');
		$db      = JFactory::getDBO();
		$options = array();

		$query = ' SELECT params' .
			' FROM #__modules' .
			' WHERE id = ' . $cid[0] . '';

		$db->setQuery($query);
		$params = $db->loadResult();

		preg_match('/configuration=([^\n]*)/', $params, $matches);

		$ids = explode(';', rtrim($matches[1], ';'));

		foreach ($ids as $id) {
			$pair      = explode('|', $id);
			$options[] = JHtml::_('select.option', $pair[0], $pair[1]);
		}

		return JHTML::_('select.genericlist', $options, '' . $control_name . '[' . $name . ']', '', 'value', 'text', $value, $control_name . $name);
	}
}