<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>System Kurierski</title>
	<link rel="Shortcut icon" href="http://kurier.lge.pl/public/images/favicon.ico">
<script type="text/javascript" src="http://kurier.lge.pl/public/js/calendarDateInput.js">

</script>
	<link rel="Stylesheet" type="text/css" href="http://kurier.lge.pl/public/css/style.css" />

<script src="http://kurier.lge.pl/public/js/tooltip.js" type="text/javascript"></script>



<script src="http://kurier.lge.pl/public/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() { 
$("input[name='ktoryserwis']").change(function(){
if ($("input[name='ktoryserwis']:checked").val() == '1') {
$('#daneserwisu').html('<label for="odbiorcafirma">Firma: </label><span class="required">*</span><input type="hidden" name="serwis" value="PC"/><input type="text" maxlength="30" readonly="readonly" name="odbiorcafirma" value="Multimedia Serwis"/><br/><label for="odbiorcaulica">Ulica: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcaulica" value="Radzymińska"/><br/><label for="odbiorcanumer">Numer: </label><span class="required">*</span><input type="text" maxlength="7" readonly="readonly" name="odbiorcanumer" value="211"/><br/><label for="odbiorcakod">Kod pocztowy: </label><span class="required">*</span><input type="text" maxlength="6" readonly="readonly" name="odbiorcakod" value="03-611"/><br/><label for="odbiorcamiasto">Miasto: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcamiasto" value="Warszawa"/><br/><label for="odbiorcatelefon">Telefon: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcatelefon" value="1234567"/><br/>');
$('#sap').html('<label for="sap">Numer SAP płatnika: </label><span class="required">*</span><input maxlength="7" value="2329202" type="text" name="sap"/><br/>');
$('#whatproduct').html('<select name="product"><option value="PC">PC</option></select>');

}

else if($("input[name='ktoryserwis']:checked").val() == '2'){
$('#daneserwisu').html('<label for="odbiorcafirma">Firma: </label><span class="required">*</span><input type="hidden" name="serwis" value="Monitory Mława"/><input type="text" maxlength="30" readonly="readonly" name="odbiorcafirma" value="Monitor Service Center - MA0"/><br/><label for="odbiorcaulica">Ulica: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcaulica" value="LG Electronics"/><br/><label for="odbiorcanumer">Numer: </label><span class="required">*</span><input type="text" maxlength="7" readonly="readonly" name="odbiorcanumer" value="7"/><br/><label for="odbiorcakod">Kod pocztowy: </label><span class="required">*</span><input type="text" maxlength="6" readonly="readonly" name="odbiorcakod" value="06-500"/><br/><label for="odbiorcamiasto">Miasto: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcamiasto" value="Mława"/><br/><label for="odbiorcatelefon">Telefon: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcatelefon" value="33222322"/><br/>');
$('#sap').html('<label for="sap">Numer SAP płatnika: </label><span class="required">*</span><input maxlength="7" value="2348875" type="text" name="sap"/><br/>');
$('#whatproduct').html('<select name="product"><option value="Monitor">Monitor</option></select>');
}

else if($("input[name='ktoryserwis']:checked").val() == '3'){
$('#daneserwisu').html('<label for="odbiorcafirma">Firma: </label><span class="required">*</span><input type="hidden" name="serwis" value="Telefony"/><input type="text" maxlength="30" readonly="readonly" name="odbiorcafirma" value="LG Electronics BRC"/><br/><label for="odbiorcaulica">Ulica: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcaulica" value="Ul. LG Electronics"/><br/><label for="odbiorcanumer">Numer: </label><span class="required">*</span><input type="text" maxlength="7" readonly="readonly" name="odbiorcanumer" value="7"/><br/><label for="odbiorcakod">Kod pocztowy: </label><span class="required">*</span><input type="text" maxlength="6" readonly="readonly" name="odbiorcakod" value="06-500"/><br/><label for="odbiorcamiasto">Miasto: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcamiasto" value="Mława"/><br/><label for="odbiorcatelefon">Telefon: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcatelefon" value="7654321"/><br/>');

$('#sap').html('<label for="sap">Numer SAP płatnika: </label><span class="required">*</span><input maxlength="7" value="1230046" type="text" name="sap"/><br/>');
$('#whatproduct').html('<select name="product"><option value="Telefony">Telefony</option></select>');

}
else if($("input[name='ktoryserwis']:checked").val() == '4'){
$('#daneserwisu').html('<label for="odbiorcafirma">Firma: </label><span class="required">*</span><input type="hidden" name="serwis" value="Monitory"/><input type="text" maxlength="30" readonly="readonly" name="odbiorcafirma" value="RAGZ SP.J.R.GUZOWSKI A.ZASADA"/><br/><label for="odbiorcaulica">Ulica: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcaulica" value="AL. PIŁSUDSKIEGO  (ANILANA)"/><br/><label for="odbiorcanumer">Numer: </label><span class="required">*</span><input type="text" maxlength="7" readonly="readonly" name="odbiorcanumer" value="143"/><br/><label for="odbiorcakod">Kod pocztowy: </label><span class="required">*</span><input type="text" maxlength="6" readonly="readonly" name="odbiorcakod" value="92-236"/><br/><label for="odbiorcamiasto">Miasto: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcamiasto" value="Łódź"/><br/><label for="odbiorcatelefon">Telefon: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcatelefon" value="33222322"/><br/>');
$('#sap').html('<label for="sap">Numer SAP płatnika: </label><span class="required">*</span><input maxlength="7" value="2329224" type="text" name="sap"/><br/>');
$('#whatproduct').html('<select name="product"><option value="">wybierz</option><option value="Video">Video</option><option value="Audio">Audio</option><option value="Mikrofalówka">Mikrofalówka</option><option value="Odkurzacz">Odkurzacz</option><option value="Monitor">Monitor</option></select>');
}

});
if ($("input[name='ktoryserwis']:checked").val() == '1') {
$('#daneserwisu').html('<label for="odbiorcafirma">Firma: </label><span class="required">*</span><input type="hidden" name="serwis" value="PC"/><input type="text" maxlength="30" readonly="readonly" name="odbiorcafirma" value="Multimedia Serwis"/><br/><label for="odbiorcaulica">Ulica: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcaulica" value="Radzymińska"/><br/><label for="odbiorcanumer">Numer: </label><span class="required">*</span><input type="text" maxlength="7" readonly="readonly" name="odbiorcanumer" value="211"/><br/><label for="odbiorcakod">Kod pocztowy: </label><span class="required">*</span><input type="text" maxlength="6" readonly="readonly" name="odbiorcakod" value="03-611"/><br/><label for="odbiorcamiasto">Miasto: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcamiasto" value="Warszawa"/><br/><label for="odbiorcatelefon">Telefon: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcatelefon" value="1234567"/><br/>');
$('#sap').html('<label for="sap">Numer SAP płatnika: </label><span class="required">*</span><input maxlength="7" value="2329202" type="text" name="sap"/><br/>');
$('#whatproduct').html('<select name="product"><option value="PC">PC</option></select>');

}

