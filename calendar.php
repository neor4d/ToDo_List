<?php include 'templates/header.php'; ?>

<div class="flex flex-col md:flex-row min-h-screen bg-muted p-4 rounded-lg space-y-4 md:space-y-0 md:space-x-4">
    <div class="bg-card bg-muted p-4 rounded-lg flex-1">

        <div class="flex w-full">

            <div class="year w-full">
                
                <h2 class="text-center text-3xl font-semibold">2024</h2>

                <div class="month">

                    <h2 class="text-center font-semibold mb-5 mt-1">July</h2>

                    <div class="days flex flex-col">

                        <ul class="flex w-full">
                            <li class="bg-muted font-semibold border p-2 text-center w-full min-h-16">Mon</li>
                            <li class="bg-muted font-semibold border p-2 text-center w-full min-h-16">Tue</li>
                            <li class="bg-muted font-semibold border p-2 text-center w-full min-h-16">Wed</li>
                            <li class="bg-muted font-semibold border p-2 text-center w-full min-h-16">Thu</li>
                            <li class="bg-muted font-semibold border p-2 text-center w-full min-h-16">Fri</li>
                            <li class="bg-muted font-semibold border p-2 text-center w-full min-h-16">Sat</li>
                            <li class="bg-muted font-semibold border p-2 text-center w-full min-h-16">Sun</li>
                        </ul>

                        <ul class="flex w-full">

                            <li class="day-container border w-full min-h-24">
                                <input type="radio" name="day" id="1" value="" hidden>

                                <label for="1" class="day-label p-2 flex flex-col h-full cursor-pointer">
                                    <span class="block mb-2 font-semibold">1</span>
                                    <span class="flex w-full bg-primary rounded-xl justify-center text-white font-semibold">Task</span>

                                </label>
                            </li>

                            <li class="day-container border w-full min-h-24">
                                <input type="radio" name="day" id="2" value="" hidden>

                                <label for="2" class="day-label p-2 flex flex-col h-full cursor-pointer">
                                    <span class="block mb-2 font-semibold">2</span>
                                </label>
                            </li>

                            <li class="day-container border w-full min-h-24">
                                <input type="radio" name="day" id="3" value="" hidden>

                                <label for="3" class="day-label p-2 flex flex-col h-full cursor-pointer">
                                    <span class="block mb-2 font-semibold">3</span>
                                </label>
                            </li>

                            <li class="day-container border w-full min-h-24">
                                <input type="radio" name="day" id="4" value="" hidden>

                                <label for="4" class="day-label p-2 flex flex-col h-full cursor-pointer">
                                    <span class="block mb-2 font-semibold">4</span>
                                </label>
                            </li>

                            <li class="day-container border w-full min-h-24">
                                <input type="radio" name="day" id="5" value="" hidden>

                                <label for="5" class="day-label p-2 flex flex-col h-full cursor-pointer">
                                    <span class="block mb-2 font-semibold">5</span>
                                </label>
                            </li>

                            <li class="day-container border w-full min-h-24">
                                <input type="radio" name="day" id="6" value="" hidden>

                                <label for="6" class="day-label p-2 flex flex-col h-full cursor-pointer">
                                    <span class="block mb-2 font-semibold">6</span>
                                </label>
                            </li>

                            <li class="day-container border w-full min-h-24">
                                <input type="radio" name="day" id="7" value="" hidden>

                                <label for="7" class="day-label p-2 flex flex-col h-full cursor-pointer">
                                    <span class="block mb-2 font-semibold">7</span>
                                </label>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<?php include 'templates/footer.php'; ?>