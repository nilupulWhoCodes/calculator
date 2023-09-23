let screen = document.getElementById('screen');
let buttons = document.querySelectorAll('.btns');

buttons.forEach(button => {
	button.addEventListener('click',function () {
		
		if (button.value == 'AC') {

			screen.value = '';

		} else if( button.value == 'DE'){

			screen.value = screen.value.toString().slice(0,-1);

		} else if (button.value == '=') {
			
			screen.value = eval(screen.value);

		}
		else {

			screen.value += button.value;

		}
		console.log(button.value);
	})
});




