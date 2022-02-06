<?php
require_once 'connexion.php';

class DialogueBD
{
    // public function getNbHotel()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = 'SELECT COUNT(NoHot) FROM hotel';
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $nb = $sth->fetchColumn();
    //         return $nb;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getToutesInfosHotel()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM hotel ORDER BY noHot";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $tabMangas = $sth->fetchAll(PDO::FETCH_ASSOC);
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function AjoutHotel($nohot, $nomhot, $telhot, $vilhot, $nompatr, $prepatr, $imghot, $cphot, $adrhot)
    // {
    //     $ajoutOK = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "INSERT INTO hotel VALUES(?,?,?,?,?,?,?,?,?)";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nohot, $nomhot, $telhot, $vilhot, $nompatr, $prepatr, $imghot, $cphot, $adrhot));
    //         $ajoutOK = true;
    //     } catch (PDOException $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOK;
    // }

    // public function getToutesInfosClient()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM client ORDER BY NOCLI";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $tabMangas = $sth->fetchAll(PDO::FETCH_ASSOC);
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getNbClient()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = 'SELECT COUNT(NOCLI) FROM client';
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $nb = $sth->fetchColumn();
    //         return $nb;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function AjoutClient($nonewcli, $nomnewcli, $prenewcli, $telnewcli, $villenewcli, $cpnewcli, $adressenewcli)
    // {
    //     $ajoutOK = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "INSERT INTO client VALUES(?,?,?,?,?,?,?)";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nonewcli, $nomnewcli, $prenewcli, $telnewcli, $villenewcli, $cpnewcli, $adressenewcli));
    //         $ajoutOK = true;
    //     } catch (PDOException $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOK;
    // }

