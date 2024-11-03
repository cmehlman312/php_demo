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
                            <label for="name" class="<?= $constants['form']['label'] ?>">Name</label>
                            <div class="<?= $constants['form']['div'] ?>">
                                <input type="text" name="name" id="name" value="<?= $driver['name'] ?? ''?>" required class="<?= $constants['form']['input'] ?>">
                                <?php if (isset($errors['name'])) : ?>
                                    <p class="<?= $constants['form']['input_error'] ?>"><?= $errors['name'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="experience" class="<?= $constants['form']['label'] ?>">Experience</label>
                            <div class="<?= $constants['form']['div'] ?>">
                                <input type="number" min=0 max= 100 name="experience" id="experience" value="<?= $driver['experience'] ?? '' ?>" required class="<?= $constants['form']['input'] ?>">
                                <?php if (isset($errors['experience'])) : ?>
                                    <p class="<?= $constants['form']['input_error'] ?>"><?= $errors['experience'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="drivemanual" class="<?= $constants['form']['label'] ?>">Drive Manual</label>
                            <div class="<?= $constants['form']['div'] ?>">
                                <select id="drivemanual" name="drivemanual" autocomplete="country-name" required class="<?= $constants['form']['select'] ?>">
                                    <option value=1 <?php if ($driver['drivemanual'] == 1) echo ' selected="selected"'; ?> >Yes</option>
                                    <option value=0 <?php if ($driver['drivemanual'] == 0) echo ' selected="selected"'; ?> >No</option>
                                </select>
                                <?php if (isset($errors['drivemanual'])) : ?>
                                    <p class="<?= $constants['form']['input_error'] ?>"><?= $errors['drivemanual'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-start gap-x-6">
                    <button type="button" class="<?= $constants['button_cancel'] ?>" onclick="document.location.href='/drivers'">Cancel</button>
                    <button type="submit" class="<?= $constants['button_save'] ?>">Save</button>
                </div>
            </form>

        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>