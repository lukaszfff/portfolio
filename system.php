<?php defined('SYSPATH') or die('No direct script access.');
		


class Controller_System extends Controller {
	public function action_show()
	{
		$view = View::factory('system/show');
		$this->response->body($view);
	}
	public function action_add()
	{  	
		$session = Session::instance();
		$zalogowany = $session->get('zalogowany');
		$view = View::factory('system/add');
		$view->zalogowany = $zalogowany;
		$view->action = URL::base();
		$this->response->body($view);

	}
		public function action_check() {
		$session = Session::instance();
		$zalogowany = $session->get('zalogowany');
		$view = View::factory('system/checksend');

		if($_POST['number']) {
		$soapClient = new SoapClient("http://webapps.dhl.com.pl/app/tntwebservice/tntwebservice.wsdl");

$eventStatuses = array(
       'AN'	=> 'przesyłka błędnia zaadresowana',
       'AWI'	=> 'odbiorcy nie było w domu w momencie doręczania przesyłki',
       'BRG'	=> 'doręczenie wstrzymane do czasu uregulowania opłat przez odbiorcę',
       'DOR'	=> 'przesyłka doręczona do odbiorcy',
       'DWP'	=> 'przesyłka odebrana od nadawcy',
       'LK'	=>	'przesyłka przekazana kurierowi do doręczenia',
       'LP'	=> 'przesyłka dotarła do terminala DHL',
       'OP'	=>	'odbiorca odmówił przyjęcia przesyłki',
       'OWL'	=> 'przesyłka oczekuje na odbiór przez klienta w terminalu DHL',
       'PNK'	=> 'przesyłka niekompletna',
       'SORT'	=> 'przesyłka w sortowni DHL',
       'ZWN'	=> 'przesyłka zwrócona nadawcy',
       'ZWW'	=>	'przesyłka oczekuje na kolejny cykl doręczenia',
       'SPDWP'	=> 'Przesyłka pozostawiona przez klienta w punkcie DHL SERVICEPOINT',
       'SPDSP'	=> 'Przesyłka doręczona do punktu DHL SERVICEPOINT. Przesyłka oczekuje na odbiór',
       'SPKP'	=> 'Klient został powiadomiony o terminie i miejscu odbioru przesyłki',
       'SPCOU'	=> 'Czas oczekiwania przesyłki na odbiór w punkcie DHL SERVICEPOINT się skończył',
       'SPDOR'	=> 'Przesyłka odebrana przez odbiorcę finalnego z punktu DHL SERVICEPOINT',
	   'SPOP'	=> 'Odbiorca finalny odmówił przyjęcia przesyłki',
       'SPPU'	=> 'Przesyłka podjęta przez kuriera z punktu DHL SERVICEPOINT',
       'CC'		=> 'Szczegółowe informacje dostępne są w naszym Contact Center'
);
$zlecStatuses = array(

        'ContactCallCenter' => 'w celu uzyskania dodatkowych informacji należy skontaktować się z Call Center DHL',
        'Registered' => 'zlecenie zarejestrowane',
        'AcceptedByCourier' => 'zlecenie przyjęte przez kuriera do realizacji',
        'Canceled' => 'zlecenie anulowane',
        'PickupScheduledTimeChanged' =>  'planowany czas odbioru przesyłek uległ zmianie',
        'Realized' => 'zlecenie zrealizowane',
        'TemporaryProblemsOccurred' => 'realizacja zlecenia utrudniona',
        'RealizationImpossibleNoPayment' => 'realizacja zlecenia niemożliwa – brak zapłaty',
        'RealizationImpossibleNobodyAtHome' => 'realizacja zlecenia niemożliwa – nikogo nie ma w domu',
        'RealizationImpossibleShipmentNotReady' => 'realizacja zlecenia niemożliwa – przesyłka nie gotowa',
        'RealizationImpossibleNoShipment' => 'realizacja zlecenia niemożliwa – brak przesyłki',
       'RealizationImpossibleFirmClosed' => 'realizacja zlecenia niemożliwa – firma zamknięta',
       'RealizationImpossibleSenderNotReachable' => 'realizacja zlecenia niemożliwa – nadawca nieosiągalny',
       'RealizationImpossiblePackageDamaged' => 'realizacja zlecenia niemożliwa – paczka uszkodzona',
        'RealizationImpossibleNonstandarizedPackage' => 'realizacja zlecenia niemożliwa – towar/opakowanie nie spełnia standardu',
        'RealizationImpossibleForbiddenContent' => 'realizacja zlecenia niemożliwa - niedozwolona zawartość',
        'RealizationImpossibleInvalidPackageDimensionOrWeight' => 'realizacja zlecenia niemożliwa – waga/wymiary paczki przekraczają dozwolone wartości',
        'RealizationImpossibleNoLetterOfAuthorization' => ' realizacja zlecenia niemożliwa - ',
        'RealizationImpossible' => 'realizacja zlecenia niemożliwa – brak informacji o przyczynie');
  $getOrderResult = $soapClient->GetOrder(array('clientId'=>2329202, 'password'=>'49yE@L5mXg8', 'orderNumber'=>$_POST['number']));

$GetOrder = $getOrderResult->GetOrderResult->Shipments->string;
$GetOrderStatus = $getOrderResult->GetOrderResult->Status;

   $remoteCallParams = array("shipmentNumbers" => array($GetOrder));

  $getShipmentResult = $soapClient->GetShipments($remoteCallParams);
 
 
if($GetOrderStatus == 'NOT_FOUND') {

$view->found = 'Przesyłki nie znaleziono.';
}  else {

 $check = $eventStatuses[$getShipmentResult->GetShipmentsResult->Shipment->Events->Event->Status];
if(!empty($check)){
  $view->found = $check;
} else {
if(is_array($getOrderResult->GetOrderResult->Events->OrderEvent)) {
foreach($getOrderResult->GetOrderResult->Events->OrderEvent as $value) {

$valueforeach .= $zlecStatuses[$value->Status].'<br/>';
}
$view->found = $valueforeach;
} else {
$view->found = $zlecStatuses[$getOrderResult->GetOrderResult->Events->OrderEvent->Status];
}

}


}

 
		$view->action = URL::base();
		$view->zalogowany = $session->get('zalogowany');
		$this->response->body($view); 
  
  } else {
		$view = View::factory('system/check');
		$view->action = URL::base();
		$view->zalogowany = $session->get('zalogowany');
		$this->response->body($view);
  
  }

}  
	public function action_ask() {
		$session = Session::instance();
		$zalogowany = $session->get('zalogowany');
		$view = View::factory('system/ask');
		$view->zalogowany = $zalogowany;
		$view->id = (int) $_GET['id'];
		$view->action = URL::base();
		$this->response->body($view);
	}
	public function action_report() {
	$offset = $_POST['count'];
	$limit = $_POST['count'] !=0 && !empty($_POST['count']) ? $_POST['count'] * $offset : 1;
	$view = View::factory('system/report');
	$auth = Auth::instance();
	$session = Session::instance();
	$zalogowany = $session->get('zalogowany');
	$service = $_POST['service'];
	$date = $_POST['date'];
		$daydate = date("Y-m-d");

	if($service != 'all') {
	if($date == 'all') {
		$result = ORM::factory('report')->where('service','=',$service)->order_by('id','DESC')->limit($offset,$limit)->find_all(); 

	} else if($date == 'day') {
	$result = ORM::factory('report')->where('service','=',$service)->and_where('DATEDIFF("date", :today)','=', 0)->param(':today', $daydate)->order_by('id','DESC')->limit($offset,$limit)->find_all(); 
	
	}
	else if($date == 'week') {
	$result = ORM::factory('report')->where('service','=',$service)->and_where('DATEDIFF("date", :today)','<', 7)->param(':today', $daydate)->order_by('id','DESC')->limit($offset,$limit)->find_all(); 
	
	}
	else if($date == 'month') {
	$result = ORM::factory('report')->where('service','=',$service)->and_where('DATEDIFF("date", :today)','=', 30)->param(':today', $daydate)->order_by('id','DESC')->limit($offset,$limit)->find_all(); 
	
	}
	} else {
	if($date == 'all') {
	$result = ORM::factory('report')->order_by('id','DESC')->limit($offset,$limit)->find_all(); 
	}
	else if($date == 'day') {
	$result = ORM::factory('report')->where('DATEDIFF("date", :today)', '=', 0)->param(':today', $daydate)->order_by('id','DESC')->limit($offset,$limit)->find_all(); 
	}
	else if($date == 'week') {
	$result = ORM::factory('report')->where('DATEDIFF("date", :today)', '<', 7)->param(':today', $daydate)->order_by('id','DESC')->limit($offset,$limit)->find_all(); 
	}
	else if($date == 'month') {
	$result = ORM::factory('report')->where('DATEDIFF("date", :today)', '<', 30)->param(':today', $daydate)->order_by('id','DESC')->limit($offset,$limit)->find_all(); 
	}

	
	}
	$view->result = $result;
	$view->zalogowany = $zalogowany;
	$view->action = URL::base();
	$this->response->body($view);
	}
	
