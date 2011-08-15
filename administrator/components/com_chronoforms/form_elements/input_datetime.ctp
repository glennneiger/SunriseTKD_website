<div class="dragable" id="input_datetime">Datetime Box</div>
<div class="element_code" id="input_datetime_element">
	<label for="<?php echo $element_params['input_id']; ?>" id="input_datetime_{n}_label" class="datetime_label"><?php echo $element_params['label_text']; ?></label>
	<input type="datetime" name="datetime_{n}_input_name" id="datetime_{n}_input_id" value="<?php echo $element_params['input_value']; ?>" maxlength="<?php echo $element_params['input_maxlength']; ?>" size="<?php echo $element_params['input_size']; ?>" />
	<input type="hidden" name="chronofield[{n}][input_datetime_{n}_label_text]" id="input_datetime_{n}_label_text" value="<?php echo $element_params['label_text']; ?>" />
    <input type="hidden" name="chronofield[{n}][input_datetime_{n}_input_name]" id="input_datetime_{n}_input_name" value="<?php echo $element_params['input_name']; ?>" />
    <input type="hidden" name="chronofield[{n}][input_datetime_{n}_input_id]" id="input_datetime_{n}_input_id" value="<?php echo $element_params['input_id']; ?>" />
    <input type="hidden" name="chronofield[{n}][input_datetime_{n}_input_value]" id="input_datetime_{n}_input_value" value="<?php echo $element_params['input_value']; ?>" />
    <input type="hidden" name="chronofield[{n}][input_datetime_{n}_input_maxlength]" id="input_datetime_{n}_input_maxlength" value="<?php echo $element_params['input_maxlength']; ?>" />
    <input type="hidden" name="chronofield[{n}][input_datetime_{n}_input_size]" id="input_datetime_{n}_input_size" value="<?php echo $element_params['input_size']; ?>" />
    <input type="hidden" name="chronofield[{n}][input_datetime_{n}_input_class]" id="input_datetime_{n}_input_class" value="<?php echo $element_params['input_class']; ?>" />
    <input type="hidden" name="chronofield[{n}][input_datetime_{n}_input_title]" id="input_datetime_{n}_input_title" value="<?php echo $element_params['input_title']; ?>" />
    <input type="hidden" name="chronofield[{n}][input_datetime_{n}_timeonly]" id="input_datetime_{n}_timeonly" value="<?php echo $element_params['timeonly']; ?>" />
    <input type="hidden" name="chronofield[{n}][input_datetime_{n}_addtime]" id="input_datetime_{n}_addtime" value="<?php echo $element_params['addtime']; ?>" />
    <textarea name="chronofield[{n}][input_datetime_{n}_validations]" id="input_datetime_{n}_validations" style="display:none"><?php echo $element_params['validations']; ?></textarea>
    <textarea name="chronofield[{n}][input_datetime_{n}_instructions]" id="input_datetime_{n}_instructions" style="display:none"><?php echo $element_params['instructions']; ?></textarea>
    <textarea name="chronofield[{n}][input_datetime_{n}_tooltip]" id="input_datetime_{n}_tooltip" style="display:none"><?php echo $element_params['tooltip']; ?></textarea>
    <input type="hidden" id="chronofield_id_{n}" name="chronofield_id" value="{n}" />
    <input type="hidden" name="chronofield[{n}][tag]" value="input" />
    <input type="hidden" name="chronofield[{n}][type]" value="datetime" />
</div>
<div class="element_config" id="input_datetime_element_config">
	<?php echo $PluginTabsHelper->Header(array('general' => 'General', 'validation' => 'Validation'), 'input_datetime_element_config_{n}'); ?>
	<?php echo $PluginTabsHelper->tabStart('general'); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_input_name_config', array('type' => 'text', 'label' => 'Field Name', 'class' => 'small_input', 'value' => '')); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_input_id_config', array('type' => 'text', 'label' => 'Field ID', 'class' => 'small_input', 'value' => '')); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_input_value_config', array('type' => 'text', 'label' => 'Field Default Value', 'class' => 'small_input', 'value' => '')); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_input_maxlength_config', array('type' => 'text', 'label' => 'Field Max Length', 'class' => 'small_input', 'value' => '')); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_input_size_config', array('type' => 'text', 'label' => 'Field Size', 'class' => 'small_input', 'value' => '')); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_input_class_config', array('type' => 'text', 'label' => 'Field Class', 'class' => 'small_input', 'value' => '')); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_input_title_config', array('type' => 'text', 'label' => 'Field title', 'class' => 'small_input', 'value' => '')); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_label_text_config', array('type' => 'text', 'label' => 'Label Text', 'class' => 'small_input', 'value' => '')); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_addtime_config', array('type' => 'checkbox', 'label' => 'Enable Time picker', 'class' => 'small_input', 'value' => '1', 'rule' => "bool")); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_timeonly_config', array('type' => 'checkbox', 'label' => 'Time picker ONLY', 'class' => 'small_input', 'value' => '1', 'rule' => "bool")); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_instructions_config', array('type' => 'textarea', 'label' => 'Instructions for users', 'rows' => 5, 'cols' => 50)); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_tooltip_config', array('type' => 'textarea', 'label' => 'Tooltip', 'rows' => 5, 'cols' => 50)); ?>
	<?php echo $PluginTabsHelper->tabEnd(); ?>
	<?php echo $PluginTabsHelper->tabStart('validation'); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_validations_config', array('type' => 'checkbox', 'label' => 'Required (check both)', 'class' => 'small_input', 'value' => 'required', 'rule' => "split", 'splitter' => ",")); ?>
		<?php echo $HtmlHelper->input('input_datetime_{n}_validations_config', array('type' => 'checkbox', 'label' => 'Required (check both)', 'class' => 'small_input', 'value' => 'target:%field_name%_clone_id', 'rule' => "split", 'splitter' => ",")); ?>
	<?php echo $PluginTabsHelper->tabEnd(); ?>
</div>