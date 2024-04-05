<?php
session_start();
$pageTitle = 'About us - CareerLife';
include('includes/header.php')
    ?>
<section>
    <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 sm:py-12 lg:px-12 lg:py-16">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-12">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                <img alt="Party"
                    src="img/pic11.jpg"
                    class="absolute inset-0 h-full w-full object-cover" />
            </div>

            <div class="lg:py-24">
                <h2 class="text-3xl font-bold sm:text-4xl">Welcome <span
                        class="bg-gray-600 bg-clip-text font-extrabold text-transparent sm:text-5xl">CareerLife</span>
                </h2>

                <p class="mt-4 text-gray-600">
                At CareerLife, our mission is to revolutionize the way individuals navigate their professional journeys. With our innovative platform, we aim to empower job seekers and employers by providing them with a seamless and efficient job search and recruitment experience. By leveraging cutting-edge technology and intuitive design, CareerLife simplifies the process of finding the perfect job or candidate. Whether you're a seasoned professional looking to take the next step in your career or a company seeking top talent, CareerLife is your ultimate destination for success. Join us today and embark on a journey towards limitless career possibilities."
                </p>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>