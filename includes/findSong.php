<?php

$songToLookUp = $_GET['mood'];

$newSong = str_replace(' ', '%20', $songToLookUp);

$chTwo = curl_init();
$urlTwo = "http://ws.spotify.com/search/1/track.json?q=$newSong";
curl_setopt($chTwo, CURLOPT_HEADER, 0);
curl_setopt($chTwo, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($chTwo, CURLOPT_URL, $urlTwo);
$curlResponseTwo = curl_exec($chTwo);
curl_close($chTwo);

$jsonResponse = json_decode($curlResponseTwo);

$randomTrack = rand(0, 99);

$songToPlay = $jsonResponse->tracks[$randomTrack]->href;

print '<iframe name="iframe" src="https://embed.spotify.com/?uri=' . $songToPlay . '" height="200" frameborder="0" allowtransparency="true"></iframe>';

?>