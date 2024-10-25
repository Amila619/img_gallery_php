<?php require("./views/partials/header.php")  ?>

<div class="h-screen pt-8 px-24">
    <h1 class="text-center my-8 text-4xl">CATO</h1>
    <a href="/img_gallery_php/upload"
        class="inline-block text-center uppercase font-semibold my-6 w-24 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        upload
    </a>
    <div class='grid grid-cols-3 gap-8 pb-24'>
        <?php
        if (isset($data)) {
            generate_gallery($data);
        } else {
            echo "<h2>No images to display here</h2>";
        }

        ?>
    </div>
</div>

<?php require("./views/partials/header.php")  ?>