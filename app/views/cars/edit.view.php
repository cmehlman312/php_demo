<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/cars" class='text-blue-500 hover:underline'>Go back to cars...</a>
            </p>

            <form method="POST">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $car['id'] ?? ''?>" />
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="make" class="<?= $constants['form']['label'] ?>">Make</label>
                        <div class="<?= $constants['form']['div'] ?>">
                            <input type="text" name="make" id="make"  value="<?= $car['make'] ?? ''?>" required class="<?= $constants['form']['input'] ?>">
                            <?php if (isset($errors['make'])) : ?>
                                <p class="<?= $constants['form']['input_error'] ?>"><?= $errors['make'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="model" class="<?= $constants['form']['label'] ?>">Model</label>
                        <div class="<?= $constants['form']['div'] ?>">
                            <input type="text" name="model" id="model"  value="<?= $car['model'] ?? '' ?>" required class="<?= $constants['form']['input'] ?>">
                            <?php if (isset($errors['model'])) : ?>
                                <p class="<?= $constants['form']['input_error'] ?>"><?= $errors['model'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="year" class="<?= $constants['form']['label'] ?>">Year</label>
                        <div class="<?= $constants['form']['div'] ?>">
                            <input type="text" name="year" id="year"  value="<?= $car['year'] ?? '' ?>" required class="<?= $constants['form']['input'] ?>">
                            <?php if (isset($errors['year'])) : ?>
                                <p class="<?= $constants['form']['input_error'] ?>"><?= $errors['year'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="color" class="<?= $constants['form']['label'] ?>">Color</label>
                        <div class="<?= $constants['form']['div'] ?>">
                            <input type="text" name="color" id="color"  value="<?= $car['color'] ?? '' ?>" required class="<?= $constants['form']['input'] ?>">
                            <?php if (isset($errors['color'])) : ?>
                                <p class="<?= $constants['form']['input_error'] ?>"><?= $errors['color'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="transmission" class="<?= $constants['form']['label'] ?>">Transmission</label>
                        <div class="<?= $constants['form']['div'] ?>">
                            <select id="transmission" name="transmission" autocomplete="country-name" required class="<?= $constants['form']['input'] ?>">
                                <option value="Automatic" <?php if ($car['transmission'] == 'Automatic') echo ' selected="selected"'; ?> >Automatic</option>
                                <option value="Manual" <?php if ($car['transmission'] == 'Manual') echo ' selected="selected"'; ?>>Manual</option>
                            </select>
                            <?php if (isset($errors['transmission'])) : ?>
                                <p class="<?= $constants['form']['input_error'] ?>"><?= $errors['transmission'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-start gap-x-6">
                    <button type="button" class="<?= $constants['button_cancel'] ?>" onclick="document.location.href='/cars'">Cancel</button>
                    <button type="submit" class="<?= $constants['button_save'] ?>">Save</button>
                </div>
            </form>



        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>