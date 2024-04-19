<?php foreach ($productions as $key => $production) : ?>

    <h3 class="text-center p-3 border-bottom rounded-3">
        <?= ($key === 'movies') ? 'Movies' : 'TV-Shows' ?>
    </h3>

    <div class="row justify-content-center g-4 py-3 row-cols-2">

        <?php foreach ($production as $type => $media) : ?>

            <div class="col">
                <div class="card">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item bg-warning">
                            <h5 class="text-center fw-bold"><?= $media->title ?></h5>
                        </li>
                        <li class="list-group-item list-group-item-light">
                            <strong>Language:</strong> <?= $media->lang ?>
                        </li>
                        <li class="list-group-item list-group-item-light">
                            <strong>Vote:</strong> <?= $media->vote ?>
                        </li>
                        <li class="list-group-item list-group-item-light">
                            <strong>Genre:</strong> <?= $media->genre->name ?>
                        </li>

                        <?php if ($key === 'movies') : ?>
                            <li class="list-group-item list-group-item-light">
                                <strong>Duration:</strong> <?= $media->duration ?> min
                            </li>
                            <li class="list-group-item list-group-item-light">
                                <strong>Profits:</strong> <?= $media->profits ?> million $
                            </li>
                        <?php else : ?>
                            <li class="list-group-item list-group-item-light">
                                <strong>N° of seasons:</strong> <?= $media->seasonNumb ?>
                            </li>
                        <?php endif ?>

                        <li class="list-group-item list-group-item-light">
                            <small>
                                <strong>Note:</strong> <?= $media->getYear() ?>
                            </small>
                        </li>

                    </ul>
                </div>
            </div>

        <?php endforeach ?>

    </div>

<?php endforeach ?>