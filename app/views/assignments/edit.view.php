<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/assignments" class='text-blue-500 hover:underline'>Go back to assignments...</a>
            </p>

            <p class="mt-6">
                <?= $car['make'] . ' '. $car['model'] . ' '. $car['year'] . ' '. $car['color'] ?>
            </p>

            <p  class="mt-6 mb-6">Current Driver assigned:  <?=$car['driver_assigned']?> </p>
            <form method="POST">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" id="id" value="<?= $car['id'] ?? ''?>" />
<!--                <div class="space-y-12">-->
<!--                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">-->
                        <div class="sm:col-span-3">
                            <label for="driverid" class="block text-sm font-medium leading-6 text-gray-900">Assign new driver</label>
                            <div class="mt-2">
                                <select id="driverid" name="driverid" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value=null></option>
                                <?php foreach($drivers as $driver): ?>
                                    <option value="<?= $driver['id'] ?>"><?= $driver['name'] ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
<!--                    </div>-->
<!--                </div>-->

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600" onclick="document.location.href='/assignments'" >Cancel</button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>

        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>