	public function action_delete() {
		$view = View::factory('system/delete');
		$session = Session::instance();
		$zalogowany = $session->get('zalogowany');

		$view->zalogowany = $zalogowany;

		$id_package = (int) $_GET['id'];
		$result = ORM::factory('report')->where('id', '=', $id_package)->find_all();
		
		foreach ($result as $value) {
		$number = $value->number;
		$data = $value->date_come;
		
	
		$data_przyjazdu = explode("-",$data);
		$data_przyjazdu = $data_przyjazdu[2].'-'.$data_przyjazdu[1].'-'.$data_przyjazdu[0];
		$data = date("d-m-Y",strtotime($data_przyjazdu));
		$number = $value->number;
		$sap = $value->sap;
		$reason = (int) $_POST['reason'];
echo $reason;
		$content = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
		<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ecas=\"eCASOrderWS\">
		<soapenv:Body>

		<ecas:UsunZlecenieWS>
		<ecas:zlecenie>

		<ecas:numer_zlecenia>$number</ecas:numer_zlecenia>

		<ecas:DataPrzyjazduKuriera>$data</ecas:DataPrzyjazduKuriera>

		<ecas:NumerSAP>$sap</ecas:NumerSAP>

		<ecas:id_powodu>$reason</ecas:id_powodu>

		<ecas:opispowodu>testowewww</ecas:opispowodu>

		</ecas:zlecenie>

		</ecas:UsunZlecenieWS>

		</soapenv:Body>

		</soapenv:Envelope>";
		}

		$wsdl = "http://webapps.dhl.com.pl/app/ecas/eCASOrderWS.asmx";
		//$wsdl  = "http://webapps.dhl.com.pl/app/ecas/eCASOrderWS.asmx?wsdl"; 
		$len = strlen($content);
	
		$headers = array("SOAPAction: \"eCASOrderWS/UsunZlecenieWS\"",
		"Content-Type: text/xml; charset=utf-8",
		"POST /app/ecas/eCASOrderWS.asmx HTTP/1.1",
		"Content-Length:" .$len
		);
	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $wsdl);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$curl_exec = curl_exec($ch);
		


