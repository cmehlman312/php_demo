<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/drivers" class='text-blue-500 hover:underline'>Go back to drivers...</a>
            </p>

            <form method="POST">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $driver['id'] ?? ''?>" />
                <div class="space-y-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" value="<?= $driver['name'] ?? ''?>" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <?php if (isset($errors['name'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="experience" class="block text-sm font-medium leading-6 text-gray-900">Experience</label>
                            <div class="mt-2">
                                <input type="number" min=0 max= 100 name="experience" id="experience" value="<?= $driver['experience'] ?? '' ?>" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <?php if (isset($errors['experience'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['experience'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="drivemanual" class="block text-sm font-medium leading-6 text-gray-900">Drive Manual</label>
                            <div class="mt-2">
                                <select id="drivemanual" name="drivemanual" autocomplete="country-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                </select>
                                <?php if (isset($errors['drivemanual'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['drivemanual'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>

        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>