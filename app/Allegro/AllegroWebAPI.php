<?php

namespace App\Allegro;
use SoapClient;
use SoapFault;
use QuerySysStatus;
use doLoginEnc;


class AllegroWebAPI {
    protected $_instance;
    protected $_config;
    protected $_session;
    protected $_client;
    protected $_local_version;
    /* Określenie kraju (1 = Polska) */
    const COUNTRY_CODE = 1;
    /**
     * Zapis ustawień oraz połączenie z WebAPI
     */
    public function __construct() {
        $this->_config = array(
            //'allegro_id' => ALLEGRO_ID,
            'allegro_key' => ALLEGRO_KEY,
            'allegro_login' => ALLEGRO_LOGIN,
            'allegro_password' => ALLEGRO_PASSWORD
        );
        $this->_client = new SoapClient('https://webapi.allegro.pl/uploader.php?wsdl');
    }

    public function LoginEnc() {
        try{
            $version = $this->_client->doQuerySysStatus(1,self::COUNTRY_CODE,$this->_config['allegro_key']);
            //$this->_local_version = $version['ver-key'];
            //do
            $password = base64_encode( mhash(MHASH_SHA256, $this->_config['allegro_password']) );
        
            $session = $this->_client->doLoginEnc(
                    $this->_config['allegro_login'], $password, self::COUNTRY_CODE, $this->_config['allegro_key'], $version['ver-key']
            );

            $this->_session = $session;
            $nr_sesji = $session['session-handle-part'];
            $message = 'Zalogowano poprawnie';
            //unset($this->_config['allegro_password']);
        }
        catch(SoapFault $error) {
            $message = 'Nie możemy dodać konta: '.$error->faultcode.': '.$error->faultstring;
        }

        return $message;
    }

}
?>