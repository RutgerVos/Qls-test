{{ csrf_field() }}
<meta name="csrf-token" content="{{ csrf_token() }}">
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
<p>company_name = {{ $response['company']["name"] }}</p>

@pageBreak

<div>
    <p>sender_contact_company_name = {{ $response['sender_contact']["companyname"] }}</p>
    <p>sender_contact_company_email = {{ $response['sender_contact']["email"] }}</p>
    <p>sender_contact_name = {{ $response['sender_contact']["name"] }}</p>
    <p>sender_contact_street = {{ $response['sender_contact']["street"] }}</p>
    <p>sender_contact_housenumber = {{ $response['sender_contact']["housenumber"] }}</p>
    <p>sender_contact_postalcode = {{ $response['sender_contact']["postalcode"] }}</p>
    <p>sender_contact_locality = {{ $response['sender_contact']["locality"] }}</p>
    <p>sender_contact_country = {{ $response['sender_contact']["country"] }}</p>
</div>

@pageBreak

<div>
    <p>street = {{ $response['return_contact']["street"] }}</p>
    <p>return_contact_website = <a href="www.{{ $response['return_contact']["companyname"] }}">{{ $response['return_contact']["companyname"] }}</a></p>
    <p>street = {{ $response['return_contact']["street"] }}</p>
    <p>housenumber = {{ $response['return_contact']["housenumber"] }}</p>
    <p>postalcode = {{ $response['return_contact']["street"] }}</p>
    <p>locality = {{ $response['return_contact']["locality"] }}</p>
    <p>country = {{ $response['return_contact']["country"] }}</p>
    <p>tracking_url = {{ $shipment["tracking_url"] }}</p>
    <div class="mb-3">{!! DNS1D::getBarcodeHTML($barcode, 'CODABAR') !!}</div>
</div>