<?php include 'templates/header.php'; ?>

<div class="flex flex-col">

    <!-- <section class="flex flex-col bg-muted justify-center items-center text-center rounded-lg min-h-[96vh] bg-cover bg-center backdrop-opacity-50 bg-[url('./media/bg/annie-spratt-399PPQ9ROlo-unsplash.jpg')]"> -->
    <section class="flex flex-col bg-muted justify-center items-center text-center rounded-lg min-h-[96vh] bg-cover bg-center"
    style="background-image:linear-gradient(rgb(0 0 0 / 82%), rgb(0 0 0 / 58%)), url(./media/bg/annie-spratt-399PPQ9ROlo-unsplash.jpg);">

        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
            <b class="text-blueBG-foreground">ListLuxe</b>, the best ToDo List.
        </h1>

        <p class="mb-6 text-lg font-normal text-gray-200 lg:text-xl sm:px-16 xl:px-48">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis repellat consectetur reprehenderit at autem eius molestias.
             Nulla atque illum earum, blanditiis exercitationem porro dolore veritatis animi at ipsa veniam molestias.</p>
        
        <a href="#" class="inline-flex items-center justify-center px-5 py-3 w-48 mt-4 text-base font-medium text-center text-white bg-primary rounded-lg ease-out duration-300
         hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
            Get Started
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        
    </section>

</div>

<?php include 'templates/footer.php'; ?>