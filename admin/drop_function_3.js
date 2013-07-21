var ajax = new Array();





function getbudget(sel,budget_desc)


{
	var budgetCode = sel.options[sel.selectedIndex].value;
	document.getElementById('sub_cat'+budget_desc).options.length = 0;	// Empty city select box


	if(budgetCode.length>0){


		var index = ajax.length;


		ajax[index] = new sack();


		


		ajax[index].requestFile = 'getcategory.php?budgetCode='+budgetCode;	// Specifying which file to get


		ajax[index].onCompletion = function(){ createbudget(index,budget_desc) };	// Specify function that will be executed after file has been found


		ajax[index].runAJAX();		// Execute AJAX function


	}


}	





function createbudget(index,budget_desc)


{
	var obj = document.getElementById('sub_cat'+budget_desc);
	eval(ajax[index].response);	// Executing the response from Ajax as Javascript code	


}








