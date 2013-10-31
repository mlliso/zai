<?php

include( dirname(__FILE__) . '/../properties/settings.php' );

/**
 * Description of LoginManager
 *
 * @author Michał Lisiecki <michal.lisiecki@coi.gov.pl>
 */
class LoginManager {

    private $username = NULL;
    private $password = NULL;

    public function isLoggedIn() {
        $this->username = $this->checkSessionInDB();
        if ($this->username != "") {
            return true;
        }
        return false;
    }

    public function logout() {
        $this->username = $this->checkSessionInDB();
        if ($this->username != "") {
            $this->deleteLoggedUser();
            $this->username = NULL;
        }
    }

    public function login() {
        $this->username = $_POST["username"];
        $this->password = $_POST["password"];
        if ($this->validateCredentials()) {
            $this->saveLoggedUser();
            return TRUE;
        } else {
            header('HTTP/1.0 401 Unauthorized');
            return FALSE;
        }
    }

    private function validateCredentials() {
        return $this->username != '' && $this->password != '';
    }

    private function connect() {
        global $mysql_host;
        global $mysql_user;
        global $mysql_password;
        global $mysql_database;
        $this->link = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die('Could not connect: ' . mysql_error());
        mysql_select_db($mysql_database) or die('Could not select database');
    }

    private function close() {
        mysql_close($this->link);
    }

    private function checkSessionInDB() {
        $stored_exc = null;
        $result = null;
        $res = null;
        try {
            $this->connect();
            $sessionId = mysql_real_escape_string(session_id());
            $query = "SELECT * FROM loggedusers where sessionid = '" . $sessionId . "'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());

            if ($row = mysql_fetch_array($result)) {
                $res = $row["user_name"];
            }
        } catch (Exception $exc) {
            $stored_exc = $exc;
        }
        // "Finally"
        mysql_free_result($result);
        $this->close();
        if ($stored_exc) {
            throw($stored_exc);
        }
        return $res;
    }

    private function saveLoggedUser() {
        $stored_exc = null;
        $result = null;
        $res = null;
        try {
            $this->connect();
            $sessionId = mysql_real_escape_string(session_id());
            $usernameC = mysql_real_escape_string($this->username);
            $ins = "insert into loggedusers(user_name, sessionid) values ('" . $usernameC . "','" . $sessionId . "')";
            mysql_query($ins) or die('Query failed: ' . mysql_error());
        } catch (Exception $exc) {
            $stored_exc = $exc;
        }
        // "Finally"
        mysql_free_result($result);
        $this->close();
        if ($stored_exc) {
            throw($stored_exc);
        }
        return $res;
    }
    private function deleteLoggedUser() {
        $stored_exc = null;
        $result = null;
        $res = null;
        try {
            $this->connect();
            $sessionId = mysql_real_escape_string(session_id());
            $usernameC = mysql_real_escape_string($this->username);
            $ins = "delete from loggedusers where sessionid = '" . $sessionId . "'";
            mysql_query($ins) or die('Query failed: ' . mysql_error());
        } catch (Exception $exc) {
            $stored_exc = $exc;
        }
        // "Finally"
        mysql_free_result($result);
        $this->close();
        if ($stored_exc) {
            throw($stored_exc);
        }
        return $res;
    }

}
