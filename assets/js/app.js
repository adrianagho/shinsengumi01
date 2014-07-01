//Element to Hold Land Entity

var addPropertyManager = {
	

	currentUnit: {
		floor: null,
		unit: null
	},

	address: "No. 6 Shinsengumi Street",
	plots: 0,
	building: true,
	fence: false,
	gate: false,
	landlordName: "Kenshin Himora",
	phone: null,
	email: null,
	picture: null,
	floors : {},

	/**
	*Define Functions Here
	*/

	//Add New Floor to PropertyManager
	addFloor : function() {
		//Get Floor Count
		var floorCount = $('.building').children().length - 2;	//2: one hidden template row & the roof row

		this.floors["floor"+(floorCount - 1)] = {
			label: "F"+(floorCount - 1),
			level: (floorCount - 1),
			units: {
			}
		};
	},

	//Add New Unit on a Floor
	addUnit : function(floor){
		//Get Unit Count
		var total = $('.building').children().length;
		var unitCount = $('.building').children(':nth-child('+(total - floor)+')').children().children().length - 2;	//2: one hidden template row & the 'add-more' row
		//Add Unit
		this.floors["floor"+floor].units["unit"+unitCount] = 
		{
			label: "unit"+unitCount,
			type: null,
			buildingType: null,
			bedrooms: 0,
			bathrooms: 0,
			toilets: 0,
			duration: 0,
			price: 0, 
			fenced: false,
			tenant: null
		};
		//Update Unit Label
		$('.building').children(':nth-child('+(total - floor)+')').children().children(':nth-child('+(unitCount+1)+')').children('p').html('unit'+unitCount);
	},

	//Set Unit Description Form from the Unit
	setUnitForm : function(floor, unit){
		//Set Current Unit
		this.currentUnit["floor"] = floor;
		this.currentUnit["unit"] = unit;

		//Set Current Unit Values to Unit Description Form
		var workingUnit = this.floors["floor"+floor].units["unit"+unit];

		if(workingUnit.type == "office"){
			$('.unit-description').find('#office').prop('checked', true);
		} else 
		if(workingUnit.type == "residential"){
			$('.unit-description').find('#residential').prop('checked', true);
		}
		
		$('.unit-description').find('#buildingType').val(workingUnit.buildingType);
		$('.unit-description').find('#label').val(workingUnit.label);
		$('.unit-description').find('#bedrooms').val(workingUnit.bedrooms);
		$('.unit-description').find('#bathrooms').val(workingUnit.bathrooms);
		$('.unit-description').find('#toilets').val(workingUnit.toilets);
		$('.unit-description').find('#duration').val(workingUnit.duration);
		$('.unit-description').find('#price').val(workingUnit.price);
		$('.unit-description').find('#tenant').val(workingUnit.tenant);
	},  

	//Set the Current Unit Properties from the Form
	setUnit : function(name, value){
		var temp = this.floors["floor"+this.currentUnit.floor].units["unit"+this.currentUnit.unit];
		temp[""+name] = value;
	}
};



