<?php
error_reporting(0);
include 'database.php';
session_start();
if($_SESSION['flag']=="pro")
include 'nav_login_pro.php';

elseif($_SESSION['flag']=="user")
include 'nav_login_user.php';

else
include 'nav_no_login.php';
?>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        @font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 200;
  src: local('Source Sans Pro ExtraLight'), local('SourceSansPro-ExtraLight'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_wlxdr.ttf) format('truetype');
}
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdr.ttf) format('truetype');
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-weight: 300;
}
body {
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 300;
}
    </style>
    </head>
    <body>
        <img src="foreign.jpg" alt="" width="100%">
        <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Foreign Tourist</h1>
    <p class="lead">If Kerala is your choice for an international vacation getaway, then you couldn't have picked a better destination. This 'gods own state' is a beautiful representation of India's rich architectural heritage, cultural diversity and hospitality.

But don't take our word for it. We wholeheartedly welcome you to revel in the sights, sounds and flavours of Kerala.

Below are a few things you will need to know:</p>
  </div>


</div>
<div class="container">
<h3 class="display-4">Visa</h3>
<p class="lead">  <b>VISA RULES</b><br>
The below instructions and information are general in nature; however, for specific information, we urge you to visit or contact the Indian Mission / Embassy website as per your country of residence.

<br>A passport that is valid for a minimum of six months beyond the date of intended return from India should ideally accompany your visa applications.<br>

<br>Foreign tourists holding other nationalities (other than the country where applying for visa), should submit proof of long-term (at least three years)/ permanent residence in the country (where applying). For citizens of other countries, a reference has to be made to their country of residence for which an additional fee is chargeable and will also involve extra processing time. Please refrain from making inquiries about the status of the application during this time.<br><br>

<br>Following visas are available from the Indian missions abroad:<br>

<br>TOURIST VISA<br>
This is given for 6 months normally; it may vary depending on the country of residence. The applicant is required to produce/submit documents in proof of his financial standing. Tourists travelling in groups of not less than four members under the auspices of a recognized travel agency may be considered for grant of collective tourist visa.<br>
<br>BUSINESS VISA<br>
This is valid for one year or more with multiple entries. A letter from the sponsoring organization indicating nature of business, probable duration of stay, places and organizations to be visited incorporating therein a guarantee to meet maintenance expenses, etc. should accompany the application.<br>

<br>STUDENT VISA<br>
These is issued for the duration of the academic course of study or for a period of five years whichever is less, on the basis of firm letters of admission from universities/recognized colleges or educational institutions in India. Change of purpose and institutions are not permissible.<br>
<br>TRANSIT VISA<br>
This is issued for a maximum period of 15-days with single/double entry facilities to bonafide transit passengers only.<br>

<br>VISA TO MISSIONARIES<br>
This is valid for single entry and duration as permitted by Government of India. A letter in triplicate from sponsoring organization indicating intended destination in India, probable length of stay, and nature of duties to be discharged should be submitted along with guarantee for applicant's maintenance while in India.<br>

<br>JOURNALIST VISA<br>
This is issued to professional journalists and photographers for visiting India. The applicants are required to contact on arrival in New Delhi, the External Publicity Division of the Ministry of External Affairs and, in other places, the Office of the Government of India's Press Information Bureau.<br>

<br>CONFERENCE VISA<br>
This is issued for attending conferences/seminars/meetings in India. A letter of invitation from the organizer of the conference is to be submitted along with the visa application. Delegates coming for conferences may combine tourism with attending conferences.<br>

<br>EMPLOYMENT VISA<br>
This is issued to skilled and qualified professionals or persons who are engaged or appointed by companies, organizations, economic undertakings as technicians, technical experts, senior executives etc. Applicants are required to submit proof of contract/employment/engagement of foreign nationals by the company or organization.<br>

<br>E-TOURIST VISA (ETV)<br>
This is available to International Travellers whose sole objective of visiting India is recreation, sight-seeing, a casual visit to meet friends or relatives, short-term medical treatment or a casual business visit. For more information, visit<br>
https://indianvisaonline.gov.in/visa/tvoa.html

<br>FEES<br>
The fee structure depends on the nationality of the passport holder and type/duration of visa applied. The existing fee structure is:<br>

<br>MISSION SITES<br>
Transit VisaUS$ 5.00Visas with validity up to six monthsUS$ 30.00Visas with validity up to one yearUS$ 50.00Student VisaUS$ 50.00Visas with validity between one to five yearsUS$100.00Visa fees indicated in US$ are payable in local currencies as well. Visa fees are not refundable except in cases where a visa already issued is cancelled thereafter.<br>

<br>PROCESSING DURATION<br>
Depends on the type of visa applied.<br>

<br>MISCELLANEOUS INFORMATION:<br>
The duration of stay in India for each visit on a tourist visa or business visa is only for a period of 6 months even though a valid visa may be for more than 6 months.<br>

The visa is given for a period for which the passport is valid. For example, if a passport is valid until April 30, 2009 and an applicant is applying for 5 year visa on December 31, 2008, the applicant will not be issued a 5 years visa as the passport expires before the 5 year visa.<br>

<br>VALIDITY OF ALL VISAS IS COUNTED FROM THE DATE OF THEIR ISSUE<br>
Tourist visa up to 5 years may be granted if the foreigner is connected with the tourism trade.

If visa is for more than 180 days, registration is compulsory within 14 days of first arrival in India.

Extension of visa in Delhi - Ministry of Home Affair (MHA) - Director (F), Lok Nayak Bhawan, Ist floor, Khan market, New Delhi-110003.</p>
</div>
    </body>
</html>