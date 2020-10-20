let x, y, r = '';

function check(){

	let validity = true;
	let entered = true;

	var x = document.getElementById('X').value.trim();
	var y = document.getElementById('Y').value.trim();
	var z = document.getElementById('R').value.trim();


	if(document.getElementById('X').value.trim() === '' || document.getElementById('Y').value.trim() === '' || document.getElementById('R').value.trim() == ''){
		alert("Какое то из полей не заполнено!!!");
		validity = false;
		entered = false;
	}

	

	if(isNaN(x) || isNaN(y) || isNaN(z)){
		alert("В значениях содержаться буквы!");
		validity = false;
	}

	if(entered){
		if(x < -5 || x > 3 || y < -3 || y > 3 || z < 2 || z > 5){
			alert("Значения не попадают в границы!")
			validity = false;
		}
	}

	if(validity)
		return true;
	else
		return false
}

function reset(){
	document.getElementById('X').value = '';
	document.getElementById('Y').value = '';
	document.getElementById('R').value = '';
}

function ask() {
    if(check())
    {
        jQuery("#resultTable tr").remove();
        jQuery.get('work.php', {'X':document.getElementById('X').value.trim(), 'Y':document.getElementById('Y').value.trim(), 'R':document.getElementById('R').value.trim()}, function (data) {document.getElementById('resultTable').innerHTML+=data;});
    }
    else{
    	alert("remove after");
    }
}