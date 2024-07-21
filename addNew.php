<?php include 'templates/header.php'; ?>

<div class="flex flex-col md:flex-row min-h-screen bg-muted p-4 rounded-lg space-y-4 md:space-y-0 md:space-x-4">
    <div class="bg-card bg-muted p-4 rounded-lg flex-1">

        <div class="mb-4">

        <button type="button" data-modal-target="eventForm" data-modal-toggle="eventForm" class="bg-primary text-primary-foreground px-4 py-2 rounded-lg">Create Event</button>
            <div class="text-foreground font-semibold mb-3">Choose Day</div>

            <div class="flex space-x-2 font-semibold pb-3 day-card scroll-smooth" id="radio-container">

                <label for="Mon" class="bg-primary cursor-pointer text-primary-foreground p-2 rounded-lg text-center min-w-16" onclick="radioClass()">
                    <input type="radio" name="day" id="Mon" value="" hidden>
                    <!-- <b>5</b>  -->
                    Mon
                </label>
                
                <label for="Tue" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                <input type="radio" name="day" id="Tue" value="" hidden>
                <!-- <b>6</b>  -->
                Tue
                </label>
                
                <label for="Wed" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                <input type="radio" name="day" id="Wed" value="" hidden>
                <!-- <b>7</b> -->
                Wed
                </label>
                
                <label for="Thu" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                <input type="radio" name="day" id="Thu" value="" hidden>
                <!-- <b>8</b> -->
                Thu
                </label>
                
                <label for="Fri" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                <input type="radio" name="day" id="Fri" value="" hidden>
                <!-- <b>9</b> -->
                Fri
                </label>
                
                <label for="Sat" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                <input type="radio" name="day" id="Sat" value="" hidden>
                <!-- <b>10</b> -->
                Sat
                </label>
                
                <label for="Sun" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                <input type="radio" name="day" id="Sun" value="" hidden>
                <!-- <b>1</b> -->
                Sun
                </label>

            </div>

            <script>

                function radioClass(){

                const radios = document.querySelectorAll('input[type="radio"]');

                radios.forEach(input => {
                    input.addEventListener('change', function() {
                        const labels = document.querySelectorAll('label');

                        labels.forEach(label => {
                            label.classList.remove('bg-primary');
                            label.classList.remove('text-primary-foreground');
                            label.classList.add('bg-muted');
                            label.classList.add('text-muted-foreground');
                        });

                        if (this.checked) {
                            const label = this.closest('label');
                            label.classList.remove('bg-muted');
                            label.classList.remove('text-muted-foreground');
                            label.classList.add('bg-primary');
                            label.classList.add('text-primary-foreground');
                        }
                    });
                });

                }

            </script>

        </div>

        <div class="space-y-4">
            <p class="text-foreground flex font-semibold">Choose activity</p>

            <div class="activity-container grid grid-cols-6">

                <label for="idea" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                    <input type="radio" name="activity" id="idea" hidden>

                    <div class="flex items-center space-x-2">

                        <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                            <i class="fa-regular fa-lightbulb text-xl"></i>
                        </div>

                        <div class="text-foreground font-semibold text-base">
                            Idea
                            <br>
                            <span class="text-muted-foreground text-sm">3 in this week</span>
                        </div>
                    </div>
                    

                </label>

                <label for="food" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                    <input type="radio" name="activity" id="food" hidden>

                    <div class="flex items-center space-x-2">

                        <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                            <i class="fa-solid fa-burger text-xl"></i>
                        </div>

                        <div class="text-foreground font-semibold text-base">
                            Food
                            <br>
                            <span class="text-muted-foreground text-sm">3 in this week</span>
                        </div>
                    </div>
                    

                </label>

                <label for="work" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                    <input type="radio" name="activity" id="work" hidden>

                    <div class="flex items-center space-x-2">

                        <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                            <i class="fa-solid fa-briefcase text-xl"></i>
                        </div>

                        <div class="text-foreground font-semibold text-base">
                            Work
                            <br>
                            <span class="text-muted-foreground text-sm">3 in this week</span>
                        </div>
                    </div>
                    

                </label>

                <label for="sport" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                    <input type="radio" name="activity" id="sport" hidden>

                    <div class="flex items-center space-x-2">

                        <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                            <i class="fa-solid fa-volleyball text-xl"></i>
                        </div>

                        <div class="text-foreground font-semibold text-base">
                            Sport
                            <br>
                            <span class="text-muted-foreground text-sm">3 in this week</span>
                        </div>
                    </div>
                    

                </label>

                <label for="music" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                    <input type="radio" name="activity" id="music" hidden>

                    <div class="flex items-center space-x-2">

                        <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                            <i class="fa-solid fa-music text-xl"></i>
                        </div>

                        <div class="text-foreground font-semibold text-base">
                            Music
                            <br>
                            <span class="text-muted-foreground text-sm">3 in this week</span>
                        </div>
                    </div>
                    

                </label>


            </div>

            <script>

                function radioActivity(){

                    const activityContainer = document.querySelector('.activity-container');
                    const activityRadios = activityContainer.querySelectorAll('input[type="radio"]');

                    activityRadios.forEach(input => {
                        input.addEventListener('change', function() {
                            const labels = activityContainer.querySelectorAll('label');

                            labels.forEach(label => {
                                label.classList.remove('task-op-active');
                            });

                            if (this.checked) {
                                const label = this.closest('label');
                                label.classList.add('task-op-active');
                            }
                        });
                    });

                }

            </script>

            </div>
        </div>

    </div>

