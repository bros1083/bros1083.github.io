<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_OTB1AMxeBIdsGQqls3vzES8s",
  "publishable_key" => "pk_test_r0sOMyTjb6Hb9czl4haBFaYs",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>