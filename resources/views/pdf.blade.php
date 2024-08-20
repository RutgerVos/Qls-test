{{ csrf_field() }}
{{-- <div>
    Page 1
</div>

@pageBreak

<div>
    Page 2
</div> --}}
<p>id = {{ $response['id'] }}</p>
<p>company_id = {{ $response['company_id'] }}</p>
<a>name = {{ $response['name'] }}</a>
<p>sender_contact_id = {{ $response['sender_contact_id'] }}</p>
<p>return_contact_id = {{ $response['return_contact_id'] }}</p>
<p>tracking_notification_policy = {{ $response['tracking_notification_policy'] }}</p>
<p>tracking_first_notification_on = {{ $response['tracking_first_notification_on'] }}</p>
<p>fulfillment_allow_auto_print = {{ $response['fulfillment_allow_auto_print'] }}</p>
<p>fulfillment_allow_partical_delivery = {{ $response['fulfillment_allow_partical_delivery'] }}</p>
<p>fulfillment_deliveryslip_bottom_text = {{ $response['fulfillment_deliveryslip_bottom_text'] }}</p>
<p>fulfillment_deliveryslip_mode = {{ $response['fulfillment_deliveryslip_mode'] }}</p>
<p>fulfillment_force_servicepoint = {{ $response['fulfillment_force_servicepoint'] }}</p>
<p>fulfillment_myorder_allow_servicepoint = {{ $response['fulfillment_myorder_allow_servicepoint'] }}</p>
<p>fulfillment_myorder_allow_timeframe = {{ $response['fulfillment_myorder_allow_timeframe'] }}</p>
<p>fulfillment_pack_deliveryslip = {{ $response['fulfillment_pack_deliveryslip'] }}</p>
<p>fulfillment_pack_deliveryslip_ondemand = {{ $response['fulfillment_pack_deliveryslip_ondemand'] }}</p>
<p>return_within_days = {{ $response['return_within_days'] }}</p>
<p>return_action_after_delivery_fail = {{ $response['return_action_after_delivery_fail'] }}</p>
<p>return_action_after_retour_term = {{ $response['return_action_after_retour_term'] }}</p>
<p>return_action_default = {{ $response['return_action_default'] }}</p>
<p>with_return_label = {{ $response['with_return_label'] }}</p>
<p>created_at = {{ $response['created'] }}</p>