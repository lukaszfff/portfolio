<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ankieta</title>


<script type="text/javascript" src="lib/jquery-1.4.2.min.js"></script>

<script type="text/javascript">

jQuery(document).ready(function() {
var tab = new Array('zero','first','second','third','fourth','fifth','sixth','seventh','eighth','ninth','email');
$(".next").click(function() {
var actual = $(this).attr('id');
for (n = 0; n < 11; ++n)
{
if (actual.indexOf(tab[n]) >= 0) {

if((typeof($("input:radio[name="+tab[n]+"value]:checked").val()) == 'undefined' && (n!=0 && n!=3  && n!=9 && n!=6 && n!=4)) || ($("textarea[name="+ tab[n] +"value]").val() == '') ){
alert("To pole nie może byc puste.");
}
else {
if(($("input:radio[name="+tab[5]+"value]:checked").val() == 1 || $("input:radio[name="+tab[5]+"value]:checked").val() == 2) && n==5) {
$("#"+tab[n]).css('display','none');
$("#"+tab[n+2]).css('display','block');
} 
else if(($("input:radio[name="+tab[5]+"value]:checked").val() == 3 || $("input:radio[name="+tab[5]+"value]:checked").val() == 4 || $("input:radio[name="+tab[5]+"value]:checked").val() == 5) && n==6) {
$("#"+tab[n]).css('display','none');
$("#"+tab[n+2]).css('display','block');
}
else {
$("#"+tab[n]).css('display','none');
$("#"+tab[n+1]).css('display','block');

}

}
}

}
});
$(".prev").click(function() {

var actual = $(this).attr('id');
for (n = 10; n > 0; --n)
{
if (actual.indexOf(tab[n]) >= 0) {
if(($("input:radio[name="+tab[5]+"value]:checked").val() == 1 || $("input:radio[name="+tab[5]+"value]:checked").val() == 2) && n==7) {
$("#"+tab[n]).css('display','none');
$("#"+tab[n-2]).css('display','block');
}
else if(($("input:radio[name="+tab[5]+"value]:checked").val() == 3 || $("input:radio[name="+tab[5]+"value]:checked").val() == 4 || $("input:radio[name="+tab[5]+"value]:checked").val() == 5) && n==8){
$("#"+tab[n]).css('display','none');
$("#"+tab[n-2]).css('display','block');

} 
 else {
$("#"+tab[n]).css('display','none');
$("#"+tab[n-1]).css('display','block');
}
}

}

});
$("input:radio[name=seventhvalue]").click(function() {

var value = $('input:radio[name=seventhvalue]:checked').val();
if(value == 9) {
$("#whatproduct").css('display','block');
}
});
});

</script>
<style type="text/css">
textarea {
margin-top:20px;
width:330px;
height:100px;
}
#questionnary {
background-image:url('images/questionnary.png');
width:116px;
height:200px;
float:right;
position:relative;
right:20px;
}
#zero {
clear:both;
}
h1 {
text-align:left;
color:#d92161;
font-weight:bold;
font-size:28px;
}
#headerleft {
float:left;
width:430px;
padding-left:20px;
}
h2 {
text-align:left;
font-size:18px;
color:#444243;
}
body {
color:#666666;
font: 100% Verdana, Arial, Helvetica, sans-serif;
width:600px;
text-align:center;
margin:auto;
position:relative;right:30%;
}
.bg-grey-box-top {
background-image:url('images/bg-grey-box-top.gif');
width:540px;
height:10px;
padding-left:15px;
padding-right:15px;
}
.bg-grey-box-inside {
background-color:#f2f2f2;
width:570px;
padding-top:5px;
padding-bottom:5px;
font-color:#5d5c5c;

}
.bg-grey-box-bottom {
background-image:url('images/bg-grey-box-bottom.gif');
width:540px;
height:10px;
padding-left:15px;
padding-right:15px;
}

