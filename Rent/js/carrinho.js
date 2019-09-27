var checked = 1;
document.getElementById("r_local").onclick = function(){
	checked = 1;
	calcular_total();
};

document.getElementById("r_frete").onclick = function(){
	checked = 2;
	calcular_total();
};

function mudar_one(){
	var x = document.getElementById("qnt_prod1").value;
	var str = "R$" + 20*x + ",00(R$20,00)";
	document.getElementById("valor_prod1").innerHTML = str;
	calcular_stotal();
};
function mudar_two(){
	var x = document.getElementById("qnt_prod2").value;
	var str = "R$" + 20*x + ",00(R$20,00)";
	document.getElementById("valor_prod2").innerHTML = str;
	calcular_stotal();
};
function mudar_three(){
	var x = document.getElementById("qnt_prod3").value;
	var str = "R$" + 20*x + ",00(R$20,00)";
	document.getElementById("valor_prod3").innerHTML = str;
	calcular_stotal();
};

function calcular_stotal() {
	var p1 = document.getElementById("qnt_prod1").value;
	var p2 = document.getElementById("qnt_prod2").value;
	var p3 = document.getElementById("qnt_prod3").value;
	var pf = (p1*20)+(p2*20)+(p3*20);
	var str = "R$" + pf + ",00";
	document.getElementById("stotal").innerHTML = str;
	calcular_total();
}

function calcular_total() {
	var p1 = document.getElementById("qnt_prod1").value;
	var p2 = document.getElementById("qnt_prod2").value;
	var p3 = document.getElementById("qnt_prod3").value;
	var pf = (p1*20)+(p2*20)+(p3*20);
	if(checked == 2)
		pf = pf+20;
	var str = "R$" + pf + ",00";
	document.getElementById("ftotal").innerHTML = str;
}
