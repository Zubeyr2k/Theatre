<!--This loads the header of the html--> 
<?php 
    session_start();
    include 'components/header.php';
    include 'account/auth/dbConfig.php';
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
  <?php include 'components/navigation.php'; ?>
  <?php include 'components/latest.php'; ?>

  <!--Copied from Tailwind-->

  <div class="bg-white py-24 sm:py-32 bg-white">
  <div class="mx-auto grid max-w-7xl gap-y-20 gap-x-8 px-6 lg:px-8 xl:grid-cols-3">
    <div class="max-w-2xl">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet our leadership</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
    </div>
    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
      <li>
        <div class="flex items-center gap-x-6">
          <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          <div>
            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
            <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
          </div>
        </div>
      </li>

      <!-- More people... -->
    </ul>
  </div>
</div>
  <!--End-->
  <?php include 'components/footer.php'; ?>

