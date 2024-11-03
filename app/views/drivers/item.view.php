<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/drivers" class='text-blue-500 hover:underline'>Go back...</a>
            </p>

            <section>
                <div class="px-4 sm:px-0">
                    <h3 class="text-base/7 font-semibold text-gray-900">Details</h3>
                </div>
                <div class="<?= $constants['description_list']['container'] ?>">
                    <dl class="<?= $constants['description_list']['dl'] ?>">
                        <div class="<?= $constants['description_list']['div'] ?>">
                            <dt class="<?= $constants['description_list']['dt'] ?>">Name</dt>
                            <dd class="<?= $constants['description_list']['dd'] ?>"><?= $driver['name'] ?></dd>
                        </div>
                        <div class="<?= $constants['description_list']['div'] ?>">
                            <dt class="<?= $constants['description_list']['dt'] ?>">Years Driving</dt>
                            <dd class="<?= $constants['description_list']['dd'] ?>"><?= $driver['experience'] ?></dd>
                        </div>
                        <div class="<?= $constants['description_list']['div'] ?>">
                            <dt class="<?= $constants['description_list']['dt'] ?>">Drive Manual?</dt>
                            <dd class="<?= $constants['description_list']['dd'] ?>"><?= $driver['drivemanual'] ? 'Yes': 'No' ?></dd>
                        </div>
                    </dl>
                </div>
                <p class="ml-2 mt-2">
                    <button type="button" class="<?= $constants['button_cancel'] ?>" onclick="document.location.href='/drivers'">Cancel</button>
                    <button onclick="document.querySelector('#deleteDriver').submit()" class="<?= $constants['button_delete'] ?>">Delete</button>
                    <button onclick="document.location.href='/driver/edit?id=<?= $driver['id'] ?>'" class="<?= $constants['button_edit'] ?>">Edit</button>
                </p>

                <form id="deleteDriver"  action="/driver" method="POST" >
                    <input type="hidden" name="_method" value='DELETE'/>
                    <input type="hidden" name="id" value="<?= $driver['id'] ?>" readonly/>
                </form>
            </section>

            <section class="mt-6">
            <?php if ($cars ?? false) : ?>
            <h2>Cars assigned to this driver:</h2>
                <?php foreach ($cars as $car) : ?>
                    <li> <?= $car['make'] . ' ' . $car['model'] ?></li>
                <?php endforeach; ?>
            <?php endif; ?>
            </section>
        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>