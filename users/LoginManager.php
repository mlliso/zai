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
        return $this->validateCredentials();
    }

    public function logout() {
        
    }

    public function login() {
        $this->username = $_POST["username"];
        $this->password = $_POST["password"];
        if ($this->validateCredentials()) {
            return TRUE;
        } else {
            header('HTTP/1.0 401 Unauthorized');
            return FALSE;
        }
    }

    private function validateCredentials() {
        return $this->username != '' && $this->password != '';
    }

}
