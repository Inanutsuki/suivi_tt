<?php
foreach ($booksInfos as $book) {
?>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="public/images/books/<?=$book->bookLink()?>" class="card-img" alt="Couverture de <?=$book->title()?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?=$book->title()?></h5>
                    <h6>Ecrit par : <?=$book->author()?></h6>
                    <p class="card-text"><?=$book->abstract()?></p>
                    <p class="card-text"><?=$book->backCover()?></p>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>