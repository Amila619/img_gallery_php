<?php require("./views/partials/header.php")  ?>

<div class="w-full max-w-md">
    <a href="/img_gallery_php/"
        class="inline-block text-center uppercase font-semibold my-6 w-24 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        Home
    </a>
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-semibold mb-6 text-center">Add Photo</h2>
        <form action="./core/img-upload.php" method="POST" class="space-y-4">
            <div>
                <label for="photoUrl" class="block text-sm font-medium text-gray-700">Photo URL</label>
                <input type="url" id="photoUrl" name="photoUrl" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Submit
                </button>
            </div>
        </form>
    </div>

</div>

<?php require("./views/partials/header.php")  ?>