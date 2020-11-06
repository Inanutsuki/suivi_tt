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
        $booksInfos = $booksManager->getBooksInfos();
        $title = "Catalogue";
        $data = [
            'title' => $title,
            'booksInfos' => $booksInfos,
        ];
        $this->render("catalog.html.php", $data);
    }
}