    // public function getToutesInfosReservation()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM reservation ORDER BY NORES";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $tabMangas = $sth->fetchAll(PDO::FETCH_ASSOC);
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getInfosUnClient($nocli)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM client WHERE NOCLI = ?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nocli));
    //         $tabMangas = $sth->fetchObject();
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getInfosUnHotel($nohot)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM hotel WHERE NOHOT = ?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nohot));
    //         $tabMangas = $sth->fetchObject();
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getInfosTableSappliquer($nores)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM sappliquer WHERE NORES = ?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nores));
    //         $tabMangas = $sth->fetchObject();
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function modifClient($newnomcli, $newprecli, $newtelcli, $newadrcli, $newvilcli, $newcpcli, $newnocli)
    // {
    //     $ajoutOk = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "UPDATE client SET NOMCLI=? ,PRECLI=?,TELCLI=?, ADRCLI=?,VILCLI=?,CPCLI=? WHERE NOCLI=?";
    //         $sthAjoutEmploye = $conn->prepare($sql);
    //         $sthAjoutEmploye->execute(array($newnomcli, $newprecli, $newtelcli, $newadrcli, $newvilcli, $newcpcli, $newnocli));
    //         $ajoutOk = true;
    //     } catch (Exception $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOk;
    // }

    // public function supprClient($nocli)
    // {
    //     $ajoutOk = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "DELETE FROM client WHERE NOCLI=?";
    //         $sthAjoutEmploye = $conn->prepare($sql);
    //         $sthAjoutEmploye->execute(array($nocli));
    //         $ajoutOk = true;
    //     } catch (Exception $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOk;
    // }

    // public function getNbChambresreservParReserv($nores)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = 'SELECT COUNT(NOCHAMBRE) FROM sappliquer WHERE NORES=?';
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nores));
    //         $nb = $sth->fetchColumn();
    //         return $nb;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getInfosUnereserv($nores)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM reservation WHERE NORES = ?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nores));
    //         $tabMangas = $sth->fetchObject();
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getChambreSuruneReserv($nores)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT NOCHAMBRE FROM sappliquer WHERE NORES = ?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nores));
    //         $tabMangas = $sth->fetchAll(PDO::FETCH_ASSOC);
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getInfosChambres()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM chambre ORDER BY NOCHAMBRE";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $tabMangas = $sth->fetchAll(PDO::FETCH_ASSOC);
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getNbReserv()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = 'SELECT COUNT(NORES) FROM reservation';
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $nb = $sth->fetchColumn();
    //         return $nb;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function AjoutReservation($noreservadd, $nocliadd, $nohotadd, $datedebadd, $datefinadd)
    // {
    //     $ajoutOK = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "INSERT INTO reservation VALUES(?,?,?,?,?)";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($noreservadd, $nocliadd, $nohotadd, $datedebadd, $datefinadd));
    //         $ajoutOK = true;
    //     } catch (PDOException $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOK;
    // }

    // public function AjoutTableSappliquer($noreservadd, $x)
    // {
    //     $ajoutOK = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "INSERT INTO sappliquer VALUES(?,?)";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($noreservadd, $x));
    //         $ajoutOK = true;
    //     } catch (PDOException $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOK;
    // }

    // public function supprtableAppliquer($nores)
    // {
    //     $ajoutOk = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "DELETE FROM sappliquer WHERE NORES=?";
    //         $sthAjoutEmploye = $conn->prepare($sql);
    //         $sthAjoutEmploye->execute(array($nores));
    //         $ajoutOk = true;
    //     } catch (Exception $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOk;
    // }

    // public function supprUneReservation($nores)
    // {
    //     $ajoutOk = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "DELETE FROM reservation WHERE NORES=?";
    //         $sthAjoutEmploye = $conn->prepare($sql);
    //         $sthAjoutEmploye->execute(array($nores));
    //         $ajoutOk = true;
    //     } catch (Exception $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOk;
    // }

    // public function modifHotel($newnomhot, $newtelhot, $newadrhot, $newnompatrhot, $newprepatrhot, $newimghot, $newvilhot, $newcphot, $newnohot)
    // {
    //     $ajoutOk = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "UPDATE hotel SET NOMHOT=? ,TELHOT=?,ADRHOT=?, NOMPATRONHOT=?,PREPATRONHOT=?,NOMIMGHOT=?,VILHOT=?,CPHOT=? WHERE NOHOT=?";
    //         $sthAjoutEmploye = $conn->prepare($sql);
    //         $sthAjoutEmploye->execute(array($newnomhot, $newtelhot, $newadrhot, $newnompatrhot, $newprepatrhot, $newimghot, $newvilhot, $newcphot, $newnohot));
    //         $ajoutOk = true;
    //     } catch (Exception $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOk;
    // }

    // public function modifReserv($newnoclient, $newnohotel, $newdebdate, $newfindate, $nores)
    // {
    //     $ajoutOk = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "UPDATE reservation SET NOCLI=? ,NOHOT=?,DATEDEBUT=?, DATEFIN=? WHERE NORES=?";
    //         $sthAjoutEmploye = $conn->prepare($sql);
    //         $sthAjoutEmploye->execute(array($newnoclient, $newnohotel, $newdebdate, $newfindate, $nores));
    //         $ajoutOk = true;
    //     } catch (Exception $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOk;
    // }

    // public function getCategChaqueChambre($nochambre)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT NOCATEG FROM chambre WHERE NOCHAMBRE=?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nochambre));
    //         $tabMangas = $sth->fetchObject();
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getPrixCateg($nocateg)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT PRIXCATEG FROM categorie WHERE NOCATEG=?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nocateg));
    //         $tabMangas = $sth->fetchObject();
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getLibelleCateg($nocateg)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT LIBELLECATEG FROM categorie WHERE NOCATEG=?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nocateg));
    //         $tabMangas = $sth->fetchObject();
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getInfosTableCategorie()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM categorie ORDER BY PRIXCATEG";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $tabMangas = $sth->fetchAll(PDO::FETCH_ASSOC);
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function AjoutChambre($numchambre, $categchambre)
    // {
    //     $ajoutOK = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "INSERT INTO chambre VALUES(?,?)";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($numchambre, $categchambre));
    //         $ajoutOK = true;
    //     } catch (PDOException $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOK;
    // }

    // public function getNbCateg()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = 'SELECT COUNT(NOCATEG) FROM categorie';
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $nb = $sth->fetchColumn();
    //         return $nb;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function AjoutCateg($nocateg, $nomcateg, $prixcateg)
    // {
    //     $ajoutOK = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "INSERT INTO categorie VALUES(?,?,?)";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($nocateg, $nomcateg, $prixcateg));
    //         $ajoutOK = true;
    //     } catch (PDOException $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOK;
    // }

    // public function supprUnHotel($nohot)
    // {
    //     $ajoutOk = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "DELETE FROM hotel WHERE NOHOT=?";
    //         $sthAjoutEmploye = $conn->prepare($sql);
    //         $sthAjoutEmploye->execute(array($nohot));
    //         $ajoutOk = true;
    //     } catch (Exception $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOk;
    // }

    // public function getSiloginetmdpexiste($loginadmin, $mdpadmin)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = 'SELECT COUNT(idadmin) FROM admin WHERE loginadmin = ? AND mdpadmin=?';
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($loginadmin, $mdpadmin));
    //         $nb = $sth->fetchColumn();
    //         return $nb;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getIdadmin($loginadmin,$mdpadmin)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT idadmin FROM admin WHERE loginadmin=? and mdpadmin=?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($loginadmin,$mdpadmin));
    //         $tabMangas = $sth->fetchObject();
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }

    // public function getToutesInfosadmin($idamin)
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "SELECT * FROM admin WHERE idadmin = ?";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($idamin));
    //         $tabMangas = $sth->fetchObject();
    //         return $tabMangas;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }
    // public function getNbAdmin()
    // {
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = 'SELECT COUNT(idadmin) FROM admin';
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array());
    //         $nb = $sth->fetchColumn();
    //         return $nb;
    //     } catch (PDOException $e) {
    //         $erreur = $e->getMessage();
    //     }
    // }
    // public function AjoutAdmin($newidadmin,$newloginadm,$newmdpadmin,$newnomadm,$newpreadm)
    // {
    //     $ajoutOK = false;
    //     try {
    //         $conn = Connexion::getConnexion();
    //         $sql = "INSERT INTO admin VALUES(?,?,?,?,?)";
    //         $sth = $conn->prepare($sql);
    //         $sth->execute(array($newidadmin,$newloginadm,$newmdpadmin,$newnomadm,$newpreadm));
    //         $ajoutOK = true;
    //     } catch (PDOException $e) {
    //         $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
    //     }
    //     return $ajoutOK;
    // }

    public function AjoutEnregistrement($numS,$statut,$depotDonnee,$debutEnregistrement,$finEnregistrement,$referenceProd,$referenceTrans,$organisation,$fichier)
    {
        $ajoutOK = false;
        try {
            $conn = Connexion::getConnexion();
            $sql = "INSERT INTO enregistrements VALUES(?,?,?,?,?,?,?,?,?)";
            $sth = $conn->prepare($sql);
            $sth->execute(array($numS,$statut,$depotDonnee,$debutEnregistrement,$finEnregistrement,$referenceProd,$referenceTrans,$organisation,$fichier));
            $ajoutOK = true;
        } catch (PDOException $e) {
            $msgErreur = $e->getMessage() . '(' . $e->getFile() . ',ligne' . $e->getLine() . ')';
        }
        return $ajoutOK;
    }

    public function getTableauEnregistrement()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT * FROM enregistrements";
            $sth = $conn->prepare($sql);
            $sth->execute(array());
            $tabMangas = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $tabMangas;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }

    public function getNbTotalEnreg()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = 'SELECT COUNT(numéroDeSérie) FROM enregistrements';
            $sth = $conn->prepare($sql);
            $sth->execute(array());
            $nb = $sth->fetchColumn();
            return $nb;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }

    public function getNbNouveau()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = 'SELECT COUNT(numéroDeSérie) FROM enregistrements WHERE Statut = "Nouveau"';
            $sth = $conn->prepare($sql);
            $sth->execute(array());
            $nb = $sth->fetchColumn();
            return $nb;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }

    public function getNbVu()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = 'SELECT COUNT(numéroDeSérie) FROM enregistrements WHERE Statut = "vu"';
            $sth = $conn->prepare($sql);
            $sth->execute(array());
            $nb = $sth->fetchColumn();
            return $nb;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }

    public function getNbOk()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = 'SELECT COUNT(numéroDeSérie) FROM enregistrements WHERE Statut = "ok"';
            $sth = $conn->prepare($sql);
            $sth->execute(array());
            $nb = $sth->fetchColumn();
            return $nb;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }

    public function getNbKo()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = 'SELECT COUNT(numéroDeSérie) FROM enregistrements WHERE Statut = "ko"';
            $sth = $conn->prepare($sql);
            $sth->execute(array());
            $nb = $sth->fetchColumn();
            return $nb;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
}