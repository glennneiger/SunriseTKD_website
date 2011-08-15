<?php
require_once(JPATH_SITE.DS."administrator".DS."components".DS."com_chronoforms".DS."helpers".DS."tabs_helper.php");
$PluginTabsHelper = new TabsHelper();
?>
<div class="dragable" id="cfaction_paypal_listener">PayPal Listener</div>
<!--start_element_code-->
<div class="element_code" id="cfaction_paypal_listener_element">
	<label class="action_label">PayPal Listener</label>
	<div id="cfactionevent_paypal_listener_{n}_verified" class="form_event good_event">
		<label class="form_event_label">On Verified</label>
	</div>
	<div id="cfactionevent_paypal_listener_{n}_invalid" class="form_event bad_event">
		<label class="form_event_label">On Invalid</label>
	</div>
	<div id="cfactionevent_paypal_listener_{n}_error" class="form_event bad_event">
		<label class="form_event_label">On Error</label>
	</div>
	
	<input type="hidden" id="chronoaction_id_{n}" name="chronoaction_id[{n}]" value="{n}" />
	<input type="hidden" name="chronoaction[{n}][type]" value="paypal_listener" />
</div>
<!--end_element_code-->
<div class="element_config" id="cfaction_paypal_listener_element_config">
	<?php echo $PluginTabsHelper->Header(array('config' => 'Config', 'help' => 'Help'), 'paypal_listener_config_{n}'); ?>
	<?php echo $PluginTabsHelper->tabStart('config'); ?>
		
	<?php echo $PluginTabsHelper->tabEnd(); ?>
	<?php echo $PluginTabsHelper->tabStart('help'); ?>
		<p>
			<ul>
				<li>This plugin will process the response coming from the Paypal IPN for some transaction.</li>
				<li>You should have the IPN enabled under your Paypal account settings and set the "notify url" to the url to the form event loading this action.</li>
				<li>The Verified event is when PayPal verifies that the data processed belongs to your account and the payment status is Completed, Invalid means that its some kind of spam, Error means that your server doesn't have the fsockopen function enabled!.</li>
			</ul>
		</p>
	<?php echo $PluginTabsHelper->tabEnd(); ?>
</div>