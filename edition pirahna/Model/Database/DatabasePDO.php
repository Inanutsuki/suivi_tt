<?php

namespace App\Model\Database;

use \PDO;

class DatabasePDO
{

    static public function dbConnect()
    {
        global $db;
        if (empty($db)) {
            try {
                $db = new PDO('mysql:host=localhost;dbname=edition_pirahna', 'root', '');
                $db->query("SET NAMES 'utf8'"); // Ligne obligatoire pour encoder en UTF8 le résultat de la requète.
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            } catch (\Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }

        return $db;
    }
}
