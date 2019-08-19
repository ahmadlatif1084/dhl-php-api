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
  $soap = new SoapClient('https://wsbexpress.dhl.com/sndpt/expressRateBook?WSDL', array('trace' => 1));
  // extend SOAP Header with mandatory WSSE header
  $soap->__setSoapHeaders(array($wsse_header));
  
  //print_r($soap->__getTypes());
   
// Starting of code for landedcost

    $Address=array(
        'StreetLines' =>'#05-33 Post Centre',
        'City' =>'Amsterdam',
        'PostalCode' =>'1011',
        'CountryCode' =>'NL'
    );
    $Contact=array(
            'PersonName' =>'Tester 1',
            'CompanyName' =>'DHL',
            'PhoneNumber' =>'2175441239',
            'EmailAddress' =>'jb@acme.com'
    );

    $AddressRecipient=array(
        'StreetLines' =>'500 Hunt Valley Road',
        'City' =>'New Kensington PA',
        'StateOrProvinceCode' =>'PA',
        'PostalCode' =>'15068',
        'CountryCode' =>'US'
    );
    $ContactRecipient=array(
        'PersonName' =>'Tester 2',
        'CompanyName' =>'Acme Inc',
        'PhoneNumber' =>'88347346643',
        'EmailAddress' =>'jackie.chan@eei.com'
    );

$Shipper=array(
    'Contact'=>$Contact,
    'Address'=>$Address,
);
$Recipient=array(
    'Contact'=>$ContactRecipient,
    'Address'=>$AddressRecipient,
);
//    $Recipient=array(
//        'Contact'=>$ContactRecipient,
//        'Address'=>$AddressRecipient,
//    );
$ship=array(
        'Shipper'=> $Shipper,
        'Recipient'=>$Recipient
);
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
    $ShipmentInfo=array(
            'DropOffType'=>'REGULAR_PICKUP',
            'ServiceType'=>'P',
            'Account'=>'193521025',
            'Currency'=>'SGD',
            'UnitOfMeasurement'=>'SI',
    );
    $Commodities=array(
            'NumberOfPieces'=>'2',
            'Description'=>'Customer Reference 1',
            'CountryOfManufacture'=>'CN',
            'Quantity'=>'1',
            'UnitPrice'=>'5',
            'CustomsValue'=>'10',
    );
    $InternationalDetail=array(
            'Commodities'=>$Commodities,
            'Content'=>'NON_DOCUMENTS',
    );
    $RequestedShipmentInner=array(
        'ShipmentInfo'=>$ShipmentInfo,
        'ShipTimestamp'=>'2019-08-02T10:30:00GMT+02:00',
        'PaymentInfo'=>'DAP',
        'InternationalDetail'=>$InternationalDetail,
        'Ship' =>$ship,
        'Packages'=>$Packages,

);
    $RequestedShipment=array('RequestedShipment' =>$RequestedShipmentInner );
//echo "<pre>";
//print_r($RequestedShipment);
    $resp=$soap->__soapCall("createShipmentRequest", array("ShipmentRequest" => $RequestedShipment));
//    echo "<pre>";
//    print_r($resp);
    echo "<pre>";
    print_r(htmlentities($soap->__getLastResponse()));
  
} catch (Exception $e) {
        echo "<h2>Exception Error!</h2>";
        echo $e->getMessage();
}


?>