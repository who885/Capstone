<?php
$curl = curl_init();

$input = 'ryte night';


$parsedinput = str_replace(" ", "%20", $input);

echo $parsedinput;
echo "<br>";
echo "https://genius.p.rapidapi.com/search?q=" . $parsedinput;
echo "<br>";

curl_setopt_array($curl, [
	CURLOPT_URL => "https://genius.p.rapidapi.com/search?q=" . $parsedinput,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: genius.p.rapidapi.com",
		"x-rapidapi-key: b57c0a6987mshab99b016e196a89p171e18jsnd7a2a97eed3b"
	],
]);

$data = curl_exec($curl);

$string = json_decode($data, TRUE);

$lyrics = $string['response']['hits']['0']['result']['path'];
//$lyrics = $string['response'];
$genius = 'genius.com';

var_dump($lyrics);

$finalpath = $genius . $lyrics;

echo $finalpath;
echo "<br>";


$dsn = 'mysql:host=sql5.freemysqlhosting.net:3306;dbname=sql5481555';
$user = 'sql5481555';
$pass = 'w19w51fH6x';

try {
	$db = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	print($error_message);
	exit();
}


$query = "INSERT INTO lyrics
					(lyrics)
					VALUES
					('$finalpath')";
					$db->exec($query);

curl_close($curl);