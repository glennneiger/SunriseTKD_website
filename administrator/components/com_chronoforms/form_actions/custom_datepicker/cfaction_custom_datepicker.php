<?php
/**
* CHRONOFORMS version 4.0
* Copyright (c) 2006 - 2011 Chrono_Man, ChronoEngine.com. All rights reserved.
* Author: Chrono_Man (ChronoEngine.com)
* @license		GNU/GPL
* Visit http://www.ChronoEngine.com for regular updates and information.
**/
class CfactionCustomDatepickerHelper{
	function load($form = null, $actiondata = null){
		$params = new JParameter($actiondata->params);
		$document =& JFactory::getDocument();
		JHTML::_('behavior.mootools');
		$mainframe = JFactory::getApplication();
		$uri = JFactory::getURI();
		$CF_PATH = ($mainframe->isSite()) ? JURI::Base() : $uri->root();
		$document->addStyleSheet($CF_PATH.'components/com_chronoforms/css/datepicker/datepicker_dashboard.css');
		$document->addScript($CF_PATH.'components/com_chronoforms/js/datepicker/datepicker.js');
		$con_str = "'.".$params->get('field_class', 'cf_datetime_picker')."', {pickerClass: '".$params->get('pickerClass', 'datepicker_dashboard')."', format: '".$params->get('format', 'd-m-Y H:i:s')."', inputOutputFormat: '".$params->get('inputOutputFormat', 'Y-m-d H:i:s')."', allowEmpty: ".$params->get('allowEmpty', 'true').", timePicker: ".$params->get('timePicker', 'true').", timePickerOnly: ".$params->get('timePickerOnly', 'false');
		if(!empty($actiondata->content1)){
			$con_str .= ", ".$actiondata->content1;
			$con_str .= "}";
		}else{
			$con_str .= "}";
		}
		ob_start();
		?>
		//<![CDATA[
			window.addEvent('load', function() {
				new DatePicker(<?php echo $con_str; ?>);
			});
		//]]>
		<?php
		$script = ob_get_clean();
		$document->addScriptDeclaration($script);
	}
}
?>