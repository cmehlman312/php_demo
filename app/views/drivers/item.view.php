<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/drivers" class='text-blue-500 hover:underline'>Go back...</a>
            </p>
            <p>
                <?= $driver['name'] . ' '. $driver['experience'] . ' '. $driver['drivemanual']?>
            </p>
                <button onclick="document.querySelector('#deleteDriver').submit()" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
            <button onclick="document.location.href='/driver/edit?id=<?= $driver['id'] ?>'" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</button>

            <form id="deleteDriver"  action="/driver" method="POST" >
                <input type="hidden" name="_method" value='DELETE'/>
                <input type="hidden" name="id" value="<?= $driver['id'] ?>" readonly/>
            </form>


        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>