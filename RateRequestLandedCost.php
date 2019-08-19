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


$ServiceHeader=array(
        "MessageTime"=>"2019-10-31T13:30:00",
        "MessageReference"=>"JWEDS1093EWD0134124994301023431"
);
$RequestInside=array(
        "ServiceHeader"=>$ServiceHeader
);
$Shipper=array(
    'City'=>'OVERATH',
    'PostalCode'=>'51491',
    'CountryCode'=>'DE'
);
$Recipient=array(
    'City'=>'OSNABRUECK',
    'PostalCode'=>'49084',
    'CountryCode'=>'DE'
);
$ship=array(
        'Shipper'=> $Shipper,
        'Recipient'=>$Recipient
);
$Weight=array('Value'=>'3.4');
$Dimensions=array(
        'Length' =>'45',
        'Width' =>'30',
        'Height' =>'10'
);
$RequestedPackages=array(
        "_" => "",
        "number"=>"1",
        'Weight'=>$Weight,
       'Dimensions'=>$Dimensions
);
$Packages=array('RequestedPackages'=>$RequestedPackages);
$Billing=array(
  'ShipperAccountNumber' =>'193521025',
    'ShippingPaymentType'=>'S',
    'BillingAccountNumber'=>'193521025'
);
    $GoodsCharacteristics[]=array(
            'CharacteristicCode'=>'',
            'CharacteristicValue'=>''
    );
$items[]=array(
    'ItemNumber'=>'2',
    'Description'=>'KNITWEAR COTTON',
    'Remark'=>'KNITWEAR 100% COTTON REDUCTION PRICE FALL COLLECTION',
    'ManufacturingCountryCode'=>'DE',
    'SKUPartNumber'=>'12345555',
    'Quantity'=>'150.345',
    'UnitPrice'=>'12.50',
    'UnitPriceCurrencyCode'=>'EUR',
    'ItemWeight'=>'4',
    'HarmonizedSystemCode'=>'6110129090',
    'ItemWeightUnitofMeasurement'=>'SI',
    'Category'=>'APPAREL',
    'GoodsCharacteristics'=>$GoodsCharacteristics

    );
//$Items[]=;
$LandedCost=array(
        'MerchantSelectedCarrierName'=>'DHL',
        'GetItemCostBreakdown'=>'Y',
        'ShipmentCurrencyCode'=>'EUR',
        'ShipmentPurpose'=>'PERSONAL',
        'ShipmentTransportationMode'=>'AIR',
        'Items' =>$items
);
$Charges=array(
        'ChargeType'=>'FREIGHT',
        'ChargeAmount'=>'19',
        'CurrencyCode'=>'EUR'
);
$ShipmentMonetaryAmount=array(
        'Charges'=>$Charges
);

$RequestedShipmentinner=array(
        'ServiceType'=>'N',
        'DropOffType'=>'REGULAR_PICKUP',
        'Ship' =>$ship,
        'Packages'=>$Packages,
        'ShipTimestamp'=>'2019-07-10T09:30:00GMT+01:00',
        'UnitOfMeasurement'=>'SI',
        'Content'=>'NON_DOCUMENTS',
        'DeclaredValue'=>'20',
        'DeclaredValueCurrencyCode'=>'EUR',
        'Billing'=>$Billing,
        'LandedCost'=>$LandedCost,
        'ShipmentMonetaryAmount'=>$ShipmentMonetaryAmount
);
$RequestedShipment=array(
            'Request'=> $RequestInside,
            'RequestedShipment'=>$RequestedShipmentinner
    );
//echo "<pre>";
//print_r($RequestedShipment);
    $resp=$soap->__soapCall("getRateRequest", array("RateRequest" => $RequestedShipment));
    $array = json_decode(json_encode($resp), True);
   echo "<pre>";
    print_r($array['Provider']['Service']['TotalNet']);
    echo "<pre>";
    print_r(htmlentities($soap->__getLastResponse()));

} catch (Exception $e) {
        echo "<h2>Exception Error!</h2>";
        echo $e->getMessage();
}


?>