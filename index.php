<!--This loads the header of the html--> 
<?php 
    session_start();
    include 'components/header.php';
    include 'account/auth/dbConfig.php';
    include 'components/navigation.php';
?>
<!-- Loading hero with content -->
   <div class="bg-gray-50 flex items-center">
    <section class="w-full bg-cover bg-center py-32" style="background-image: url('<?= ROOT_DIR ?>/assets/images/header-bg.jpg');">
      <div class="container mx-auto text-center text-white">
        <h1 class="text-5xl font-medium mb-6">Welcome to My Agencies</h1>
        <p class="text-xl mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio,
          gravida pellentesque urna varius vitae.</p>
        <a href="#" class="bg-indigo-500 text-white py-4 px-12 rounded-full hover:bg-indigo-600">Demo</a>
      </div>
    </section>
  </div>
  <!-- Including navigation -->

  <section class=" flex items-center py-40 justify-center cream-bg">
  <div class="mx-auto max-w-[43rem]">
    <div class="text-center">
      <h1 class="mt-3 text-[3.5rem] font-bold leading-[4rem] tracking-tight text-black">About us</h1>
      <p class="mt-3 text-lg leading-relaxed text-slate-400">Specify helps you unify your brand identity by collecting, storing and distributing design tokens and assets — automatically.</p>
    </div> 
  </div>
</section>

<section class="border-t-4 cream-bg">
<h1 class="mt-3 text-[2.5rem] font-bold leading-[4rem] tracking-tight text-black text-center pb-8 pt-2">Latest articles</h1>
<section class="flex items-center pb-10 justify-evenly mob-col">
<div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 col-width-30">
    <a href="#">
        <img class="rounded-t-lg" src="./assets/images/goblin.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
<div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 col-width-30">
    <a href="#">
        <img class="rounded-t-lg" src="./assets/images/fantasy.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
<div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 col-width-30">
    <a href="#">
        <img class="rounded-t-lg" src="./assets/images/spaceship.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
</section>

</section>

<section>

<section class="body-font text-gray-600 ">
<h1 class="mt-3 text-[2.5rem] font-bold leading-[4rem] tracking-tight text-black text-center pb-8 pt-2">What's on</h1>
    <div class="container mx-auto px-5 py-10">
      <div class="-m-4 flex flex-wrap text-center">
        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
            <img alt="ecommerce" class="block h-full w-full object-cover object-center cursor-pointer" src="https://dummyimage.com/420x260" />
          </a>
          <div class="mt-4">
            <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT</h3>
            <h2 class="title-font text-lg font-medium text-gray-900">The Catalyzer</h2>
            <p class="mt-1">01/09/2022</p>
          </div>
        </div>
        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded">
            <img alt="ecommerce" class="block h-full w-full object-cover object-center cursor-pointer" src="https://dummyimage.com/421x261" />
          </a>
          <div class="mt-4">
            <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT</h3>
            <h2 class="title-font text-lg font-medium text-gray-900">Shooting Stars</h2>
            <p class="mt-1">01/09/2022</p>
          </div>
        </div>
    </div>
  </section>

</section>

<section class="border-t-4 border-b-4 border-black pb-8">
<h1 class="mt-3 text-[2.5rem] font-bold leading-[4rem] tracking-tight text-black text-center pb-4 pt-2">Where to find us</h1>
<div class="xl:w-6/12 md:w-7/12 mb-6 lg:mb-0 md:pr-3 mx-auto">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12094.57348593182!2d-74.00599512526003!3d40.72586666928451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598f988156a9%3A0xd54629bdf9d61d68!2sBroadway-Lafayette%20St!5e0!3m2!1spl!2spl!4v1624523797308!5m2!1spl!2spl"
        class="h-80 w-full border-0 rounded-lg shadow-lg" allowfullscreen="" loading="lazy"></iframe>
</div>
</section>
 

  
  <?php include 'components/footer.php'; ?>

