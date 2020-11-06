<?php

namespace App\Model\Entity;

class Books
{
    // Attributs

    protected $_id;
    protected $_title;
    protected $_bookLink;
    protected $_author;
    protected $_releaseDate;
    protected $_abstract;
    protected $_backCover;
    protected $_image;

    // Constante

    const TITRE_INVALIDE = 1;
    const CHEMIN_INVALIDE = 2;
    const AUTEUR_INVALIDE = 3;
    const CONTENU_INVALIDE = 4;
    const LIEN_INVALIDE = 5;
    const LIEN_IMAGE_INVALIDE = 6;

    // Function construct

    public function __construct(?array $data = null)
    {
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }

    // Function d'hydratation

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // Methode magique

    public function __set($name, $value)
    {
        $property = "_" . $name;
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    // Getters

    public function id()
    {
        return $this->_id;
    }

    public function title()
    {
        return $this->_title;
    }

    public function bookLink()
    {
        return $this->_bookLink;
    }

    public function author()
    {
        return $this->_author;
    }

    public function releaseDate()
    {
        return $this->_releaseDate;
    }

    public function abstract()
    {
        return $this->_abstract;
    }

    public function backCover()
    {
        return $this->_backCover;
    }

    public function image()
    {
        return $this->_image;
    }

    // Setters

    public function setId($id)
    {
        $id = (int) $id;
        $this->_id = $id;
    }

    public function setTitle($title)
    {
        if (!is_string($title) || empty($title)) {
            $this->errors[] = self::TITRE_INVALIDE;
        } else {
            $this->_title = $title;
        }
    }

    public function setBookLink($bookLink)
    {
        if (!is_string($bookLink) || empty($bookLink)) {
            $this->errors[] = self::CHEMIN_INVALIDE;
        } else {
            $this->_bookLink = $bookLink;
        }
    }

    public function setAuthor($author)
    {
        if (!is_string($author) || empty($author)) {
            $this->errors[] = self::AUTEUR_INVALIDE;
        } else {
            $this->_author = $author;
        }
    }

    public function setReleaseDate($releaseDate)
    {
        $this->_releaseDate = $releaseDate;
    }

    public function setAbstract($abstract)
    {
        $this->_abstract = $abstract;
    }

    public function setBackCover($backCover)
    {
        if (!is_string($backCover) || empty($backCover)) {
            $this->errors[] = self::CONTENU_INVALIDE;
        } else {
            $this->_backCover = $backCover;
        }
    }

    public function setImage($image)
    {
        if (!is_string($image) || empty($image)) {
            $this->errors[] = self::IMAGE_INVALIDE;
        } else {
            if (strncmp($image, "http", 4) === 0) {
                $this->_image = $image;
            } else {
                $this->errors[] = self::LIEN_IMAGE_INVALIDE;
            }
        }
    }
}
