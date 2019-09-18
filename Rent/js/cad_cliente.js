var checked = 0;

document.getElementById("perfilP").onclick = function(){
	checked = 1;
	document.getElementById("empresa").disabled = false;
	document.getElementById("mensagem-empresa").innerHTML = "Entre em contato pra estabelecer uma parceria!";
};

document.getElementById("perfilC").onclick = function(){
	checked = 2;
	document.getElementById("empresa").value = "";
	document.getElementById("empresa").disabled = true;
	document.getElementById("mensagem-empresa").innerHTML = "";	
};

document.getElementById("form-cadastro").onsubmit = validaCadastro;

var contErros = 0;

function mostraErro(idErro, mensagem) {
	idErro.style.display = "block";
	idErro.innerHTML = mensagem;
	contErros++;
}
function validaCadastro() {
	contErros = 0;

	// campo nome
	var campo = document.getElementById("nome");
	var erro = document.getElementById("msg-nome");
	if((campo.value == "") || campo.value.indexOf(" ") == -1)
		mostraErro(erro, "Por favor digite o nome completo");
	else 
		erro.style.display = "none";

	var campo = document.getElementById("email");
	var erro = document.getElementById("msg-email");
	if((campo.value == "") || campo.value.indexOf(" ") != -1 || campo.value.indexOf("@") == -1)
		mostraErro(erro, "Por favor digite um e-mail valido");
	else 
		erro.style.display = "none";

	var campo = document.getElementById("endereco");
	var erro = document.getElementById("msg-endereco");
	if((campo.value == ""))
		mostraErro(erro, "Por favor digite um endereço valido");
	else 
		erro.style.display = "none";

	var campo = document.getElementById("bairro");
	var erro = document.getElementById("msg-bairro");
	if((campo.value == ""))
		mostraErro(erro, "Por favor selecione um bairro valido");
	else 
		erro.style.display = "none";

	var campo = document.getElementById("perfil");
	var erro = document.getElementById("msg-perfil");
	if(checked == 0)
		mostraErro(erro, "Por favor selecione uma opção");
	else 
		erro.style.display = "none";

	var campo = document.getElementById("login2");
	var erro = document.getElementById("msg-login");
	if((campo.value == "") || (campo.value == " ") || (campo.value == "@") || campo.value.length < 6)
		mostraErro(erro, "Por favor digite um nome de usuário valido");
	else 
		erro.style.display = "none";

	var senha;
	var campo = document.getElementById("senha");
	var erro = document.getElementById("msg-senha");
	if((campo.value == "") || (campo.value == " ") || (campo.value == "@") || campo.value.length < 6)
		mostraErro(erro, "Por favor digite uma senha valida");
	else 
	{
		senha = campo.value;
		erro.style.display = "none";
	}

	var campo = document.getElementById("senha2");
	var erro = document.getElementById("msg-senha2");
	if((campo.value == "") || (campo.value == " ") || (campo.value == "@") || campo.value.length < 6 || campo.value != senha)
		mostraErro(erro, "As senhas não conferem");
	else 
		erro.style.display = "none";

	if(contErros > 0)
		return false;
	else 
		alert("Cadastro realizado com sucesso");
}