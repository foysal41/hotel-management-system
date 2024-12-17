<?php

/*  Part 1  */

/*
    1. Create create hotel controller also  Hotel, room, and migrate to database
    2. Routes -> make post, get, put, delete routes


*/


/*  Part 2  */


/*
    1. Go to model add fillable for hotel
    2. Go to controller

 ---------- protected $hotel; এই প্রপার্টি ব্যবহার করে কন্ট্রোলারের মধ্যে একটি Hotel মডেলের ইনস্ট্যান্স রাখা হচ্ছে।
            যেন  কন্ট্রোলারের বাইরের ক্লাস বা অবজেক্ট থেকে সরাসরি অ্যাক্সেস করা যাবে না
            (Encapsulation) -> মডেল যাতে কন্ট্রোলারের বাইরের কেউ এই প্রপার্টিতে অ্যাক্সেস করতে না পারে।

 ---------- public function __construct() একটি বিশেষ ধরনের মেথড যা তখনই কল হয় যখন কোনো ক্লাসের নতুন অবজেক্ট তৈরি করা হয়।

 3. go to view > hotels >index
  3. go to view > layout >app


*/






/*  Part 4  */


/*
   Go to hotel controller working with store
----- Laravel এর ফাইল স্টোরেজের ডিফল্ট ডিরেক্টরি  অ্যাক্সেস করতে পারে না। php artisan storage:link চালালে, public/storage এর মাধ্যমে ফাইলগুলো অ্যাক্সেসযোগ্য হয়ে যায়।

*/


/*  Part 6 */


/*
   1. create php artisan make:model Room -m
   2. Goto Room migration -> 'name', 'description', 'image', 'qty', 'hotel_id', 'status' make korlam
   3. create contorller php artisan make:controller RoomController
  4 . go to view > hotels >index
  5. Working with relation ship with hotel and  room model


*/


/*  Part 8 */


/*
   1. Download bootstrap ecommerce tempate https://startbootstrap.com/template/shop-homepage
    2. Home Controller create : php artisan make:controller HomeController
    3. Pasted bootstrap ecommerce tempalte to pbulic then boot-ecomm folder
    4. make new view  > home.blade.php and paste all ecom index.html code inside home.blade.php
    5. make new new route API for home
    6. We can seperate home.blade.php to master.blade.php in root view folder
    Ready the home ecommerce template now




*/


