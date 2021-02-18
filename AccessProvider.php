<?php


class AccessProvider
{
    private array $data = [
        'client_id' => '618bd3ff-3be8-4d7e-8f4f-47536c940028',
        'client_secret' => 'L48wjdKPQouSihyQHQJOuCPsMmOUjuWf11AjVA1717oQE0t0HErQivh7zKYKQcwD',
        'grant_type' => 'authorization_code',
        'code' => 'def502009b1a9a0cec2b9043a9e8487a3ccfcef2f6d97d267b33a8bb8d2662461cef28a12d67fc88f234c09e0a9fc41bcd1f9c4710ad6e9850a2096990d4894919c5634593ff9ad4467fbe51f351f744046e034fd366cabcc1b03cde37cf3016f5bb8c8fe71a25021fa3cb31d054467efb6b729622aa173abcd4da69d9354dfc488989b85b4bdfba44aeaa08ce0b4e3d83223f189c914f2e5bd58481871fd8f6dfba1111ae8338c69dd8a64c179dac402675ac7fdd95f6650e91f6eaaa1d7cdc6678c07dcab6619417acc70c9ce43fffd1442d0813f0a1e0481f5e14a59ab9cd8ba74f7c70e9c4aa0c3a79b6f74b38c713863e20bab66129c58b939eef5634b7809edf86df39276d649896786bd744af5aaf2f90d140f831751ee9d0459216fda0e5fbf0cae738898a20e67ccdaebb4195d743fda0664043d8b2f76e29f680fa947910958ca905109cb7653ae6b32ec2981e0cef7de01cd2e0ab72ecc2f1ef33df8342a52775846b05c49d92ea47fe2b69e212c558ab451d069e131728a350a220d7666ba89997fb563e6200ddcc3de8b8e348f902801a580ac3ace8933ddacdf515c417cfbfa2fd0d8b0a3b3fd9b69230b152d5d87a514ffc1ae7fe',
        'redirect_uri' => "https://google.com"
    ];
    private string $subdomain = 'dann70s';
    private static AccessProvider $connection;
    private $response;

    private function __construct()
    {

    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance(): AccessProvider
    {
        if (empty(self::$connection)) {
            return new self();
        } else {
            return self::$connection;
        }
    }

    public function getResponse()
    {
        return json_decode($this->response, true);
    }

    public function access()
    {
        $link = 'https://' . $this->subdomain . '.amocrm.ru/oauth2/access_token';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-oAuth-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($this->data));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_close($curl);

        $this->response = curl_exec($curl);
        $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    }

}