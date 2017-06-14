function toggleselect(option) {

  document.querySelector('#toevoegen_'+option).classList.toggle('hidden');
  document.querySelector('#toevoegen_'+option).classList.toggle('verwijderd');
  document.querySelector('#verwijderen_'+option).classList.toggle('hidden');
  document.querySelector('#verwijderen_'+option).classList.toggle('toegevoegd');
  document.querySelector('#verwijderen_'+option).classList.toggle('toegevoegd_'+option);

  var $aantalopties      		  = document.querySelector('#aantal_opties').value;
  var $toegevoegdeopties 		  = document.getElementsByClassName('toegevoegd').length;
  var $kortingvroegboek  		  = parseInt(document.querySelector('#kortingvroegboek').value);
  var $kortinglastminute 		  = parseInt(document.querySelector('#kortinglastminute').value);
  var $kortingkinderen   		  = parseInt(document.querySelector('#kortingkinderen').value);
  var $kortingbabys      		  = parseInt(document.querySelector('#kortingbabys').value);
  var $kortingallin      		  = parseInt(document.querySelector('#kortingallin').value);
  var $kortingvroegboektoepassen  = document.querySelector('#vroegboektoepassen').value;
  var $kortinglastminutetoepassen = document.querySelector('#lastminutetoepassen').value;
  var $cruiseprijs 				  = parseInt(document.querySelector('#cruiseprijs').value);
  var $cruiseopslag 			  = parseInt(document.querySelector('#cruiseopslag').value);
  var $aantalvolwassenen 		  = parseInt(document.querySelector('#volwassenen').value);
  var $aantalkinderen 			  = parseInt(document.querySelector('#kinderen').value);
  var $aantalbabys 				  = parseInt(document.querySelector('#babys').value);
  var $boekingcruiseprijs = 0;
  var $optieprijs = 0;
  var $kortingcruise = 0;
  var $kortingoptie = 0;
  var $totaalcruise = 0;
  var $totaaloptie = 0;
  
  /*alert(' opties:' + $aantalopties+
		' toegevoegdeopties:' 		  + $toegevoegdeopties+
		' kortingvroegboek:'  		  + $kortingvroegboek+
		' kortinglastminute:' 		  + $kortinglastminute+
		' kortingkinderen:'   		  + $kortingkinderen+
		' kortingbabys:' 	 		  + $kortingbabys+
		' kortingallin:' 	 		  + $kortingallin+
		' kortingvroegboektoepassen:'  + $kortingvroegboektoepassen+
		' kortinglastminutetoepassen:' + $kortinglastminutetoepassen+
		' cruiseprijs:' 	 		  + $cruiseprijs+
		' cruiseopslag:' 	 		  + $cruiseopslag+
		' aantal volwassenen:' 	 	  + $aantalvolwassenen+
		' aantal kinderen:'  		  + $aantalkinderen+
		' aantal babys:' 	 		  + $aantalbabys
  );*/

  $boekingcruiseprijs = $cruiseprijs * ($aantalvolwassenen + $aantalkinderen + $aantalbabys);
  $kortingcruise += $cruiseprijs * $aantalkinderen * $kortingkinderen / 100;
  $kortingcruise += $cruiseprijs * $aantalbabys * $kortingbabys / 100;

  if($aantalvolwassenen == 1 && $aantalkinderen == 0 && $aantalbabys == 0){
    $boekingcruiseprijs += $cruiseopslag;
  }

  if($kortingvroegboektoepassen == 'Y'){
    $kortingcruise += ($boekingcruiseprijs-$kortingcruise) * $kortingvroegboek / 100;
  }

  if($kortinglastminutetoepassen == 'Y'){
    $kortingcruise += ($boekingcruiseprijs-$kortingcruise) * $kortinglastminute / 100;
  }

  var $index = 1;
  while ($index <= $aantalopties){
    if (document.querySelector('#verwijderen_'+$index).classList.contains('toegevoegd_'+$index)) {
    	$optieprijs += parseInt(document.querySelector('#optieprijs_' + $index).textContent) * $aantalvolwassenen;
	}
    $index++;
  }

  if($toegevoegdeopties == $aantalopties){
    $kortingoptie += $optieprijs * $kortingallin / 100;
  }

  //The kortingen worden afgerond (method toFixed) tot een geheel getal
  $kortingcruise = $kortingcruise.toFixed(0);
  $kortingoptie = $kortingoptie.toFixed(0);
  
  document.querySelector('#showdecruiseprijs').textContent = $boekingcruiseprijs;
  document.querySelector('#showcruisekorting').textContent = $kortingcruise;
  document.querySelector('#showcruisetotaal').textContent = $boekingcruiseprijs-$kortingcruise;

  document.querySelector('#showoptieprijs').textContent = $optieprijs;
  document.querySelector('#showoptiekorting').textContent = $kortingoptie;
  document.querySelector('#showoptietotaal').textContent = $optieprijs-$kortingoptie;

  document.querySelector('#decruiseprijs').value = $boekingcruiseprijs;
  document.querySelector('#cruisekorting').value = $kortingcruise;
  document.querySelector('#cruisetotaal').value = $boekingcruiseprijs-$kortingcruise;

  document.querySelector('#optieprijs').value = $optieprijs;
  document.querySelector('#optiekorting').value = $kortingoptie;
  document.querySelector('#optietotaal').value = $optieprijs-$kortingoptie;
}
