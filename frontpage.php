<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Wordpack Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Wordpack Theme
 * @since 1.0.0
 */

get_header(); ?>

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
      rgba(0, 0, 0, 0.20),
      rgba(0, 0, 0, 0.20)
    ), url(https://images.unsplash.com/photo-1613206485381-b028e578e791?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2850&q=80);
     background-position: top left;
     height: 60vh;
     ">

        <div class="content-middle text-white text-center">
            <h1 class="text-6xl mb-5"><span class="hidden md:inline">~</span> Happy Father's Day <span
                        class="hidden md:inline">~</span></h1>
            <h2 class="text-2xl mb-5"><span class="hidden md:inline">~</span> From Foothills Church <span
                        class="hidden md:inline">~</span></h2>

        </div>
    </div>
    <div class="md:mx-40 mx-5 pt-5 grid grid-cols-12">
        <div class="md:pb-10 pb-5 col-span-12 ">
            <h2 class="text-center text-lg md:text-2xl pb-3 ">THANK YOU FOR CELEBRATING MOTHER'S DAY WITH US!</h2>
            <p class="text-sm pb-4">We’re so thankful for all of the moms that make Foothills Church such a special
                place. We hope that you feel appreciated for all that you do, and know that you are loved!</p>
            <hr>
        </div>
        <div class="col-span-12 pb-3">
            <h2 class="text-center text-lg md:text-2xl">HOW TO ACCESS YOUR PHOTOS</h2>
        </div>
        <div class="col-span-12 md:col-span-4 p-5">
            <p class="text-center text-4xl p-3">1</p>
            <hr class="pb-3">
            <h3 class="text-center font-bold md:pb-2">SELECT YOUR SERVICE</h3>
            <p class="text-sm text-center md:text-left">Click the tabs below to filter what service you had your photo taken at.</p>
        </div>

        <div class="col-span-12 md:col-span-4 p-5">
            <p class="text-center text-4xl p-3">2</p>
            <hr class="pb-3">
            <h3 class="text-center font-bold md:pb-2">DOWNLOAD YOUR PHOTOS</h3>
            <p class="text-sm text-center md:text-left">Find your photo from the list below and click the download button!</p>
        </div>

        <div class="col-span-12 md:col-span-4 p-5">
            <p class="text-center text-4xl p-3">3</p>
            <hr class="pb-3">
            <h3 class="text-center font-bold md:pb-2">SHARE THEM ON SOCIALS</h3>
            <p class="text-sm text-center md:text-left">Tag us @foothillschurchtn on Instagram and Facebook!</p>
        </div>

    </div>
    </div>


<?php
get_footer();