$(document).ready(function(){

	/**Initialize Pluggins**/
	$(document).foundation();
	
	$('.property-image-container').find('img').each(function(){
  		var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';
  		$(this).addClass(imgClass);
 	});

 	//Scroll Area
 	if( $('.scroll-area').get(0) != undefined)
	{		
		$('.scroll-area').jScrollPane();
	}

	//Duplicate Element{		
	

	//Add More
	$(document).on('click','.add-more', function(){
		var target = $(this).closest('.add-more-parent');
		var clone = target.children(':first').clone();
		clone.removeClass('hide');
		var position = $(this).attr('data-placement-position');


		switch(position){
			case 'before':
				target.children(':last').before(clone);
				break;

			case 'after':
				target.children(':nth-child(2)').after(clone);
				break;
		}
		
	});

	//Switch Login for Sign Up, vice-versa 
	$(document).on('click','.hollow-button',function(){

	    var target = $(this).children('a');
	    var state = $('.orbit-container ul>li').not('.active').attr('data-orbit-slide');

	    if(state == 'signup'){
	    	target.hide().attr('data-orbit-link', 'login').html('Log In').fadeIn('slow');
	    } else{
		    target.hide().attr('data-orbit-link', 'signup').html('Sign Up').fadeIn('slow');
		}
	});


	//Submitting Login details via AJAX
	$(document).on('click','#login_submit',function(){

		var form_data = {
			username : $('#username').val(),
			password : $('#password-login').val(),
			ajax : '1'
		};

		var url = $(this).attr('href');

		$.ajax({url: url, type: 'POST', data: form_data,
			
			success: function(data) {
				
				if(data.status == 1){
					//redirect to home page 
					window.location.href = 'http://localhost/reale_ign2/index.php/login/gruu';
				} else{
					//display errors
					var msg = data.message;
					if(msg.username != ""){
						$( ".username-error" ).html(msg.username).delay(3000).fadeToggle( 2000, "swing",  function() {
					    	$( ".username-error" ).html('&nbsp;').show();
					  	});
					}

					if(msg.password != ""){
						$( ".password-login-error" ).html(msg.password).delay(3000).fadeToggle( 2000, "swing",  function() {
					    	$( ".password-login-error" ).html('&nbsp;').show();
					  	});
					}
				}
				
			},
			error: function(){
				alert("Error");
			}
		});

		return false;
	});

	//Submitting Signup details via AJAX
	$(document).on('click','#signup_submit',function(){

		var form_data = {
			firstname : $('#firstname').val(),
			lastname : $('#lastname').val(),
			password : $('#password-signup').val(),
			email : $('#email').val(),
			ajax : '1'
		};

		var url = $(this).attr('href');

		$.ajax({url: url, type: 'POST', data: form_data,
			
			success: function(data) {
				console.log(data);
				if(data.status == 1){
					//redirect to home page 
					window.location.href = 'http://localhost/reale_ign2/index.php/login/gruu';
				} else{
					//display errors
					var msg = data.message;
					if(msg.firstname != ""){
						$( ".firstname-error" ).html(msg.firstname).delay(3000).fadeToggle( 2000, "swing",  function() {
					    	$( ".firstname-error" ).html('&nbsp;').show();
					  	});
					}

					if(msg.lastname != ""){
						$( ".lastname-error" ).html(msg.lastname).delay(3000).fadeToggle( 2000, "swing",  function() {
					    	$( ".lastname-error" ).html('&nbsp;').show();
					  	});
					}

					if(msg.email != ""){
						$( ".email-error" ).html(msg.email).delay(3000).fadeToggle( 2000, "swing",  function() {
					    	$( ".email-error" ).html('&nbsp;').show();
					  	});
					}

					if(msg.password != ""){
						$( ".password-signup-error" ).html(msg.password).delay(3000).fadeToggle( 2000, "swing",  function() {
					    	$( ".password-signup-error" ).html('&nbsp;').show();
					  	});
					}
				}
				
			},
			error: function(){
				alert("Error");
			}
		});

		return false;
	});

	/* On Menu Mouseover 
	$('.menu-item').hover(function() {
		$('.stripes').css('z-index','1');
	}, function() {
		$('.stripes').css('z-index','0');
	});*/

	/* On Property Image Mouseover */
	$('.property-image-container>.row').hide();

	$('.property-image-container').hover(function() {
		$(this).children().fadeIn(200);
	}, function() {
		$('.property-image-container>.row').fadeOut(200);
	});

	/* On Small Property Image Mouseover */
	$('.small-property-image-container').mouseover(function() {
		var src = $(this).css('background');
		$(this).parents('.property-image-container').css('background', src);
	});








	//Add Floor to addPropertyManager
	$(document).on('click','.building-container .building .roof .add-floor',function(){
		addPropertyManager.addFloor();
	});

	//Add Unit to floor to addPropertyManager
	$(document).on('click','.building-container .building .floor .add-unit',function(){
		//Get Floor Index
		var parentIndex = $(this).parents('.floor').index();
		var total = $(this).parents('.building').children().length;
		var floor = total - parentIndex - 1;

		addPropertyManager.addUnit(floor);
	});

	//Set Unit Form Properties
	$(document).on('click','.building-container .building .floor .unit',function(){
		//Get Floor Index
		var parentIndex = $(this).parents('.floor').index();
		var total = $(this).parents('.building').children().length;
		var floor = total - parentIndex - 1;

		//Get Unit Index
		var unit = $(this).index();	

		addPropertyManager.setUnitForm(floor, unit);
	});

	//Set Unit Properties
	$(document).on('change','.unit-form',function(){

		//Check Current Unit
		if(addPropertyManager.currentUnit.floor == null || addPropertyManager.currentUnit.unit == null){
			alert("Please Select Unit");
			return;
		}

		var value = $(this).val();
		var name = $(this).attr("name");

		//Set Label Text
		if(name == "label"){
			//Get Current floor & Unit
			var floor = addPropertyManager.currentUnit.floor;
			var unit = addPropertyManager.currentUnit.unit;

			var total = $('.building').children().length;
			var parentIndex = total - floor;

			$('.building').children(':nth-child('+parentIndex+')').children('').children(':nth-child('+(unit+1)+')').children('p').html(''+value);		
		}

		addPropertyManager.setUnit(name, value);

		console.log(addPropertyManager);
	});
});


