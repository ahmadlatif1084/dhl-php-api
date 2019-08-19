<?php
header('Content-Type: application/json; charset=utf-8');
$jsondata='{
 "ShipmentRequest" : {
 "RequestedShipment" : {
 "ShipmentInfo" : {
 "DropOffType" : "REGULAR_PICKUP",
 "ServiceType" : "P",
 "Account" : "123456789",
 "Currency" : "SGD",
 "UnitOfMeasurement" : "SI"
 },
 "ShipTimestamp" : "2019-07-23T12:30:47GMT+01:00",
 "PaymentInfo" : "DAP",
 "InternationalDetail" : {
 "Commodities" : {
 "NumberOfPieces" : 2,
 "Description" : "Customer Reference 1",
 "CountryOfManufacture" : "CN",
 "Quantity" : 1,
 "UnitPrice" : 5,
 "CustomsValue" : 10
 },
 "Content" : "NON_DOCUMENTS"
 },
 "Ship" : {
 "Shipper" : {
 "Contact" : {
 "PersonName" : "Tester 1",
 "CompanyName" : "DHL",
 "PhoneNumber" : 2175441239,
 "EmailAddress" : "jb@acme.com"
 },
 "Address" : {
 "StreetLines" : "#05-33 Singapore Post Centre",
 "City" : "Singapore ",
 "PostalCode" : 408600,
 "CountryCode" : "SG"
 }
 },
 "Recipient" : {
 "Contact" : {
 "PersonName" : "Tester 2",
 "CompanyName" : "Acme Inc",
 "PhoneNumber" : 88347346643,
 "EmailAddress" : "jackie.chan@eei.com"
 },
 "Address" : {
 "StreetLines" : "500 Hunt Valley Road",
 "City" : "New Kensington PA",
 "StateOrProvinceCode" : "PA",
 "PostalCode" : 15068,
 "CountryCode" : "US"
 }
 }
 },
 "Packages" : {
 "RequestedPackages" : [ {
 "@number" : "1",
 "Weight" : 2,
 "Dimensions" : {
 "Length" : 1,
 "Width" : 2,
 "Height" : 3
 },
 "CustomerReferences" : "Piece 1"
 }, {
 "@number" : "2",
 "Weight" : 2,
 "Dimensions" : {
 "Length" : 1,
 "Width" : 2,
 "Height" : 3
 },
 "CustomerReferences" : "Piece 2"
 } ]
 }
 }
 }
 }';
$url='https://wsbexpress.dhl.com/rest/sndpt/ShipmentRequest';


//create a new cURL resource
$ch = curl_init($url);

//setup request to send json via POST
$data = array(
    'username' => 'boatandyachNL',
    'password' => 'K^9gL$7oZ$1e'
);
//$payload = json_encode(array("user" => $data));
$payload = json_encode(array("user" => $data));

//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);

//close cURL resource
curl_close($ch);

//$someArray = json_decode($jsondata, true);
//$returndata=CallAPI('POST',$url2,$jsondata);
echo "<pre>";
print_r($result);
function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "boatandyachNL:K^9gL$7oZ$1e");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}
?>