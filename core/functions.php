<?php

function generate_gallery(...$data)
{
    for ($i = 0; $i < count($data[0]); $i++) {
        $card =  "
        <div class='relative mx-auto max-w-xs rounded overflow-hidden shadow-lg m-4 transition-transform transform hover:scale-105 cursor-pointer'>
<a href='/img_gallery_php/delete/%s' class='absolute top-0 right-0 m-2 p-1 '>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='size-6 bg-white rounded-sm shadow-lg transition-transform transform hover:scale-125 cursor-pointer'>
  <path fill-rule='evenodd' d='M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z' clip-rule='evenod' />
</svg>
</a>

            <img class='w-full h-48 object-cover' src='%s' alt='img'>
            <div class='px-6 py-4'>
                <p class='text-gray-700 text-base'>%s</p>
            </div>
        </div>
        ";

        $formatted_card = sprintf($card, $data[0][$i]['id'], $data[0][$i]['image_url'], $data[0][$i]['description']);

        echo $formatted_card;
    }
}
