function test_midtrans()
{
  require_once(dirname(__FILE__) . '/midtrans-php-master/Midtrans.php');

  //Set Your server key
  \Midtrans\Config::$serverKey = "SB-Mid-server-rnYw9zCpQDcxofS0YfrR4X8t";


  // Uncomment for production environment
  // \Midtrans\Config::$isProduction = true;

  \Midtrans\Config::$isSanitized = true;
  \Midtrans\Config::$is3ds = true;

  $transaction = array(
      'transaction_details' => array(
          'order_id' => 'RJ-'.$this->generate_code().'',
          'gross_amount' => 25000 // no decimal allowed
    ),
    'credit_card' => array(
      'secure' => true
    ),
    'enabled_payments' => array(
      "credit_card",
        "gopay",
        "mandiri_clickpay",
        "cimb_clicks",
        "bca_klikbca",
        "bca_klikpay",
        "bri_epay",
        "telkomsel_cash",
        "echannel",
        "bbm_money",
        "xl_tunai",
        "indosat_dompetku",
        "mandiri_ecash",
        "permata_va",
        "bca_va",
        "bni_va",
        "danamon_online",
        "other_va",
        "kioson",
        "Indomaret"
    )
  );

  $snapToken = \Midtrans\Snap::getSnapToken($transaction);

  $data['snap_Token'] = $snapToken;

  $this->load->view('vw_test_midtrans', $data);
}
