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
                <p class="card-text font-weight-bold"><?= $book->abstract() ?></p>
                <p class="card-text"><?= $book->backCover() ?></p>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="author-tab" data-toggle="tab" href="#author" role="tab" aria-controls="author" aria-selected="true">Auteur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="translator-tab" data-toggle="tab" href="#translator" role="tab" aria-controls="translator" aria-selected="true">Traducteur</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="author" role="tabpanel" aria-labelledby="author-tab">
            <h5 class="card-title"><?= $book->authorName() ?></h5>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur atque quas tempora placeat natus mollitia temporibus incidunt aspernatur inventore ipsam, molestiae ratione blanditiis repellendus ipsum. Fugit veritatis voluptates quaerat harum!</p>
        </div>
        <div class="tab-pane fade" id="translator" role="tabpanel" aria-labelledby="translator-tab">
            <h5 class="card-title"><?= $book->translator() ?></h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cum deleniti perspiciatis similique, reprehenderit natus. Ut soluta voluptates blanditiis aperiam, quia, doloribus, minus vitae beatae vel veritatis assumenda in incidunt.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>