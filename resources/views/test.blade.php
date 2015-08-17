

        <style>
            #map-canvas {
                height: 500px;
                margin: 0px;
                padding: 0px;
                display: none;
            }
        </style>
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSmaUM4g2Jao_8rMB7-E-hMFuyX77HpfY&libraries=places"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <script>
            // This example displays an address form, using the autocomplete feature
            // of the Google Places API to help users fill in the information.

            var placeSearch, autocomplete;
            var componentForm = {
              street_number: 'short_name',
              route: 'long_name',
              locality: 'long_name',
              administrative_area_level_1: 'short_name',
              country: 'long_name',
              postal_code: 'short_name'
            };
            var countryRestrict = { 'country': 'in' };
            var val;
                        var countrylist = [
                                            {
                                          	"name": "Afghanistan",
                                          	"code": "AF"
                                            },
                                            {
                                          	"name": "Åland Islands",
                                          	"code": "AX"
                                            },
                                            {
                                          	"name": "Albania",
                                          	"code": "AL"
                                            },
                                            {
                                          	"name": "Algeria",
                                          	"code": "DZ"
                                            },
                                            {
                                          	"name": "American Samoa",
                                          	"code": "AS"
                                            },
                                            {
                                          	"name": "Andorra",
                                          	"code": "AD"
                                            },
                                            {
                                          	"name": "Angola",
                                          	"code": "AO"
                                            },
                                            {
                                          	"name": "Anguilla",
                                          	"code": "AI"
                                            },
                                            {
                                          	"name": "Antarctica",
                                          	"code": "AQ"
                                            },
                                            {
                                          	"name": "Antigua and Barbuda",
                                          	"code": "AG"
                                            },
                                            {
                                          	"name": "Argentina",
                                          	"code": "AR"
                                            },
                                            {
                                          	"name": "Armenia",
                                          	"code": "AM"
                                            },
                                            {
                                          	"name": "Aruba",
                                          	"code": "AW"
                                            },
                                            {
                                          	"name": "Australia",
                                          	"code": "AU"
                                            },
                                            {
                                          	"name": "Austria",
                                          	"code": "AT"
                                            },
                                            {
                                          	"name": "Azerbaijan",
                                          	"code": "AZ"
                                            },
                                            {
                                          	"name": "Bahamas",
                                          	"code": "BS"
                                            },
                                            {
                                          	"name": "Bahrain",
                                          	"code": "BH"
                                            },
                                            {
                                          	"name": "Bangladesh",
                                          	"code": "BD"
                                            },
                                            {
                                          	"name": "Barbados",
                                          	"code": "BB"
                                            },
                                            {
                                          	"name": "Belarus",
                                          	"code": "BY"
                                            },
                                            {
                                          	"name": "Belgium",
                                          	"code": "BE"
                                            },
                                            {
                                          	"name": "Belize",
                                          	"code": "BZ"
                                            },
                                            {
                                          	"name": "Benin",
                                          	"code": "BJ"
                                            },
                                            {
                                          	"name": "Bermuda",
                                          	"code": "BM"
                                            },
                                            {
                                          	"name": "Bhutan",
                                          	"code": "BT"
                                            },
                                            {
                                          	"name": "Bolivia",
                                          	"code": "BO"
                                            },
                                            {
                                          	"name": "Bosnia and Herzegovina",
                                          	"code": "BA"
                                            },
                                            {
                                          	"name": "Botswana",
                                          	"code": "BW"
                                            },
                                            {
                                          	"name": "Bouvet Island",
                                          	"code": "BV"
                                            },
                                            {
                                          	"name": "Brazil",
                                          	"code": "BR"
                                            },
                                            {
                                          	"name": "British Indian Ocean Territory",
                                          	"code": "IO"
                                            },
                                            {
                                          	"name": "Brunei Darussalam",
                                          	"code": "BN"
                                            },
                                            {
                                          	"name": "Bulgaria",
                                          	"code": "BG"
                                            },
                                            {
                                          	"name": "Burkina Faso",
                                          	"code": "BF"
                                            },
                                            {
                                          	"name": "Burundi",
                                          	"code": "BI"
                                            },
                                            {
                                          	"name": "Cambodia",
                                          	"code": "KH"
                                            },
                                            {
                                          	"name": "Cameroon",
                                          	"code": "CM"
                                            },
                                            {
                                          	"name": "Canada",
                                          	"code": "CA"
                                            },
                                            {
                                          	"name": "Cape Verde",
                                          	"code": "CV"
                                            },
                                            {
                                          	"name": "Cayman Islands",
                                          	"code": "KY"
                                            },
                                            {
                                          	"name": "Central African Republic",
                                          	"code": "CF"
                                            },
                                            {
                                          	"name": "Chad",
                                          	"code": "TD"
                                            },
                                            {
                                          	"name": "Chile",
                                          	"code": "CL"
                                            },
                                            {
                                          	"name": "China",
                                          	"code": "CN"
                                            },
                                            {
                                          	"name": "Christmas Island",
                                          	"code": "CX"
                                            },
                                            {
                                          	"name": "Cocos (Keeling) Islands",
                                          	"code": "CC"
                                            },
                                            {
                                          	"name": "Colombia",
                                          	"code": "CO"
                                            },
                                            {
                                          	"name": "Comoros",
                                          	"code": "KM"
                                            },
                                            {
                                          	"name": "Congo",
                                          	"code": "CG"
                                            },
                                            {
                                          	"name": "Congo, Democratic Republic",
                                          	"code": "CD"
                                            },
                                            {
                                          	"name": "Cook Islands",
                                          	"code": "CK"
                                            },
                                            {
                                          	"name": "Costa Rica",
                                          	"code": "CR"
                                            },
                                            {
                                          	"name": "Cote D\"Ivoire",
                                          	"code": "CI"
                                            },
                                            {
                                          	"name": "Croatia",
                                          	"code": "HR"
                                            },
                                            {
                                          	"name": "Cuba",
                                          	"code": "CU"
                                            },
                                            {
                                          	"name": "Cyprus",
                                          	"code": "CY"
                                            },
                                            {
                                          	"name": "Czech Republic",
                                          	"code": "CZ"
                                            },
                                            {
                                          	"name": "Denmark",
                                          	"code": "DK"
                                            },
                                            {
                                          	"name": "Djibouti",
                                          	"code": "DJ"
                                            },
                                            {
                                          	"name": "Dominica",
                                          	"code": "DM"
                                            },
                                            {
                                          	"name": "Dominican Republic",
                                          	"code": "DO"
                                            },
                                            {
                                          	"name": "Ecuador",
                                          	"code": "EC"
                                            },
                                            {
                                          	"name": "Egypt",
                                          	"code": "EG"
                                            },
                                            {
                                          	"name": "El Salvador",
                                          	"code": "SV"
                                            },
                                            {
                                          	"name": "Equatorial Guinea",
                                          	"code": "GQ"
                                            },
                                            {
                                          	"name": "Eritrea",
                                          	"code": "ER"
                                            },
                                            {
                                          	"name": "Estonia",
                                          	"code": "EE"
                                            },
                                            {
                                          	"name": "Ethiopia",
                                          	"code": "ET"
                                            },
                                            {
                                          	"name": "Falkland Islands (Malvinas)",
                                          	"code": "FK"
                                            },
                                            {
                                          	"name": "Faroe Islands",
                                          	"code": "FO"
                                            },
                                            {
                                          	"name": "Fiji",
                                          	"code": "FJ"
                                            },
                                            {
                                          	"name": "Finland",
                                          	"code": "FI"
                                            },
                                            {
                                          	"name": "France",
                                          	"code": "FR"
                                            },
                                            {
                                          	"name": "French Guiana",
                                          	"code": "GF"
                                            },
                                            {
                                          	"name": "French Polynesia",
                                          	"code": "PF"
                                            },
                                            {
                                          	"name": "French Southern Territories",
                                          	"code": "TF"
                                            },
                                            {
                                          	"name": "Gabon",
                                          	"code": "GA"
                                            },
                                            {
                                          	"name": "Gambia",
                                          	"code": "GM"
                                            },
                                            {
                                          	"name": "Georgia",
                                          	"code": "GE"
                                            },
                                            {
                                          	"name": "Germany",
                                          	"code": "DE"
                                            },
                                            {
                                          	"name": "Ghana",
                                          	"code": "GH"
                                            },
                                            {
                                          	"name": "Gibraltar",
                                          	"code": "GI"
                                            },
                                            {
                                          	"name": "Greece",
                                          	"code": "GR"
                                            },
                                            {
                                          	"name": "Greenland",
                                          	"code": "GL"
                                            },
                                            {
                                          	"name": "Grenada",
                                          	"code": "GD"
                                            },
                                            {
                                          	"name": "Guadeloupe",
                                          	"code": "GP"
                                            },
                                            {
                                          	"name": "Guam",
                                          	"code": "GU"
                                            },
                                            {
                                          	"name": "Guatemala",
                                          	"code": "GT"
                                            },
                                            {
                                          	"name": "Guernsey",
                                          	"code": "GG"
                                            },
                                            {
                                          	"name": "Guinea",
                                          	"code": "GN"
                                            },
                                            {
                                          	"name": "Guinea-Bissau",
                                          	"code": "GW"
                                            },
                                            {
                                          	"name": "Guyana",
                                          	"code": "GY"
                                            },
                                            {
                                          	"name": "Haiti",
                                          	"code": "HT"
                                            },
                                            {
                                          	"name": "Heard Island and Mcdonald Islands",
                                          	"code": "HM"
                                            },
                                            {
                                          	"name": "Holy See (Vatican City State)",
                                          	"code": "VA"
                                            },
                                            {
                                          	"name": "Honduras",
                                          	"code": "HN"
                                            },
                                            {
                                          	"name": "Hong Kong",
                                          	"code": "HK"
                                            },
                                            {
                                          	"name": "Hungary",
                                          	"code": "HU"
                                            },
                                            {
                                          	"name": "Iceland",
                                          	"code": "IS"
                                            },
                                            {
                                          	"name": "India",
                                          	"code": "IN"
                                            },
                                            {
                                          	"name": "Indonesia",
                                          	"code": "ID"
                                            },
                                            {
                                          	"name": "Iran",
                                          	"code": "IR"
                                            },
                                            {
                                          	"name": "Iraq",
                                          	"code": "IQ"
                                            },
                                            {
                                          	"name": "Ireland",
                                          	"code": "IE"
                                            },
                                            {
                                          	"name": "Isle of Man",
                                          	"code": "IM"
                                            },
                                            {
                                          	"name": "Israel",
                                          	"code": "IL"
                                            },
                                            {
                                          	"name": "Italy",
                                          	"code": "IT"
                                            },
                                            {
                                          	"name": "Jamaica",
                                          	"code": "JM"
                                            },
                                            {
                                          	"name": "Japan",
                                          	"code": "JP"
                                            },
                                            {
                                          	"name": "Jersey",
                                          	"code": "JE"
                                            },
                                            {
                                          	"name": "Jordan",
                                          	"code": "JO"
                                            },
                                            {
                                          	"name": "Kazakhstan",
                                          	"code": "KZ"
                                            },
                                            {
                                          	"name": "Kenya",
                                          	"code": "KE"
                                            },
                                            {
                                          	"name": "Kiribati",
                                          	"code": "KI"
                                            },
                                            {
                                          	"name": "Korea (North)",
                                          	"code": "KP"
                                            },
                                            {
                                          	"name": "Korea (South)",
                                          	"code": "KR"
                                            },
                                            {
                                          	"name": "Kosovo",
                                          	"code": "XK"
                                            },
                                            {
                                          	"name": "Kuwait",
                                          	"code": "KW"
                                            },
                                            {
                                          	"name": "Kyrgyzstan",
                                          	"code": "KG"
                                            },
                                            {
                                          	"name": "Laos",
                                          	"code": "LA"
                                            },
                                            {
                                          	"name": "Latvia",
                                          	"code": "LV"
                                            },
                                            {
                                          	"name": "Lebanon",
                                          	"code": "LB"
                                            },
                                            {
                                          	"name": "Lesotho",
                                          	"code": "LS"
                                            },
                                            {
                                          	"name": "Liberia",
                                          	"code": "LR"
                                            },
                                            {
                                          	"name": "Libyan Arab Jamahiriya",
                                          	"code": "LY"
                                            },
                                            {
                                          	"name": "Liechtenstein",
                                          	"code": "LI"
                                            },
                                            {
                                          	"name": "Lithuania",
                                          	"code": "LT"
                                            },
                                            {
                                          	"name": "Luxembourg",
                                          	"code": "LU"
                                            },
                                            {
                                          	"name": "Macao",
                                          	"code": "MO"
                                            },
                                            {
                                          	"name": "Macedonia",
                                          	"code": "MK"
                                            },
                                            {
                                          	"name": "Madagascar",
                                          	"code": "MG"
                                            },
                                            {
                                          	"name": "Malawi",
                                          	"code": "MW"
                                            },
                                            {
                                          	"name": "Malaysia",
                                          	"code": "MY"
                                            },
                                            {
                                          	"name": "Maldives",
                                          	"code": "MV"
                                            },
                                            {
                                          	"name": "Mali",
                                          	"code": "ML"
                                            },
                                            {
                                          	"name": "Malta",
                                          	"code": "MT"
                                            },
                                            {
                                          	"name": "Marshall Islands",
                                          	"code": "MH"
                                            },
                                            {
                                          	"name": "Martinique",
                                          	"code": "MQ"
                                            },
                                            {
                                          	"name": "Mauritania",
                                          	"code": "MR"
                                            },
                                            {
                                          	"name": "Mauritius",
                                          	"code": "MU"
                                            },
                                            {
                                          	"name": "Mayotte",
                                          	"code": "YT"
                                            },
                                            {
                                          	"name": "Mexico",
                                          	"code": "MX"
                                            },
                                            {
                                          	"name": "Micronesia",
                                          	"code": "FM"
                                            },
                                            {
                                          	"name": "Moldova",
                                          	"code": "MD"
                                            },
                                            {
                                          	"name": "Monaco",
                                          	"code": "MC"
                                            },
                                            {
                                          	"name": "Mongolia",
                                          	"code": "MN"
                                            },
                                            {
                                          	"name": "Montserrat",
                                          	"code": "MS"
                                            },
                                            {
                                          	"name": "Morocco",
                                          	"code": "MA"
                                            },
                                            {
                                          	"name": "Mozambique",
                                          	"code": "MZ"
                                            },
                                            {
                                          	"name": "Myanmar",
                                          	"code": "MM"
                                            },
                                            {
                                          	"name": "Namibia",
                                          	"code": "NA"
                                            },
                                            {
                                          	"name": "Nauru",
                                          	"code": "NR"
                                            },
                                            {
                                          	"name": "Nepal",
                                          	"code": "NP"
                                            },
                                            {
                                          	"name": "Netherlands",
                                          	"code": "NL"
                                            },
                                            {
                                          	"name": "Netherlands Antilles",
                                          	"code": "AN"
                                            },
                                            {
                                          	"name": "New Caledonia",
                                          	"code": "NC"
                                            },
                                            {
                                          	"name": "New Zealand",
                                          	"code": "NZ"
                                            },
                                            {
                                          	"name": "Nicaragua",
                                          	"code": "NI"
                                            },
                                            {
                                          	"name": "Niger",
                                          	"code": "NE"
                                            },
                                            {
                                          	"name": "Nigeria",
                                          	"code": "NG"
                                            },
                                            {
                                          	"name": "Niue",
                                          	"code": "NU"
                                            },
                                            {
                                          	"name": "Norfolk Island",
                                          	"code": "NF"
                                            },
                                            {
                                          	"name": "Northern Mariana Islands",
                                          	"code": "MP"
                                            },
                                            {
                                          	"name": "Norway",
                                          	"code": "NO"
                                            },
                                            {
                                          	"name": "Oman",
                                          	"code": "OM"
                                            },
                                            {
                                          	"name": "Pakistan",
                                          	"code": "PK"
                                            },
                                            {
                                          	"name": "Palau",
                                          	"code": "PW"
                                            },
                                            {
                                          	"name": "Palestinian Territory, Occupied",
                                          	"code": "PS"
                                            },
                                            {
                                          	"name": "Panama",
                                          	"code": "PA"
                                            },
                                            {
                                          	"name": "Papua New Guinea",
                                          	"code": "PG"
                                            },
                                            {
                                          	"name": "Paraguay",
                                          	"code": "PY"
                                            },
                                            {
                                          	"name": "Peru",
                                          	"code": "PE"
                                            },
                                            {
                                          	"name": "Philippines",
                                          	"code": "PH"
                                            },
                                            {
                                          	"name": "Pitcairn",
                                          	"code": "PN"
                                            },
                                            {
                                          	"name": "Poland",
                                          	"code": "PL"
                                            },
                                            {
                                          	"name": "Portugal",
                                          	"code": "PT"
                                            },
                                            {
                                          	"name": "Puerto Rico",
                                          	"code": "PR"
                                            },
                                            {
                                          	"name": "Qatar",
                                          	"code": "QA"
                                            },
                                            {
                                          	"name": "Reunion",
                                          	"code": "RE"
                                            },
                                            {
                                          	"name": "Romania",
                                          	"code": "RO"
                                            },
                                            {
                                          	"name": "Russian Federation",
                                          	"code": "RU"
                                            },
                                            {
                                          	"name": "Rwanda",
                                          	"code": "RW"
                                            },
                                            {
                                          	"name": "Saint Helena",
                                          	"code": "SH"
                                            },
                                            {
                                          	"name": "Saint Kitts and Nevis",
                                          	"code": "KN"
                                            },
                                            {
                                          	"name": "Saint Lucia",
                                          	"code": "LC"
                                            },
                                            {
                                          	"name": "Saint Pierre and Miquelon",
                                          	"code": "PM"
                                            },
                                            {
                                          	"name": "Saint Vincent and the Grenadines",
                                          	"code": "VC"
                                            },
                                            {
                                          	"name": "Samoa",
                                          	"code": "WS"
                                            },
                                            {
                                          	"name": "San Marino",
                                          	"code": "SM"
                                            },
                                            {
                                          	"name": "Sao Tome and Principe",
                                          	"code": "ST"
                                            },
                                            {
                                          	"name": "Saudi Arabia",
                                          	"code": "SA"
                                            },
                                            {
                                          	"name": "Senegal",
                                          	"code": "SN"
                                            },
                                            {
                                          	"name": "Serbia",
                                          	"code": "RS"
                                            },
                                            {
                                          	"name": "Montenegro",
                                          	"code": "ME"
                                            },
                                            {
                                          	"name": "Seychelles",
                                          	"code": "SC"
                                            },
                                            {
                                          	"name": "Sierra Leone",
                                          	"code": "SL"
                                            },
                                            {
                                          	"name": "Singapore",
                                          	"code": "SG"
                                            },
                                            {
                                          	"name": "Slovakia",
                                          	"code": "SK"
                                            },
                                            {
                                          	"name": "Slovenia",
                                          	"code": "SI"
                                            },
                                            {
                                          	"name": "Solomon Islands",
                                          	"code": "SB"
                                            },
                                            {
                                          	"name": "Somalia",
                                          	"code": "SO"
                                            },
                                            {
                                          	"name": "South Africa",
                                          	"code": "ZA"
                                            },
                                            {
                                          	"name": "South Georgia and the South Sandwich Islands",
                                          	"code": "GS"
                                            },
                                            {
                                          	"name": "Spain",
                                          	"code": "ES"
                                            },
                                            {
                                          	"name": "Sri Lanka",
                                          	"code": "LK"
                                            },
                                            {
                                          	"name": "Sudan",
                                          	"code": "SD"
                                            },
                                            {
                                          	"name": "Suriname",
                                          	"code": "SR"
                                            },
                                            {
                                          	"name": "Svalbard and Jan Mayen",
                                          	"code": "SJ"
                                            },
                                            {
                                          	"name": "Swaziland",
                                          	"code": "SZ"
                                            },
                                            {
                                          	"name": "Sweden",
                                          	"code": "SE"
                                            },
                                            {
                                          	"name": "Switzerland",
                                          	"code": "CH"
                                            },
                                            {
                                          	"name": "Syrian Arab Republic",
                                          	"code": "SY"
                                            },
                                            {
                                          	"name": "Taiwan, Province of China",
                                          	"code": "TW"
                                            },
                                            {
                                          	"name": "Tajikistan",
                                          	"code": "TJ"
                                            },
                                            {
                                          	"name": "Tanzania",
                                          	"code": "TZ"
                                            },
                                            {
                                          	"name": "Thailand",
                                          	"code": "TH"
                                            },
                                            {
                                          	"name": "Timor-Leste",
                                          	"code": "TL"
                                            },
                                            {
                                          	"name": "Togo",
                                          	"code": "TG"
                                            },
                                            {
                                          	"name": "Tokelau",
                                          	"code": "TK"
                                            },
                                            {
                                          	"name": "Tonga",
                                          	"code": "TO"
                                            },
                                            {
                                          	"name": "Trinidad and Tobago",
                                          	"code": "TT"
                                            },
                                            {
                                          	"name": "Tunisia",
                                          	"code": "TN"
                                            },
                                            {
                                          	"name": "Turkey",
                                          	"code": "TR"
                                            },
                                            {
                                          	"name": "Turkmenistan",
                                          	"code": "TM"
                                            },
                                            {
                                          	"name": "Turks and Caicos Islands",
                                          	"code": "TC"
                                            },
                                            {
                                          	"name": "Tuvalu",
                                          	"code": "TV"
                                            },
                                            {
                                          	"name": "Uganda",
                                          	"code": "UG"
                                            },
                                            {
                                          	"name": "Ukraine",
                                          	"code": "UA"
                                            },
                                            {
                                          	"name": "United Arab Emirates",
                                          	"code": "AE"
                                            },
                                            {
                                          	"name": "United Kingdom",
                                          	"code": "GB"
                                            },
                                            {
                                          	"name": "United States",
                                          	"code": "US"
                                            },
                                            {
                                          	"name": "United States Minor Outlying Islands",
                                          	"code": "UM"
                                            },
                                            {
                                          	"name": "Uruguay",
                                          	"code": "UY"
                                            },
                                            {
                                          	"name": "Uzbekistan",
                                          	"code": "UZ"
                                            },
                                            {
                                          	"name": "Vanuatu",
                                          	"code": "VU"
                                            },
                                            {
                                          	"name": "Venezuela",
                                          	"code": "VE"
                                            },
                                            {
                                          	"name": "Viet Nam",
                                          	"code": "VN"
                                            },
                                            {
                                          	"name": "Virgin Islands, British",
                                          	"code": "VG"
                                            },
                                            {
                                          	"name": "Virgin Islands, U.S.",
                                          	"code": "VI"
                                            },
                                            {
                                          	"name": "Wallis and Futuna",
                                          	"code": "WF"
                                            },
                                            {
                                          	"name": "Western Sahara",
                                          	"code": "EH"
                                            },
                                            {
                                          	"name": "Yemen",
                                          	"code": "YE"
                                            },
                                            {
                                          	"name": "Zambia",
                                          	"code": "ZM"
                                            },
                                            {
                                          	"name": "Zimbabwe",
                                          	"code": "ZW"
                                            }
                                          ];

            $(document).ready(function() {


//                $('#country').on('click', function(){

                       $.each(countrylist, function (index, item) {
                           $('#country').append(
                               $('<option>', {
                                   value: item.code,
                                   text: item.name
                               }, '<option/>'))
//                            });
                });





                // Create the autocomplete object, restricting the search
                // to geographical location types.
//                $('#country2').on('change', function() {
//                 country = this.value;
//                  alert( country ); // or $(this).val()
//                  var countryRestrict = { 'country': 'fr' };
//                  alert(countryRestrict.country);
//                });

                // [START region_setcountry]
                // Set the country restriction based on user input.
                // Also center and zoom the map on the given country.
                function setAutocompleteCountry() {
                  var country = document.getElementById('country').value;
//                  if (country == 'all') {
//                    autocomplete.setComponentRestrictions([]);
//                    map.setCenter(new google.maps.LatLng(15, 0));
//                    map.setZoom(2);
//                  } else {
                    autocomplete.setComponentRestrictions({ 'country': country });
                    map.setCenter(countries[country].center);
                    map.setZoom(countries[country].zoom);
//                  }
                  clearResults();
                  clearMarkers();
                }
                // [END region_setcountry]


                autocomplete = new google.maps.places.Autocomplete(
                /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),


                {
                    types: ['geocode'],
                    componentRestrictions: countryRestrict
                });


                // When the user selects an address from the dropdown,
                // populate the address fields in the form.
                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    loadAddress();
                });

                // Add a DOM event listener to react when the user selects a country.
                  google.maps.event.addDomListener(document.getElementById('country'), 'change',
                      setAutocompleteCountry);
            })

            function fillAddress (address_components) {
                for (var i = 0; i < address_components.length; i++) {
                    var addressComponent = address_components[i];

                    // $('#street').val('');
                    // $('#area').val('');
                    // $('#city').val('');
                    // $('#state').val("");
                    // $('#pincode').val('');

                    // for (var component in componentForm) {
                    //     document.getElementById(component).value = '';
                    //     document.getElementById(component).disabled = false;
                    // }

                    if (addressComponent.types[0] == 'sublocality_level_2'){
                        $('#street').val(addressComponent['long_name']);
                    }

                    if (addressComponent.types[0] == 'sublocality_level_1'){
                        $('#area').val(addressComponent['long_name']);
                    }

                    if (addressComponent.types[0] == 'locality'){
                        $('#city').val(addressComponent['long_name']);
                    }

                    if (addressComponent.types[0] == 'administrative_area_level_1'){
                        $('#state').val(addressComponent['long_name']);
                    }

                    if (addressComponent.types[0] == 'postal_code'){
                        $('#pincode').val(addressComponent['short_name']);
                    }
                }
            }

            // [START region_fillform]
            function loadAddress() {
                console.log(autocomplete.getPlace());
                // Get the place details from the autocomplete object.
                var place = autocomplete.getPlace();

                fillAddress(place.address_components);

                var mapOptions = {
                    center: autocomplete.getPlace().geometry.location,
                    zoom: 14
                };

                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                marker = new google.maps.Marker({
                    map: map,
                    position: autocomplete.getPlace().geometry.location
                });

                google.maps.event.addListener(map, 'click', function(event) {
                    var latitude = event.latLng.lat();
                    var longitude = event.latLng.lng();
                    var latlongString  = latitude + ',' + longitude;
                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({'latLng': event.latLng}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                                console.log(results);
                                fillAddress(results[0].address_components);
                                // $('#locationName').text(results[0].address_components[2].long_name)
                        }
                    });

                    marker.setPosition( event.latLng );
                    map.panTo( event.latLng );
                });

                $('#map-canvas').show();
            }
            // [END region_fillform]

            // [START region_geolocation]
            // Bias the autocomplete object to the user's geographical location,
            // as supplied by the browser's 'navigator.geolocation' object.
            function geolocate() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var geolocation = new google.maps.LatLng(
                        position.coords.latitude, position.coords.longitude);
                        var circle = new google.maps.Circle({
                            center: geolocation,
                            radius: position.coords.accuracy
                        });
                        autocomplete.setBounds(circle.getBounds());
                    });
                }
            }
            // [END region_geolocation]
        </script>

        <style>
          #locationField, #controls {
            position: relative;
            width: 480px;
          }
          #autocomplete {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 99%;
          }
          .label {
            text-align: right;
            font-weight: bold;
            width: 100px;
            color: #303030;
          }
          #address {
            border: 1px solid #000090;
            background-color: #f0f0ff;
            width: 480px;
            padding-right: 2px;
          }
          #address td {
            font-size: 10pt;
          }
          .field {
            width: 99%;
          }
          .slimField {
            width: 80px;
          }
          .wideField {
            width: 200px;
          }
          #locationField {
            height: 20px;
            margin-bottom: 2px;
          }
        </style>
        <div data-role="page">

        <div class="container" data-role="popup" id="myPopupDiv" data-history="false" >
            <form role="form" method="POST" action="{{ url('/test') }}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Select Your Country</label>
                        <select id="country" name ="country" class="form-control"></select>
                    </div>

                    <div class="form-group">
                        <div id="locationField">
                        <label>Locality</label>
                        <input id="autocomplete" class="form-control" placeholder="Enter your address"
                                            onFocus="geolocate()" type="text"></input>
                    </div>

                    </div>

                    <div class="form-group">
                        <label>State</label>
                        <input id="state" name="state" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input id="city" name="city" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                          <label>Area</label>
                         <input id="area" name="area" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Street</label>
                        <input id="street" name="street" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Door No:</label>
                        <input id="door" name="door" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Zip code:</label>
                        <input id="pincode" name="pincode" type="text" class="form-control">
                    </div>

                     <div class="form-group">
                        <label>Landmark 1:</label>
                        <input id="landmark1" name="landmark_1" type="text" class="form-control">
                     </div>

                      <div class="form-group">
                          <label>Landmark 2:</label>
                          <input id="landmark2" name="landmark_2" type="text" class="form-control">
                      </div>

                      <div class="form-group">
                            <label>Phone:</label>
                            <input id="phone" name="phone" type="text" class="form-control">
                      </div>
                </div>

                <div class="col-md-6">
                    <div id="map-canvas"></div>


                    <div class="form-group">
                        <label>Gender:</label>
                        <input type="radio" name="gender" value="male">Male<br>
                        <input type="radio" name="gender" value="female">Female
                    </div>

                    <div class="form-group">
                        <label>Select Currency</label>
                        <select  name ="currency" class="form-control">
                            <option value="ru">RUPEE</option>
                            <option value="usd">U S DOLLAR</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tax Code:</label>
                        <input name="tax_code" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tax Rate:</label>
                        <input name="tax_rate" type="text" class="form-control">
                    </div>

                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
        </div>


             <script type="text/javascript" language="JavaScript">
                            $(document).ready(function(){

                 $( "#myPopupDiv" ).popup('open');

             });
            </script>








