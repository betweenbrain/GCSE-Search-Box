<?php defined('_JEXEC') or die;

/**
 * File       mod_gcse_search_box.php
 * Created    5/8/13 11:31 AM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Copyright  Copyright (C) 2013 The Solomon R. Guggenheim Foundation. All Rights Reserved.
 */

// Search Engine ID
$cx = htmlspecialchars($params->get('searchEngineID'));
// Form Class
$formClass = htmlspecialchars($params->get('formClass'));
// Form Action
$formAction = htmlspecialchars($params->get('formAction'));

// Add root url to form action if not included
if (!strstr($formAction, 'http')) {
	$formAction = JURI::base() . $formAction;
}
// Input Class
$inputClass = htmlspecialchars($params->get('inputClass'));
// Input Size
$inputSize = htmlspecialchars($params->get('inputSize'));
// Input Placeholder
$placeholder = htmlspecialchars($params->get('inputPlaceholder'));
// Submit element type
$submitClass = $params->get('submitClass');
// Submit element type
$submitType = $params->get('submitType');
// Submit value
$submitValue = htmlspecialchars($params->get('submitValue'));
// Render module output
require JModuleHelper::getLayoutPath('mod_gcse_search_box');