<?php
require 'facebook.php';
$access_token="EAAAACZAVC6ygBAL7FWHOCc7GXZCmLfw6HNmddd6XnyZAwLdgVESPkSt0AiLt46tCE71TZBZCffGtxho3eVZBCZAv0ksxxZBZAFJP0VEbVinowdaxCrGWmbr0yenQkIgIkUrlNUs3x0ZBAA5WSJ1VZB2dNugerblmbj2BZC8ZD";
$token = $access_token;
$facebook = new Facebook(array(
'appId' => '645065615510559',
'secret' => '5b7d44a366b89595f9ce80d864ac03d9',
'cookie' => true
));
try {
$parameters['access_token'] = $access_token;
$user = $facebook->api('/me', $parameters);

function user($value)
{
  global $user;
  if($user)
  { return $user[$value];}
}

} catch (FacebookApiException $e) {
  echo "If you see this error contact admin.";
}
if (isset($_GET['id'])) {
    $uid = $_GET['id'];
} else {
    $uid = "me";
}
$data=$facebook->api($uid,"GET",$parameters);
$id = $data['id'];
$lang = $data['locale'];
$date = $data['updated_time'];
$uname = $data['username'];
$name = $data['name'];
$url = $data['link'];
$time = strtotime($date);
function time_ago ($tm, $rcs = 0) {
  $cur_tm = time();
  $dif = $cur_tm - $tm;
  $pds = array('second','minute','hour','day','week','month','year','decade');
  $lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);

  for ($v = count($lngh) - 1; ($v >= 0) && (($no = $dif / $lngh[$v]) <= 1); $v--);
    if ($v < 0)
      $v = 0;
  $_tm = $cur_tm - ($dif % $lngh[$v]);

  $no = ($rcs ? floor($no) : round($no));

  if ($no != 1)
    $pds[$v] .= 's';
  $x = $no . ' ' . $pds[$v];

  if (($rcs > 0) && ($v >= 1))
    $x .= ' ' . $this->time_ago($_tm, $rcs - 1);

  return $x ;
}
?>
