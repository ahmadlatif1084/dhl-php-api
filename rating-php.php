<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
<title>DHL Customer Webservice Call Test</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="title" content="DHL Customer Webservice Call Test">

<!--[if gte mso 9]><xml>
<mso:CustomDocumentProperties>
<mso:Notes_x002f_Comments msdt:dt="string"></mso:Notes_x002f_Comments>
<mso:ContentType msdt:dt="string">Document</mso:ContentType>
</mso:CustomDocumentProperties>
</xml><![endif]-->
</head>
<body>
<h1>DHL Customer Webservice Call Test<h1>
<?php

     // The url of the service 
     $url='https://wsbexpress.dhl.com:443/sndpt/expressRateBook?wsdl';
	
	// the soap operation which is called
	$action='euExpressRateBook_providerServices_ShipmentHandlingServices_Binder_getRateRequest';

	// the xml input of the service
	$xmlrequest='<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"

	xmlns:rat="http://scxgxtt.phx-dc.dhl.com/euExpressRateBook/RateMsgRequest">

	      <soapenv:Header>
     <wsse:Security soapenv:mustunderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
         <wsse:UsernameToken wsu:id="UsernameToken-5" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
            <!-- ####Please use your test user credentials here#### -->
            <wsse:Username>boatandyachNL</wsse:Username>
            <!-- ####Please use your test user credentials here#### -->
            <wsse:Password type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">K^9gL$7oZ$1e</wsse:Password>
            <wsse:Nonce encodingtype="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#Base64Binary">eUYebYfsjztETJ4Urt8AJw==</wsse:Nonce>
             <wsu:Created>2003-07-16T01:24:32</wsu:Created>
         </wsse:UsernameToken>
      </wsse:Security>
   </soapenv:Header>

	   <soapenv:Body>

	      <rat:RateRequest>

	         <RequestedShipment>

	            <DropOffType>REGULAR_PICKUP</DropOffType>

	            <Ship>

	               <Shipper>

	                  <StreetLines>Paseo De Gracia, 62</StreetLines>

	                  <City>MADRID</City>

	                  <PostalCode>28036</PostalCode>

	                  <CountryCode>ES</CountryCode>

	               </Shipper>

	               <Recipient>

	                  <StreetLines>Pedro De tolosa, 1</StreetLines>

	                  <City>TOLOSA</City>

	                  <PostalCode>20400</PostalCode>

	                  <CountryCode>ES</CountryCode>

	               </Recipient>

	            </Ship>

	            <Packages>

	               <RequestedPackages number="1">

	                  <Weight>

	                     <Value>51.5</Value>

	                  </Weight>

	                  <Dimensions>

	                     <Length>31</Length>

	                     <Width>13</Width>

	                     <Height>21</Height>

	                  </Dimensions>

	               </RequestedPackages>

	            </Packages>

	            <ShipTimestamp>2019-07-10T10:30:00GMT+02:00</ShipTimestamp>

	            <UnitOfMeasurement>SI</UnitOfMeasurement>

	            <Content>NON_DOCUMENTS</Content>

	            <PaymentInfo>DDU</PaymentInfo>

	            <Account>958461498</Account>

	         </RequestedShipment>

	      </rat:RateRequest>

	   </soapenv:Body>

	</soapenv:Envelope>';

	
	
	
	

    	
	try {
    
	       // the soap client accepts options, we specify the soap version
		   // The trace option enables tracing of request so faults can be backtraced.
		   // The exceptions option is a boolean value defining whether soap errors throw exceptions of type SoapFault. 
	
         	$options = array(
                'soap_version'=>SOAP_1_1,
                'exceptions'=>true,
                'trace'=>1,
            );
      
		    // create the soapclient and invoke __doRequest method
            $client = new SoapClient($url, $options);
			$output= $client->__doRequest($xmlrequest, $url, $action, 1);       
        }
		catch (SoapFault $fault) {
            echo "<h2>SOAP Fault!</h2><p>";
            echo "FaultCode: {$fault->faultcode} <br/>";
			echo "FaultString: {$fault->faultstring} <br/>";
			echo("</p/>");
       }
	
    echo ("<h2>WSDL URL: </h2><p>");    
    echo ($url);
    echo("</p/>");
    
    echo ("<h2>Action: </h2><p>");        
    echo ($action);
    echo("</p/>");
    
    echo("<h2>XMLRequest: </h2><p>");
    echo ($xmlrequest);
    echo("</p/>");
    
	if (is_soap_fault($output)) {
      echo "<h2>SOAP Fault!</h2><p>";
      echo "FaultCode: {$output->faultcode} <br/>";
	  echo "FaultString: {$output->faultstring} <br/>";
   }else{
      echo("<h2>Output: </h2><p>");
      echo ($output);
      echo("</p/>");
    }

?>
</body>
</html>