#zero,#first,#second,#third,#fourth,#fifth,#sixth,#seventh,#eighth,#ninth,#email {
margin-top:50px;
font-size:13px;
}
.next {
width:73px;
height:23px;
background-image:url('images/button.png');
color:#5e5e5e;
font-size:11px;
border:0px;
cursor:hand;
}.prev {
width:73px;
height:23px;
background-image:url('images/button.png');
color:#5e5e5e;
font-size:11px;
border:0px;
cursor:hand;
}
.sub {
width:73px;
height:23px;
background-image:url('images/button.png');
color:#5e5e5e;
font-size:11px;
border:0px;
cursor:hand;
}
</style>
<body>
  
  <div id="headerleft">
  <h1>Ankieta sprawdzająca satysfakcje </h1>
  <h2>W ankiecie do wybranych klientów zostaną rozlosowane blue-raye</h2>
  <p style="text-align:left;font-weight:bold;color:#444243;font-size:12px;">Aby skorzystac z ankiety należy za pomocą tego formularza odpowiedziec na kilka pytan i podac swoj adres e-mail. Poświęc chwile na wypełnienie ankiety a masz szanse wygrac Blue-Ray.</p>
  </div>
  <div id="questionnary"></div>
<div id="zero">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis tempus nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce porttitor luctus sapien sit amet volutpat. Suspendisse pharetra velit sit amet justo gravida sed pulvinar quam adipiscing. Etiam dapibus nisl ullamcorper diam tempor pellentesque. Nullam sem enim, consequat quis rhoncus in, imperdiet at purus. Nunc lobortis, dui non elementum pharetra, orci purus malesuada felis, vulputate elementum magna est sed sem. Duis sed leo et justo pulvinar tempor quis non risus. Pellentesque iaculis ligula at sem vulputate luctus. Sed in ligula et lacus bibendum porttitor. Maecenas posuere porta risus, sit amet ultrices urna aliquet ornare. Donec a turpis nulla.
</div>
<div class="bg-grey-box-bottom"></div>
<input type="button" id="zeronext" class="next" value="Rozpocznij"/>

</div>

    <div id="question">
      
<?php 

// if($_GET['action'] == 'send' && !empty($_POST)) { 
$email = htmlspecialchars(trim(stripslashes($_POST['emailvalue'])));
$first = htmlspecialchars(trim(stripslashes($_POST['firstvalue'])));
$second = htmlspecialchars(trim(stripslashes($_POST['secondvalue'])));
$third = htmlspecialchars(trim(stripslashes($_POST['thirdvalue'])));
$fourth = htmlspecialchars(trim(stripslashes($_POST['fourthvalue'])));
$fifth = htmlspecialchars(trim(stripslashes($_POST['fifthvalue'])));
$sixth = htmlspecialchars(trim(stripslashes($_POST['sixthvalue'])));
$seventh = htmlspecialchars(trim(stripslashes($_POST['seventhvalue'])));
$eighth = htmlspecialchars(trim(stripslashes($_POST['eighthvalue'])));
$ninth = htmlspecialchars(trim(stripslashes($_POST['ninthvalue'])));


   /*$conn_string = "host=lge.nazwa.pl port=5433 dbname=lge_8 user=lge_8 password=LUkaszf82";
$dbcon = pg_connect($conn_string) or die("Nie można nawiązac połączenia");
$result = pg_query($dbcon,"insert into raporty(id,email,first,second,third,fourth,fifth,sixth,seventh,eighth,ninth) values(nextval('raporty_id_seq'::regclass),'$email','$first','$second','$third','$fourth','$fifth','$sixth','$seventh','$eighth','$ninth');");
if(!$result) {
echo 'Błąd w wykonaniu zapytania';
} else {
echo 'Dziękujemy za wypełnienie ankiety. Wziąłeś udział w promocji Blu-Ray.';
}
*/
?>



<form action="index.php?action=send" method="post">
<div id="first" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="first">1.	Biorąc pod uwagę Twoją wiedzę o firmie oraz zdobyte doświadczenie poprzez korzystanie z jej produktów, usług i oferowanego wsparcia
Na ile prawdopodobne jest, że polecisz firmę LG swoim przyjaciołom, znajomym i rodzinie w skali od 0 do 10 (gdzie 0 oznacza całkowicie nieprawdopodobne, a 10 bardzo prawdopodobne)?</label>
<br/><input type="radio" name="first" value="1"/> 1 <br/>
<input type="radio" name="firstvalue" value="2"/> 2 <br/>
<input type="radio" name="firstvalue" value="3"/> 3 <br/>
<input type="radio" name="firstvalue" value="4"/> 4 <br/>
<input type="radio" name="firstvalue" value="5"/> 5 <br/>
<input type="radio" name="firstvalue" value="6"/> 6 <br/>
<input type="radio" name="firstvalue" value="7"/> 7 <br/>
<input type="radio" name="firstvalue" value="8"/> 8 <br/>
<input type="radio" name="firstvalue" value="9"/> 9 <br/>
<input type="radio" name="firstvalue" value="10"/>10 <br/>
</div>
<div class="bg-grey-box-bottom"></div>
<input type="button" id="firstnext" class="next" value="Następne"/>

