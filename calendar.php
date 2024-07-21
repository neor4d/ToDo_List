<?php include 'templates/header.php'; ?>

<div class="flex flex-col md:flex-row min-h-screen bg-muted p-4 rounded-lg space-y-4 md:space-y-0 md:space-x-4">
    <div class="bg-card bg-muted p-4 rounded-lg flex-1">

        <div class="flex w-full">

            <?php 
                $actualYear = date('Y');
                $actualMonth = date('F');

                $actualDate = date("$actualYear-m");
                //$actualDate = "2024-8";

                $firstDay = strtotime("first day of $actualDate");
                $lastDay = strtotime("last day of $actualDate");

                $firstDayNum = date('N', $firstDay);
            
            ?>

            <div class="year w-full">
                
                <h2 class="text-center text-3xl font-semibold"><?php echo $actualYear; ?></h2>

                <div class="month">

                    <h2 class="text-center font-semibold mb-5 mt-1"><?php echo $actualMonth; ?></h2>

                    <div class="days flex flex-col overflow-x-scroll pb-4">

                        <div class="days-body grid grid-cols-7 min-w-[890px]">

                            <div class="bg-muted font-semibold border p-2 text-center w-full min-h-16 min-w-28">Mon</div>
                            <div class="bg-muted font-semibold border p-2 text-center w-full min-h-16 min-w-28">Tue</div>
                            <div class="bg-muted font-semibold border p-2 text-center w-full min-h-16 min-w-28">Wed</div>
                            <div class="bg-muted font-semibold border p-2 text-center w-full min-h-16 min-w-28">Thu</div>
                            <div class="bg-muted font-semibold border p-2 text-center w-full min-h-16 min-w-28">Fri</div>
                            <div class="bg-muted font-semibold border p-2 text-center w-full min-h-16 min-w-28">Sat</div>
                            <div class="bg-muted font-semibold border p-2 text-center w-full min-h-16 min-w-28">Sun</div>


                            <?php 

                                if($firstDayNum != 1) {

                                    $calcDays = $firstDayNum - 1;

                                    for($i = 0; $i < $calcDays; $i++){ ?>

                                        <div class="day-container border min-h-24 min-w-28"> </div>

                                    <?php }

                                }

                                
                                for($day = $firstDay; $day <= $lastDay; $day = strtotime('+1 day', $day)) {
                            
                                    $nameDay = date('l', $day);
                                    $dateDay = date('j', $day);
                            ?>
                            
                            <div class="day-container border w-full min-h-24 min-w-28">
                                <input type="radio" name="day" id="<?php echo $dateDay; ?>" value="<?php echo $actualDate . '-' . $dateDay; ?>" hidden>

                                <label for="<?php echo $dateDay; ?>" class="day-label p-2 flex flex-col h-full cursor-pointer">
                                    <span class="block mb-2 font-semibold"><?php echo $dateDay; ?></span>
                                    <!-- <span class="flex w-full bg-primary rounded-xl justify-center text-white font-semibold">Task</span> -->

                                </label>
                            </div>

                            <?php } ?>

                        </div>

                    </div>

                    <div class="eventButton flex w-full mt-4 justify-center">
                        <button type="button" data-modal-target="eventForm" data-modal-toggle="eventForm" class="bg-primary text-primary-foreground px-4 py-2 rounded-lg">Add Event</button>
                    </div>

                </div>

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

                        <label for="time" class="block text-foreground text-center font-semibold mb-3">Time to event:</label>

                        <div class="days-container flex justify-center space-x-2 font-semibold pb-3 day-card scroll-smooth" id="radio-container">

                            <div class="relative w-48">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                            </div>

                        </div>

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