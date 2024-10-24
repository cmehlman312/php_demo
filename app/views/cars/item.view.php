<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/cars" class='text-blue-500 hover:underline'>Go back...</a>
            </p>
            <p>
                <?= $car['make'] . ' '. $car['model'] . ' '. $car['year'] . ' '. $car['color'] ?>
            </p>
                <button onclick="document.querySelector('#deleteCar').submit()" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
            <button onclick="document.location.href='/car/edit?id=<?= $car['id'] ?>'" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</button>

            <form id="deleteCar"  action="/car" method="POST" >
                <input type="hidden" name="_method" value='DELETE'/>
                <input type="hidden" name="id" value="<?= $car['id'] ?>" readonly/>
            </form>


        </div>
    </main>
<?php require base_path('views/partials/footer.php') ?>