else if($("input[name='ktoryserwis']:checked").val() == '2'){
$('#daneserwisu').html('<label for="odbiorcafirma">Firma: </label><span class="required">*</span><input type="hidden" name="serwis" value="Monitory Mława"/><input type="text" maxlength="30" readonly="readonly" name="odbiorcafirma" value="Monitor Service Center - MA0"/><br/><label for="odbiorcaulica">Ulica: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcaulica" value="LG Electronics"/><br/><label for="odbiorcanumer">Numer: </label><span class="required">*</span><input type="text" maxlength="7" readonly="readonly" name="odbiorcanumer" value="7"/><br/><label for="odbiorcakod">Kod pocztowy: </label><span class="required">*</span><input type="text" maxlength="6" readonly="readonly" name="odbiorcakod" value="06-500"/><br/><label for="odbiorcamiasto">Miasto: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcamiasto" value="Mława"/><br/><label for="odbiorcatelefon">Telefon: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcatelefon" value="33222322"/><br/>');
$('#sap').html('<label for="sap">Numer SAP płatnika: </label><span class="required">*</span><input maxlength="7" value="2348875" type="text" name="sap"/><br/>');
$('#whatproduct').html('<select name="product"><option value="Monitor">Monitor</option></select>');
}

else if($("input[name='ktoryserwis']:checked").val() == '3'){
$('#daneserwisu').html('<label for="odbiorcafirma">Firma: </label><span class="required">*</span><input type="hidden" name="serwis" value="Telefony"/><input type="text" maxlength="30" readonly="readonly" name="odbiorcafirma" value="LG Electronics BRC"/><br/><label for="odbiorcaulica">Ulica: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcaulica" value="Ul. LG Electronics"/><br/><label for="odbiorcanumer">Numer: </label><span class="required">*</span><input type="text" maxlength="7" readonly="readonly" name="odbiorcanumer" value="7"/><br/><label for="odbiorcakod">Kod pocztowy: </label><span class="required">*</span><input type="text" maxlength="6" readonly="readonly" name="odbiorcakod" value="06-500"/><br/><label for="odbiorcamiasto">Miasto: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcamiasto" value="Mława"/><br/><label for="odbiorcatelefon">Telefon: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcatelefon" value="7654321"/><br/>');

$('#sap').html('<label for="sap">Numer SAP płatnika: </label><span class="required">*</span><input maxlength="7" value="1230046" type="text" name="sap"/><br/>');
$('#whatproduct').html('<select name="product"><option value="Telefony">Telefony</option></select>');
}
else if($("input[name='ktoryserwis']:checked").val() == '4'){
$('#daneserwisu').html('<label for="odbiorcafirma">Firma: </label><span class="required">*</span><input type="hidden" name="serwis" value="Monitory"/><input type="text" maxlength="30" readonly="readonly" name="odbiorcafirma" value="RAGZ SP.J.R.GUZOWSKI A.ZASADA"/><br/><label for="odbiorcaulica">Ulica: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcaulica" value="AL. PIŁSUDSKIEGO  (ANILANA)"/><br/><label for="odbiorcanumer">Numer: </label><span class="required">*</span><input type="text" maxlength="7" readonly="readonly" name="odbiorcanumer" value="143"/><br/><label for="odbiorcakod">Kod pocztowy: </label><span class="required">*</span><input type="text" maxlength="6" readonly="readonly" name="odbiorcakod" value="92-236"/><br/><label for="odbiorcamiasto">Miasto: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcamiasto" value="Łódź"/><br/><label for="odbiorcatelefon">Telefon: </label><span class="required">*</span><input type="text" maxlength="20" readonly="readonly" name="odbiorcatelefon" value="33222322"/><br/>');
$('#sap').html('<label for="sap">Numer SAP płatnika: </label><span class="required">*</span><input maxlength="7" value="2329224" type="text" name="sap"/><br/>');
$('#whatproduct').html('<select name="product"><option value="">wybierz</option><option value="Video">Video</option><option value="Audio">Audio</option><option value="Mikrofalówka">Mikrofalówka</option><option value="Odkurzacz">Odkurzacz</option><option value="Monitor">Monitor</option></select>');
}

});
</script>
<script>
$(document).ready(function() { 
$("#przesylkaod").change(function(){
	var cos = $("#przesylkaod").val();
	if(cos == 1) {
		$("#odbiordo").html(' <option value="">wybierz</option>');
	
	}
	if(cos == 8) {
		$("#odbiordo").html('<option value="11">11.00</option><option value="12">12.00</option><option value="13">13.00</option><option value="14">14.00</option><option value="15">15.00</option>');

	} else if(cos == 9) {
			$("#odbiordo").html('<option value="12">12.00</option><option value="13">13.00</option><option value="14">14.00</option><option value="15">15.00</option>');

	
	} else if(cos == 10) {
			$("#odbiordo").html('<option value="13">13.00</option><option value="14">14.00</option><option value="15">15.00</option>');

	
	}else if(cos == 11) {
			$("#odbiordo").html('<option value="14">14.00</option><option value="15">15.00</option>');

	
	}else if(cos == 12) {
			$("#odbiordo").html('<option value="15">15.00</option>');

	
	}

});
	var cos = $("#przesylkaod").val();
	if(cos == 1) {
		$("#odbiordo").html(' <option value="">wybierz</option>');
	
	}
	if(cos == 8) {
		$("#odbiordo").html('<option value="11">11.00</option><option value="12">12.00</option><option value="13">13.00</option><option value="14">14.00</option><option value="15">15.00</option>');

	} else if(cos == 9) {
			$("#odbiordo").html('<option value="12">12.00</option><option value="13">13.00</option><option value="14">14.00</option><option value="15">15.00</option>');

	
	} else if(cos == 10) {
			$("#odbiordo").html('<option value="13">13.00</option><option value="14">14.00</option><option value="15">15.00</option>');

	
	}else if(cos == 11) {
			$("#odbiordo").html('<option value="14">14.00</option><option value="15">15.00</option>');

	
	}else if(cos == 12) {
			$("#odbiordo").html('<option value="15">15.00</option>');

	
	}
});
</script>

