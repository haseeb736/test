jQuery(function($) {
	
	var path=window.location;	

	$('.popup-background').click(function(event){
		$('.popup-background').removeClass('popup-widget-overlay');
		$('.popup-popup-content').css({
			'display': 'none'
		});
		$('.popup-more-content').css({
			'display': 'none'
		});
	});
	
	$('.required').blur(function () {
		var id = $(this).attr('id');
		fieldcheck(id,['required']);
	});		
	$('.email').blur(function () {
		var id = $(this).attr('id');
		fieldcheck(id,['required','email']);
	});
	
});

function closePopup()
{
	$('.popup-background').removeClass('popup-widget-overlay');
	$('.popup-popup-content').css({
		'display': 'none'
	});	
	$('.popup-more-content').css({
		'display': 'none'
	});
	$('.popup__content').html('');
	$('.more__content').html('');
}
function closemorePopup()
{
	$('.popup-more-content').css({
		'display': 'none'
	});
	$(".popup-popup-content").animate({left:"33%"}, 800 );
	$('.more__content').html('');
}

/* Event Category */

/* Security */
function sceditpopup(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/securitycheck/details";	
	$.post(url,{id:id},function(data) {	
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.popup__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$('.popup-popup-content').css({
				'display': 'block',
				'height': 'auto',
				'left': '33%',
				'position': 'absolute',
				'top': '17px',
				'width': '535px',
				'z-index': '999'
			});
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

function editsecurity(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/securitycheck/security_edit";	

	$.post(url,{id:id},function(data) {
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.more__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$(".popup-popup-content").animate({left:"10%"}, 800 );
			var delay=800;
			setTimeout(function(){
				$('.popup-more-content').css({
					'display': 'block',
					'height': 'auto',
					'left': '10%',
					'margin-left': '560px',
					'position': 'absolute',
					'top': '17px',
					'width': '535px',
					'z-index': '999'
				});
			},delay);
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

function viewsecurity(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/securitycheck/security_details";	

	$.post(url,{id:id},function(data) {
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.more__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$(".popup-popup-content").animate({left:"10%"}, 800 );
			var delay=800;
			setTimeout(function(){
				$('.popup-more-content').css({
					'display': 'block',
					'height': 'auto',
					'left': '10%',
					'margin-left': '560px',
					'position': 'absolute',
					'top': '17px',
					'width': '535px',
					'z-index': '999'
				});
			},delay);
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

/* Safety */
function sfeditpopup(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/safetycheck/truckdetails";	
	$.post(url,{id:id},function(data) {	
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.popup__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$('.popup-popup-content').css({
				'display': 'block',
				'height': 'auto',
				'left': '33%',
				'position': 'absolute',
				'top': '17px',
				'width': '535px',
				'z-index': '999'
			});
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

function editsafety(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/safetycheck/edit";	

	$.post(url,{id:id},function(data) {
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.more__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$(".popup-popup-content").animate({left:"10%"}, 800 );
			var delay=800;
			setTimeout(function(){
				$('.popup-more-content').css({
					'display': 'block',
					'height': 'auto',
					'left': '10%',
					'margin-left': '560px',
					'position': 'absolute',
					'top': '17px',
					'width': '535px',
					'z-index': '999'
				});
			},delay);
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

function viewsafety(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/safetycheck/details";	

	$.post(url,{id:id},function(data) {
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.more__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$(".popup-popup-content").animate({left:"10%"}, 800 );
			var delay=800;
			setTimeout(function(){
				$('.popup-more-content').css({
					'display': 'block',
					'height': 'auto',
					'left': '10%',
					'margin-left': '560px',
					'position': 'absolute',
					'top': '17px',
					'width': '535px',
					'z-index': '999'
				});
			},delay);
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

/* Queue */
function queeditpopup(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/queue/truckdetails";	
	$.post(url,{id:id},function(data) {	
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.popup__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$('.popup-popup-content').css({
				'display': 'block',
				'height': 'auto',
				'left': '33%',
				'position': 'absolute',
				'top': '17px',
				'width': '535px',
				'z-index': '999'
			});
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

function editqueue(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/queue/edit";	

	$.post(url,{id:id},function(data) {
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.more__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$(".popup-popup-content").animate({left:"10%"}, 800 );
			var delay=800;
			setTimeout(function(){
				$('.popup-more-content').css({
					'display': 'block',
					'height': 'auto',
					'left': '10%',
					'margin-left': '560px',
					'position': 'absolute',
					'top': '17px',
					'width': '535px',
					'z-index': '999'
				});
			},delay);
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

function viewqueue(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/queue/details";	

	$.post(url,{id:id},function(data) {
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.more__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$(".popup-popup-content").animate({left:"10%"}, 800 );
			var delay=800;
			setTimeout(function(){
				$('.popup-more-content').css({
					'display': 'block',
					'height': 'auto',
					'left': '10%',
					'margin-left': '560px',
					'position': 'absolute',
					'top': '17px',
					'width': '535px',
					'z-index': '999'
				});
			},delay);
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

/* Loading */
function loadingeditpopup(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/loading/truckdetails";	
	$.post(url,{id:id},function(data) {	
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.popup__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$('.popup-popup-content').css({
				'display': 'block',
				'height': 'auto',
				'left': '33%',
				'position': 'absolute',
				'top': '17px',
				'width': '535px',
				'z-index': '999'
			});
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

function editloading(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/loading/edit";	

	$.post(url,{id:id},function(data) {
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.more__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$(".popup-popup-content").animate({left:"10%"}, 800 );
			var delay=800;
			setTimeout(function(){
				$('.popup-more-content').css({
					'display': 'block',
					'height': 'auto',
					'left': '10%',
					'margin-left': '560px',
					'position': 'absolute',
					'top': '17px',
					'width': '535px',
					'z-index': '999'
				});
			},delay);
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

function viewloading(id)
{
	var pathstring = String(window.location);
	var patharray  = pathstring.split("/");		
	var path=patharray[0]+'//'+patharray[2]+'/'+patharray[3];
	var url = path+"/index.php/loading/details";	

	$.post(url,{id:id},function(data) {
		if(data!='')
		{
			$("html, body").animate({ scrollTop: 0 }, 500);					
			$('.more__content').html(data);
			$('.popup-background').addClass('popup-widget-overlay');
			$(".popup-popup-content").animate({left:"10%"}, 800 );
			var delay=800;
			setTimeout(function(){
				$('.popup-more-content').css({
					'display': 'block',
					'height': 'auto',
					'left': '10%',
					'margin-left': '560px',
					'position': 'absolute',
					'top': '17px',
					'width': '535px',
					'z-index': '999'
				});
			},delay);
		}
		else
		{
			var form='Invalid Request';
		}
	});
}

function checkrequired(id){			
	var fname = $('#'+id).val();				

	if (fname == "") {
		$('#'+id).addClass('input__error');
		return true;
	} else {
		$('#'+id).removeClass('input__error');
		return false;
	}		
};

function checkemail(id){		
	var nameRegex = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i;
	
	var fname = $('#'+id).val();				

	if (fname == "") {
		$('#'+id).addClass('input__error');
		return true;
	} else if (!(nameRegex.test(fname))) {
		$('#'+id).addClass('input__error');	
		return true;
	} else {
		$('#'+id).removeClass('input__error');
		return false;
	}		
};

function fieldcheck(element_id,ruleArray)
{
var total = 0;
var total = ruleArray.length - 1;
	for(i=0;i<ruleArray.length;i++)
	{
		if(ruleArray[i]=='required')
		{	
			if(document.getElementById(element_id).value.trim() != '' && i==total)
			{
				success_border(element_id);
				document.getElementById('error_'+element_id).innerHTML = '';
			}
			else if(document.getElementById(element_id).value.trim() != '' && i!=total)
			{
				continue;
			}
			else
			{
				document.getElementById('error_'+element_id).innerHTML = 'Required';
				fail_border(element_id);
				break;
			}
		}
		if(ruleArray[i]=='email')
		{
			if(document.getElementById(element_id).value.trim() != '')
			{
				if(/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i.test(document.getElementById(element_id).value) && i==total)
				{
					success_border(element_id);
					document.getElementById('error_'+element_id).innerHTML = '';
				}
				else if(/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i.test(document.getElementById(element_id).value) && i!=total)
				{
					continue;
				}
				else
				{
					document.getElementById('error_'+element_id).innerHTML = 'Enter a valid email';
					fail_border(element_id);
					break;
				}
			}
			else
			{
				back_toclearBorder(element_id);
			}
		}
		if(ruleArray[i]=='username')
		{			
			if(document.getElementById(element_id).value.trim() != '')
			{
				if(document.getElementById(element_id).value.length>=6 && document.getElementById(element_id).value.length<26)
				{
					if(/^[a-zA-Z0-9\_\.]+$/i.test(document.getElementById(element_id).value) && i==total)
					{
						success_border(element_id);
					}
					else if(/^[a-zA-Z0-9\_\.]+$/i.test(document.getElementById(element_id).value) && i!=total)
					{
						continue;
					}
					else
					{
						document.getElementById('error_'+element_id).innerHTML = 'you can use only letters (a-z), numbers, and periods';
						fail_border(element_id);
						break;
					}
				}
				else
				{
					document.getElementById('error_'+element_id).innerHTML = 'Please use between 6 and 25 characters.';
					fail_border(element_id);
					break;
				}
			}
			else
			{
				back_toclearBorder(element_id);
			}
		}
		if(ruleArray[i]=='password')
		{
			if(document.getElementById(element_id).value.trim() != '')
			{
				if(document.getElementById(element_id).value.length>=6 && i==total)
				{
					success_border(element_id);
				}
				else if(document.getElementById(element_id).value.length>=6 && i!=total)
				{
					continue;
				}
				else
				{
					document.getElementById('error_'+element_id).innerHTML = 'password must be at least 6 characters long';
					fail_border(element_id);
					break;
				}
			}
			else
			{
				back_toclearBorder(element_id);
			}
		}
		if(ruleArray[i]=='number')
		{
			if(document.getElementById(element_id).value.trim() != '')
			{
				if(/^[0-9]+$/i.test(document.getElementById(element_id).value) && i==total)
				{
					success_border(element_id);
				}
				else if(/^[0-9]+$/i.test(document.getElementById(element_id).value) && i!=total)
				{
					continue;
				}
				else
				{
					document.getElementById('error_'+element_id).innerHTML = 'only numbers';
					fail_border(element_id);
					break;
				}
			}
			else
			{
				back_toclearBorder(element_id);
			}
		}
		if(ruleArray[i]=='alpha')
		{
			if(document.getElementById(element_id).value.trim() != '')
			{
				if(/^[a-zA-Z]+$/i.test(document.getElementById(element_id).value) && i==total)
				{
					success_border(element_id);
				}
				else if(/^[a-zA-Z]+$/i.test(document.getElementById(element_id).value) && i!=total)
				{
					continue;
				}
				else
				{
					document.getElementById('error_'+element_id).innerHTML = 'only alphabets';
					fail_border(element_id);
					break;
				}
			}
			else
			{
				back_toclearBorder(element_id);
			}
		}
		if(ruleArray[i]=='dropdown')
		{
			if(document.getElementById(element_id).value!=0 && i==total)
			{
				success_border(element_id);
			}
			else if(document.getElementById(element_id).value!=0 && i!=total)
			{
				continue;
			}
			else
			{
				document.getElementById('error_'+element_id).innerHTML = 'select';
				fail_border(element_id);
				break;
			}
		}
		if(ruleArray[i]=='none')
		{
			back_toclearBorder(element_id);
		}
	}
}

/*Entire Form Validation*/

function formsubmit(NowBlock, formName, reqFieldArr ,nextAction){	
	var curForm = new formObj(NowBlock, formName, reqFieldArr ,nextAction);
    if(curForm.valid)
	{	
		return true;	
	}
	
    else{
		return false;
        curForm.paint();    
        curForm.listen();
    }	
}

function formObj(NowBlock, formName, reqFieldArr, nextAction){	

    var filledCount = 0;
    var fieldArr = new Array();
	var k = 0;
	this.formNM = formName;
	
	if(document.forms[this.formNM].elements['submit_tp'].value == '1ax')
	{
		this.nextaction = nextAction;
		this.now = NowBlock;
	}	
	for(i=0;i<reqFieldArr.length;i++)
	{
		if(reqFieldArr[i][0]=='required')
		{				
			for(j=reqFieldArr[i].length-1; j>=1; j--){
				fieldArr[k] = new fieldObj(this.formNM, reqFieldArr[i][j],'required');
				if(fieldArr[k].filled == true)
				{
					filledCount++;
				}
				k++;
			}
		}
		if(reqFieldArr[i][0]=='email')
		{	
			for(j=reqFieldArr[i].length-1; j>=1; j--){
				fieldArr[k] = new fieldObj(this.formNM, reqFieldArr[i][j],'email');
				if(fieldArr[k].filled == true)
				{
					filledCount++;
				}
				k++;
			}
		}
		if(reqFieldArr[i][0]=='username')
		{	
			for(j=reqFieldArr[i].length-1; j>=1; j--){
				fieldArr[k] = new fieldObj(this.formNM, reqFieldArr[i][j],'username');
				if(fieldArr[k].filled == true)
				{
					filledCount++;
				}
				k++;
			}
		}
		if(reqFieldArr[i][0]=='password')
		{	
			for(j=reqFieldArr[i].length-1; j>=1; j--){
				fieldArr[k] = new fieldObj(this.formNM, reqFieldArr[i][j],'password');
				if(fieldArr[k].filled == true)
				{
					filledCount++;
				}
				k++;
			}
		}
		if(reqFieldArr[i][0]=='number')
		{	
			for(j=reqFieldArr[i].length-1; j>=1; j--){
				fieldArr[k] = new fieldObj(this.formNM, reqFieldArr[i][j],'number');
				if(fieldArr[k].filled == true)
				{
					filledCount++;
				}
				k++;
			}
		}
		if(reqFieldArr[i][0]=='alpha')
		{	
			for(j=reqFieldArr[i].length-1; j>=1; j--){
				fieldArr[k] = new fieldObj(this.formNM, reqFieldArr[i][j],'alpha');
				if(fieldArr[k].filled == true)
				{
					filledCount++;
				}
				k++;
			}
		}
		if(reqFieldArr[i][0]=='equal')
		{	
			for(j=reqFieldArr[i].length-1; j>=1; j--){
				fieldArr[k] = new fieldObj(this.formNM, reqFieldArr[i][j],'equal');
				if(fieldArr[k].filled == true)
				{
					filledCount++;
				}
				k++;
			}
		}
		if(reqFieldArr[i][0]=='notequal')
		{
			for(j=reqFieldArr[i].length-1; j>=1; j--){
				fieldArr[k] = new fieldObj(this.formNM, reqFieldArr[i][j],'notequal');
				if(fieldArr[k].filled == true)
				{
					filledCount++;
				}
				k++;
			}
		}
	}
    if(filledCount == fieldArr.length)
	{
        this.valid = true;
	}
    else
	{
        this.valid = false;
	}


    this.paint = function(){
        for(i=fieldArr.length-1; i>=0; i--){
            if(fieldArr[i].filled == false)
                fieldArr[i].paintInRed();
            else
                fieldArr[i].unPaintInRed();
        }
    }    
    this.listen = function(){
        for(i=fieldArr.length-1; i>=0; i--){
            fieldArr[i].fieldListen();
        }
    }	
}

formObj.prototype.send = function(){
		if(document.forms[this.formNM].elements['submit_tp'].value == '1ax')
		{
			var to = document.forms[this.formNM].elements['submit_action'].value;
			var tofunction = document.forms[this.formNM].elements['submit_fn'].value;			
			var now = this.now;
			var next = this.nextaction; 
			
			var str = $('#'+this.formNM).serialize();			
			
			var url = path+"index.php/"+to+"/"+tofunction;					
			$.post(url,{fieldval:str},function(data) {
				if(data=='next')
				{			
					if(next != 'none')
					{
						document.getElementById(now).style.display="none";
						document.getElementById(next).style.display="block";
						return true;
					}
				}
				else
				{					
					//document.getElementById('set_notset').value = 'notset';
				}															
			});
		}
		
		if(document.getElementById('submit_tp').value == '')
		{
			document.forms[this.formNM].submit();
			return true;
		}
};

function fieldObj(formName, fName,typeOchk){

	if(typeOchk != 'equal' && typeOchk != 'notequal')
	{
		var curField = document.forms[formName].elements[fName];
	}
    this.filled = getValueBool(typeOchk);

    this.paintInRed = function(){
		//document.getElementById('error_'+fName).innerHTML = 'required';
        //curField.addClassName('red');		
    }

    this.unPaintInRed = function(){
        //curField.removeClassName('red');
		//document.getElementById('error_'+fName).innerHTML = '';
    }

    this.fieldListen = function(){
        curField.onkeyup = function(){
            if(curField.value != ''){			
                curField.removeClassName('red');				
            }
            else{
                curField.addClassName('red');				
            }
        }
    }

    function getValueBool(type){
		if(type=='required')
		{
			if($.trim(curField.value) != '')
			{
				document.getElementById('error_'+fName).innerHTML = '';
				return true;
			}
			else
			{
				var chkvalue = document.getElementById('error_'+fName).innerHTML.trim();
				if(chkvalue == '')
				{
					document.getElementById('error_'+fName).innerHTML = 'Required';
					fail_border(fName);
				}
				return false;
			}
		}
		if(type=='email')
		{
			if($.trim(curField.value) != '')
			{			
				if(/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i.test(curField.value))
				{
					document.getElementById('error_'+fName).innerHTML = '';
					return true;
				}
				else
				{
					var chkvalue = document.getElementById('error_'+fName).innerHTML.trim();
					
					if(chkvalue == '')
					{				
						document.getElementById('error_'+fName).innerHTML = 'Enter a valid email';
						fail_border(fName);
					}
					return false;
				}
			}
			else
			{
				return true;
			}
		}
		if(type=='username')
		{
			if($.trim(curField.value) != '')
			{
				if(curField.value.length>=6 && curField.value.length<26)
				{
					if(/^[a-zA-Z0-9\_\.]+$/i.test(curField.value))
					{
						document.getElementById('error_'+fName).innerHTML = '';
						return true;
					}
					else
					{
						var chkvalue = document.getElementById('error_'+fName).innerHTML.trim();
					
						if(chkvalue == '')
						{				
							document.getElementById('error_'+fName).innerHTML = 'you can use only letters (a-z), numbers, and periods';
							fail_border(fName);
						}
						return false;
					}
				}
				else
				{
					var chkvalue = document.getElementById('error_'+fName).innerHTML.trim();
					
					if(chkvalue == '')
					{				
						document.getElementById('error_'+fName).innerHTML = 'Please use between 6 and 25 characters.';
						fail_border(fName);
					}
					return false;
				}
			}
			else
			{
				return true;
			}
		}
		if(type=='password')
		{
			if($.trim(curField.value) != '')
			{
				if(curField.value.length>=6)
				{
					document.getElementById('error_'+fName).innerHTML = '';
					return true;
				}
				else
				{
					var chkvalue = document.getElementById('error_'+fName).innerHTML.trim();
					
					if(chkvalue == '')
					{				
						document.getElementById('error_'+fName).innerHTML = 'password must be at least 6 characters long';
						fail_border(fName);
					}
					return false;
				}
			}
			else
			{
				return true;
			}
		}
		if(type=='number')
		{
			if($.trim(curField.value) != '')
			{
				if(/^[0-9]+$/i.test(curField.value))
				{
					document.getElementById('error_'+fName).innerHTML = '';
					return true;
				}
				else
				{
					var chkvalue = document.getElementById('error_'+fName).innerHTML.trim();
					
					if(chkvalue == '')
					{				
						document.getElementById('error_'+fName).innerHTML = 'sholud be a number';
						fail_border(fName);
					}
					return false;
				}
			}
			else
			{
				return true;
			}
		}
		if(type=='alpha')
		{
			if($.trim(curField.value) != '')
			{
				if(/^[a-zA-Z]+$/i.test(curField.value))
				{
					document.getElementById('error_'+fName).innerHTML = '';
					return true;
				}
				else
				{
					var chkvalue = document.getElementById('error_'+fName).innerHTML.trim();
					
					if(chkvalue == '')
					{				
						document.getElementById('error_'+fName).innerHTML = 'sholud be a charector';
						fail_border(fName);
					}
					return false;
				}
			}
			else
			{
				return true;
			}
		}
		if(type=='equal')
		{
		
			FfName = fName[0];
			LfName = fName[1];
			var FcurField = document.forms[formName].elements[FfName];
			var LcurField = document.forms[formName].elements[LfName];	
			if($.trim(FcurField.value) != '')
			{
				if($.trim(FcurField.value)==$.trim(LcurField.value))
				{
					document.getElementById('error_'+LfName).innerHTML = '';
					return true;
				}
				else
				{
					var chkvalue = document.getElementById('error_'+LfName).innerHTML.trim();
					if(chkvalue == '')
					{				
						document.getElementById('error_'+LfName).innerHTML = 'sholud be same';
						fail_border(LfName);
					}					
					return false;
				}
			}
			else
			{
				return true;
			}
		}
		if(type=='notequal')
		{			
			var FfName = fName[0];	
			var Fvalue = document.forms[formName].elements[FfName].value;
			var Tvalue = fName[1];
			
			if(Fvalue!=Tvalue)
			{			
				elem = document.forms[formName].elements[FfName].setAttribute("style","border: 1px solid #ccc; box-shadow: none;");
				return true;
			}
			else
			{				
				elem = document.forms[formName].elements[FfName].setAttribute("style","border: 1px solid #EF672F; box-shadow: 0 0 2px #EF672F;");	
				return false;
			}			
		}
    }
}
	
/*END*/


function success_border(id)
{
	$('#'+id).removeClass('input__error');
	// elem = document.getElementById(id);
	// elem.setAttribute("style","border: 1px solid #D3D3D3; box-shadow: none;");
	// document.getElementById('error_'+id).innerHTML = '';
	// document.getElementById('error_'+id).style.display = 'none';
}

function fail_border(id)
{
	$('#'+id).addClass('input__error');
	// elem = document.getElementById(id);
	// elem.setAttribute("style","border: 1px solid #EF672F; box-shadow: 0 0 2px #EF672F;");	
	// document.getElementById('error_'+id).style.display = 'block';	
}

function focus_border(id)
{
	elem = document.getElementById(id);
	elem.setAttribute("style","outline:none; border-color: #4D90FE; box-shadow: 0 0 2px #4D90FE;");
}
function back_toclearBorder(id)
{
	elem = document.getElementById(id);
	elem.setAttribute("style","border: 1px solid #D3D3D3; box-shadow: none;");
}