</div>

<div id="eventForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">

        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add event
                </h3>

                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="eventForm">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Cancel</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="p-4 md:p-5">

                <div class="space-y-4 divide-y divide-slate-300" action="#">

                    <div class="mb-6">

                        <p class="text-foreground text-center font-semibold mb-3">Choose Day</p>

                        <div class="days-container flex justify-center space-x-2 font-semibold pb-3 day-card scroll-smooth" id="radio-container">

                            <label for="Mon" class="bg-primary cursor-pointer text-primary-foreground p-2 rounded-lg text-center min-w-16" onclick="radioClass()">
                                <input type="radio" name="day" id="Mon" value="" hidden>
                                <!-- <b>5</b>  -->
                                Mon
                            </label>
                            
                            <label for="Tue" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                            <input type="radio" name="day" id="Tue" value="" hidden>
                            <!-- <b>6</b>  -->
                            Tue
                            </label>
                            
                            <label for="Wed" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                            <input type="radio" name="day" id="Wed" value="" hidden>
                            <!-- <b>7</b> -->
                            Wed
                            </label>
                            
                            <label for="Thu" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                            <input type="radio" name="day" id="Thu" value="" hidden>
                            <!-- <b>8</b> -->
                            Thu
                            </label>
                            
                            <label for="Fri" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                            <input type="radio" name="day" id="Fri" value="" hidden>
                            <!-- <b>9</b> -->
                            Fri
                            </label>
                            
                            <label for="Sat" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                            <input type="radio" name="day" id="Sat" value="" hidden>
                            <!-- <b>10</b> -->
                            Sat
                            </label>
                            
                            <label for="Sun" class="bg-muted cursor-pointer text-muted-foreground p-2 rounded-lg text-center min-w-16"onclick="radioClass()">
                            <input type="radio" name="day" id="Sun" value="" hidden>
                            <!-- <b>1</b> -->
                            Sun
                            </label>

                        </div>

                        <script>

                            function radioClass(){

                                const daysContainer = document.querySelector('.days-container');
                                const radios = daysContainer.querySelectorAll('input[type="radio"]');

                                radios.forEach(input => {
                                    input.addEventListener('change', function() {
                                        const labels = daysContainer.querySelectorAll('label');

                                        labels.forEach(label => {
                                            label.classList.remove('bg-primary');
                                            label.classList.remove('text-primary-foreground');
                                            label.classList.add('bg-muted');
                                            label.classList.add('text-muted-foreground');
                                        });

                                        if (this.checked) {
                                            const label = this.closest('label');
                                            label.classList.remove('bg-muted');
                                            label.classList.remove('text-muted-foreground');
                                            label.classList.add('bg-primary');
                                            label.classList.add('text-primary-foreground');
                                        }
                                    });
                                });

                            }

                        </script>

                    </div>

                    <div class="py-6">

                        <p class="text-foreground text-center font-semibold mb-3">Choose activity</p>

                        <div class="activity-container flex flex-wrap justify-center">

                            <label for="idea" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                                <input type="radio" name="activity" id="idea" hidden>

                                <div class="flex items-center space-x-2">

                                    <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                                        <i class="fa-regular fa-lightbulb text-xl"></i>
                                    </div>

                                    <div class="text-foreground font-semibold text-base">
                                        Idea
                                        <br>
                                        <span class="text-muted-foreground text-sm">3 in this week</span>
                                    </div>
                                </div>
                                

                            </label>

                            <label for="food" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                                <input type="radio" name="activity" id="food" hidden>

                                <div class="flex items-center space-x-2">

                                    <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                                        <i class="fa-solid fa-burger text-xl"></i>
                                    </div>

                                    <div class="text-foreground font-semibold text-base">
                                        Food
                                        <br>
                                        <span class="text-muted-foreground text-sm">3 in this week</span>
                                    </div>
                                </div>
                                

                            </label>

                            <label for="work" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                                <input type="radio" name="activity" id="work" hidden>

                                <div class="flex items-center space-x-2">

                                    <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                                        <i class="fa-solid fa-briefcase text-xl"></i>
                                    </div>

                                    <div class="text-foreground font-semibold text-base">
                                        Work
                                        <br>
                                        <span class="text-muted-foreground text-sm">3 in this week</span>
                                    </div>
                                </div>
                                

                            </label>

                            <label for="sport" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                                <input type="radio" name="activity" id="sport" hidden>

                                <div class="flex items-center space-x-2">

                                    <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                                        <i class="fa-solid fa-volleyball text-xl"></i>
                                    </div>

                                    <div class="text-foreground font-semibold text-base">
                                        Sport
                                        <br>
                                        <span class="text-muted-foreground text-sm">3 in this week</span>
                                    </div>
                                </div>
                                

                            </label>

                            <label for="music" class="task-op w-fit bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between" onclick="radioActivity()">

                                <input type="radio" name="activity" id="music" hidden>

                                <div class="flex items-center space-x-2">

                                    <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                                        <i class="fa-solid fa-music text-xl"></i>
                                    </div>

                                    <div class="text-foreground font-semibold text-base">
                                        Music
                                        <br>
                                        <span class="text-muted-foreground text-sm">3 in this week</span>
                                    </div>
                                </div>
                                

                            </label>

                        </div>

                        <script>

                            function radioActivity(){

                                const activityContainer = document.querySelector('.activity-container');
                                const activityRadios = activityContainer.querySelectorAll('input[type="radio"]');

                                activityRadios.forEach(input => {
                                    input.addEventListener('change', function() {
                                        const labels = activityContainer.querySelectorAll('label');

                                        labels.forEach(label => {
                                            label.classList.remove('task-op-active');
                                        });

                                        if (this.checked) {
                                            const label = this.closest('label');
                                            label.classList.add('task-op-active');
                                        }
                                    });
                                });

                            }

                        </script>

                    </div>

                    <div class="py-6">
                        <p class="text-foreground text-center font-semibold mb-3">Describe your activity</p>

                        <div class="px-4 py-2 border border-gray-200 rounded-lg bg-white rounded-t-lg dark:bg-gray-800">
                            <textarea rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write Here..." required ></textarea>
                        </div>
                    </div>
                    
                </div>

                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Set Event</button>
                
            </div>

        </div>

    </div>
</div> 

<?php include 'templates/footer.php'; ?>