<?php

namespace App\Model\Manager;

use App\Model\Entity\Books;
use PDO;

class BooksManager extends Manager
{
    public function updateBook(array $data)
    {
    }

    public function getBooksInfos()
    {
        $req = $this->_db->query('SELECT * FROM catalog ORDER BY id ASC');
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Books::class);

        $booksList = $req->fetchAll();

        return $booksList;
    }
}
