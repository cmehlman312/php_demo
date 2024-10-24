<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">Here are the drivers that are available:</p>



            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-2 py-3">Name</th>
                        <th scope="col" class="px-2 py-3">Experience</th>
                        <th scope="col" class="px-2 py-3">Drive Manual</th>
                        <th scope="col" class="px-2 py-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                          <?php  foreach($drivers as $driver) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $driver['name']?>
                        </td>
                        <td class="px-2 py-4">
                            <?= $driver['experience']?>
                        </td>
                        <td class="px-2 py-4">
                            <?= $driver['drivemanual'] ? 'Either are good': 'Only Automatic'?>
                        </td>
                        <td class="px-2 py-4">
                            <a href="/driver?id=<?= $driver['id'] ?>" class='text-blue-500 hover:underline'>Edit</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            </div>


<!--            --><?php // foreach($drivers as $driver) : ?>
<!--                <li>-->
<!--                    <a href="/driver?id=--><?php //= $driver['id'] ?><!--" class='text-blue-500 hover:underline'>-->
<!--                        --><?php //= $driver['name'] . ' '. $driver['experience'] . ' '?><!----><?php //echo $driver['drivemanual'] ? 'Yes Manual': 'Only Automatic' ?>
<!--                    </a>    -->
<!--                 </li>-->
<!--            --><?php //endforeach;?>


            <p class="mt-6"><a href="/driver/create" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Create Driver</a></p>
        </div>



    </main>
<?php require base_path('views/partials/footer.php') ?>