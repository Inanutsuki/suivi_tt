<?php

namespace App\Controller;

use App\Model\Database\DatabasePDO;
use App\Model\Entity\Books;
use App\Model\Manager\BooksManager;

class AppController extends BaseController
{
    public function home()
    {
        $title = "Accueil";
        $data = [
            'title' => $title,
        ];
        $this->render("home.html.php", $data);
    }

    public function catalog()
    {
        $db = DatabasePDO::dbConnect();
        $booksManager = new BooksManager($db);
        $booksList = $booksManager->getBooksList();
        $title = "Catalogue";
        $data = [
            'title' => $title,
            'booksList' => $booksList,
        ];
        $this->render("catalog.html.php", $data);
    }

    public function book()
    {
        $db = DatabasePDO::dbConnect();
        $booksManager = new BooksManager($db);
        $book = $booksManager->getBookInfos($_GET['id']);
        $title = $book->title();
        $data = [
            'title' => $title,
            'book' => $book,
        ];
        $this->render("book.html.php", $data);
    }
}