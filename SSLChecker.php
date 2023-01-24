<?php

class SSLChecker
{
    public function checkSSL($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $data = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        if ($info['ssl_verify_result'] === 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>
