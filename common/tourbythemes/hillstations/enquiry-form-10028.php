<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enquiry Form Below</title>
	<link rel="icon" href="../../assets/img/s.ico" type="image/x-icon" />
	<style>
		.ui-datepicker-trigger {
			vertical-align: middle;
		}
	</style>
</head>

<body>
	<form name="static_form" method="POST" action="send-enquiry.php" enctype="multipart/form-data" class="inputs-p7px inputs-br5px">		
		<div class="tcl bullet data bdr0 divider p10px pt0px enqForm">
			<div class="ffrr pb10px xxxlarge ac fw6 lh12em">Fill Enquiry Form Below</div>
			<div class="mt7px">
				<div class="fo mt10px">
					<div class="mb15px">
						<p class="large mb5px alpha75 fw6">Your Full Name </p>
						<input type="text" name="dynFrm_contact_person" id="dynFrm_contact_person_10028" placeholder="Enter Name" required />
						<span class="red small"></span>
					</div>
					<div class="fl w100 mb15px">
						<p class="large mb5px alpha75 fw6">Tour Description </p>
						<textarea name="dynFrm_details_2" id="dynFrm_details_2_10028">I am interested in . Please get in contact with me.</textarea>
						<span class="fl red small"></span>
					</div>
					<div class="fl w100 mb15px df-dt">
						<div class="df-dtc w50 pr5px dateOpt">
							<p class="large mb5px alpha75 fw6">Departure Date </p>
							<div class="pr">
								<input type="text" name="dynFrm_arrival_date" id="dynFrm_arrival_date_10028" placeholder="Departure Date" style="padding-left:32px;" class="dynFrm_arrival_date" required />
								<span class="fl red small"></span>
							</div>
						</div>
						<div class="df-dtc pl5px">
							<p class="large mb5px alpha75 fw6">Number of Days </p>
							<input type="number" name="dynFrm_duration" id="dynFrm_duration_10028" placeholder="Number of Days" required />
							<span class="fl red small"></span>
						</div>
					</div>
					<div class="fl w100 mb15px">
						<p class="large mb5px alpha75 fw6">Email id </p>
						<input type="email" name="dynFrm_email_id" id="dynFrm_email_id_10028" placeholder="Email" required />
						<span class="red small"></span>
					</div>
					<div class="mb20px fl w100">
						<p class="large mb5px alpha75 fw6">Mobile No. </p>
						<div class="w60px pr fl ofh">
							<div id="isdCode_10028" class="isdCode pr0px">+91</div>
							<select class="contSelect" name="dynFrm_country" id="dynFrm_country" onChange="document.getElementById('phone_10028_isd').value=this.value.substr(3, 4); document.getElementById('isdCode_10028').innerHTML=this.value.substr(3, 4);">
								<option value="AF^+93">Afghanistan +93</option>
								<option value="CF^+236">African Republic +236</option>
								<option value="AL^+355">Albania +355</option>
								<option value="DZ^+213">Algeria +213</option>
								<option value="AS^+684">American Samoa +684</option>
								<option value="AD^+376">Andorra +376</option>
								<option value="AO^+244">Angola +244</option>
								<option value="AI^+264">Anguilla +264</option>
								<option value="AG^+268">Antigua and Barbuda +268</option>
								<option value="AR^+54">Argentina +54</option>
								<option value="AM^+374">Armenia +374</option>
								<option value="AW^+297">Aruba +297</option>
								<option value="AU^+61">Australia +61</option>
								<option value="AT^+43">Austria +43</option>
								<option value="AZ^+994">Azerbaijan +994</option>
								<option value="BS^+242">Bahamas +242</option>
								<option value="BH^+973">Bahrain +973</option>
								<option value="BD^+880">Bangladesh +880</option>
								<option value="BB^+246">Barbados +246</option>
								<option value="BY^+375">Belarus +375</option>
								<option value="BE^+32">Belgium +32</option>
								<option value="BZ^+501">Belize +501</option>
								<option value="BJ^+229">Benin +229</option>
								<option value="BM^+441">Bermuda +441</option>
								<option value="BT^+975">Bhutan +975</option>
								<option value="BO^+591">Bolivia +591</option>
								<option value="BA^+387">Bosnia and Herzegovina +387</option>
								<option value="BW^+267">Botswana +267</option>
								<option value="BV^+47">Bouvet +47</option>
								<option value="BR^+55">Brazil +55</option>
								<option value="BN^+673">Brunei +673</option>
								<option value="BG^+359">Bulgaria +359</option>
								<option value="BF^+226">Burkina Faso +226</option>
								<option value="BI^+257">Burundi +257</option>
								<option value="KH^+855">Cambodia +855</option>
								<option value="CM^+237">Cameroon +237</option>
								<option value="CA^+1">Canada +1</option>
								<option value="CV^+238">Cape Verde +238</option>
								<option value="KY^+345">Cayman Islands +345</option>
								<option value="236^+236">Central African Republic +236</option>
								<option value="TD^+235">Chad +235</option>
								<option value="IO^+246">Chagos +246</option>
								<option value="CL^+56">Chile +56</option>
								<option value="CN^+86">China +86</option>
								<option value="CX^+61">Christmas Island +61</option>
								<option value="CC^+61">Cocos +61</option>
								<option value="CO^+57">Colombia +57</option>
								<option value="KM^+269">Comoros +269</option>
								<option value="CG^+242">Congo +242</option>
								<option value="CK^+682">Cook Islands +682</option>
								<option value="RCI^+506">Costa Rica +506</option>
								<option value="HR^+385">Croatia +385</option>
								<option value="CY^+357">Cyprus +357</option>
								<option value="CZ^+420">Czech Republic +420</option>
								<option value="DK^+45">Denmark +45</option>
								<option value="DJ^+253">Djibouti +253</option>
								<option value="DM^+767">Dominica +767</option>
								<option value="DO^+809">Dominican Republic +809</option>
								<option value="TP^+670">East Timor +670</option>
								<option value="EC^+593">Ecuador +593</option>
								<option value="EG^+20">Egypt +20</option>
								<option value="SV^+503">El Salvador +503</option>
								<option value="GQ^+240">Equatorial Guinea +240</option>
								<option value="ER^+291">Eritrea +291</option>
								<option value="EE^+372">Estonia +372</option>
								<option value="ET^+251">Ethiopia +251</option>
								<option value="FO^+298">Faroe +298</option>
								<option value="FM^+691">Federated States of Micronesia +691</option>
								<option value="FJ^+679">Fiji +679</option>
								<option value="FI^+358">Finland +358</option>
								<option value="FR^+33">France +33</option>
								<option value="FX^+590">France, Metropolitan +590</option>
								<option value="GF^+594">French Guiana +594</option>
								<option value="FP^+689">French Polynesia +689</option>
								<option value="TF^+590">French Southern Territories +590</option>
								<option value="GA^+241">Gabon +241</option>
								<option value="GM^+220">Gambia +220</option>
								<option value="GE^+995">Georgia +995</option>
								<option value="DE^+49">Germany +49</option>
								<option value="GH^+233">Ghana +233</option>
								<option value="GI^+350">Gibraltar +350</option>
								<option value="GR^+30">Greece +30</option>
								<option value="GL^+299">Greenland +299</option>
								<option value="GD^+809">Grenada +809</option>
								<option value="Gre^+473">Grenada +473</option>
								<option value="GP^+590">Guadeloupe +590</option>
								<option value="GU^+1">Guam +1</option>
								<option value="GT^+502">Guatemala +502</option>
								<option value="GN^+224">Guinea +224</option>
								<option value="GW^+245">Guinea-bissau +245</option>
								<option value="GY^+592">Guyana +592</option>
								<option value="HT^+509">Haiti +509</option>
								<option value="HM^+61">Heard and Mc Donald Islands +61</option>
								<option value="HN^+504">Honduras +504</option>
								<option value="HU^+36">Hungary +36</option>
								<option value="IS^+354">Iceland +354</option>
								<option value="IN^+91" selected="selected">India +91</option>
								<option value="ID^+62">Indonesia +62</option>
								<option value="IQ^+964">Iraq +964</option>
								<option value="IE^+353">Ireland +353</option>
								<option value="IL^+972">Israel +972</option>
								<option value="IT^+39">Italy +39</option>
								<option value="CI^+225">Ivory Coast +225</option>
								<option value="JM^+876">Jamaica +876</option>
								<option value="JP^+81">Japan +81</option>
								<option value="JO^+962">Jordan +962</option>
								<option value="KZ^+7">Kazakhstan +7</option>
								<option value="KE^+254">Kenya +254</option>
								<option value="KI^+686">Kiribati +686</option>
								<option value="KW^+965">Kuwait +965</option>
								<option value="KG^+996">Kyrgyzstan +996</option>
								<option value="LA^+856">Laos +856</option>
								<option value="LV^+371">Latvia +371</option>
								<option value="LB^+961">Lebanon +961</option>
								<option value="LS^+266">Lesotho +266</option>
								<option value="LR^+231">Liberia +231</option>
								<option value="LY^+218">Libya +218</option>
								<option value="LI^+423">Liechtenstein +423</option>
								<option value="LT^+370">Lithuania +370</option>
								<option value="LU^+352">Luxembourg +352</option>
								<option value="MO^+853">Macau +853</option>
								<option value="MK^+389">Macedonia +389</option>
								<option value="MG^+261">Madagascar +261</option>
								<option value="MW^+265">Malawi +265</option>
								<option value="MY^+60">Malaysia +60</option>
								<option value="MV^+960">Maldives +960</option>
								<option value="ML^+223">Mali +223</option>
								<option value="MT^+356">Malta +356</option>
								<option value="FK^+500">Malvinas +500</option>
								<option value="MH^+692">Marshall Islands +692</option>
								<option value="MQ^+596">Martinique +596</option>
								<option value="MR^+222">Mauritania +222</option>
								<option value="MU^+230">Mauritius +230</option>
								<option value="YT^+269">Mayotte +269</option>
								<option value="MX^+52">Mexico +52</option>
								<option value="MD^+373">Moldova (Republic of Moldova) +373</option>
								<option value="MC^+377">Monaco +377</option>
								<option value="MN^+976">Mongolia +976</option>
								<option value="ME^+381">Montenegro +381</option>
								<option value="MS^+664">Montserrat +664</option>
								<option value="MA^+212">Morocco +212</option>
								<option value="MZ^+258">Mozambique +258</option>
								<option value="MM^+95">Myanmar +95</option>
								<option value="NA^+264">Namibia +264</option>
								<option value="NR^+674">Nauru +674</option>
								<option value="NP^+977">Nepal +977</option>
								<option value="NL^+31">Netherlands +31</option>
								<option value="AN^+599">Netherlands Antilles +599</option>
								<option value="NC^+687">New Caledonia +687</option>
								<option value="PG^+675">Papua New Guinea +675</option>
								<option value="NZ^+64">New Zealand +64</option>
								<option value="NI^+505">Nicaragua +505</option>
								<option value="NE^+227">Niger +227</option>
								<option value="NG^+234">Nigeria +234</option>
								<option value="NU^+683">Niue +683</option>
								<option value="NF^+672">Norfolk Island +672</option>
								<option value="MP^+670">Northern Mariana Islands +670</option>
								<option value="NO^+47">Norway +47</option>
								<option value="OM^+968">Oman +968</option>
								<option value="PK^+92">Pakistan +92</option>
								<option value="PW^+680">Palau +680</option>
								<option value="PA^+507">Panama +507</option>
								<option value="PY^+595">Paraguay +595</option>
								<option value="PE^+51">Peru +51</option>
								<option value="PH^+63">Philippines +63</option>
								<option value="PN^+872">Pitcairn +872</option>
								<option value="PL^+48">Poland +48</option>
								<option value="PF^+689">Polynesia +689</option>
								<option value="PT^+351">Portugal +351</option>
								<option value="PR^+1-787">Puerto Rico +1-787</option>
								<option value="QA^+974">Qatar +974</option>
								<option value="RE^+262">Reunion +262</option>
								<option value="RO^+40">Romania +40</option>
								<option value="RU^+7">Russia +7</option>
								<option value="RW^+250">Rwanda +250</option>
								<option value="KN^+869">Saint Kitts and Nevis +869</option>
								<option value="LC^+758">Saint Lucia +758</option>
								<option value="VC^+784">Saint Vincent and the Grenadines +784</option>
								<option value="WS^+685">Samoa +685</option>
								<option value="SM^+378">San Marino +378</option>
								<option value="ST^+239">Sao Tome And Principe +239</option>
								<option value="SA^+966">Saudi Arabia +966</option>
								<option value="SN^+221">Senegal +221</option>
								<option value="RS^+381">Serbia +381</option>
								<option value="SC^+248">Seychelles +248</option>
								<option value="SL^+232">Sierra Leone +232</option>
								<option value="SG^+65">Singapore +65</option>
								<option value="SK^+421">Slovakia +421</option>
								<option value="SI^+386">Slovenia +386</option>
								<option value="SB^+677">Solomon Islands +677</option>
								<option value="SO^+252">Somalia +252</option>
								<option value="ZA^+27">South Africa +27</option>
								<option value="GS^+44">South Georgia and the South Sandwich Islands +44</option>
								<option value="KR^+82">South Korea +82</option>
								<option value="ES^+34">Spain +34</option>
								<option value="LK^+94">Sri Lanka +94</option>
								<option value="SH^+290">St. Helena +290</option>
								<option value="PM^+508">St. Pierre and Miquelon +508</option>
								<option value="SD^+249">Sudan +249</option>
								<option value="SR^+597">Suriname +597</option>
								<option value="SJ^+47">Svalbard and Jan Mayen Islands +47</option>
								<option value="SZ^+268">Swaziland +268</option>
								<option value="SE^+46">Sweden +46</option>
								<option value="CH^+41">Switzerland +41</option>
								<option value="TW^+886">Taiwan +886</option>
								<option value="TJ^+7">Tajikistan +7</option>
								<option value="TZ^+255">Tanzania +255</option>
								<option value="TH^+66">Thailand +66</option>
								<option value="TG^+228">Togo +228</option>
								<option value="TK^+64">Tokelau +64</option>
								<option value="TO^+676">Tonga +676</option>
								<option value="TT^+868">Trinidad and Tobago +868</option>
								<option value="TN^+216">Tunisia +216</option>
								<option value="TR^+90">Turkey +90</option>
								<option value="TM^+993">Turkmenistan +993</option>
								<option value="TC^+649">Turks and Caicos Islands +649</option>
								<option value="TV^+688">Tuvalu +688</option>
								<option value="AE^+971">UAE +971</option>
								<option value="UG^+256">Uganda +256</option>
								<option value="UA^+380">Ukraine +380</option>
								<option value="UK^+44">United Kingdom +44</option>
								<option value="UM^+1">United States Minor Outlying Islands +1</option>
								<option value="UY^+598">Uruguay +598</option>
								<option value="US^+1">USA +1</option>
								<option value="UZ^+998">Uzbekistan +998</option>
								<option value="VU^+678">Vanuatu +678</option>
								<option value="VA^+39">Vatican City State (Holy See) +39</option>
								<option value="VE^+58">Venezuela +58</option>
								<option value="VN^+84">Vietnam +84</option>
								<option value="VG^+1">Virgin Islands (British) +1</option>
								<option value="VI^+1">Virgin Islands (U.S.) +1</option>
								<option value="WF^+681">Wallis and Futuna Islands +681</option>
								<option value="EH^+212">Western Sahara +212</option>
								<option value="YE^+967">Yemen +967</option>
								<option value="YU^+381">Yugoslavia +381</option>
								<option value="ZR^+243">Zaire +243</option>
								<option value="ZM^+260">Zambia +260</option>
								<option value="ZW^+263">Zimbabwe +263</option>
							</select>
						</div>
						<input type="hidden" name="phone_isd" id="phone_10028_isd" value="+91">
						<input type="number" name="dynFrm_phone" id="dynFrm_phone_10028" class="fl" style="width:calc(100% - 62px);" placeholder="Mobile No" required />
						<span class="fl red small"></span>
					</div>
					<div class="mt20px">
						<input type="submit" name="submit" value="Send Enquiry" class="db theme2 large p12px c5px">
					</div>
				</div>
			</div>
		</div>			
	</form>
	<script src="assets/js/model_date.js"></script>
</body>

</html>