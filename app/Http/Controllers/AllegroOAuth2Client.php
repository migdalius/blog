<?php
/**
 * @author AlleREST.pl
 * @link http://allerest.pl/logowanie-do-allegro-rest-api/
 */

namespace App\Http\Controllers;
//use Illuminate\Exception;


class AllegroOAuth2Client {
 
  protected $providerSettings = [
    'ClientId' => 'c1be7bb6-08d0-4553-ae70-83c5df3a889d',
    'ClientSecret' => 'VW7zNUFTRJTdjvDU19EbmxIIgNeQ6qMQiFfLPK3H78X9QYTe1OqfotTEosTvYQQi',
    'ApiKey' => 'eyJjbGllbnRJZCI6ImMxYmU3YmI2LTA4ZDAtNDU1My1hZTcwLTgzYzVkZjNhODg5ZCJ9.262Z2nnDIDtV5nORAdCfsuwYUZBZi3MAD1LneyN4ceo=',
    'RedirectUri' => 'http://127.0.0.1:8000/allegro_fun/login',
 
    'AuthorizationUri' => 'https://ssl.allegro.pl/auth/oauth/authorize',
    'TokenUri' => 'https://allegro.pl/auth/oauth/token'
  ];
 
  protected $headers = [
    'Content-Type: application/x-www-form-urlencoded'
  ];
 
  public function __construct(array $customSettings = []) {
    $this->providerSettings = array_merge($this->providerSettings, $customSettings);
    $this->headers[] = 'Authorization: Basic '. base64_encode($this->providerSettings['ClientId'] . ':' . $this->providerSettings['ClientSecret']);
  }
 
  public function tokenRequest($code) {
    $curl = curl_init($this->providerSettings['TokenUri']);
 
    curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query([
      'grant_type' => 'authorization_code',
      'code' => $code,
      'api-key' => $this->providerSettings['ApiKey'],
      'redirect_uri' => $this->providerSettings['RedirectUri']
    ]));    
 
    $result = ($result = curl_exec($curl)) === false ? false : json_decode($result);
 
    if ($result === false) {
      echo 'Unrecognized error';
    } else if (!empty($result->error)) {
      echo $result->error . ' - ' . $result->error_description;
    } else {
      return $result;
    }
  }
 
  public function getAuthorizationUri() {
    return $this->providerSettings['AuthorizationUri'] . '?' . http_build_query([
      'response_type' => 'code',
      'client_id' => $this->providerSettings['ClientId'],
      'api-key' => $this->providerSettings['ApiKey'],
      'redirect_uri' => $this->providerSettings['RedirectUri']
    ]);
  }
}
