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
  $soap = new SoapClient('https://wsbexpress.dhl.com/sndpt/updateShipment?WSDL', array('trace' => 1));
  // extend SOAP Header with mandatory WSSE header
  $soap->__setSoapHeaders(array($wsse_header));
  
  //print_r($soap->__getTypes());
   
// Starting of code for landedcost

$Dimensions=array(
        'Length' =>'1',
        'Width' =>'2',
        'Height' =>'3'
);
$RequestedPackages=array(
        "_" => "",
        "number"=>"1",
        'Weight'=>'2',
      'Dimensions'=>$Dimensions,
    'CustomerReferences'=>'Piece 1'
);
$Packages=array(
        'RequestedPackages'=>$RequestedPackages,
);
    $Billing=array(
        'ShipperAccountNumber'=>'193521025',
        'ShippingPaymentType'=>'S'
    );
    $ShipmentInfoInner=array(
            'ServiceType'=>'P',
            'Account'=>'193521025',
            'Billing'=>$Billing,
            'ShipmentIdentificationNumber'=>'1127681844',
            'LabelType'=>'PDF',
            'LabelTemplate'=>'ECOM_TC_A4',
            'ArchiveLabelTemplate'=>'ARCH_8x4',
            'IncludePreviousPieceLabels'=>'Y'
    );
    $ShipmentInfo=array(
        'ShipmentInfo'=>$ShipmentInfoInner,
        'OriginalShipDate' =>'2019-08-02',
        'Packages'=>$Packages
    );
    $RequestedShipment=array(
        'MessageId'=>'2364878234817650001982134234',
        'UpdatedShipment'=>$ShipmentInfo,
);
//echo "<pre>";
//print_r(json_encode($RequestedShipment));
//die();
    $resp=$soap->__soapCall("updateShipmentRequest", array("UpdateRequest" => $RequestedShipment));

    echo "<pre>";
    print_r(htmlentities($soap->__getLastResponse()));
  
} catch (Exception $e) {
        echo "<h2>Exception Error!</h2>";
        echo $e->getMessage();
}


?>