</div>
<div id="second" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="">2. Jak ocenisz swój poziom zadowolenia z LG Electronics, na podstawie zdobytego doświadczenia:</label><br/>
<table><tr><td><input type="radio" name="secondvalue" value="1"/><br/>
</td>
<td align="left">1.	Bardzo niezadowolony </td>
</tr>
<tr>
<td>
<input type="radio" name="secondvalue" value="2"/><br/>
</td>
<td align="left">2.	Niezadowolony</td>
</tr>
<tr>
<td>
<input type="radio" name="secondvalue" value="3"/>
</td>
<td align="left"> 
3.	Raczej niezadowolony</td>
</tr>
<tr>
<td>
<input type="radio" name="secondvalue" value="4"/>
</td>
<td align="left">4.	Raczej zadowolony</td>
</tr>
<tr>
<td>
<input type="radio" name="secondvalue" value="5"/>
</td>
<td align="left">5.	Zadowolony</td>
</tr>
<tr>
<td>
<input type="radio" name="secondvalue" value="6"/>
</td>
<td align="left">6.	Bardzo zadowolony</td>
</tr>
</table>
</div>

<div class="bg-grey-box-bottom"></div>
<input type="button" id="secondprev" class="prev" value="Poprzednie"/>
<input type="button" id="secondnext" class="next" value="Następne"/>
</div>
<div id="third" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="">3. Co głównie zadecydowało o ocenie, którą dałeś?</label><br/>
<textarea id="fourthvalue" name="thirdvalue"></textarea><br/>
</div>
<div class="bg-grey-box-bottom"></div>
<input type="button" id="thirdprev" class="prev" value="Poprzednie"/>
<input type="button" id="thirdnext" class="next" value="Następne"/>
</div>
<div id="fourth" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="">4. Jeśli mógłbyś wskazać jeden czynnik, którego zmiana wpłynęłaby na poprawę Twojej oceny, co sugerowałbyś nam udoskonalić?</label><br/>
<textarea id="fourthvalue" name="fourthvalue"></textarea><br/>
</div>
<div class="bg-grey-box-bottom"></div>
<input type="button" id="fourthprev" class="prev" value="Poprzednie"/>
<input type="button" id="fourthnext" class="next" value="Następne"/>
</div>

<div id="fifth" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="">5. Na podstawie Twojego doświadczenia z firmą, czy bierzesz pod uwagę zakup kolejnego produktu LG? Proszę posłużyć się odpowiednią skalą:</label><br/>
<table><tr><td><input type="radio" name="fifthvalue" value="1"/><br/>
</td>
<td align="left">Zdecydowanie tak </td>
</tr>
<tr>
<td>
<input type="radio" name="fifthvalue" value="2"/><br/>
</td>
<td align="left">Raczej tak/kupiłabym</td>
</tr>
<tr>
<td>
<input type="radio" name="fifthvalue" value="3"/>
</td>
<td align="left"> 
Nie mam zdania</td>
</tr>
<tr>
<td>
<input type="radio" name="fifthvalue" value="4"/>
</td>
<td align="left">Raczej nie /kupiłabym</td>
</tr>
<tr>
<td>
<input type="radio" name="fifthvalue" value="5"/>
</td>
<td align="left">Zdecydowanie nie</td>
</tr>
</table>
<br/>
</div>
<div class="bg-grey-box-bottom"></div>
<input type="button" id="fifthprev" class="prev" value="Poprzednie"/>
<input type="button" id="fifthnext" class="next" value="Następne"/>

