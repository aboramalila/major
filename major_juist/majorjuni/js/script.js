function toggleselect(option) {

	document.querySelector('#add_'+option).classList.toggle('hidden');
	document.querySelector('#add_'+option).classList.toggle('removed');
	document.querySelector('#remove_'+option).classList.toggle('hidden');
	document.querySelector('#remove_'+option).classList.toggle('selected');
	document.querySelector('#remove_'+option).classList.toggle('selected_'+option);

	var numcount = document.querySelector('#num_options').textContent;
	var optionselected = document.getElementsByClassName('selected').length;
	var $index = 1

	var $totalprice = 0;
	var $discount = 0;
	var $bookingprice = 0;
	if (optionselected == numcount) {
		while ($index <= numcount) {
			document.querySelector('#price_'+$index).textContent = document.querySelector('#price_allin_'+$index).textContent;

			$bookingprice = $bookingprice + parseInt(document.querySelector('#price_notallin_'+$index).textContent);
			$discount = $discount + (parseInt(document.querySelector('#price_notallin_'+$index).textContent) - parseInt(document.querySelector('#price_allin_'+$index).textContent));
			$totalprice = $totalprice + parseInt(document.querySelector('#price_allin_'+$index).textContent);

			$index++;
		}
	} else {
		while ($index <= numcount) {
			document.querySelector('#price_'+$index).textContent =  parseInt(document.querySelector('#price_notallin_'+$index).textContent);

			if (document.querySelector('#remove_'+$index).classList.contains('selected_'+$index)) {
				$bookingprice += parseInt(document.querySelector('#price_notallin_'+$index).textContent);
				$totalprice += parseInt(document.querySelector('#price_notallin_'+$index).textContent);
			}

			$index++;
		}
	}

	document.querySelector('#showbookingprice').textContent = $bookingprice;
	document.querySelector('#showdiscount').textContent = $discount;
	document.querySelector('#showtotal').textContent = $totalprice;

	document.querySelector('#bookingprice').value = $bookingprice;
	document.querySelector('#discount').value = $discount;
	document.querySelector('#total').value = $totalprice;
}
