<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="VIEWPORT" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" 
    integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body>
       
        <div class="contaner">
            <div class="row">
                <div class="col-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                          <h3>  <div class="card-title">Contact Form</h3>
                                <div class="card-body">
                            <form id="contact-form" {{--action="{{ route('contact-form-store')}}"--}}>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputname4">Name</label>
                                            <input type="text" class="form-control" id="name4" placeholder="Enter Your Name">
                                            
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputAddress">Address</label>
                                          <input type="text" class="form-control" id="inputAddress" placeholder="Door No:&Street/arae">
                                        </div>
                                        <div class="form-group">
                                          <label for="inputcity">City</label>
                                          <input type="text" class="form-control" id="inputcity" placeholder="Enter your city name">
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputstate">State</label>
                                            <input type="text" class="form-control" id="inputstate">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputcountry">Country</label>
                                            <select id="inputcountry" class="form-control">
                                                <option hidden selected disabled>please select.....</option>
                                                <option>Afghanistan</option>
                                                <option>Albania</option>
                                                <option>Algeria</option>Andorra<option>Angola</option>Antigua and Barbuda<option>Argentina</option><option>Armenia</option>
                                                <option>Australia</option><option>Austria</option><option>Azerbaijan</option><option>Bahamas</option><option>Bahrain</option
                                                    ><option>Bangladesh</option><option>Barbados</option><option>Belarus</option><option>Belgium</option><option>Belize</option>
                                                    <option>Benin</option><option>Bhutan</option><option>Bolivia</option><option>Bosnia and Herzegovina</option><option>Botswana</option>
                                                    <option>Brazil</option><option>Brunei</option><option>Bulgaria</option><option>Burkina Faso</option><option>Burundi</option>
                                                    <option>Côte d'Ivoire</option><option>Cabo Verde</option><option>Cambodia</option><option>Cameroon</option><option>	Canada</option>
                                                    <option>Central African Republic</option><option>Chad</option><option>Chile</option><option>China</option><option>Colombia</option>
                                                    <option>Comoros</option><option>Congo (Congo-Brazzaville)</option><option>Costa Rica</option><option>Croatia</option><option>Cuba</option>
                                                    <option>Cyprus</option><option>	Czechia (Czech Republic</option><option>Democratic Republic of the Congo</option><option>Denmark</option>
                                                    <option>Djibouti</option><option>Dominica</option><option>Dominican Republic</option><option>Ecuador</option><option>Egypt</option>
                                                    <option>El Salvador</option><option>Equatorial Guinea</option><option>Eritrea</option><option>Estonia</option>
                                                    <option>Eswatini (fmr. "Swaziland")</option><option>Ethiopia</option><option>Fiji</option><option>Finland</option>
                                                    <option>France</option><option>Gabon</option><option>Gambia</option><option>Georgia</option><option>Germany</option>
                                                    <option>Ghana</option><option>Greece</option><option>Grenada</option><option>Guatemala</option><option>Guinea</option>
                                                    <option>Guinea-Bissau</option><option>Guyana</option><option>Haiti</option><option>Holy See</option><option>Honduras</option>
                                                    <option>Hungary</option><option>Iceland</option><option>India</option><option>Indonesia</option>
                                                <option>Iran</option><option>Iraq</option><option>Ireland</option><option>Israel</option><option>Italy</option>
                                                <option>Jamaica</option><option>Japan</option><option>Jordan</option><option>Kazakhstan</option><option>Kenya</option>
                                                <option>Kiribati</option><option>Kuwait</option><option>Kyrgyzstan</option><option>	Laos</option><option>Latvia</option>
                                                <option>Lebanon</option><option>Lesotho</option><option>Liberia</option><option>Libya</option><option>Liechtenstein</option>
                                                <option>Lithuania</option><option>Luxembourg</option><option>Madagascar</option><option>Malawi</option><option>Malaysia</option>
                                                <option>Maldives</option><option>Mali</option><option>Malta</option><option>Marshall Islands</option><option>Mauritania</option>
                                                <option>Mauritius</option><option>Mexico</option><option>Micronesia</option><option>Moldova</option><option>Monaco</option>
                                                <option>Mongolia</option><option>Montenegro</option><option>Morocco</option><option>Mozambique</option>
                                                <option>Myanmar (formerly Burma)</option><option>Namibia</option><option>Nauru</option><option>Nepal</option><option>Netherlands</option>
                                                <option>New Zealand</option><option>Nicaragua</option><option>Niger</option><option>Nigeria</option><option>North Korea</option>
                                                <option>North Macedonia</option><option>Norway</option><option>Oman</option><option>Pakistan</option><option>Palau</option>
                                                <option>Palestine State</option><option>Panama</option><option>Papua New Guinea</option><option>Paraguay</option>
                                                <option>Peru</option><option>Philippines</option><option>	Poland</option><option>Portugal</option><option>Qatar</option>
                                                <option>Romania</option><option>Russia</option><option>Rwanda</option><option>Saint Kitts and Nevis</option><option>Saint Lucia</option>
                                                <option>Saint Vincent and the Grenadines</option><option>Samoa</option><option>San Marino</option><option>Sao Tome and Principe</option>
                                                <option>Saudi Arabia</option><option>Senegal</option><option>Serbia</option><option>Seychelles</option><option>Sierra Leone</option>
                                                <option>Singapore</option><option>Slovakia</option><option>Slovenia</option><option>Solomon Islands</option><option>Somalia</option>
                                                <option>South Africa</option><option>South Korea</option><option>South Sudan</option><option>Spain</option><option>Sri Lanka</option>
                                                <option>Sudan</option><option>Suriname</option><option>Sweden</option><option>Switzerland</option><option>Syria</option>
                                                <option>Tajikistan</option><option>Tanzania</option><option>Thailand</option><option>Timor-Leste</option><option>Togo</option>
                                                <option>Tonga</option><option>Trinidad and Tobago</option><option>Tunisia</option><option>Turkey</option><option>Turkmenistan</option>
                                                <option>Tuvalu</option><option>Uganda</option><option>Ukraine</option><option>United Arab Emirates</option><option>United Kingdom</option>
                                                <option>United States of America</option><option>Uruguay</option><option>Uzbekistan</option><option>Vanuatu</option><option>Venezuela</option>
                                                <option>Vietnam</option><option>Yemen</option><option>Zambia</option><option>Zimbabwe</option></select>
                                          </div>
                                          <div class="form-group col-md-2">
                                            <label for="inputpin">Pincode</label>
                                            <input type="text" class="form-control" id="inputpin">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                              Accept all terms and condtions of this webpage</label>
                                          </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                      </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"
        integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" 
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            // $(document).ready(function(){
            //     $("#contact-form").submit(function(e){
            //         e.preventDefault();
            //         let url=$(this).attr('action');
            //     })
            // })
            </script>
    </body>
       
    </html>