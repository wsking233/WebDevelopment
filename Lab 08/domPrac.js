// JavaScript Document

function makeTable(){
	var theTable =document.getElementById("tbl");
	//IE requires rows to be added to a tBody element
	//IE automatically creates a tBody element - delete it and then manually create
	if (theTable.firstChild != null){
		var badIEBody = theTable.childNodes[0];  
		theTable.removeChild(badIEBody);
	}
	var tBody = document.createElement("TBODY");
	theTable.appendChild(tBody);

	var newRow = document.createElement("tr");
	var c1 = document.createElement("td");
	var v1 = document.createTextNode("7308");
	c1.appendChild(v1);
	newRow.appendChild(c1);
	var c2 = document.createElement("td");
	var v2 = document.createTextNode("software engineering");
	c2.appendChild(v2);
	newRow.appendChild(c2);
	tBody.appendChild(newRow);

	newRow = document.createElement("tr");
	c1 = document.createElement("td");
	v1 = document.createTextNode("7003");
	c1.appendChild(v1);
	newRow.appendChild(c1);
	c2 = document.createElement("td");
	v2 = document.createTextNode("Web Development");
	c2.appendChild(v2);
	newRow.appendChild(c2);
	tBody.appendChild(newRow);
}

function deleteRow(){

}

function appendRow() {
	var code = prompt("Please enter the subject code", "0000");
	var title = prompt("Please enter the subject title", "unassigned");

	var theTable =document.getElementById("tbl");
	//IE requires rows to be added to a tBody element
	//IE automatically creates a tBody element - delete it and then manually create

	var tBody = document.createElement("TBODY");
	theTable.appendChild(tBody);
	

	newRow = document.createElement("tr");
	c1 = document.createElement("td");
	v1 = document.createTextNode(code);
	c1.appendChild(v1);
	newRow.appendChild(c1);
	
	c2 = document.createElement("td");
	v2 = document.createTextNode(title);
	c2.appendChild(v2);
	newRow.appendChild(c2);
	tBody.appendChild(newRow);

    var len = theTable.rows.length;

    for(var i = 0;i < len;i++){
		theTable.rows[i].style.backgroundColor = "white";
		if((len - i) == 1){
			theTable.rows[i].style.backgroundColor = "yellow";
		}
       }
}
