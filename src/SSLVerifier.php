<?php

/**
 * SSLVerifier Class
 *
 * @author Ramazan Çetinkaya
 * @date 2023-02-11
 */
namespace SSLVerifier;

class SSLVerifier
{
    // URL to be verified
    private $url;
    // cURL resource
    private $ch;

    /**
     * Constructor to initialize URL and cURL resource
     *
     * @param string $url URL to be verified
     */
    public function __construct(string $url)
    {
        $this->url = $url;
        $this->ch = curl_init();
    }

    /**
     * Method to determine if the URL is using SSL
     *
     * @return bool Returns true if the URL is using SSL, false otherwise
     */
    public function isUsingSSL(): bool
    {
        // Setting cURL options
        curl_setopt($this->ch, CURLOPT_URL, $this->url);
        curl_setopt($this->ch, CURLOPT_HEADER, true);
        curl_setopt($this->ch, CURLOPT_NOBODY, true);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_exec($this->ch);

        $sslEnabled = false;
        // Check if the protocol used is HTTPS
        if (curl_getinfo($this->ch, CURLINFO_PROTOCOL) === "https") {
            $sslEnabled = true;
        }

        // Close the cURL resource
        curl_close($this->ch);

        return $sslEnabled;
    }
}
