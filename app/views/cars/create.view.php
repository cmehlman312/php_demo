<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/cars" class='text-blue-500 hover:underline'>Go back to cars...</a>
            </p>

            <form method="POST">
                <div class="space-y-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="make" class="block text-sm font-medium leading-6 text-gray-900">Make</label>
                            <div class="mt-2">
                                <input type="text" name="make" id="make"  value="<?= $_POST['make'] ?? ''?>" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <?php if (isset($errors['make'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['make'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="model" class="block text-sm font-medium leading-6 text-gray-900">Model</label>
                            <div class="mt-2">
                                <input type="text" name="model" id="model"  value="<?= $_POST['model'] ?? '' ?>" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <?php if (isset($errors['model'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['model'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="year" class="block text-sm font-medium leading-6 text-gray-900">Year</label>
                            <div class="mt-2">
                                <input type="text" name="year" id="year"  value="<?= $_POST['year'] ?? '' ?>" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <?php if (isset($errors['year'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['year'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="color" class="block text-sm font-medium leading-6 text-gray-900">Color</label>
                            <div class="mt-2">
                                <input type="text" name="color" id="color"  value="<?= $_POST['color'] ?? '' ?>" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <?php if (isset($errors['color'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['color'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="transmission" class="block text-sm font-medium leading-6 text-gray-900">Transmission</label>
                            <div class="mt-2">
                                <select id="transmission" name="transmission" autocomplete="country-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>Automatic</option>
                                    <option>Manual</option>
                                </select>
                                <?php if (isset($errors['transmission'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['transmission'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange600" onclick="document.location.href='/cars'">Cancel</button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>

        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>