<?php 
function busca_repositorios(){
	$github_username = "weslley281";
	$access_token = "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"; // Substitua com o token que você gerou

	$api_url = "https://api.github.com/users/$github_username/repos?sort=updated&direction=desc";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $api_url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer $access_token"]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec($ch);

	if (curl_errno($ch)) {
	    echo 'Erro cURL: ' . curl_error($ch);
	}

	curl_close($ch);

	$repos = json_decode($response, true);


	return $repos;
	
}