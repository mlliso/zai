<?php

/**
 * Description of LoginManager
 *
 * @author Michał Lisiecki <michal.lisiecki@coi.gov.pl>
 */
class LoginManager {

    private $username = NULL;
    private $password = NULL;

    public function isLoggedIn() {
        $this->username = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : '';
        $this->password = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';
        return $this->validateCredentials();
    }

    public function requireLogin() {
        header('WWW-Authenticate: Basic realm="Tylko dla zarejestrowanych uzytkownikow"');
        header('HTTP/1.0 401 Unauthorized');
    }

    public function logout() {
        unset($_SERVER['PHP_AUTH_USER']);
        unset($_SERVER['PHP_AUTH_PW']);
    }

    private function validateCredentials() {
        return $this->username != '' && $this->password != '';
    }

}