</head>
<body>
<div id="all">
<div class="content" style="height:auto">
<ul class="menu">
<li class="menu"><a class="menu" href="/system/report">Raporty</a></li>
<li style="float:left;position:relative;top:13px;margin-left:4px;color:gray">&raquo;</li><li class="menu_active"> <a href="/system/add"> Dodawanie Zleceń</a></li><li style="float:left;position:relative;top:13px;color:gray">&raquo;</li>
<li class="menu"><a class="menu" href="/system/check"> Sprawdzanie Statusów</a></li>

</ul>


<div style="float:left;margin-left:100px;margin-top:20px;"><img src="http://kurier.lge.pl/public/images/logo.png"/>
</div>
<div style=";clear:both;text-align:center">

<a href="javascript:history.back()"><img style="border-width:0px;position:relative;bottom:4px;" src="http://kurier.lge.pl/public/images/prev.png"/></a><A HREF="javascript:history.back()"><img style="border-width:0px" src="http://kurier.lge.pl/public/images/next.png"/></a><br/>
<?php if ($zalogowany == 'tak'): ?>
<form action ="<?php echo $action; ?>system/send" method="post">



<!-- Dane odbiorcy -->

<fieldset style="width:400px;text-align:right;margin:0 auto;display:block">

<legend> Dane klienta</legend>

