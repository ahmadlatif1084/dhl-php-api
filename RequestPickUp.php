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
  $soap = new SoapClient('https://wsbexpress.dhl.com/sndpt/requestPickup?WSDL', array('trace' => 1));
  // extend SOAP Header with mandatory WSSE header
  $soap->__setSoapHeaders(array($wsse_header));
  
  //print_r($soap->__getTypes());
   
// Starting of code for landedcost

    $Address=array(
        'StreetLines' =>'#05-33 Singapore Post Centre',
        'City' =>'Singapore',
        'PostalCode' =>'408600',
        'CountryCode' =>'SG'
    );
    $Contact=array(
            'PersonName' =>'Tester 1',
            'CompanyName' =>'DHL',
            'PhoneNumber' =>'2175441239',
            'EmailAddress' =>'jb@acme.com',
            'MobilePhoneNumber' =>'+31 6 53464291'
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
        'EmailAddress' =>'jackie.chan@eei.com',
        'MobilePhoneNumber' =>'+31 6 53464291'
    );

$Shipper=array(
    'Contact'=>$Contact,
    'Address'=>$Address,
);
$Recipient=array(
    'Contact'=>$ContactRecipient,
    'Address'=>$AddressRecipient,
);
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
    'CustomerReferences'=>'Piece 2'
);
//    $RequestedPackages[1]=array(
//        "_" => "",
//        "number"=>"1",
//        'Weight'=>'2',
//        'Dimensions'=>$Dimensions,
//        'CustomerReferences'=>'Piece 2'
//    );

$Packages=array(
        'RequestedPackages'=>$RequestedPackages,
);

    $Billing=array(
        'ShipperAccountNumber'=>'123456789',
        'ShippingPaymentType'=>'S'
    );
    $ShipmentInfo=array(
            'ServiceType'=>'P',
            'Billing'=>$Billing,
            'UnitOfMeasurement'=>'SI',
    );
    $Commodities=array(
            'NumberOfPieces'=>'1',
            'Description'=>'Customer Reference 1'
    );
    $InternationalDetail=array(
            'Commodities'=>$Commodities,
    );
    $PickUpShipment=array(
        'ShipmentInfo'=>$ShipmentInfo,
        'PickupTimestamp'=>'2019-08-06T12:59:00 GMT+01:00',
        'PickupLocationCloseTime'=>'17:00',
        'PickupLocation'=>'Receptoin',
        'InternationalDetail'=>$InternationalDetail,
        'Ship' =>$ship,
        'Packages'=>$Packages,

);
    $RequestedShipment=array('PickUpShipment' =>$PickUpShipment );
//echo "<pre>";
//print_r($RequestedShipment);
    $resp=$soap->__soapCall("PickUpRequest", array("PickUpRequest" => $RequestedShipment));

    echo "<pre>";
    print_r(htmlentities($soap->__getLastResponse()));
  
} catch (Exception $e) {
        echo "<h2>Exception Error!</h2>";
        echo $e->getMessage();
}


?>