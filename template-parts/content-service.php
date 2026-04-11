<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package comfyhvac
 */

?>

<div id="top-content" class="">
	<div class="content-spacer">
		<div id="breadcrumbs-container">
			<span class="B_crumbBox"><span class="B_firstCrumb"><a class="B_homeCrumb" href="/" title="Your Local HVAC Experts in San Ramon, CA!">Home</a></span> / <span class="B_lastCrumb"><span class="B_currentCrumb">Service Areas</span></span></span>
		</div>
		<h1>Service Areas</h1>
		<!--No Phone-->

		<div id="service-calls-map">
			<img src="https://maps.google.com/maps/api/staticmap?key=AIzaSyAsPqrMCMXjjy4wWwUHQKAksx-smUYCKy4&amp;center=37.718633,%20-122.103161&amp;zoom=9&amp;size=500x350&amp;maptype=roadmap&amp;sensor=false" width="500" height="350">
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				serviceCallsMapContainer = $('#service-calls-map');
				serviceCallsInitialZoom = 10;
				serviceCallsInitialLat = 37.718633;
				serviceCallsInitialLng = -122.103161;

				//heatmap colors
				serviceCallsGradient = ['rgba(0, 255, 255, 0)', 'rgba(0, 255, 255, 1)', 'rgba(0, 191, 255, 1)', 'rgba(0, 127, 255, 1)'];
				serviceCallsRadius = 75; //The radius of influence for each data point, in pixels
				serviceCallsIntensity = 1; //higher number less intense
				serviceCallsOpacity = 0.5; //opacity of the heatmap - number between 0 and 1

				imsServiceCalls.init([{
					"service_call_id": "982",
					"description": "We serve Alameda, CA",
					"address": "",
					"city": "Alameda",
					"state": "CA",
					"zip": "94502",
					"country": "US",
					"lat": "37.7394",
					"lon": "-122.242",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "983",
					"description": "We serve Alameda, CA",
					"address": "",
					"city": "Alameda",
					"state": "CA",
					"zip": "94501",
					"country": "US",
					"lat": "37.7606",
					"lon": "-122.26",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1281",
					"description": "We serve Alamo, CA",
					"address": "",
					"city": "Alamo",
					"state": "CA",
					"zip": "94507",
					"country": "US",
					"lat": "37.8525",
					"lon": "-122.019",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "45",
					"description": "We serve Castro Valley, CA",
					"address": "",
					"city": "Castro Valley",
					"state": "CA",
					"zip": "94546",
					"country": "US",
					"lat": "37.7013",
					"lon": "-122.074",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "46",
					"description": "We serve Castro Valley, CA",
					"address": "",
					"city": "Castro Valley",
					"state": "CA",
					"zip": "94552",
					"country": "US",
					"lat": "37.7057",
					"lon": "-122.028",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1110",
					"description": "We serve Danville, CA",
					"address": "",
					"city": "Danville",
					"state": "CA",
					"zip": "94506",
					"country": "US",
					"lat": "37.8106",
					"lon": "-121.913",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1109",
					"description": "We serve Danville, CA",
					"address": "",
					"city": "Danville",
					"state": "CA",
					"zip": "94526",
					"country": "US",
					"lat": "37.8185",
					"lon": "-121.969",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1282",
					"description": "We serve Dublin, CA",
					"address": "",
					"city": "Dublin",
					"state": "CA",
					"zip": "94568",
					"country": "US",
					"lat": "37.7142",
					"lon": "-121.931",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1276",
					"description": "We serve Fremont, CA",
					"address": "",
					"city": "Fremont",
					"state": "CA",
					"zip": "94538",
					"country": "US",
					"lat": "37.5268",
					"lon": "-121.966",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1278",
					"description": "We serve Fremont, CA",
					"address": "",
					"city": "Fremont",
					"state": "CA",
					"zip": "94555",
					"country": "US",
					"lat": "37.5746",
					"lon": "-122.046",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1277",
					"description": "We serve Fremont, CA",
					"address": "",
					"city": "Fremont",
					"state": "CA",
					"zip": "94539",
					"country": "US",
					"lat": "37.5173",
					"lon": "-121.93",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1275",
					"description": "We serve Fremont, CA",
					"address": "",
					"city": "Fremont",
					"state": "CA",
					"zip": "94537",
					"country": "US",
					"lat": "37.5557",
					"lon": "-122.017",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1274",
					"description": "We serve Fremont, CA",
					"address": "",
					"city": "Fremont",
					"state": "CA",
					"zip": "94536",
					"country": "US",
					"lat": "37.5626",
					"lon": "-121.998",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1001",
					"description": "We serve Hayward, CA",
					"address": "",
					"city": "Hayward",
					"state": "CA",
					"zip": "94543",
					"country": "US",
					"lat": "37.6732",
					"lon": "-122.082",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1004",
					"description": "We serve Hayward, CA",
					"address": "",
					"city": "Hayward",
					"state": "CA",
					"zip": "94557",
					"country": "US",
					"lat": "37.6299",
					"lon": "-122.103",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1003",
					"description": "We serve Hayward, CA",
					"address": "",
					"city": "Hayward",
					"state": "CA",
					"zip": "94545",
					"country": "US",
					"lat": "37.6336",
					"lon": "-122.102",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1002",
					"description": "We serve Hayward, CA",
					"address": "",
					"city": "Hayward",
					"state": "CA",
					"zip": "94544",
					"country": "US",
					"lat": "37.6343",
					"lon": "-122.063",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1000",
					"description": "We serve Hayward, CA",
					"address": "",
					"city": "Hayward",
					"state": "CA",
					"zip": "94542",
					"country": "US",
					"lat": "37.6572",
					"lon": "-122.041",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "999",
					"description": "We serve Hayward, CA",
					"address": "",
					"city": "Hayward",
					"state": "CA",
					"zip": "94541",
					"country": "US",
					"lat": "37.6734",
					"lon": "-122.081",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "998",
					"description": "We serve Hayward, CA",
					"address": "",
					"city": "Hayward",
					"state": "CA",
					"zip": "94540",
					"country": "US",
					"lat": "37.6588",
					"lon": "-122.095",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1006",
					"description": "We serve Lafayette, CA",
					"address": "",
					"city": "Lafayette",
					"state": "CA",
					"zip": "94549",
					"country": "US",
					"lat": "37.8975",
					"lon": "-122.112",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1009",
					"description": "We serve Livermore, CA",
					"address": "",
					"city": "Livermore",
					"state": "CA",
					"zip": "94550",
					"country": "US",
					"lat": "37.6814",
					"lon": "-121.753",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1010",
					"description": "We serve Livermore, CA",
					"address": "",
					"city": "Livermore",
					"state": "CA",
					"zip": "94551",
					"country": "US",
					"lat": "37.7307",
					"lon": "-121.692",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "62",
					"description": "We serve Moraga, CA",
					"address": "",
					"city": "Moraga",
					"state": "CA",
					"zip": "94575",
					"country": "US",
					"lat": "37.8452",
					"lon": "-122.123",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "61",
					"description": "We serve Moraga, CA",
					"address": "",
					"city": "Moraga",
					"state": "CA",
					"zip": "94570",
					"country": "US",
					"lat": "38.1156",
					"lon": "-122.14",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "60",
					"description": "We serve Moraga, CA",
					"address": "",
					"city": "Moraga",
					"state": "CA",
					"zip": "94556",
					"country": "US",
					"lat": "37.843",
					"lon": "-122.126",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "44",
					"description": "We serve Newark, CA",
					"address": "",
					"city": "Newark",
					"state": "CA",
					"zip": "94560",
					"country": "US",
					"lat": "37.536",
					"lon": "-122.032",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1253",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94624",
					"country": "US",
					"lat": "37.7473",
					"lon": "-122.172",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1252",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94659",
					"country": "US",
					"lat": "37.81",
					"lon": "-122.269",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1251",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94661",
					"country": "US",
					"lat": "37.8298",
					"lon": "-122.21",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1250",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94666",
					"country": "US",
					"lat": "37.8098",
					"lon": "-122.266",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1254",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94623",
					"country": "US",
					"lat": "37.8107",
					"lon": "-122.297",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1255",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94622",
					"country": "US",
					"lat": "37.7495",
					"lon": "-122.194",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1256",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94621",
					"country": "US",
					"lat": "37.7559",
					"lon": "-122.188",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1270",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94604",
					"country": "US",
					"lat": "37.8013",
					"lon": "-122.266",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1257",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94619",
					"country": "US",
					"lat": "37.791",
					"lon": "-122.181",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1258",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94618",
					"country": "US",
					"lat": "37.8447",
					"lon": "-122.239",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1259",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94617",
					"country": "US",
					"lat": "37.758",
					"lon": "-122.147",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1260",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94615",
					"country": "US",
					"lat": "37.8082",
					"lon": "-122.299",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1261",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94514",
					"country": "US",
					"lat": "37.8988",
					"lon": "-121.606",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1262",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94613",
					"country": "US",
					"lat": "37.7833",
					"lon": "-122.187",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1264",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94611",
					"country": "US",
					"lat": "37.8294",
					"lon": "-122.217",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1265",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94610",
					"country": "US",
					"lat": "37.8151",
					"lon": "-122.24",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1266",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94609",
					"country": "US",
					"lat": "37.8341",
					"lon": "-122.263",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1267",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94607",
					"country": "US",
					"lat": "37.806",
					"lon": "-122.286",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1268",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94606",
					"country": "US",
					"lat": "37.7913",
					"lon": "-122.243",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1269",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94605",
					"country": "US",
					"lat": "37.7627",
					"lon": "-122.16",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1271",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94603",
					"country": "US",
					"lat": "37.7402",
					"lon": "-122.175",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1272",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94602",
					"country": "US",
					"lat": "37.8026",
					"lon": "-122.209",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1273",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94601",
					"country": "US",
					"lat": "37.7806",
					"lon": "-122.216",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1263",
					"description": "We serve Oakland, CA",
					"address": "",
					"city": "Oakland",
					"state": "CA",
					"zip": "94612",
					"country": "US",
					"lat": "37.8129",
					"lon": "-122.27",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1280",
					"description": "We serve Orinda, CA",
					"address": "",
					"city": "Orinda",
					"state": "CA",
					"zip": "94563",
					"country": "US",
					"lat": "37.879",
					"lon": "-122.178",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1130",
					"description": "We serve Piedmont, CA",
					"address": "",
					"city": "Piedmont",
					"state": "CA",
					"zip": "94618",
					"country": "US",
					"lat": "37.8447",
					"lon": "-122.239",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1129",
					"description": "We serve Piedmont, CA",
					"address": "",
					"city": "Piedmont",
					"state": "CA",
					"zip": "94611",
					"country": "US",
					"lat": "37.8294",
					"lon": "-122.217",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1128",
					"description": "We serve Piedmont, CA",
					"address": "",
					"city": "Piedmont",
					"state": "CA",
					"zip": "94610",
					"country": "US",
					"lat": "37.8151",
					"lon": "-122.24",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1284",
					"description": "We serve Pleasanton, CA",
					"address": "",
					"city": "Pleasanton",
					"state": "CA",
					"zip": "94588",
					"country": "US",
					"lat": "37.6872",
					"lon": "-121.894",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1283",
					"description": "We serve Pleasanton, CA",
					"address": "",
					"city": "Pleasanton",
					"state": "CA",
					"zip": "94566",
					"country": "US",
					"lat": "37.6729",
					"lon": "-121.884",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1225",
					"description": "We serve San Leandro, CA",
					"address": "",
					"city": "San Leandro",
					"state": "CA",
					"zip": "94577",
					"country": "US",
					"lat": "37.7188",
					"lon": "-122.159",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1224",
					"description": "We serve San Leandro, CA",
					"address": "",
					"city": "San Leandro",
					"state": "CA",
					"zip": "94578",
					"country": "US",
					"lat": "37.7029",
					"lon": "-122.124",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1223",
					"description": "We serve San Leandro, CA",
					"address": "",
					"city": "San Leandro",
					"state": "CA",
					"zip": "94579",
					"country": "US",
					"lat": "37.6881",
					"lon": "-122.149",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "65",
					"description": "We serve San Lorenzo, CA",
					"address": "",
					"city": "San Lorenzo",
					"state": "CA",
					"zip": "94580",
					"country": "US",
					"lat": "37.6803",
					"lon": "-122.129",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1112",
					"description": "We serve San Ramon, CA",
					"address": "",
					"city": "San Ramon",
					"state": "CA",
					"zip": "94582",
					"country": "US",
					"lat": "37.76",
					"lon": "-121.93",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1111",
					"description": "We serve San Ramon, CA",
					"address": "",
					"city": "San Ramon",
					"state": "CA",
					"zip": "94583",
					"country": "US",
					"lat": "37.7518",
					"lon": "-121.953",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1041",
					"description": "We serve Union City, CA",
					"address": "",
					"city": "Union City",
					"state": "CA",
					"zip": "94587",
					"country": "US",
					"lat": "37.5941",
					"lon": "-122.047",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1049",
					"description": "We serve Walnut Creek, CA",
					"address": "",
					"city": "Walnut Creek",
					"state": "CA",
					"zip": "94598",
					"country": "US",
					"lat": "37.9159",
					"lon": "-122.024",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1048",
					"description": "We serve Walnut Creek, CA",
					"address": "",
					"city": "Walnut Creek",
					"state": "CA",
					"zip": "94597",
					"country": "US",
					"lat": "37.9009",
					"lon": "-122.059",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1047",
					"description": "We serve Walnut Creek, CA",
					"address": "",
					"city": "Walnut Creek",
					"state": "CA",
					"zip": "94596",
					"country": "US",
					"lat": "37.9049",
					"lon": "-122.054",
					"category_id": "1",
					"category_name": "Service Area"
				}, {
					"service_call_id": "1046",
					"description": "We serve Walnut Creek, CA",
					"address": "",
					"city": "Walnut Creek",
					"state": "CA",
					"zip": "94595",
					"country": "US",
					"lat": "37.8705",
					"lon": "-122.073",
					"category_id": "1",
					"category_name": "Service Area"
				}]);
			});
		</script>
		<section class="secondary-tools-outer" id="service-area-search">
			<div class="width-limiter">
				<div class="secondary-tools">
					<p>Do we serve your neighborhood?</p>
					<form method="post" action="/service-areas" id="service-area-search-form">
						<fieldset>
							<ul>
								<li class="zip-input">
									<label class="hide" for="zip_code">ZIP Code</label>
									<input type="text" id="zip_code" name="zip_code" placeholder="Zip Code">
								</li>
								<li class="submit">
									<input type="submit" value="Search">
									<input type="hidden" value="1" name="is_postback">
								</li>
							</ul>
						</fieldset>
					</form>
				</div><!--secondary-tools-->
			</div>
		</section><!--secondary-tools-outer-->

	</div>
