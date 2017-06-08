function valida_novo_artigo() {

	with(document.form_novo_artigo)
	{
		
		if(titulo.value == "")
		{
			alert("Digite um título!");
			titulo.focus();
			return false;
		}
		
		if(artigo.value == "")
		{
			alert("Digite um artigo!");
			artigo.focus();
			return false;
		}

		return true;
	}
}

function valida_nova_galeria() {

	with(document.form_nova_galeria)
	{
		
		if(titulo.value == "")
		{
			alert("Digite um título!");
			titulo.focus();
			return false;
		}
		
		if(IdTipoGaleria.value == "")
		{
			alert("Selecione um tipo de categoria!");
			IdTipoGaleria.focus();
			return false;
		}
		
		if(descricao.value == "")
		{
			alert("Digite uma descrição!");
			descricao.focus();
			return false;
		}

		return true;
	}
}