<label for="firma">Nazwa klienta: </label><span class="required">*</span> <input type="text" maxlength="30" name="firma"/><br/>
<label for="ulica">Ulica klienta: </label><span class="required">*</span> <input type="text" maxlength="20" name="ulica"/><br/>
<label for="numer">Numer mieszkania/domu: </label><span class="required">*</span> <input type="text" maxlength="7" name="numer"/><br/>
<label for="kod">Kod pocztowy klienta: </label><span class="required">*</span> <input type="text" maxlength="6" name="kod"/><br/>
<label for="miasto">Miasto klienta: </label><span class="required">*</span> <input type="text"  maxlength="20"  name="miasto"/><br/>
<label for="telefon">Telefon komórkowy klienta:<span style="vertical-align: super;font-size:11px;">1</span> </label><span class="required">*</span> <input type="text" maxlength="12"  name="telefonkom"/><br/>
<label for="telefon">Telefon stacjonarny klienta: </label><input type="text" maxlength="12"  name="telefonstac"/><br/>
<label for="email">E-mail klienta: </label><input type="text" maxlength="50" name="email"/><br/>

<br/>
<span style="font-size:10px;">1) Jeśli klient nie posiada telefonu komórkowego wtedy możesz podac numer stacjonarny.</span>
</fieldset>
<!-- Koniec danych odbiorcy -->

<!-- dane wypełnione -->
<fieldset style="width:400px;text-align:right;margin:0 auto;display:block">
<legend> Dane Serwisu</legend>
<input type="radio" class="radio" name="ktoryserwis" value="3" > Telefony
<input type="radio" class="radio"  name="ktoryserwis" value="1"> PC
<input type="radio" class="radio"  name="ktoryserwis" value="4" > RAGZ
<input type="radio" class="radio"  name="ktoryserwis" value="2" > Monitory Mława
<div id="daneserwisu">


</div>
<div id="sap">
</div>
</fieldset>
<fieldset style="width:400px;text-align:right;margin:0 auto;display:block"><legend> Dane dotyczące przesyłki</legend>

