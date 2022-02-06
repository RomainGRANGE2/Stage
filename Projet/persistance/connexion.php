<?php
class Connexion {

    private $dbhost;
    private $dbbase;
    private $dbuser;
    private $dbpwd;

    public static function getConnexion() {

        $dbhost = '127.0.0.1';
        $dbbase = 'thermolabo';
        $dbuser = 'romain';
        $dbpwd = 'romain';
        global $cnx;

        try {
            $cnx = new PDO("mysql:host=$dbhost;dbname=$dbbase", $dbuser, $dbpwd);
            $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $cnx->exec('SET CHARACTER SET utf8');
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
        return $cnx;
    }

    public static function deConnexion() {

        try {
            $cnx = null;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
}
?>
