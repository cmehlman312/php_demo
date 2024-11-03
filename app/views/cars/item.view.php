<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
            <p class="mb-6">
                <a href="/cars" class='text-blue-500 hover:underline'>Go back...</a>
            </p>

        <div>
            <div class="px-4 sm:px-0">
                <h3 class="text-base/7 font-semibold text-gray-900">Details</h3>
            </div>
            <div class="<?= $constants['description_list']['container'] ?>">
                <dl class="<?= $constants['description_list']['dl'] ?>">
                    <div class="<?= $constants['description_list']['div'] ?>">
                        <dt class="<?= $constants['description_list']['dt'] ?>">Make</dt>
                        <dd class="<?= $constants['description_list']['dd'] ?>"><?= $car['make'] ?></dd>
                    </div>
                    <div class="<?= $constants['description_list']['div'] ?>">
                        <dt class="<?= $constants['description_list']['dt'] ?>">Model</dt>
                        <dd class="<?= $constants['description_list']['dd'] ?>"><?= $car['model'] ?></dd>
                    </div>
                    <div class="<?= $constants['description_list']['div'] ?>">
                        <dt class="<?= $constants['description_list']['dt'] ?>">Year</dt>
                        <dd class="<?= $constants['description_list']['dd'] ?>"><?= $car['year'] ?></dd>
                    </div>
                    <div class="<?= $constants['description_list']['div'] ?>">
                        <dt class="<?= $constants['description_list']['dt'] ?>">Color</dt>
                        <dd class="<?= $constants['description_list']['dd'] ?>"><?= $car['color'] ?></dd>
                    </div>
                    <div class="<?= $constants['description_list']['div'] ?>">
                        <dt class="<?= $constants['description_list']['dt'] ?>">Transmission</dt>
                        <dd class="<?= $constants['description_list']['dd'] ?>"><?= $car['transmission'] ?></dd>
                    </div>
                </dl>
            </div>
            <p class="ml-2 mt-2">
                <button onclick="document.querySelector('#deleteCar').submit()" class="<?= $constants['button_delete'] ?>">Delete</button>
                <button onclick="document.location.href='/car/edit?id=<?= $car['id'] ?>'" class="<?= $constants['button_edit'] ?>">Edit</button>
            </p>

            <form id="deleteCar"  action="/car" method="POST" >
                <input type="hidden" name="_method" value='DELETE'/>
                <input type="hidden" name="id" value="<?= $car['id'] ?>" readonly/>
            </form>
        </div>


    </main>
<?php require base_path('views/partials/footer.php') ?>