<?php
foreach ($booksList as $book) {
?>
    <a href="index.php?action=book&id=<?= $book->id() ?>">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="public/images/books/<?= $book->bookLink() ?>" class="card-img" alt="Couverture de <?= $book->title() ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $book->title() ?></h5>
                        <h6>Ecrit par : <?= $book->authorName() ?></h6>
                        <?php if ($book->translator() !== NULL) echo "<h6>Traduit par : " . $book->translator() . "</h6>" ?>
                        <p class="card-text">Parution : <?= date_format($book->releaseDate(), "d/m/Y") ?></p>
                        <p class="card-text"><?= $book->abstract() ?></p>
                    </div>
                </div>
            </div>
        </div>
    </a>
<?php
}
?>