<?php

namespace App\Model\Manager;

use App\Model\Entity\Books;
use DateTime;
use PDO;

class BooksManager extends Manager
{
    public function updateBook(array $data)
    {
    }

    public function getBooksList()
    {
        $req = $this->_db->query('SELECT * FROM catalog ORDER BY id ASC');
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Books::class);

        $booksList = $req->fetchAll();

        foreach ($booksList as $book)
        {
            $book->setReleaseDate(new DateTime($book->releaseDate()));
        }

        return $booksList;
    }

    public function getBookInfos($id)
    {
        $req = $this->_db->prepare('SELECT * FROM catalog WHERE id = :id');
        $req->bindValue('id', $id, PDO::PARAM_INT);
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Books::class);
        $req->execute();
        $book = $req->fetch();
        $book->setReleaseDate(new DateTime($book->releaseDate()));

        return $book;
    }
}
