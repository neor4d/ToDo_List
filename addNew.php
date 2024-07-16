<?php include 'templates/header.php'; ?>

<div class="flex flex-col md:flex-row min-h-screen bg-muted p-4 rounded-lg space-y-4 md:space-y-0 md:space-x-4">
    <div class="bg-card bg-muted p-4 rounded-lg flex-1">

        <div class="mb-4">

            <div class="text-foreground text-lg font-semibold ml-3 mb-3">Create Task</div>
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
            <div class="text-foreground font-semibold">Choose activity</div>

            <div class="flex justify-center items-center flex-wrap">

                <div class="task-op bg-muted p-4 my-2 mx-1 rounded-lg flex items-center justify-between">

                    <div class="flex items-center space-x-2">
                        <!-- <img aria-hidden="true" alt="idea-icon" src="https://openui.fly.dev/openui/24x24.svg?text=💡" /> -->
                        
                        <div class="icon-container flex items-center justify-center p-1.5 rounded-lg">
                            <i class="fa-regular fa-lightbulb text-xl"></i>
                        </div>

                        <div class="text-foreground font-semibold text-base">
                            Idea
                            <br>
                            <span class="text-muted-foreground text-sm">3 in this week</span>
                        </div>
                    </div>
                    

                </div>

                <div class="task-op bg-muted p-4 m-2 mx-1 rounded-lg flex items-center justify-between">

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

                    
                
                </div>

                <div class="task-op bg-muted p-4 m-2 mx-1 rounded-lg flex items-center justify-between">

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
                    

                </div>
                
                <div class="task-op bg-muted p-4 m-2 mx-1 rounded-lg flex items-center justify-between">

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
                    
                
                </div>

                <div class="task-op bg-muted p-4 m-2 mx-1 rounded-lg flex items-center justify-between">

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
                    
                    
                </div>

            </div>
        </div>

    </div>

</div>

<?php include 'templates/footer.php'; ?>