</div>
<div id="seventh" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="">7. Proszę wskazać, jaki byłby to produkt: </label><br/>
<table><tr><td><input type="radio" name="seventhvalue" value="1"/><br/>
</td>
<td align="left">1.	Telewizor LCD </td>
</tr>
<tr>
<td>
<input type="radio" name="seventhvalue" value="2"/><br/>
</td>
<td align="left">2.	Telewizor Plasmowy</td>
</tr>
<tr>
<td>
<input type="radio" name="seventhvalue" value="3"/>
</td>
<td align="left"> 
3.	Monitor</td>
</tr>
<tr>
<td>
<input type="radio" name="seventhvalue" value="4"/>
</td>
<td align="left">4.	Kino Domowe</td>
</tr>
<tr>
<td>
<input type="radio" name="seventhvalue" value="5"/>
</td>
<td align="left">5.	DVD </td>
</tr>
<tr>
<td>
<input type="radio" name="seventhvalue" value="6"/>
</td>
<td align="left">6.	Telefon Komórkowy</td>
</tr>
<tr>
<td>
<input type="radio" name="seventhvalue" value="7"/>
</td>
<td align="left">7.	Pralka</td>
</tr>
<tr>
<td>
<input type="radio" name="seventhvalue" value="8"/>
</td>
<td align="left">8.	Lodówka</td>
</tr>
<tr>
<td>
<input type="radio" name="seventhvalue" value="9"/>
</td>
<td align="left">9.	Inny, jaki
<input type="text" name="whatproduct" id="whatproduct" style="display:none"/> </td>
</tr>
</table>
<br/>
</div>

<div class="bg-grey-box-bottom"></div>
<input type="button" id="seventhprev" class="prev" value="Poprzednie"/>
<input type="button" id="seventhnext" class="next" value="Następne"/>
</div>
<div id="sixth" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="">6. Co byłoby główną przyczyną wyżej wymienionej decyzji?</label><br/>
<textarea name="sixthvalue"></textarea><br/>
</div>
<div class="bg-grey-box-bottom"></div>
<input type="button" id="sixthprev" class="prev" value="Poprzednie"/>
<input type="button" id="sixthnext" class="next" value="Następne"/>
</div>
<div id="eighth" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="">8. Na ile jesteś zadowolony z profilu Moje LG?  </label><br/>
<table><tr><td><input type="radio" name="eighthvalue" value="1"/><br/>
</td>
<td align="left">1.	Bardzo niezadowolony </td>
</tr>
<tr>
<td>
<input type="radio" name="eighthvalue" value="2"/><br/>
</td>
<td align="left">2.	Niezadowolony</td>
</tr>
<tr>
<td>
<input type="radio" name="eighthvalue" value="3"/>
</td>
<td align="left"> 
3.	Raczej niezadowolony</td>
</tr>
<tr>
<td>
<input type="radio" name="eighthvalue" value="4"/>
</td>
<td align="left">4.	Raczej zadowolony</td>
</tr>
<tr>
<td>
<input type="radio" name="eighthvalue" value="5"/>
</td>
<td align="left">5.	Zadowolony</td>
</tr>
<tr>
<td>
<input type="radio" name="eighthvalue" value="6"/>
</td>
<td align="left">6.	Bardzo zadowolony</td>
</tr>
<tr>
</table>
</div>
<div class="bg-grey-box-bottom"></div>
<input type="button" id="eighthprev" class="prev" value="Poprzednie"/>
<input type="button" id="eighthnext" class="next" value="Następne"/>
</div>
<div id="ninth" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="">9. Co sugerowałbyś zmienić/poprawić w profilu Moje LG?</label><br/>
<textarea name="ninthvalue"></textarea><br/>
</div>
<div class="bg-grey-box-bottom"></div>
<input type="button" id="ninthprev" class="prev" value="Poprzednie"/>
<input type="button" id="ninthnext" class="next" value="Następne"/>
</div>
<div id="email" style="display:none;clear:both;">
<div class="bg-grey-box-top"></div>
<div class="bg-grey-box-inside">
<label for="">10. Aby uczestniczyc w zabawie wpisz swój adres e-mail: </label><input type="text" name="emailvalue"/><br/>
</div>
<div class="bg-grey-box-bottom"></div>
<input type="button" id="emailprev" class="prev" value="Poprzednie"/>
<input type="submit" class="sub" value="Wyślij"/>
</div>
</form>



 </div>
</body>
</html>