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
  $soap = new SoapClient('https://wsbexpress.dhl.com/sndpt/getePOD?WSDL', array('trace' => 1));
  // extend SOAP Header with mandatory WSSE header
  $soap->__setSoapHeaders(array($wsse_header));
  
  //print_r($soap->__getTypes());
   
// Starting of code for landedcost

    $Sndr=array(
        '@AppCd'=>'DCG',
        '@AppNm'=>'DCG',
        '@CmptNm'=>'HP'
    );
    $Hdr=array(
        '@Dtm'=>'2013-04-16T23:59:59',
        '@Id'=>'SunnyTesting',
        '@Ver'=>'1.038',
        'Sndr'=>$Sndr,

    );
    $SDoc=array(
        '@DocTyCd'=>'POD'
    );
    $ShpInDoc=array(
        'SDoc'=>$SDoc
    );
    $Shp=array(
        '@Id'=>'8564385550',
        'ShpInDoc'=>$ShpInDoc
    );
    $GenrcRqCritr[]=array(
        '@TyCd'=>'IMG_CONTENT',
        '@Val'=>'epod-summary-esig'
    );
    $GenrcRq=array(
    'GenrcRqCritr' =>$GenrcRqCritr
    );
    $Bd=array(
        'Shp'=>$Shp,
        'GenrcRq'=>$GenrcRq
    );
    $MSG=array(
        'Hdr'=>$Hdr,
        'Bd'=>$Bd
    );
    $shipmentDocumentRetrieveReqInner=array(
        'MSG'=>$MSG
    );
    $shipmentDocumentRetrieveReq=array(
        'shipmentDocumentRetrieveReq'=>$shipmentDocumentRetrieveReqInner
    );

//echo "<pre>";
//print_r(json_encode($trackShipmentRequest));
//die();
    $resp=$soap->__soapCall("ShipmentDocumentRetrieve",$shipmentDocumentRetrieveReq);

    echo "<pre>";
    print_r(json_encode($resp));
    die();
    print_r(htmlentities($soap->__getLastResponse()));
  
} catch (Exception $e) {
        echo "<h2>Exception Error!</h2>";
        echo $e->getMessage();
}


?>