		preg_match("/<numer_zlecenia>(.*?)<\/numer_zlecenia>/i",$curl_exec,$matches);	
		echo $curl_exec;
		if($matches[1]) {
				echo $curl_exec;
		$report = ORM::factory('report', $id_package);
		$report->delete();
		

		} else {
		preg_match("/<tresc_bledu>(.*?)<\/tresc_bledu>/i",$curl_exec,$errors);	
		preg_match("/<wynik>(.*?)<\/wynik>/i",$curl_exec,$result);
	
		$view->content = $errors[1].'<br/>';
		$view->content .= $result[1];
		$this->response->body($view);
	}

	}
	public function action_send()
	{
	$auth = Auth::instance();
$session = Session::instance();
$zalogowany = $session->get('zalogowany');
$odbiorcafirma = $_POST['odbiorcafirma'];
$odbiorcaulica = $_POST['odbiorcaulica']; // user fill
$odbiorcanumer = $_POST['odbiorcanumer']; // user fill
$odbiorcakod = $_POST['odbiorcakod']; // user fill
$odbiorcamiasto = $_POST['odbiorcamiasto']; // user fill
$odbiorcatelefon = $_POST['odbiorcatelefon']; // user fill
$firma = $_POST['firma'];
$ulica = $_POST['ulica'];
$numer = $_POST['numer'];
$kod = $_POST['kod'];
$miasto = $_POST['miasto'];
$sap = $_POST['sap'];
$platnik = $_POST['platnik'];
$formaplatnosci = $_POST['formaplatnosci'];
$dataprzyjazdu = $_POST['dataprzyjazdu']; // user fill
$przesylkaod = $_POST['przesylkaod']; // user fill
$odbiordo = $_POST['odbiordo']; // user fill
$przesylekdo = $_POST['przesylekdo']; // user fill
$przesylekpowyzej = $_POST['przesylekpowyzej']; // user fill
$waga = $_POST['waga']; // user fill
$imienazwisko = $_POST['imienazwisko']; // user fill
$email = $_POST['email']; // user fill
$telefonstac = $_POST['telefonstac']; // user fill
$telefonkom = $_POST['telefonkom']; // user fill
$dodatkoweinstrukcje = $_POST['dodatkoweinstrukcje'];// user fill
$miejscenadania = $_POST['miejscenadania']; // user fill
$serwis = $_POST['serwis'];
$product = $_POST['product'];

  $content = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">
  <soap:Body>
    <DodajZlecenieOdbWS xmlns=\"eCASOrderWS\">
      <zlecenie>
        <Firma>$firma</Firma>
        <Ulica>$ulica</Ulica>
        <Numer>$numer</Numer>
        <KodPocztowy>$kod</KodPocztowy>
        <Miasto>$miasto</Miasto>
        <NumerSAP>$sap</NumerSAP>
        <Platnik>$platnik</Platnik>
        <FormaPlatnosci>$formaplatnosci</FormaPlatnosci>
        <DataPrzyjazduKuriera>$dataprzyjazdu</DataPrzyjazduKuriera>
        <PrzesylkaGotowaOd>$przesylkaod:00</PrzesylkaGotowaOd>
        <ObiorMozliwyDo>$odbiordo:00</ObiorMozliwyDo>
        <IloscPrzesylekDo31>$przesylekdo</IloscPrzesylekDo31>
        <IloscPrzesylekPow31>$przesylekpowyzej</IloscPrzesylekPow31>
        <WagaNajciezszej>$waga</WagaNajciezszej>
        <ImieNazwisko>$imienazwisko</ImieNazwisko>
        <Email>$email</Email>
        <TelefonStacjonarny>$telefonstac</TelefonStacjonarny>
        <TelefonKomorkowy>$telefonkom</TelefonKomorkowy>
        <DodatkoweInstrukcje>$dodatkoweinstrukcje</DodatkoweInstrukcje>
        <MiejsceNadania>$miejscenadania</MiejsceNadania>
		<OdbiorcaFirma>$odbiorcafirma</OdbiorcaFirma>
        <OdbiorcaUlica>$odbiorcaulica</OdbiorcaUlica>
        <OdbiorcaNumer>$odbiorcanumer</OdbiorcaNumer>
        <OdbiorcaKodPocztowy>$odbiorcakod</OdbiorcaKodPocztowy>
        <OdbiorcaMiasto>$odbiorcamiasto</OdbiorcaMiasto>
        <OdbiorcaTelefon>$odbiorcatelefon</OdbiorcaTelefon> 
      </zlecenie>
    </DodajZlecenieOdbWS>
  </soap:Body>
</soap:Envelope>

";
$wsdl = "http://webapps.dhl.com.pl/app/ecas/eCASOrderWS.asmx";
		//$wsdl  = "http://webapps.dhl.com.pl/app/ecas/eCASOrderWS.asmx?wsdl"; 
     $len = strlen($content);
	
    $headers = array("SOAPAction: \"eCASOrderWS/DodajZlecenieOdbWS\"",
	"Content-Type: text/xml; charset=utf-8",
"POST /app/ecas/eCASOrderWS.asmx HTTP/1.1",
"Content-Length:" .$len
	);

$session = Session::instance();
		$zalogowany = $session->get('zalogowany');
		$view = View::factory('system/addsend');

function check_empty($value) {
foreach($value as $key=>$val) {
if(empty($val)) {
$result .= 'Pole ' . $key . ' nie może byc puste<br/>';

}

}
return $result;
}
function check_numeric($value) {
foreach($value as $key=>$val) {
if(!is_numeric($val) OR $val ==0 ) {
$result .= 'Pole ' . $key . ' może zawierac tylko cyfry i nie może wynosic 0<br/>';
 }
 }
 return $result;
}
function check_code($value) {

if(!preg_match('/^[0-9]{2}-[0-9]{2,3}$/D', $value)) {
return 'Kod pocztowy ma niepoprawny format<br/>';
} 
}
/*
function check_date($value) {
$months = array(
1 => 31,
2 => 28,
3 => 31,
4 => 30,
5 => 31,
6 => 30,
7 => 31,
8 => 31,
9 => 30,
10 => 31,
11 => 30,
12 => 31);
$data = strtotime($value);
$day = date("d",$data);
$month = date("m",$data);
$month_number = date("g");
$i = 1;
$next = array();
$current = date("d");
$dayOfMonth = date("t",$data);
for($i;$i<8;$i++) {
if(($current + $i ) > $daysOfMonth)
$next[$i] = $current + $i;
}

if(!in_array($day,$next) ) {
return 'Przesyłka musi byc wysłana w ciągu najbliższych 5 dni roboczych';
}
}
OR !empty($date)
*/
function validate($phone,$hour,$code,$numeric,$empty) {
if( !empty($phone) OR !empty($hour) OR !empty($code) OR !empty($numeric) OR !empty($empty)) {
return false;
}
else {
return true;
}

}
function check_hour($first,$second) {
$result = $second-$first;

if($result < 3) {
return 'Różnica pomiędzy wartością (godziną) w Przesyłka gotowa od, a godziną Odbiór
możliwy do musi wynosic minimum 3 godziny</br>';
}

}

function check_phone($first,$second) {
if(empty($first) && empty($second)) {
return 'Wprowadź przynajmniej jeden numer telefonu<br/>';
}

}

function check_duplicate($nazwa_odbiorcy,$produkt) {
if (isset($_SESSION['last_time']) OR isset($_SESSION['last_name'])) {
if($nazwa_odbiorcy == $_SESSION['last_name'] && $_SESSION['last_product'] == $produkt && (time() - $_SESSION['last_time']) < 120) {
return false;
} else {
return true;
} 

}
else {

return true;

}

}
$resultCode = check_code($odbiorcakod);
$resultHour = check_hour($przesylkaod,$odbiordo);
 $resultPhone = check_phone($telefonstac,$telefonkom);
$numeric = array('odbiorcatelefon'=>$odbiorcatelefon,'przesylekdo'=>$przesylekdo,'waga'=>$waga);
$resultNumeric = check_numeric($numeric);
$empty = array('odbiorcafirma' => $odbiorcafirma,'odbiorca ulica'=>$odbiorcaulica,'odbiorcanumer'=>$odbiorcanumer,'odbiorcakod'=>$odbiorcakod,'odbiorcamiasto'=>$odbiorcamiasto,'odbiorcatelefon'=>$odbiorcatelefon,
'firma'=>$firma,'ulica'=>$ulica,'numer'=>$numer,'kod'=>$kod,'miasto'=>$miasto,'numersap'=>$sap,'platnik'=>$platnik,'formaplatnosci'=>$formaplatnosci,'dataprzyjazdu'=>$dataprzyjazdu,
'przesylkaod'=>$przesylkaod,'odbiordo'=>$odbiordo,'waga'=>$waga,'przesylekdo'=>$przesylekdo,'produkt' => $product);
$resultEmpty = check_empty($empty);
// $resultDate = check_date($dataprzyjazdu);
if(validate($resultPhone,$resultHour,$resultCode,$resultNumeric,$resultEmpty)) {

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $wsdl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$curl_exec = curl_exec($ch);
preg_match("/<numer_zlecenia>(.*?)<\/numer_zlecenia>/i",$curl_exec,$matches);	

if($matches[1]) {


if(check_duplicate($firma,$product)) {
$report = ORM::factory('report');
$report->receivername = $firma;
$report->receiverphone = (!empty($telefonkom)) ? $telefonkom : $telefonstac;
$report->receivercity = $miasto;
$report->receivercode = $kod;
$report->receiverstreet  = $ulica;
$report->receivernumber = $numer;
$report->date = date('Y-m-d');
$report->service = $serwis;
$report->number = $matches[1];
$report->product = $product;
$data_przyjazdu = explode("-",$_POST['dataprzyjazdu']);
$data_przyjazdu = $data_przyjazdu[2].'-'.$data_przyjazdu[1].'-'.$data_przyjazdu[0];
$data_aktualna = date("Y-m-d");
$roznica = strtotime($data_przyjazdu) - strtotime($data_aktualna);
$report->date_come = date("Y-m-d",$roznica+strtotime($data_aktualna));
$report->sap = $sap;
$report->save(); 
$this->response->body($curl_exec);
$_SESSION['last_name'] = $firma;
$_SESSION['last_time'] = time();
$_SESSION['last_product'] = $product;
} else {
echo 'Musisz odczekac 120 sekund przed wyslaniem tego samego produktu do tego samego uzytkownika. Zabezpieczenie przed duplikowaniem wpisow.';
}
} else {
preg_match("/<tresc_bledu>(.*?)<\/tresc_bledu>/i",$curl_exec,$matches);	

echo $matches[1];
}


}
else {
$errors = array($resultCode,$resultHour,$resultNumeric,$resultEmpty);
	
		$view->errors = $errors;
		$view->zalogowany = $zalogowany;
		$view->action = URL::base();
		$this->response->body($view);
}

} 
	
} 
