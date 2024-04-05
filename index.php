<?php
session_start();
$pageTitle = 'CareerLife - Your Job Home';
include './includes/header.php';
?>

<section class="mb-8 text-[#451a03] min-h-screen flex items-center position-relative hover:bg-opacity-0.5" style="background-image: url('img/pic5.jpg'); background-size: cover; background-position: right;">

  <!-- Overlay div for hover effect -->
  <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:bg-opacity-50"></div>

  <!-- Container for content -->
  <div class="max-w-screen-xl max-width z-0 relative" style="margin-right: 30%;">
    <!-- Heading with hover effect -->
    <h1 class="text-5xl font-extrabold text-amber-900 hover:text-rey mb-4" style="margin-left: 5%;text-align:center;">
      Explore Exciting Opportunities with CareerLife
    </h1>

    <!-- Paragraph with hover effect -->
    <p class="text-xl text-black mb-8" style="margin-left: 5%; text-align:center;">
      <strong><i>Embark on a journey of growth and fulfillment. CareerLife offers tailored careerpaths and connects <br>you with opportunities that match your aspirations.
        </i></strong>
    </p>

    <!-- Button with hover effect -->
    <div class="flex gap-4" style="margin-left: 35%; text-align:center;">
      <a class="inline-block rounded border border-gray-700 bg-gray-700 px-8 lg:px-10 py-4 text-sm lg:text-base font-semibold text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-opacity-75" href="account/register.php">
        Get Started
      </a>

      <a class="inline-block rounded border border-gray-700 bg-gray-700 sm:bg-transparent px-6 lg:px-8 py-4 text-sm lg:text-base font-semibold text-black hover:bg-gray-700 hover:text-white focus:outline-none focus:ring active:bg-gray-700" href="jobs">
        Browse Jobs
      </a>
    </div>

  </div>
</section>

<section class="md:my-8 lg:my-16">

  <div class="overflow-hidden bg-gray-100 sm:grid sm:grid-cols-2 mx-auto max-w-screen-2xl">

    <img alt="Student" src="img/pic3.jpg" class="h-56 w-full object-cover sm:h-full" />

    <div class="p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="mx-auto max-w-xl text-center">
        <h2 class="text-2xl font-bold text-gray-900 font-serif">
          Elevate Your Team's Capabilities: Attract Exceptional Talent with CareerLife!
        </h2>

        <p class="hidden text-gray-500 md:mt-4 md:block animate-light-to-dark">
          <i>Empower your organization's success by tapping into exceptional talent through our comprehensive job platform. Access a diverse pool of skilled individuals, propelling your enterprise towards excellence with a proficient team. Discover your next standout employee – refine your hiring process with confidence and precision..</i>
        </p>

        <div class="my-4 md:mt-8">
          <a href="#" class="inline-block rrounded border border-gray-700 bg-gray-700 sm:bg-transparent  hover:border-black border text-black hover:text-white over:bg-gray-700 px-12 py-3 text-sm font-medium text-black transition hover:bg-gray-600 focus:outline-none focus:ring focus:ring-yellow-400">
            List a Position
          </a>
        </div>
      </div>
    </div>

  </div>
  <div class="mx-auto max-w-screen-2xl">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
      <div class="p-8 md:p-12">
        <div class="mx-auto max-w-xl text-center lg:flex lg:flex-col lg:h-full lg:justify-center lg:items-center">
          <h2 class="text-2xl font-bold text-gray-800 font-serif">
            Embark on Your Career Journey: Open the Gateway to Infinite Opportunities with CareeLife
          </h2>

          <p class="hidden text-gray-800 sm:mt-6 sm:block animate-light-to-dark">
            <i>Commence on a rewarding journey toward professional success with our comprehensive job platform. Delve into an expansive ocean of distinctive opportunities, meticulously designed to empower you in shaping and elevating your career path with unwavering confidence. Your perfect job awaits – commence your adventure today!</i>
          </p>

          <div class="mt-4 md:mt-10">
            <a href="#" class="inline-block rrounded border border-gray-700 bg-gray-700 sm:bg-transparent  hover:border-black border text-black hover:text-white over:bg-gray-700 px-12 py-3 text-sm font-medium text-black transition hover:bg-gray-600 focus:outline-none focus:ring focus:ring-yellow-400">
              Embrack Now
            </a>
          </div>
        </div>
      </div>

      <div class="hidden sm:block grid grid-cols-2 gap-4 md:grid-cols-1">
        <img alt="Student" src="img/pic2.jpg" />
      </div>
    </div>
  </div>
</section>

<style>
  .image-container {
    display: contents;

    -webkit-overflow-scrolling: touch;
    /* Enable smooth scrolling on iOS */
    max-width: 100%;
    /* Ensure the images stay within the viewport */
    padding: 10px;
    /* Add some spacing around the images */
  }

  .image-container img {
    max-width: 100%;
    /* Ensure the images are responsive */
    height: auto;
    /* Maintain aspect ratio */
    margin-right: 10px;
    /* Add some space between images */
  }

  @keyframes light-to-dark {
    0% {
      color: #FFFFFF;
      /* Light color */
    }

    100% {
      color: #333333;
      /* Dark color */
    }
  }
</style>

<div class="image-container" style="width: 100%;">
  <img src="img/123.jpg" alt="Image 1" style="width: 100%;">
</div>

<?php
include './includes/footer.php';
?>