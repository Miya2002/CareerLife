<?php
session_start();
// Include the configuration file and any necessary functions
include 'config.php';
$pageTitle = 'Jobs - CareerLife';
include 'includes/header.php';

// Retrieve all jobs from the 'jobs' table, ordered by the most recent first
$sql = "SELECT * FROM jobs ORDER BY created_at DESC";
$result = $conn->query($sql); ?>
<style>
  .image-container {
    position: relative;
    display: inline-block;
    max-width: 100%;
    padding: 10px;
  }

  .image-container img {
    max-width: 100%;
    height: auto;
    margin-right: 10px;
  }

  .overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    font-size: 2rem;
    font-weight: bold;
    width: 80%;
    z-index: 2; /* Ensure the text is above the overlay */
  }

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity here */
    z-index: 1;
  }

  @keyframes light-to-dark {
    0% {
      color: #ffffff;
    }

    100% {
      color: #333333;
    }
  }
</style>

<div class="image-container" style="width: 100%;">
  <img src="img/pic9.jpg" alt="Image 1" style="width: 100%;">
  
  <div class="overlay"></div> <!-- Add overlay -->
  
  <div class="overlay-text">
    <h1>
      Explore all jobs
      <span class="sm:block"> posted by companies </span>
    </h1>
  </div>
</div>







<div class="mx-auto gap-4 w-full p-8 md:p-10 lg:py-10 lg:px-12 max-w-screen-2xl flex flex-col md:flex-row md:grid md:grid-cols-2 xl:grid-cols-3">
  <?php
  // Check if there are jobs to display
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      echo '<article class="rounded-xl bg-white p-4 border border-gray-300 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
          <div
            class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-gray-700"
            aria-hidden="true"
          >
            <div class="flex items-center gap-1">
              <span class="h-8 w-0.5 rounded border border-gray-700 bg-gray-700 sm:bg-transparent  hover:border-black border text-black hover:text-white over:bg-gray-700"></span>
              <span class="h-6 w-0.5 rounded border border-gray-700 bg-gray-700 sm:bg-transparent  hover:border-black border text-black hover:text-white over:bg-gray-700"></span>
              <span class="h-4 w-0.5 rounded border border-gray-700 bg-gray-700 sm:bg-transparent  hover:border-black border text-black hover:text-white over:bg-gray-700"></span>
              <span class="h-6 w-0.5 rounded border border-gray-700 bg-gray-700 sm:bg-transparent  hover:border-black border text-black hover:text-white over:bg-gray-700"></span>
              <span class="h-8 w-0.5 rounded border border-gray-700 bg-gray-700 sm:bg-transparent  hover:border-black border text-black hover:text-white over:bg-gray-700"></span>
            </div>
          </div>
      
          <div>
            <strong
              class="rounded border border-gray-700  sm:bg-gray-700  hover:border-black border text-white hover:text-white over:bg-white px-3 py-1.5 text-[12px] capitalize font-medium text-white"
            >
           ' . $row['job_category'] . '
            </strong>
      
            <h3 class="mt-4 text-lg font-medium sm:text-xl">
              <a href=job-detail?job_id=' . $row['id'] . ' class="hover:underline">  ' . $row['title'] . ' </a>
            </h3>
            <p class="mt-1 text-sm text-gray-700">
            ' . substr($row['description'], 0, 150) . ' ...
            </p>
      
            <div class="mt-4 sm:flex sm:items-center sm:gap-2">
              <div class="flex items-center gap-1 text-gray-500">
                <p class="text-xs font-medium"> ' . $row['company'] . '</p>
              </div>
      
              <span class="hidden sm:block" aria-hidden="true">&middot;</span>
      
              <p class="mt-2 text-xs font-medium text-gray-500 sm:mt-0">
              ' . substr($row['created_at'], 0, 10) . '
              </p>
            </div>
          </div>
        </div>
      </article>';
    }

  } else {
    echo "<p class='p-10 text-center text-primary-600 font-semibold text-2xl'>No Jobs found.<p>";
  }
  ?>
</div>