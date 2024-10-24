<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">Here are the cars in the garage:</p>

            <?php  foreach($cars as $car) : ?>
                <li>
                    <a href="/car?id=<?= $car['id'] ?>" class='text-blue-500 hover:underline'>
                        <?= $car['year']  .' '. $car['color']  .' ' .  $car['make'] . ' '. $car['model']?>
                    </a>    
                 </li>
            <?php endforeach;?>

            <p class="mt-6"><a href="/car/create" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Create Car</a></p>
        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>