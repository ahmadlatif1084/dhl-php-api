<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".onsubmit").click(function(){
                var formvalues=$('form').serializeArray();
                console.log('form values',formvalues);
                $.ajax({
                    url: "rateRequest_ajax.php",
                    type:"Post",
                    data: {
                        recipientname: formvalues[1].value,
                        recipientlastname: formvalues[2].value,
                        recipientaddress: formvalues[3].value,
                        recipientpostcode: formvalues[4].value,
                        recipienttown: formvalues[5].value,
                        recipientcountry: formvalues[6].value,
                        recipientemail: formvalues[7].value,
                        recipienttelephone: formvalues[8].value,
                        recipientmobile: formvalues[9].value,
                        recipient2ndaddress: formvalues[17].value,
                        recipient2ndpostcode: formvalues[18].value,
                        recipient2ndtown: formvalues[19].value,
                        recipient2ndcountry: formvalues[20].value
                    },
                    success: function(result){
                    console.log("result is",result);
                    }});
            });
        });
    </script>
</head>
<body>

<div class="container">
    <form>
    <fieldset id="form_owner">
        <legend><strong>Owners</strong></legend>
        <!--<legend>Owner</legend>-->
        <div class="form-group is-renewal-show" style="display:none;">
            <label for="yacht[old_name]" class="col-md-3 col-sm-3 col-xs-4 control-label"></label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                Please <a href="/smple.jpg" target="_blank">see here</a> where you can find the HULL ID, Reg no and Owner name
            </div>
        </div>

        <div style="display: block ">
            <div class="form-group private" style="display: none ">
                <label for="owner[yacht_regnr]" class="col-md-3 col-sm-3 col-xs-4 control-label">Delaware Registration number</label>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <input class="form-control" name="owner[yacht_regnr]" id="owner[yacht_regnr]" maxlength="40" type="text" value="DL-">
                </div>
            </div>

        </div>
        <div class="form-group private">
            <label for="owner[name]" class="col-md-3 col-sm-3 col-xs-4 control-label">First Name or Company Name</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <input class="form-control" name="owner[name]" id="owner[name]" maxlength="40" type="text">
            </div>
        </div>
        <div class="form-group private">
            <label for="owner[lastname]" class="col-md-3 col-sm-3 col-xs-4 control-label">Last Name</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <input class="form-control" name="owner[lastname]" id="owner[lastname]" maxlength="40" type="text">
            </div>
        </div>
        <div class="form-group private">
            <label class="col-md-3 col-sm-3 col-xs-4 control-label">Sex</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="checkbox">
                    <label class="no-padding">
                        <input name="owner[sex]" id="owner_male" value="male" type="radio">
                        Male </label>
                    <label>
                        <input name="owner[sex]" id="owner_female" value="female" type="radio">
                        Female </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="owner[address]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Address</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <input class="form-control" name="owner[address]" id="owner[address]" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="owner[postcode]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Post code</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <input class="form-control" name="owner[postcode]" id="owner[postcode]" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="owner[town]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Town</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <input class="form-control" name="owner[town]" id="owner[town]" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="owner_country" class="col-md-3 col-sm-3 col-xs-4 control-label both">Country</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <select name="owner[country]" id="owner_country" class="form-control">
                    <option selected="selected" value="">Select</option>


                    <option value="Afghanistan">Afghanistan</option>


                    <option value="Albania">Albania</option>


                    <option value="Algeria">Algeria</option>


                    <option value="American Samoa">American Samoa</option>


                    <option value="Andorra">Andorra</option>


                    <option value="Angola">Angola</option>


                    <option value="Anguilla">Anguilla</option>


                    <option value="Antarctica">Antarctica</option>


                    <option value="Antigua">Antigua</option>


                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>


                    <option value="Argentina">Argentina</option>


                    <option value="Armenia">Armenia</option>


                    <option value="Aruba">Aruba</option>


                    <option value="Australia">Australia</option>


                    <option value="Austria">Austria</option>


                    <option value="Azerbaijan">Azerbaijan</option>


                    <option value="Bahamas">Bahamas</option>


                    <option value="Bahrain">Bahrain</option>


                    <option value="Bangladesh">Bangladesh</option>


                    <option value="Barbados">Barbados</option>


                    <option value="Belarus">Belarus</option>


                    <option value="Belgium">Belgium</option>


                    <option value="Belize">Belize</option>


                    <option value="Benin">Benin</option>


                    <option value="Bermuda">Bermuda</option>


                    <option value="Bhutan">Bhutan</option>


                    <option value="Bolivia">Bolivia</option>


                    <option value="Bonaire">Bonaire</option>


                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>


                    <option value="Botswana">Botswana</option>


                    <option value="Bouvet Island">Bouvet Island</option>


                    <option value="Brazil">Brazil</option>


                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>


                    <option value="Brunei Darussalam">Brunei Darussalam</option>


                    <option value="Bulgaria">Bulgaria</option>


                    <option value="Burkina Faso">Burkina Faso</option>


                    <option value="Burundi">Burundi</option>


                    <option value="Cambodia">Cambodia</option>


                    <option value="Cameroon">Cameroon</option>


                    <option value="Canada">Canada</option>


                    <option value="Cape Verde">Cape Verde</option>


                    <option value="Central African Republic">Central African Republic</option>


                    <option value="Chad">Chad</option>


                    <option value="Chile">Chile</option>


                    <option value="China">China</option>


                    <option value="Christmas Island">Christmas Island</option>


                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>


                    <option value="Colombia">Colombia</option>


                    <option value="Comoros">Comoros</option>


                    <option value="Congo">Congo</option>


                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>


                    <option value="Cook Islands">Cook Islands</option>


                    <option value="Costa Rica">Costa Rica</option>


                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>


                    <option value="Croatia">Croatia</option>


                    <option value="Cuba">Cuba</option>


                    <option value="Curacao">Curacao</option>


                    <option value="Cyprus">Cyprus</option>


                    <option value="Czech Republic">Czech Republic</option>


                    <option value="Denmark">Denmark</option>


                    <option value="Djibouti">Djibouti</option>


                    <option value="Dominica">Dominica</option>


                    <option value="Dominican Republic">Dominican Republic</option>


                    <option value="Ecuador">Ecuador</option>


                    <option value="Egypt">Egypt</option>


                    <option value="El Salvador">El Salvador</option>


                    <option value="Equatorial Guinea">Equatorial Guinea</option>


                    <option value="Eritrea">Eritrea</option>


                    <option value="Estonia">Estonia</option>


                    <option value="Ethiopia">Ethiopia</option>


                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>


                    <option value="Faroe Islands">Faroe Islands</option>


                    <option value="Fiji">Fiji</option>


                    <option value="Finland">Finland</option>


                    <option value="France">France</option>


                    <option value="French Guiana">French Guiana</option>


                    <option value="French Polynesia">French Polynesia</option>


                    <option value="French Southern Territories">French Southern Territories</option>


                    <option value="Gabon">Gabon</option>


                    <option value="Gambia">Gambia</option>


                    <option value="Georgia">Georgia</option>


                    <option value="Germany">Germany</option>


                    <option value="Ghana">Ghana</option>


                    <option value="Gibraltar">Gibraltar</option>


                    <option value="Grand Cayman">Grand Cayman</option>


                    <option value="Greece">Greece</option>


                    <option value="Greenland">Greenland</option>


                    <option value="Grenada">Grenada</option>


                    <option value="Guadeloupe">Guadeloupe</option>


                    <option value="Guam">Guam</option>


                    <option value="Guatemala">Guatemala</option>


                    <option value="Guinea">Guinea</option>


                    <option value="Guinea-Bissau">Guinea-Bissau</option>


                    <option value="Guyana">Guyana</option>


                    <option value="Haiti">Haiti</option>


                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>


                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>


                    <option value="Honduras">Honduras</option>


                    <option value="Hong Kong">Hong Kong</option>


                    <option value="Hungary">Hungary</option>


                    <option value="Iceland">Iceland</option>


                    <option value="India">India</option>


                    <option value="Indonesia">Indonesia</option>


                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>


                    <option value="Iraq">Iraq</option>


                    <option value="Ireland">Ireland</option>


                    <option value="Israel">Israel</option>


                    <option value="Italy">Italy</option>


                    <option value="Jamaica">Jamaica</option>


                    <option value="Japan">Japan</option>


                    <option value="Jordan">Jordan</option>


                    <option value="Kazakhstan">Kazakhstan</option>


                    <option value="Kenya">Kenya</option>


                    <option value="Kiribati">Kiribati</option>


                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>


                    <option value="Korea, Republic of">Korea, Republic of</option>


                    <option value="Kosovo">Kosovo</option>


                    <option value="Kuwait">Kuwait</option>


                    <option value="Kyrgyzstan">Kyrgyzstan</option>


                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>


                    <option value="Latvia">Latvia</option>


                    <option value="Lebanon">Lebanon</option>


                    <option value="Lesotho">Lesotho</option>


                    <option value="Liberia">Liberia</option>


                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>


                    <option value="Liechtenstein">Liechtenstein</option>


                    <option value="Lithuania">Lithuania</option>


                    <option value="Luxembourg">Luxembourg</option>


                    <option value="Macao">Macao</option>


                    <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>


                    <option value="Madagascar">Madagascar</option>


                    <option value="Malawi">Malawi</option>


                    <option value="Malaysia">Malaysia</option>


                    <option value="Maldives">Maldives</option>


                    <option value="Mali">Mali</option>


                    <option value="Malta">Malta</option>


                    <option value="Marshall Islands">Marshall Islands</option>


                    <option value="Martinique">Martinique</option>


                    <option value="Mauritania">Mauritania</option>


                    <option value="Mauritius">Mauritius</option>


                    <option value="Mayotte">Mayotte</option>


                    <option value="Mexico">Mexico</option>


                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>


                    <option value="Moldova, Republic of">Moldova, Republic of</option>


                    <option value="Monaco">Monaco</option>


                    <option value="Mongolia">Mongolia</option>


                    <option value="Montenegro">Montenegro</option>


                    <option value="Montserrat">Montserrat</option>


                    <option value="Morocco">Morocco</option>


                    <option value="Mozambique">Mozambique</option>


                    <option value="Myanmar">Myanmar</option>


                    <option value="Namibia">Namibia</option>


                    <option value="Nauru">Nauru</option>


                    <option value="Nepal">Nepal</option>


                    <option value="Netherlands">Netherlands</option>


                    <option value="Netherlands Antilles">Netherlands Antilles</option>


                    <option value="New Caledonia">New Caledonia</option>


                    <option value="New Zealand">New Zealand</option>


                    <option value="Nicaragua">Nicaragua</option>


                    <option value="Niger">Niger</option>


                    <option value="Nigeria">Nigeria</option>


                    <option value="Niue">Niue</option>


                    <option value="Norfolk Island">Norfolk Island</option>


                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>


                    <option value="Norway">Norway</option>


                    <option value="Oman">Oman</option>


                    <option value="Pakistan">Pakistan</option>


                    <option value="Palau">Palau</option>


                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>


                    <option value="Panama">Panama</option>


                    <option value="Papua New Guinea">Papua New Guinea</option>


                    <option value="Paraguay">Paraguay</option>


                    <option value="Peru">Peru</option>


                    <option value="Philippines">Philippines</option>


                    <option value="Pitcairn">Pitcairn</option>


                    <option value="Poland">Poland</option>


                    <option value="Portugal">Portugal</option>


                    <option value="Puerto Rico">Puerto Rico</option>


                    <option value="Qatar">Qatar</option>


                    <option value="Reunion">Reunion</option>


                    <option value="Romania">Romania</option>


                    <option value="Russian Federation">Russian Federation</option>


                    <option value="Rwanda">Rwanda</option>


                    <option value="Saint Helena">Saint Helena</option>


                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>


                    <option value="Saint Lucia">Saint Lucia</option>


                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>


                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>


                    <option value="Samoa">Samoa</option>


                    <option value="San Marino">San Marino</option>


                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>


                    <option value="Saudi Arabia">Saudi Arabia</option>


                    <option value="Senegal">Senegal</option>


                    <option value="Serbia">Serbia</option>


                    <option value="Seychelles">Seychelles</option>


                    <option value="Sierra Leone">Sierra Leone</option>


                    <option value="Singapore">Singapore</option>


                    <option value="Slovakia">Slovakia</option>


                    <option value="Slovenia">Slovenia</option>


                    <option value="Solomon Islands">Solomon Islands</option>


                    <option value="Somalia">Somalia</option>


                    <option value="South Africa">South Africa</option>


                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>


                    <option value="Spain">Spain</option>


                    <option value="Sri Lanka">Sri Lanka</option>


                    <option value="St Barth">St Barth</option>


                    <option value="St Croix">St Croix</option>


                    <option value="St Maarten">St Maarten</option>


                    <option value="St Martin">St Martin</option>


                    <option value="St Thomas">St Thomas</option>


                    <option value="Sudan">Sudan</option>


                    <option value="Suriname">Suriname</option>


                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>


                    <option value="Swaziland">Swaziland</option>


                    <option value="Sweden">Sweden</option>


                    <option value="Switzerland">Switzerland</option>


                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>


                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>


                    <option value="Tajikistan">Tajikistan</option>


                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>


                    <option value="Thailand">Thailand</option>


                    <option value="Timor-Leste">Timor-Leste</option>


                    <option value="Togo">Togo</option>


                    <option value="Tokelau">Tokelau</option>


                    <option value="Tonga">Tonga</option>


                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>


                    <option value="Tunisia">Tunisia</option>


                    <option value="Turkey">Turkey</option>


                    <option value="Turkmenistan">Turkmenistan</option>


                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>


                    <option value="Tuvalu">Tuvalu</option>


                    <option value="Uganda">Uganda</option>


                    <option value="Ukraine">Ukraine</option>


                    <option value="United Arab Emirates">United Arab Emirates</option>


                    <option value="United Kingdom">United Kingdom</option>


                    <option value="United States">United States</option>


                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>


                    <option value="Uruguay">Uruguay</option>


                    <option value="Uzbekistan">Uzbekistan</option>


                    <option value="Vanuatu">Vanuatu</option>


                    <option value="Venezuela">Venezuela</option>


                    <option value="Viet Nam">Viet Nam</option>


                    <option value="Virgin Islands, British">Virgin Islands, British</option>


                    <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>


                    <option value="Wallis and Futuna">Wallis and Futuna</option>


                    <option value="Western Sahara">Western Sahara</option>


                    <option value="Yemen">Yemen</option>


                    <option value="Zambia">Zambia</option>


                    <option value="Zimbabwe">Zimbabwe</option>


                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="owner[email]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Email</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <input class="form-control" name="owner[email]" id="owner[email]" type="text" onblur="sendregisteration_email();">
            </div>
        </div>
        <div class="form-group is-renewal">
            <label for="owner[telLine]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Phone</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <input class="form-control owner[tel]" name="owner[telLine]" id="owner[telLine]" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="owner[telCell]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Mobile</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <input class="form-control owner[tel]" name="owner[telCell]" id="owner[telCell]" type="text">
            </div>
        </div>


        <div class="form-group individual private is-renewal">
            <label for="owner_birthYear" class="col-md-3 col-sm-3 col-xs-4 control-label">Date of birth</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="left select-wrapper" style="width: 20%; padding-right:2%">
                    <select class="form-control" name="owner[birthDay]" id="owner_birthDay">
                        <option value="" selected="selected">Day</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div class="left select-wrapper" style="width: 20%; padding-right:2%">
                    <select class="form-control" name="owner[birthMonth]" id="owner_birthMonth">
                        <option value="" selected="selected">Month</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="left select-wrapper" style="width: 60%;">
                    <select class="form-control" name="owner[birthYear]" id="owner_birthYear">
                        <option value="" selected="selected">Year</option>
                        <option value="1918">1918</option>
                        <option value="1919">1919</option>
                        <option value="1920">1920</option>
                        <option value="1921">1921</option>
                        <option value="1922">1922</option>
                        <option value="1923">1923</option>
                        <option value="1924">1924</option>
                        <option value="1925">1925</option>
                        <option value="1926">1926</option>
                        <option value="1927">1927</option>
                        <option value="1928">1928</option>
                        <option value="1929">1929</option>
                        <option value="1930">1930</option>
                        <option value="1931">1931</option>
                        <option value="1932">1932</option>
                        <option value="1933">1933</option>
                        <option value="1934">1934</option>
                        <option value="1935">1935</option>
                        <option value="1936">1936</option>
                        <option value="1937">1937</option>
                        <option value="1938">1938</option>
                        <option value="1939">1939</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                    </select>
                </div>
            </div>
        </div>
        <div style="display: block ">
            <div class="form-group individual private is-renewal" style="display:">
                <label for="owner[birthPlace]" class="col-md-3 col-sm-3 col-xs-4 control-label">Passport #</label>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <input class="form-control" name="owner[passport]" id="owner[passport]" type="text">
                </div>
            </div>
            <div class="form-group is-renewal">
                <label for="owner_country" class="col-md-3 col-sm-3 col-xs-4 control-label both">Passport Issuing Country</label>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <select name="owner[passport_country]" id="passport_country" class="form-control">
                        <option selected="selected" value="">Select</option>


                        <option value="Afghanistan">Afghanistan</option>


                        <option value="Albania">Albania</option>


                        <option value="Algeria">Algeria</option>


                        <option value="American Samoa">American Samoa</option>


                        <option value="Andorra">Andorra</option>


                        <option value="Angola">Angola</option>


                        <option value="Anguilla">Anguilla</option>


                        <option value="Antarctica">Antarctica</option>


                        <option value="Antigua">Antigua</option>


                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>


                        <option value="Argentina">Argentina</option>


                        <option value="Armenia">Armenia</option>


                        <option value="Aruba">Aruba</option>


                        <option value="Australia">Australia</option>


                        <option value="Austria">Austria</option>


                        <option value="Azerbaijan">Azerbaijan</option>


                        <option value="Bahamas">Bahamas</option>


                        <option value="Bahrain">Bahrain</option>


                        <option value="Bangladesh">Bangladesh</option>


                        <option value="Barbados">Barbados</option>


                        <option value="Belarus">Belarus</option>


                        <option value="Belgium">Belgium</option>


                        <option value="Belize">Belize</option>


                        <option value="Benin">Benin</option>


                        <option value="Bermuda">Bermuda</option>


                        <option value="Bhutan">Bhutan</option>


                        <option value="Bolivia">Bolivia</option>


                        <option value="Bonaire">Bonaire</option>


                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>


                        <option value="Botswana">Botswana</option>


                        <option value="Bouvet Island">Bouvet Island</option>


                        <option value="Brazil">Brazil</option>


                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>


                        <option value="Brunei Darussalam">Brunei Darussalam</option>


                        <option value="Bulgaria">Bulgaria</option>


                        <option value="Burkina Faso">Burkina Faso</option>


                        <option value="Burundi">Burundi</option>


                        <option value="Cambodia">Cambodia</option>


                        <option value="Cameroon">Cameroon</option>


                        <option value="Canada">Canada</option>


                        <option value="Cape Verde">Cape Verde</option>


                        <option value="Central African Republic">Central African Republic</option>


                        <option value="Chad">Chad</option>


                        <option value="Chile">Chile</option>


                        <option value="China">China</option>


                        <option value="Christmas Island">Christmas Island</option>


                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>


                        <option value="Colombia">Colombia</option>


                        <option value="Comoros">Comoros</option>


                        <option value="Congo">Congo</option>


                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>


                        <option value="Cook Islands">Cook Islands</option>


                        <option value="Costa Rica">Costa Rica</option>


                        <option value="Cote D'Ivoire">Cote D'Ivoire</option>


                        <option value="Croatia">Croatia</option>


                        <option value="Cuba">Cuba</option>


                        <option value="Curacao">Curacao</option>


                        <option value="Cyprus">Cyprus</option>


                        <option value="Czech Republic">Czech Republic</option>


                        <option value="Denmark">Denmark</option>


                        <option value="Djibouti">Djibouti</option>


                        <option value="Dominica">Dominica</option>


                        <option value="Dominican Republic">Dominican Republic</option>


                        <option value="Ecuador">Ecuador</option>


                        <option value="Egypt">Egypt</option>


                        <option value="El Salvador">El Salvador</option>


                        <option value="Equatorial Guinea">Equatorial Guinea</option>


                        <option value="Eritrea">Eritrea</option>


                        <option value="Estonia">Estonia</option>


                        <option value="Ethiopia">Ethiopia</option>


                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>


                        <option value="Faroe Islands">Faroe Islands</option>


                        <option value="Fiji">Fiji</option>


                        <option value="Finland">Finland</option>


                        <option value="France">France</option>


                        <option value="French Guiana">French Guiana</option>


                        <option value="French Polynesia">French Polynesia</option>


                        <option value="French Southern Territories">French Southern Territories</option>


                        <option value="Gabon">Gabon</option>


                        <option value="Gambia">Gambia</option>


                        <option value="Georgia">Georgia</option>


                        <option value="Germany">Germany</option>


                        <option value="Ghana">Ghana</option>


                        <option value="Gibraltar">Gibraltar</option>


                        <option value="Grand Cayman">Grand Cayman</option>


                        <option value="Greece">Greece</option>


                        <option value="Greenland">Greenland</option>


                        <option value="Grenada">Grenada</option>


                        <option value="Guadeloupe">Guadeloupe</option>


                        <option value="Guam">Guam</option>


                        <option value="Guatemala">Guatemala</option>


                        <option value="Guinea">Guinea</option>


                        <option value="Guinea-Bissau">Guinea-Bissau</option>


                        <option value="Guyana">Guyana</option>


                        <option value="Haiti">Haiti</option>


                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>


                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>


                        <option value="Honduras">Honduras</option>


                        <option value="Hong Kong">Hong Kong</option>


                        <option value="Hungary">Hungary</option>


                        <option value="Iceland">Iceland</option>


                        <option value="India">India</option>


                        <option value="Indonesia">Indonesia</option>


                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>


                        <option value="Iraq">Iraq</option>


                        <option value="Ireland">Ireland</option>


                        <option value="Israel">Israel</option>


                        <option value="Italy">Italy</option>


                        <option value="Jamaica">Jamaica</option>


                        <option value="Japan">Japan</option>


                        <option value="Jordan">Jordan</option>


                        <option value="Kazakhstan">Kazakhstan</option>


                        <option value="Kenya">Kenya</option>


                        <option value="Kiribati">Kiribati</option>


                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>


                        <option value="Korea, Republic of">Korea, Republic of</option>


                        <option value="Kosovo">Kosovo</option>


                        <option value="Kuwait">Kuwait</option>


                        <option value="Kyrgyzstan">Kyrgyzstan</option>


                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>


                        <option value="Latvia">Latvia</option>


                        <option value="Lebanon">Lebanon</option>


                        <option value="Lesotho">Lesotho</option>


                        <option value="Liberia">Liberia</option>


                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>


                        <option value="Liechtenstein">Liechtenstein</option>


                        <option value="Lithuania">Lithuania</option>


                        <option value="Luxembourg">Luxembourg</option>


                        <option value="Macao">Macao</option>


                        <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>


                        <option value="Madagascar">Madagascar</option>


                        <option value="Malawi">Malawi</option>


                        <option value="Malaysia">Malaysia</option>


                        <option value="Maldives">Maldives</option>


                        <option value="Mali">Mali</option>


                        <option value="Malta">Malta</option>


                        <option value="Marshall Islands">Marshall Islands</option>


                        <option value="Martinique">Martinique</option>


                        <option value="Mauritania">Mauritania</option>


                        <option value="Mauritius">Mauritius</option>


                        <option value="Mayotte">Mayotte</option>


                        <option value="Mexico">Mexico</option>


                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>


                        <option value="Moldova, Republic of">Moldova, Republic of</option>


                        <option value="Monaco">Monaco</option>


                        <option value="Mongolia">Mongolia</option>


                        <option value="Montenegro">Montenegro</option>


                        <option value="Montserrat">Montserrat</option>


                        <option value="Morocco">Morocco</option>


                        <option value="Mozambique">Mozambique</option>


                        <option value="Myanmar">Myanmar</option>


                        <option value="Namibia">Namibia</option>


                        <option value="Nauru">Nauru</option>


                        <option value="Nepal">Nepal</option>


                        <option value="Netherlands">Netherlands</option>


                        <option value="Netherlands Antilles">Netherlands Antilles</option>


                        <option value="New Caledonia">New Caledonia</option>


                        <option value="New Zealand">New Zealand</option>


                        <option value="Nicaragua">Nicaragua</option>


                        <option value="Niger">Niger</option>


                        <option value="Nigeria">Nigeria</option>


                        <option value="Niue">Niue</option>


                        <option value="Norfolk Island">Norfolk Island</option>


                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>


                        <option value="Norway">Norway</option>


                        <option value="Oman">Oman</option>


                        <option value="Pakistan">Pakistan</option>


                        <option value="Palau">Palau</option>


                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>


                        <option value="Panama">Panama</option>


                        <option value="Papua New Guinea">Papua New Guinea</option>


                        <option value="Paraguay">Paraguay</option>


                        <option value="Peru">Peru</option>


                        <option value="Philippines">Philippines</option>


                        <option value="Pitcairn">Pitcairn</option>


                        <option value="Poland">Poland</option>


                        <option value="Portugal">Portugal</option>


                        <option value="Puerto Rico">Puerto Rico</option>


                        <option value="Qatar">Qatar</option>


                        <option value="Reunion">Reunion</option>


                        <option value="Romania">Romania</option>


                        <option value="Russian Federation">Russian Federation</option>


                        <option value="Rwanda">Rwanda</option>


                        <option value="Saint Helena">Saint Helena</option>


                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>


                        <option value="Saint Lucia">Saint Lucia</option>


                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>


                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>


                        <option value="Samoa">Samoa</option>


                        <option value="San Marino">San Marino</option>


                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>


                        <option value="Saudi Arabia">Saudi Arabia</option>


                        <option value="Senegal">Senegal</option>


                        <option value="Serbia">Serbia</option>


                        <option value="Seychelles">Seychelles</option>


                        <option value="Sierra Leone">Sierra Leone</option>


                        <option value="Singapore">Singapore</option>


                        <option value="Slovakia">Slovakia</option>


                        <option value="Slovenia">Slovenia</option>


                        <option value="Solomon Islands">Solomon Islands</option>


                        <option value="Somalia">Somalia</option>


                        <option value="South Africa">South Africa</option>


                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>


                        <option value="Spain">Spain</option>


                        <option value="Sri Lanka">Sri Lanka</option>


                        <option value="St Barth">St Barth</option>


                        <option value="St Croix">St Croix</option>


                        <option value="St Maarten">St Maarten</option>


                        <option value="St Martin">St Martin</option>


                        <option value="St Thomas">St Thomas</option>


                        <option value="Sudan">Sudan</option>


                        <option value="Suriname">Suriname</option>


                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>


                        <option value="Swaziland">Swaziland</option>


                        <option value="Sweden">Sweden</option>


                        <option value="Switzerland">Switzerland</option>


                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>


                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>


                        <option value="Tajikistan">Tajikistan</option>


                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>


                        <option value="Thailand">Thailand</option>


                        <option value="Timor-Leste">Timor-Leste</option>


                        <option value="Togo">Togo</option>


                        <option value="Tokelau">Tokelau</option>


                        <option value="Tonga">Tonga</option>


                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>


                        <option value="Tunisia">Tunisia</option>


                        <option value="Turkey">Turkey</option>


                        <option value="Turkmenistan">Turkmenistan</option>


                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>


                        <option value="Tuvalu">Tuvalu</option>


                        <option value="Uganda">Uganda</option>


                        <option value="Ukraine">Ukraine</option>


                        <option value="United Arab Emirates">United Arab Emirates</option>


                        <option value="United Kingdom">United Kingdom</option>


                        <option value="United States">United States</option>


                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>


                        <option value="Uruguay">Uruguay</option>


                        <option value="Uzbekistan">Uzbekistan</option>


                        <option value="Vanuatu">Vanuatu</option>


                        <option value="Venezuela">Venezuela</option>


                        <option value="Viet Nam">Viet Nam</option>


                        <option value="Virgin Islands, British">Virgin Islands, British</option>


                        <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>


                        <option value="Wallis and Futuna">Wallis and Futuna</option>


                        <option value="Western Sahara">Western Sahara</option>


                        <option value="Yemen">Yemen</option>


                        <option value="Zambia">Zambia</option>


                        <option value="Zimbabwe">Zimbabwe</option>


                    </select>
                </div>
            </div>
            <div class="form-group individual private is-renewal" style="display:">
                <label for="owner[birthPlace]" class="col-md-3 col-sm-3 col-xs-4 control-label">Place of birth</label>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <input class="form-control" name="owner[birthPlace]" id="owner[birthPlace]" type="text">
                </div>
            </div>
        </div>
        <div class="form-group private is-renewal" style="display:">
            <label for="owner[birthCountry]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Nationality</label>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <select name="owner[birthCountry]" id="owner[birthCountry]" class="form-control" onchange="sendregisteration_email();">
                    <option selected="selected" value="">Select</option>


                    <option value="Afghanistan">Afghanistan</option>


                    <option value="Albania">Albania</option>


                    <option value="Algeria">Algeria</option>


                    <option value="American Samoa">American Samoa</option>


                    <option value="Andorra">Andorra</option>


                    <option value="Angola">Angola</option>


                    <option value="Anguilla">Anguilla</option>


                    <option value="Antarctica">Antarctica</option>


                    <option value="Antigua">Antigua</option>


                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>


                    <option value="Argentina">Argentina</option>


                    <option value="Armenia">Armenia</option>


                    <option value="Aruba">Aruba</option>


                    <option value="Australia">Australia</option>


                    <option value="Austria">Austria</option>


                    <option value="Azerbaijan">Azerbaijan</option>


                    <option value="Bahamas">Bahamas</option>


                    <option value="Bahrain">Bahrain</option>


                    <option value="Bangladesh">Bangladesh</option>


                    <option value="Barbados">Barbados</option>


                    <option value="Belarus">Belarus</option>


                    <option value="Belgium">Belgium</option>


                    <option value="Belize">Belize</option>


                    <option value="Benin">Benin</option>


                    <option value="Bermuda">Bermuda</option>


                    <option value="Bhutan">Bhutan</option>


                    <option value="Bolivia">Bolivia</option>


                    <option value="Bonaire">Bonaire</option>


                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>


                    <option value="Botswana">Botswana</option>


                    <option value="Bouvet Island">Bouvet Island</option>


                    <option value="Brazil">Brazil</option>


                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>


                    <option value="Brunei Darussalam">Brunei Darussalam</option>


                    <option value="Bulgaria">Bulgaria</option>


                    <option value="Burkina Faso">Burkina Faso</option>


                    <option value="Burundi">Burundi</option>


                    <option value="Cambodia">Cambodia</option>


                    <option value="Cameroon">Cameroon</option>


                    <option value="Canada">Canada</option>


                    <option value="Cape Verde">Cape Verde</option>


                    <option value="Central African Republic">Central African Republic</option>


                    <option value="Chad">Chad</option>


                    <option value="Chile">Chile</option>


                    <option value="China">China</option>


                    <option value="Christmas Island">Christmas Island</option>


                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>


                    <option value="Colombia">Colombia</option>


                    <option value="Comoros">Comoros</option>


                    <option value="Congo">Congo</option>


                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>


                    <option value="Cook Islands">Cook Islands</option>


                    <option value="Costa Rica">Costa Rica</option>


                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>


                    <option value="Croatia">Croatia</option>


                    <option value="Cuba">Cuba</option>


                    <option value="Curacao">Curacao</option>


                    <option value="Cyprus">Cyprus</option>


                    <option value="Czech Republic">Czech Republic</option>


                    <option value="Denmark">Denmark</option>


                    <option value="Djibouti">Djibouti</option>


                    <option value="Dominica">Dominica</option>


                    <option value="Dominican Republic">Dominican Republic</option>


                    <option value="Ecuador">Ecuador</option>


                    <option value="Egypt">Egypt</option>


                    <option value="El Salvador">El Salvador</option>


                    <option value="Equatorial Guinea">Equatorial Guinea</option>


                    <option value="Eritrea">Eritrea</option>


                    <option value="Estonia">Estonia</option>


                    <option value="Ethiopia">Ethiopia</option>


                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>


                    <option value="Faroe Islands">Faroe Islands</option>


                    <option value="Fiji">Fiji</option>


                    <option value="Finland">Finland</option>


                    <option value="France">France</option>


                    <option value="French Guiana">French Guiana</option>


                    <option value="French Polynesia">French Polynesia</option>


                    <option value="French Southern Territories">French Southern Territories</option>


                    <option value="Gabon">Gabon</option>


                    <option value="Gambia">Gambia</option>


                    <option value="Georgia">Georgia</option>


                    <option value="Germany">Germany</option>


                    <option value="Ghana">Ghana</option>


                    <option value="Gibraltar">Gibraltar</option>


                    <option value="Grand Cayman">Grand Cayman</option>


                    <option value="Greece">Greece</option>


                    <option value="Greenland">Greenland</option>


                    <option value="Grenada">Grenada</option>


                    <option value="Guadeloupe">Guadeloupe</option>


                    <option value="Guam">Guam</option>


                    <option value="Guatemala">Guatemala</option>


                    <option value="Guinea">Guinea</option>


                    <option value="Guinea-Bissau">Guinea-Bissau</option>


                    <option value="Guyana">Guyana</option>


                    <option value="Haiti">Haiti</option>


                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>


                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>


                    <option value="Honduras">Honduras</option>


                    <option value="Hong Kong">Hong Kong</option>


                    <option value="Hungary">Hungary</option>


                    <option value="Iceland">Iceland</option>


                    <option value="India">India</option>


                    <option value="Indonesia">Indonesia</option>


                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>


                    <option value="Iraq">Iraq</option>


                    <option value="Ireland">Ireland</option>


                    <option value="Israel">Israel</option>


                    <option value="Italy">Italy</option>


                    <option value="Jamaica">Jamaica</option>


                    <option value="Japan">Japan</option>


                    <option value="Jordan">Jordan</option>


                    <option value="Kazakhstan">Kazakhstan</option>


                    <option value="Kenya">Kenya</option>


                    <option value="Kiribati">Kiribati</option>


                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>


                    <option value="Korea, Republic of">Korea, Republic of</option>


                    <option value="Kosovo">Kosovo</option>


                    <option value="Kuwait">Kuwait</option>


                    <option value="Kyrgyzstan">Kyrgyzstan</option>


                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>


                    <option value="Latvia">Latvia</option>


                    <option value="Lebanon">Lebanon</option>


                    <option value="Lesotho">Lesotho</option>


                    <option value="Liberia">Liberia</option>


                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>


                    <option value="Liechtenstein">Liechtenstein</option>


                    <option value="Lithuania">Lithuania</option>


                    <option value="Luxembourg">Luxembourg</option>


                    <option value="Macao">Macao</option>


                    <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>


                    <option value="Madagascar">Madagascar</option>


                    <option value="Malawi">Malawi</option>


                    <option value="Malaysia">Malaysia</option>


                    <option value="Maldives">Maldives</option>


                    <option value="Mali">Mali</option>


                    <option value="Malta">Malta</option>


                    <option value="Marshall Islands">Marshall Islands</option>


                    <option value="Martinique">Martinique</option>


                    <option value="Mauritania">Mauritania</option>


                    <option value="Mauritius">Mauritius</option>


                    <option value="Mayotte">Mayotte</option>


                    <option value="Mexico">Mexico</option>


                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>


                    <option value="Moldova, Republic of">Moldova, Republic of</option>


                    <option value="Monaco">Monaco</option>


                    <option value="Mongolia">Mongolia</option>


                    <option value="Montenegro">Montenegro</option>


                    <option value="Montserrat">Montserrat</option>


                    <option value="Morocco">Morocco</option>


                    <option value="Mozambique">Mozambique</option>


                    <option value="Myanmar">Myanmar</option>


                    <option value="Namibia">Namibia</option>


                    <option value="Nauru">Nauru</option>


                    <option value="Nepal">Nepal</option>


                    <option value="Netherlands">Netherlands</option>


                    <option value="Netherlands Antilles">Netherlands Antilles</option>


                    <option value="New Caledonia">New Caledonia</option>


                    <option value="New Zealand">New Zealand</option>


                    <option value="Nicaragua">Nicaragua</option>


                    <option value="Niger">Niger</option>


                    <option value="Nigeria">Nigeria</option>


                    <option value="Niue">Niue</option>


                    <option value="Norfolk Island">Norfolk Island</option>


                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>


                    <option value="Norway">Norway</option>


                    <option value="Oman">Oman</option>


                    <option value="Pakistan">Pakistan</option>


                    <option value="Palau">Palau</option>


                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>


                    <option value="Panama">Panama</option>


                    <option value="Papua New Guinea">Papua New Guinea</option>


                    <option value="Paraguay">Paraguay</option>


                    <option value="Peru">Peru</option>


                    <option value="Philippines">Philippines</option>


                    <option value="Pitcairn">Pitcairn</option>


                    <option value="Poland">Poland</option>


                    <option value="Portugal">Portugal</option>


                    <option value="Puerto Rico">Puerto Rico</option>


                    <option value="Qatar">Qatar</option>


                    <option value="Reunion">Reunion</option>


                    <option value="Romania">Romania</option>


                    <option value="Russian Federation">Russian Federation</option>


                    <option value="Rwanda">Rwanda</option>


                    <option value="Saint Helena">Saint Helena</option>


                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>


                    <option value="Saint Lucia">Saint Lucia</option>


                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>


                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>


                    <option value="Samoa">Samoa</option>


                    <option value="San Marino">San Marino</option>


                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>


                    <option value="Saudi Arabia">Saudi Arabia</option>


                    <option value="Senegal">Senegal</option>


                    <option value="Serbia">Serbia</option>


                    <option value="Seychelles">Seychelles</option>


                    <option value="Sierra Leone">Sierra Leone</option>


                    <option value="Singapore">Singapore</option>


                    <option value="Slovakia">Slovakia</option>


                    <option value="Slovenia">Slovenia</option>


                    <option value="Solomon Islands">Solomon Islands</option>


                    <option value="Somalia">Somalia</option>


                    <option value="South Africa">South Africa</option>


                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>


                    <option value="Spain">Spain</option>


                    <option value="Sri Lanka">Sri Lanka</option>


                    <option value="St Barth">St Barth</option>


                    <option value="St Croix">St Croix</option>


                    <option value="St Maarten">St Maarten</option>


                    <option value="St Martin">St Martin</option>


                    <option value="St Thomas">St Thomas</option>


                    <option value="Sudan">Sudan</option>


                    <option value="Suriname">Suriname</option>


                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>


                    <option value="Swaziland">Swaziland</option>


                    <option value="Sweden">Sweden</option>


                    <option value="Switzerland">Switzerland</option>


                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>


                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>


                    <option value="Tajikistan">Tajikistan</option>


                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>


                    <option value="Thailand">Thailand</option>


                    <option value="Timor-Leste">Timor-Leste</option>


                    <option value="Togo">Togo</option>


                    <option value="Tokelau">Tokelau</option>


                    <option value="Tonga">Tonga</option>


                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>


                    <option value="Tunisia">Tunisia</option>


                    <option value="Turkey">Turkey</option>


                    <option value="Turkmenistan">Turkmenistan</option>


                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>


                    <option value="Tuvalu">Tuvalu</option>


                    <option value="Uganda">Uganda</option>


                    <option value="Ukraine">Ukraine</option>


                    <option value="United Arab Emirates">United Arab Emirates</option>


                    <option value="United Kingdom">United Kingdom</option>


                    <option value="United States">United States</option>


                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>


                    <option value="Uruguay">Uruguay</option>


                    <option value="Uzbekistan">Uzbekistan</option>


                    <option value="Vanuatu">Vanuatu</option>


                    <option value="Venezuela">Venezuela</option>


                    <option value="Viet Nam">Viet Nam</option>


                    <option value="Virgin Islands, British">Virgin Islands, British</option>


                    <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>


                    <option value="Wallis and Futuna">Wallis and Futuna</option>


                    <option value="Western Sahara">Western Sahara</option>


                    <option value="Yemen">Yemen</option>


                    <option value="Zambia">Zambia</option>


                    <option value="Zimbabwe">Zimbabwe</option>


                </select>
            </div>
        </div>
        <div class="form-group private is-renewal" style="display: block ">
            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Send documentation to a different delivery address</label>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="checkbox">
                    <label class="no-padding">
                        <input name="owner[other_address]" id="other_add_yes" value="yes" type="radio" onclick="$('#show_diff_add').show();">
                        YES </label>
                    <label>
                        <input name="owner[other_address]" id="other_add_no" value="no" type="radio" onclick="$('#show_diff_add').hide();" checked="checked">
                        NO </label>
                </div>
            </div>
        </div>
        <div id="show_diff_add" style="">
            <div class="form-group">
                <label for="owner[address_diff]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Address</label>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <input class="form-control" name="owner[address_diff]" id="owner[address_diff]" type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="owner[postcode_diff]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Post code</label>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <input class="form-control" name="owner[postcode_diff]" id="owner[postcode_diff]" type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="owner[town_diff]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Town</label>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <input class="form-control" name="owner[town_diff]" id="owner[town_diff]" type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="owner[country_diff]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Country</label>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <select name="owner[country_diff]" id="country_diff" class="form-control">
                        <option selected="selected" value="">Select</option>


                        <option value="Afghanistan">Afghanistan</option>


                        <option value="Albania">Albania</option>


                        <option value="Algeria">Algeria</option>


                        <option value="American Samoa">American Samoa</option>


                        <option value="Andorra">Andorra</option>


                        <option value="Angola">Angola</option>


                        <option value="Anguilla">Anguilla</option>


                        <option value="Antarctica">Antarctica</option>


                        <option value="Antigua">Antigua</option>


                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>


                        <option value="Argentina">Argentina</option>


                        <option value="Armenia">Armenia</option>


                        <option value="Aruba">Aruba</option>


                        <option value="Australia">Australia</option>


                        <option value="Austria">Austria</option>


                        <option value="Azerbaijan">Azerbaijan</option>


                        <option value="Bahamas">Bahamas</option>


                        <option value="Bahrain">Bahrain</option>


                        <option value="Bangladesh">Bangladesh</option>


                        <option value="Barbados">Barbados</option>


                        <option value="Belarus">Belarus</option>


                        <option value="Belgium">Belgium</option>


                        <option value="Belize">Belize</option>


                        <option value="Benin">Benin</option>


                        <option value="Bermuda">Bermuda</option>


                        <option value="Bhutan">Bhutan</option>


                        <option value="Bolivia">Bolivia</option>


                        <option value="Bonaire">Bonaire</option>


                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>


                        <option value="Botswana">Botswana</option>


                        <option value="Bouvet Island">Bouvet Island</option>


                        <option value="Brazil">Brazil</option>


                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>


                        <option value="Brunei Darussalam">Brunei Darussalam</option>


                        <option value="Bulgaria">Bulgaria</option>


                        <option value="Burkina Faso">Burkina Faso</option>


                        <option value="Burundi">Burundi</option>


                        <option value="Cambodia">Cambodia</option>


                        <option value="Cameroon">Cameroon</option>


                        <option value="Canada">Canada</option>


                        <option value="Cape Verde">Cape Verde</option>


                        <option value="Central African Republic">Central African Republic</option>


                        <option value="Chad">Chad</option>


                        <option value="Chile">Chile</option>


                        <option value="China">China</option>


                        <option value="Christmas Island">Christmas Island</option>


                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>


                        <option value="Colombia">Colombia</option>


                        <option value="Comoros">Comoros</option>


                        <option value="Congo">Congo</option>


                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>


                        <option value="Cook Islands">Cook Islands</option>


                        <option value="Costa Rica">Costa Rica</option>


                        <option value="Cote D'Ivoire">Cote D'Ivoire</option>


                        <option value="Croatia">Croatia</option>


                        <option value="Cuba">Cuba</option>


                        <option value="Curacao">Curacao</option>


                        <option value="Cyprus">Cyprus</option>


                        <option value="Czech Republic">Czech Republic</option>


                        <option value="Denmark">Denmark</option>


                        <option value="Djibouti">Djibouti</option>


                        <option value="Dominica">Dominica</option>


                        <option value="Dominican Republic">Dominican Republic</option>


                        <option value="Ecuador">Ecuador</option>


                        <option value="Egypt">Egypt</option>


                        <option value="El Salvador">El Salvador</option>


                        <option value="Equatorial Guinea">Equatorial Guinea</option>


                        <option value="Eritrea">Eritrea</option>


                        <option value="Estonia">Estonia</option>


                        <option value="Ethiopia">Ethiopia</option>


                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>


                        <option value="Faroe Islands">Faroe Islands</option>


                        <option value="Fiji">Fiji</option>


                        <option value="Finland">Finland</option>


                        <option value="France">France</option>


                        <option value="French Guiana">French Guiana</option>


                        <option value="French Polynesia">French Polynesia</option>


                        <option value="French Southern Territories">French Southern Territories</option>


                        <option value="Gabon">Gabon</option>


                        <option value="Gambia">Gambia</option>


                        <option value="Georgia">Georgia</option>


                        <option value="Germany">Germany</option>


                        <option value="Ghana">Ghana</option>


                        <option value="Gibraltar">Gibraltar</option>


                        <option value="Grand Cayman">Grand Cayman</option>


                        <option value="Greece">Greece</option>


                        <option value="Greenland">Greenland</option>


                        <option value="Grenada">Grenada</option>


                        <option value="Guadeloupe">Guadeloupe</option>


                        <option value="Guam">Guam</option>


                        <option value="Guatemala">Guatemala</option>


                        <option value="Guinea">Guinea</option>


                        <option value="Guinea-Bissau">Guinea-Bissau</option>


                        <option value="Guyana">Guyana</option>


                        <option value="Haiti">Haiti</option>


                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>


                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>


                        <option value="Honduras">Honduras</option>


                        <option value="Hong Kong">Hong Kong</option>


                        <option value="Hungary">Hungary</option>


                        <option value="Iceland">Iceland</option>


                        <option value="India">India</option>


                        <option value="Indonesia">Indonesia</option>


                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>


                        <option value="Iraq">Iraq</option>


                        <option value="Ireland">Ireland</option>


                        <option value="Israel">Israel</option>


                        <option value="Italy">Italy</option>


                        <option value="Jamaica">Jamaica</option>


                        <option value="Japan">Japan</option>


                        <option value="Jordan">Jordan</option>


                        <option value="Kazakhstan">Kazakhstan</option>


                        <option value="Kenya">Kenya</option>


                        <option value="Kiribati">Kiribati</option>


                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>


                        <option value="Korea, Republic of">Korea, Republic of</option>


                        <option value="Kosovo">Kosovo</option>


                        <option value="Kuwait">Kuwait</option>


                        <option value="Kyrgyzstan">Kyrgyzstan</option>


                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>


                        <option value="Latvia">Latvia</option>


                        <option value="Lebanon">Lebanon</option>


                        <option value="Lesotho">Lesotho</option>


                        <option value="Liberia">Liberia</option>


                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>


                        <option value="Liechtenstein">Liechtenstein</option>


                        <option value="Lithuania">Lithuania</option>


                        <option value="Luxembourg">Luxembourg</option>


                        <option value="Macao">Macao</option>


                        <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>


                        <option value="Madagascar">Madagascar</option>


                        <option value="Malawi">Malawi</option>


                        <option value="Malaysia">Malaysia</option>


                        <option value="Maldives">Maldives</option>


                        <option value="Mali">Mali</option>


                        <option value="Malta">Malta</option>


                        <option value="Marshall Islands">Marshall Islands</option>


                        <option value="Martinique">Martinique</option>


                        <option value="Mauritania">Mauritania</option>


                        <option value="Mauritius">Mauritius</option>


                        <option value="Mayotte">Mayotte</option>


                        <option value="Mexico">Mexico</option>


                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>


                        <option value="Moldova, Republic of">Moldova, Republic of</option>


                        <option value="Monaco">Monaco</option>


                        <option value="Mongolia">Mongolia</option>


                        <option value="Montenegro">Montenegro</option>


                        <option value="Montserrat">Montserrat</option>


                        <option value="Morocco">Morocco</option>


                        <option value="Mozambique">Mozambique</option>


                        <option value="Myanmar">Myanmar</option>


                        <option value="Namibia">Namibia</option>


                        <option value="Nauru">Nauru</option>


                        <option value="Nepal">Nepal</option>


                        <option value="Netherlands">Netherlands</option>


                        <option value="Netherlands Antilles">Netherlands Antilles</option>


                        <option value="New Caledonia">New Caledonia</option>


                        <option value="New Zealand">New Zealand</option>


                        <option value="Nicaragua">Nicaragua</option>


                        <option value="Niger">Niger</option>


                        <option value="Nigeria">Nigeria</option>


                        <option value="Niue">Niue</option>


                        <option value="Norfolk Island">Norfolk Island</option>


                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>


                        <option value="Norway">Norway</option>


                        <option value="Oman">Oman</option>


                        <option value="Pakistan">Pakistan</option>


                        <option value="Palau">Palau</option>


                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>


                        <option value="Panama">Panama</option>


                        <option value="Papua New Guinea">Papua New Guinea</option>


                        <option value="Paraguay">Paraguay</option>


                        <option value="Peru">Peru</option>


                        <option value="Philippines">Philippines</option>


                        <option value="Pitcairn">Pitcairn</option>


                        <option value="Poland">Poland</option>


                        <option value="Portugal">Portugal</option>


                        <option value="Puerto Rico">Puerto Rico</option>


                        <option value="Qatar">Qatar</option>


                        <option value="Reunion">Reunion</option>


                        <option value="Romania">Romania</option>


                        <option value="Russian Federation">Russian Federation</option>


                        <option value="Rwanda">Rwanda</option>


                        <option value="Saint Helena">Saint Helena</option>


                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>


                        <option value="Saint Lucia">Saint Lucia</option>


                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>


                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>


                        <option value="Samoa">Samoa</option>


                        <option value="San Marino">San Marino</option>


                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>


                        <option value="Saudi Arabia">Saudi Arabia</option>


                        <option value="Senegal">Senegal</option>


                        <option value="Serbia">Serbia</option>


                        <option value="Seychelles">Seychelles</option>


                        <option value="Sierra Leone">Sierra Leone</option>


                        <option value="Singapore">Singapore</option>


                        <option value="Slovakia">Slovakia</option>


                        <option value="Slovenia">Slovenia</option>


                        <option value="Solomon Islands">Solomon Islands</option>


                        <option value="Somalia">Somalia</option>


                        <option value="South Africa">South Africa</option>


                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>


                        <option value="Spain">Spain</option>


                        <option value="Sri Lanka">Sri Lanka</option>


                        <option value="St Barth">St Barth</option>


                        <option value="St Croix">St Croix</option>


                        <option value="St Maarten">St Maarten</option>


                        <option value="St Martin">St Martin</option>


                        <option value="St Thomas">St Thomas</option>


                        <option value="Sudan">Sudan</option>


                        <option value="Suriname">Suriname</option>


                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>


                        <option value="Swaziland">Swaziland</option>


                        <option value="Sweden">Sweden</option>


                        <option value="Switzerland">Switzerland</option>


                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>


                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>


                        <option value="Tajikistan">Tajikistan</option>


                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>


                        <option value="Thailand">Thailand</option>


                        <option value="Timor-Leste">Timor-Leste</option>


                        <option value="Togo">Togo</option>


                        <option value="Tokelau">Tokelau</option>


                        <option value="Tonga">Tonga</option>


                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>


                        <option value="Tunisia">Tunisia</option>


                        <option value="Turkey">Turkey</option>


                        <option value="Turkmenistan">Turkmenistan</option>


                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>


                        <option value="Tuvalu">Tuvalu</option>


                        <option value="Uganda">Uganda</option>


                        <option value="Ukraine">Ukraine</option>


                        <option value="United Arab Emirates">United Arab Emirates</option>


                        <option value="United Kingdom">United Kingdom</option>


                        <option value="United States">United States</option>


                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>


                        <option value="Uruguay">Uruguay</option>


                        <option value="Uzbekistan">Uzbekistan</option>


                        <option value="Vanuatu">Vanuatu</option>


                        <option value="Venezuela">Venezuela</option>


                        <option value="Viet Nam">Viet Nam</option>


                        <option value="Virgin Islands, British">Virgin Islands, British</option>


                        <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>


                        <option value="Wallis and Futuna">Wallis and Futuna</option>


                        <option value="Western Sahara">Western Sahara</option>


                        <option value="Yemen">Yemen</option>


                        <option value="Zambia">Zambia</option>


                        <option value="Zimbabwe">Zimbabwe</option>


                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="owner[telLine_diff]" class="col-md-3 col-sm-3 col-xs-4 control-label both">Phone</label>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <input class="form-control owner[tel]" name="owner[telLine_diff]" id="owner[telLine_diff]" type="text">
                </div>
            </div>
        </div>
        <div class="form-group private" id="second_owner_button" style="display:">
            <div class="col-sm-offset-3  col-md-8 col-sm-8 col-xs-12" style="display: block ">
                <input class="btn btn-primary col-xs-12 onsubmit" value="Submit">
            </div>
        </div>

    </fieldset>
    </form>
</div>

</body>
</html>
