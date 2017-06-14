<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<style>
.hidden {
	display:none;
}

</style>
</head>

<body>
<input id="kortingkinderen"     name="kortingkinderen"    type="hidden" value = "50"/>
<input id="kortingbabys"        name="kortingbabys"       type="hidden" value = "100"/>
<input id="kortingvroegboek"    name="kortingvroegboek"   type="hidden" value = "15"/>
<input id="kortinglastminute"   name="kortinglastminute"  type="hidden" value = "25"/>
<input id="kortingallin"        name="kortingallin"       type="hidden" value = "20"/>
<input id="cruiseprijs"  		name="cruiseprijs" 		  type="hidden" value = "3500"/>
<input id="cruiseopslag" 		name="cruiseopslag" 	  type="hidden" value = "450"/>


Cruise prijs:   <span id="showdecruiseprijs"></span>	  <input type="hidden" name="decruiseprijs" id="decruiseprijs" value="">
Cruise korting: <span id="showcruisekorting"></span>	  <input type="hidden" name="cruisekorting" id="cruisekorting" value="">
Cruise totaal:  <span id="showcruisetotaal"></span>		  <input type="hidden" name="cruisetotaal"  id="cruisetotaal"  value="">
<br>
Opties prijs:   <span id="showoptieprijs"></span>		  <input type="hidden" name="optieprijs"    id="optieprijs"    value="">
Opties korting: <span id="showoptiekorting"></span>	  	  <input type="hidden" name="optiekorting"  id="optiekorting"  value="">
Opties totaal:  <span id="showoptietotaal"></span>        <input type="hidden" name="optietotaal"   id="optietotaal"   value="">

<hr>

Aantal Volwassenen:  <input id="volwassenen" 		 name="volwassenen"  		type="text"/><br>
Aantal Kinderen:     <input id="kinderen"  	 		 name="kinderen"  			type="text"/><br>
Aantal Babys:		 <input id="babys"               name="babys"  				type="text"/><br>
Vroegboektoepassen:  <input id="vroegboektoepassen"  name="vroegboektoepassen"  type="text"/><br>
Lastminutetoepassen: <input id="lastminutetoepassen" name="lastminutetoepassen" type="text"/><br>
* Kinderen en babys kunnen niet aan de opties deelnemen!

<hr>

<span>Option1: </span><p id="option_1">This is the first option</p>
<span>Description1: </span><p id="description_1">Blablablablablabalbalblsdjhfjashfpiquewriudshvgasdjfhgakjsgf</p>
<span>Price1: </span><p id="optieprijs_1">45</p>
<button type="button" onclick="toggleselect(1)" class="verwijderd" id="toevoegen_1">Add</button>
<button type="button" onclick="toggleselect(1)" class="hidden" 	   id="verwijderen_1">Remove</button><br><br>

<span>Option2: </span><p id="option_2">This is the second option</p>
<span>Description2: </span><p id="description_2">Blablablablablabalbalblsdjhfjashfpiquewriudshvgasdjfhgakjsgf</p>
<span>Price2: </span><p id="optieprijs_2">75</p>
<button type="button" onclick="toggleselect(2)" class="verwijderd" id="toevoegen_2">Add</button>
<button type="button" onclick="toggleselect(2)" class="hidden" id="verwijderen_2">Remove</button><br><br>


<span>Option3: </span><p id="option_3">This is the third option</p>
<span>Description3: </span><p id="description_3">Blablablablablabalbalblsdjhfjashfpiquewriudshvgasdjfhgakjsgf</p>
<span>Price3: </span><p id="optieprijs_3">85</p>
<button type="button" onclick="toggleselect(3)" class="verwijderd" id="toevoegen_3">Add</button>
<button type="button" onclick="toggleselect(3)" class="hidden" id="verwijderen_3">Remove</button><br><br>


<span>Option4: </span><p id="option_4">This is the first option</p>
<span>Description4: </span><p id="description_4">Blablablablablabalbalblsdjhfjashfpiquewriudshvgasdjfhgakjsgf</p>
<span>Price4: </span><p id="optieprijs_4">125</p>
<button type="button" onclick="toggleselect(4)" class="verwijderd" id="toevoegen_4">Add</button>
<button type="button" onclick="toggleselect(4)" class="hidden" id="verwijderen_4">Remove</button><br><br>


<span>Option5: </span><p id="option_5">This is the first option</p>
<span>Description5: </span><p id="description_5">Blablablablablabalbalblsdjhfjashfpiquewriudshvgasdjfhgakjsgf</p>
<span>Price5: </span><p id="optieprijs_5">150</p>
<button type="button" onclick="toggleselect(5)" class="verwijderd" id="toevoegen_5">Add</button>
<button type="button" onclick="toggleselect(5)" class="hidden" id="verwijderen_5">Remove</button><br><br>

<input id="aantal_opties" name="aantal_opties" type="hidden" value = "5"/>

</body>

<script type="text/javascript" src="js/toggleselect1.js"></script>


</html>