</div>

<div id="main-content" class="">
	<div class="content-spacer">
		<section class="secondary-tools-outer" id="service-area-towns-list">
			<div class="secondary-tools">
				<h2 class="service-towns">Serving the East Bay and Tri Valley Areas</h2>

				<ul class="service-cities">
					<li><a href="/service-areas/alameda-ca-hvac">Alameda</a></li>
					<li><a href="/service-areas/alamo-ca">Alamo</a></li>
					<li>Castro Valley</li>
					<li><a href="/service-areas/danville-ca-hvac">Danville</a></li>
					<li style="clear:left;"><a href="/service-areas/dublin-ca-hvac">Dublin</a></li>
					<li><a href="/service-areas/fremont-ca-hvac">Fremont</a></li>
					<li><a href="/service-areas/hayward-ca-hvac">Hayward</a></li>
					<li><a href="/service-areas/lafayette-ca">Lafayette</a></li>
					<li style="clear:left;"><a href="/service-areas/livermore-ca">Livermore</a></li>
					<li>Moraga</li>
					<li>Newark</li>
					<li><a href="/service-areas/oakland-ca-hvac">Oakland</a></li>
					<li style="clear:left;"><a href="/service-areas/orinda-ca">Orinda</a></li>
					<li><a href="/service-areas/piedmont">Piedmont</a></li>
					<li><a href="/service-areas/pleasanton-ca-hvac">Pleasanton</a></li>
					<li><a href="/service-areas/san-leandro-ca-hvac">San Leandro</a></li>
					<li style="clear:left;">San Lorenzo</li>
					<li><a href="/service-areas/san-ramon-ca-hvac">San Ramon</a></li>
					<li><a href="/service-areas/union-city-ca-hvac">Union City</a></li>
					<li><a href="/service-areas/walnut-creek-ca-hvac">Walnut Creek</a></li>
				</ul>

			</div>
		</section>

	</div>
</div>