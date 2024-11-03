<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>

        <p class="mt-6 mb-6"><a href="/car/create" class="<?= $constants['button_create']?>">Create Car</a></p>

        <div class="<?= $constants['table']['div']?>">
            <table class="<?= $constants['table']['table']?>">
                <thead class="<?= $constants['table']['thead']?>">
                <tr>
                    <th scope="col" class="<?= $constants['table']['th']?>">
                        Year
                    </th>
                    <th scope="col" class="<?= $constants['table']['th']?>">
                        Color
                    </th>
                    <th scope="col" class="<?= $constants['table']['th']?>">
                        Make
                    </th>
                    <th scope="col" class="<?= $constants['table']['th']?>">
                        Model
                    </th>
                    <th scope="col" class="<?= $constants['table']['th']?>">
                        Transmission
                    </th>
                    <th scope="col" class="<?= $constants['table']['th']?>">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <?php  foreach($cars as $car) : ?>
                        <tr class="<?= $constants['table']['tr']?>">
                            <td class="<?= $constants['table']['td']?>">
                                <?= $car['year'] ?>
                            </td>
                            <td class="<?= $constants['table']['td']?>">
                                <?= $car['color'] ?>
                            </td>
                            <td class="<?= $constants['table']['td']?>">
                                <?= $car['make'] ?>
                            </td>
                            <td class="<?= $constants['table']['td']?>">
                                <?= $car['model'] ?>
                            </td>
                            <td class="<?= $constants['table']['td']?>">
                                <?= $car['transmission'] ?>
                            </td>
                            <td class="<?= $constants['table']['td']?> text-right">
                                <a href="/car?id=<?= $car['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                            </td>
                        </tr>
                    <?php endforeach;?>

                </tbody>
            </table>
        </div>

    </main>
<?php require base_path('views/partials/footer.php') ?>