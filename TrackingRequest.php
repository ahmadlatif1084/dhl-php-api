<?php
header('Content-Type: text/html; charset=utf-8');
$username="boatandyachNL";
$password="K^9gL$7oZ$1e";

class WsseAuthHeader extends SoapHeader {

  private $wss_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';

  function __construct($user, $pass, $ns = null) {
    if ($ns) {
        $this->wss_ns = $ns;
    }

    $auth = new stdClass();
    $auth->Username = new SoapVar($user, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns); 
    $auth->Password = new SoapVar($pass, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns);

    $username_token = new stdClass();
    $username_token->UsernameToken = new SoapVar($auth, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns); 

    $security_sv = new SoapVar(
        new SoapVar($username_token, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns),
        SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'Security', $this->wss_ns);
    parent::__construct($this->wss_ns, 'Security', $security_sv, true);
  }
}

try {

  $wsse_header = new WsseAuthHeader($username, $password);
  $soap = new SoapClient('https://wsbexpress.dhl.com/sndpt/glDHLExpressTrack?WSDL', array('trace' => 1));
  // extend SOAP Header with mandatory WSSE header
  $soap->__setSoapHeaders(array($wsse_header));
  
  //print_r($soap->__getTypes());
   
// Starting of code for landedcost


    $ServiceHeader=array(
        'MessageTime'=>'2019-07-13T00:17:20Z',
        'MessageReference'=>'896ab310ba5311e38d9ffb21b7e57543'
    );
    $Request=array(
        'ServiceHeader'=>$ServiceHeader
    );
    $AWBNumber=array(
        'ArrayOfAWBNumberItem' =>'7780184230'
    );
    $TrackingRequest=array(
        'Request'=>$Request,
        'AWBNumber'=>$AWBNumber,
        'LevelOfDetails'=>'ALL_CHECK_POINTS',
        'PiecesEnabled'=>'B'
    );
    $trackingRequest=array(
        'TrackingRequest'=>$TrackingRequest,
);
    $RequestedShipment=array(
        'trackingRequest' =>$trackingRequest

    );
    $trackShipmentRequest=array(
        'trackShipmentRequest'=>$RequestedShipment
    );
//echo "<pre>";
//print_r(json_encode($trackShipmentRequest));
//die();
    $resp=$soap->__soapCall("trackShipmentRequest",$trackShipmentRequest);

    echo "<pre>";
    print_r(htmlentities($soap->__getLastResponse()));
  
} catch (Exception $e) {
        echo "<h2>Exception Error!</h2>";
        echo $e->getMessage();
}


?>