<?php
$server_key = "SB-Mid-server-VFsRPPjcJHv7cI4YUYmNcwN8";

$is_production = false;
$api_url =  $is_production ? 'https://app.midtrans.com/snap/v1/transactions' :
	'https://app.sandabox.midtrans.com/snap/v1/transactions';
