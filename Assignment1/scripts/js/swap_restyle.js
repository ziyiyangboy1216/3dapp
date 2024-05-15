// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});
	}

	function selectModel() {

		$('#navCoke').click(function(){
			$('#coke').show();
			$('#sprite').hide();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});

		$('#navSprite').click(function(){
			$('#coke').hide();
			$('#sprite').show();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide();  	  	  
		});

		$('#navPepper').click(function(){
			$('#coke').hide();
			$('#sprite').hide();
			$('#pepper').show();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').show(); 	   
		});
	}

});

function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundImage = 'linear-gradient(to right, green, blue)';
			document.getElementById('headerColor').style.backgroundImage = 'linear-gradient(to right, green, blue)';
			document.getElementById('footerColor').style.backgroundImage = 'linear-gradient(to right, green, blue)';
			
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundImage = 'linear-gradient(to right, #FFFF00, #008000)';
			document.getElementById('headerColor').style.backgroundImage = 'linear-gradient(to right, #FFFF00, #008000)';
			document.getElementById('footerColor').style.backgroundImage = 'linear-gradient(to right, #FFFF00, #008000)';
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundImage = 'linear-gradient(to right, blue, orange)';
			document.getElementById('headerColor').style.backgroundImage = 'linear-gradient(to right, blue, orange)';
			document.getElementById('footerColor').style.backgroundImage = 'linear-gradient(to right, blue, orange)';
			break;
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundImage = 'linear-gradient(to right, #FF5733, #6C5B7B)';
			document.getElementById('headerColor').style.backgroundImage = 'linear-gradient(to right, #FF5733, #6C5B7B)';
			document.getElementById('footerColor').style.backgroundImage = 'linear-gradient(to right, #FF5733, #6C5B7B)';
			break;
	}
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
	document.getElementById('headerColor').style.backgroundColor = 'rgba(175,0,0,1)';
	document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';
}