<label for="platnik">Płatnik: </label><span class="required">*</span> <input readonly="readonly" value="Zleceniodawca" type="text" name="platnik"/><br/>
<label for="formaplatnosci">Forma płatności: </label><span class="required">*</span> <input readonly="readonly" type="text" name="formaplatnosci" value="P"/><br/>
<div><div id="dataprzyjazdu" style="position:relative;top:20px;right:160px;" ><label for="dataprzyjazdu">Data przyjazdu kuriera: </label><span class="required">*</span> <span style="font-weight:bold;" onmouseover="tooltip.show('data przyjazdu kuriera - maksymalnie nalbliższe 5 dni roboczych ', 200);"
onmouseout="tooltip.hide();">      </span></div><div style="float:right"><script>DateInput('dataprzyjazdu', true, 'DD-MON-YYYY')</script></div></div><br/><br/>
<span style="position:relative;right:100px;"><label for="przesylkaod">Przesyłka gotowa od: </label><span class="required">*</span> <span style="font-weight:bold" onmouseover="tooltip.show('godzina, od której kurier może pojawić się po odbiór przesyłek (na tą godzinę wszystkie przesyłki muszą być gotowe do obioru przez kuriera) ', 200);"
onmouseout="tooltip.hide();"></span></span><select id="przesylkaod" name="przesylkaod">
 <option value="1">wybierz</option>
  <option value="8">8:00</option>
  <option value="9">9:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
 

</select>

<br/>

<span style="position:relative;right:100px;">
Odbiór możliwy do: <span class="required">*</span> <span style="font-weight:bold" onmouseover="tooltip.show('Różnica pomiędzy godziną w Przesyłka gotowa od, a godziną Odbiór możliwy do musi wynosić minimum 3 godziny. ', 200);"
onmouseout="tooltip.hide();"></span></span><select id="odbiordo" name="odbiordo">
 <option value="">wybierz</option>

</select><br/>
<label for="przesylekdo">Ilośc przesyłek do 31.5 kg: </label><span class="required">*</span> <input  maxlength="3" type="text" value="0" name="przesylekdo"/><br/>
<input maxlength="3" type="hidden" value="0" name="przesylekpowyzej"/>
 <label for="waga">Waga najcięższej przesyłki: </label><span class="required">*</span> <input maxlength="4" type="text" value="0" name="waga"/><br/>
</fieldset>

<fieldset style="width:400px;text-align:right;margin:0 auto;display:block">
<legend>Dodatkowe informacje</legend>
<label for="product"> Typ produktu:  </label> <span class="required">*</span> &nbsp;&nbsp;&nbsp;&nbsp; <span id="whatproduct"></span>
<br/><label for="dodatkoweinstrukcje"> Dodatkowe instrukcje:  </label> <span style="font-weight:bold" onmouseover="tooltip.show('należy wpisać dodatkowe informacje dla kuriera odbierającego przesyłki (np. wjazd od ulicy Zielonej).', 200);"
onmouseout="tooltip.hide();">    </span>
 <textarea maxlength="100" cols="17" rows ="5" name="dodatkoweinstrukcje"></textarea><br/>
<label for="miejscenadania">Miejsce nadania: </label><span style="font-weight:bold" onmouseover="tooltip.show('należy wpisac dokładne miejsce w które powinien sie udac kurier po odbiór przesyłek pod podanym wcześniej adresem (np. I piętro pokój nr. 205)', 200);"
onmouseout="tooltip.hide();">     </span><input  type="text" name="miejscenadania"/><br/>
</fieldset>
<br/>
<input type="submit" value="Wyślij" class="buttonsubmit"/>

</form>



<?php else:?>
Brak dostępu, możesz zalogowac się <a style="color:#b3054a;" href="<?php echo $action; ?>">tutaj</a>

<?php endif;?>
</div></div>
<div class="footer"><span style="position:relative;right:20px;top:20px;"> System kurierski LG Electronics &raquo; Status: 
<?php if($zalogowany == 'tak'): ?>
<a style="text-decoration:underline" href="<?php echo $action; ?>user/logout">Zalogowany</a>
<?php else:?>
<a style="text-decoration:underline" href="<?php echo $action; ?>">Wylogowany</a>
<?php endif; ?>
&raquo; Kontakt do webmastera: <a style="text-decoration:underline" href="mailto:lukasz.forma@lge.com">lukasz.forma@lge.com</a></span></div>
</div></body>
</html>