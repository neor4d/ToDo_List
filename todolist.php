<?php include 'templates/header.php'; ?>

<div class="flex flex-col md:flex-row min-h-screen bg-muted p-4 rounded-lg space-y-4 md:space-y-0 md:space-x-4">
  
  <div class="bg-card p-4 rounded-lg flex-1">

    <div class="flex justify-between items-center mb-4">
      <div class="text-foreground text-lg font-semibold">Today (15/07/2024)</div>
      <a href="addNew.php" class="bg-primary text-primary-foreground px-4 py-2 rounded-lg">Add New</a>
    </div>

    <div class="space-y-4">
      <div class="flex items-center space-x-4">
        <div class="bg-primary text-primary-foreground p-2 rounded-lg">19:00</div>
        <!-- <div class="text-muted-foreground">19:00</div> -->
      </div>

      <div class="space-y-2">
        
        <div class="flex items-center p-2 task-card">

            <label class="checkbox-container">
                <input checked="checked" type="checkbox">
                <div class="checkmark"></div>
            </label>

            <div class="text-foreground font-semibold ml-4">
                Buy a pack of coffee <br>
                <span class="text-muted-foreground ml-1.5">10:00 - 11:00</span>
            </div>
        </div>

        <div class="flex items-center p-2 task-card">
            <label class="checkbox-container">
                <input checked="checked" type="checkbox">
                <div class="checkmark"></div>
            </label>

            <div class="text-foreground font-semibold ml-4">
                Meeting on Work <br>
                <span class="text-muted-foreground ml-1.5">14:00 - 15:00</span>
            </div>
        </div>

        <div class="flex items-center p-2 task-card">

            <label class="checkbox-container">
                <input checked="checked" type="checkbox">
                <div class="checkmark"></div>
            </label>

            <div class="text-foreground font-semibold ml-4">
                New Project <br>
                <span class="text-muted-foreground ml-1.5">19:00 - 21:00</span>
            </div>
        </div>

      </div>
    </div>

    <div class="space-y-4 mt-4">
      <div class="flex items-center space-x-4">
        <div class="bg-secondary2 text-primary-foreground p-2 rounded-lg">21:30</div>
        <!-- <div class="text-muted-foreground">19:00</div> -->
      </div>

      <div class="space-y-2">
        
        <div class="flex items-center p-2 task-card">

            <label class="checkbox-container-secondary">
                <input checked="checked" type="checkbox">
                <div class="checkmark"></div>
            </label>

            <div class="text-foreground font-semibold ml-4">
                Buy a pack of coffee <br>
                <span class="text-muted-foreground ml-1.5">10:00 - 11:00</span>
            </div>
        </div>

      </div>
    </div>
  </div>

</div>

<?php include 'templates/footer.php'; ?>