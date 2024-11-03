<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">Here are the current assigned drivers to your cars:</p>


            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-2 py-3">Year</th>
                        <th scope="col" class="px-2 py-3">Color</th>
                        <th scope="col" class="px-2 py-3">Make</th>
                        <th scope="col" class="px-2 py-3">Model</th>
                        <th scope="col" class="px-2 py-3">Transmission</th>
                        <th scope="col" class="px-2 py-3">Assigned Driver</th>
                        <th scope="col" class="px-2 py-3"></th>
                        <th scope="col" class="px-2 py-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cars as $car) : ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $car['year'] ?>
                            </td>
                            <td class="px-2 py-4">
                                <?= $car['color'] ?>
                            </td>
                            <td class="px-2 py-4">
                                <?= $car['make'] ?>
                            </td>
                            <td class="px-2 py-4">
                                <?= $car['model'] ?>
                            </td>
                            <td class="px-2 py-4">
                                <?= $car['transmission'] ?>
                            </td>
                            <td class="px-2 py-4">
                                <?= $car['driver'] ?>
                            </td>
                            <td class="px-2 py-4">
                                <a href="/assignment/edit?id=<?= $car['id'] ?>" class='text-blue-500 hover:underline'>Edit</a>
                            </td>
                            <td class="px-2 py-4">
                                <a href="/assignment/destroy?id=<?= $car['id'] ?>"
                                   class='text-blue-500 hover:underline'>Remove Driver</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>