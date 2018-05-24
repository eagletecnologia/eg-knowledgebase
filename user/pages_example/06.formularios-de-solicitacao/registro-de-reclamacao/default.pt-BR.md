---
title: 'Registro de Reclamação'
taxonomy:
    categoria:
        - 'Formulário de Solicitação'
    tag:
        - registro
        - reclamação
anchors:
    active: false
menuright: false
tagtitle: h2
---

===

## <center>Preencha o formulário e iremos analisar sua reclamação!<center>

<hr/>

<script type="text/javascript">
    var a = Math.ceil(Math.random() * 10);
    var b = Math.ceil(Math.random() * 10);       
    var c = a + b
    function DrawBotBoot()
    {
        document.write("Soma de "+ a + " + " + b +"? ");
        document.write("<input id='BotBootInput' type='text' maxlength='2' required='' size='2'/>");
	}    
    function ValidBotBoot(){
        var d = document.getElementById('BotBootInput').value;
        if (d == c) return true;    
        alert("Soma incorreta!!");
        return false;
        
	}
    
</script>

<form onsubmit="return ValidBotBoot();" name="registro-reclamacao" action="https://eagletecnologia.crm.netsac.com.br/vtigercrm/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="__vtrftk" value="sid:e41b16087ad7c4b43ead7c85deb6fc22f3cd3e5d,1507057141">
	<input type="hidden" name="publicid" value="a133109ac6a808ddf3e5d1e960af2d98">
	<input type="hidden" name="name" value="registro-reclamacao">
	<input type="hidden" name="parent_id" value="11x780">
	<input type="hidden" value="Eagle Tecnologia" readonly="">
	<input type="hidden" name="assetsid" value="26x6608">
	<input type="hidden" value="EAGLE GESTAO" readonly="">
	<input type="hidden" name="label:Departamento" value="Ouvidoria">			
	<input type="hidden" name="ticketcategories" value="Registro de Reclamacao">									
	<input type="hidden" name="ticketstatus" value="Aberto">	
	<input type="hidden" name="label:Tempo" value="00:00:00" required="">	  
	
	<label> Empresa*</label>
	<input type="text" name="ticket_title" value="" required=""> 
	
	<label>Solicitante*</label>
	<input type="text" name="label:Solicitante" value="" required="">  
	
	<label>Descrição da Reclamação*</label>
	<textarea name="description" required=""></textarea>

	<script type="text/javascript">DrawBotBoot()</script>
	
	<hr>    
	<div class="buttons">
		<input class="button button-square button-small" type="submit" value="Enviar">    
	</div>
</form>  