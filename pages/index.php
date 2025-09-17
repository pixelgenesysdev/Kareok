<?php 
include __DIR__ . '/../includes/head.php';
?>





<div id="box-main">
    <div id="Dashboard" class="box-main-row active"><?php include __DIR__ . '/dashboard.php'; ?></div>
    <div id="Discover" class="box-main-row">Content for Discover</div>
    <div id="League" class="box-main-row"><?php include __DIR__ . '/Leagues.php'; ?></div>
    <div id="TeamBlack" class="box-main-row">  <?php include __DIR__ . '/team_black.php'; ?></div>
    <div id="LeaderBoard" class="box-main-row"><?php include __DIR__ . '/leaderboard.php'; ?></div>
    <div id="VoteNow" class="box-main-row"><?php include __DIR__ . '/VoteNow.php'; ?></div>

    <div id="History" class="box-main-row"><?php include __DIR__ . '/history.php'; ?></div>
    <div id="YourVideos" class="box-main-row"><?php include __DIR__ . '/your-videos.php'; ?></div>
    <div id="WatchLater" class="box-main-row"><?php include __DIR__ . '/watch-later.php'; ?></div>
    <div id="Downloads" class="box-main-row"><?php include __DIR__ . '/downloads.php'; ?></div>
</div>


<?php 
include __DIR__ . '/../includes/footer.php';
?>


<script>

    function DisplayContent(sectionId) {
        const boxMain = document.querySelectorAll('.box-main-row');
        const buttons = document.querySelectorAll('#nav-btn');


        // Hide all content
        boxMain.forEach(box => {
            box.classList.remove('active');
        });
        // Remove .current class from all buttons
        buttons.forEach(btn => {
            btn.classList.remove('active');
        });

    // Add .current class to the clicked button
    buttons.forEach(btn => {
        if (btn.textContent.trim().toLowerCase() === sectionId.toLowerCase()) {
            btn.classList.add('active');
        }
    });
  
        // Show the selected section
        const selectedSection = document.getElementById(sectionId);
        
        if (selectedSection) {
            selectedSection.classList.add('active');
        }
        


            // Update URL without reloading
                const url = new URL(window.location);
                url.searchParams.set('page', sectionId);
                window.history.pushState({}, '', url);
    
    }




    window.addEventListener('DOMContentLoaded', (event) => {
        // Optionally, you can show a default section on page load
        DisplayContent('Dashboard'); // Example: Show Dashboard by default
    });

   

</script>


<style>
    .box-main-row {
        display: none;
    }

    .box-main-row.active {
        display: block;
    }
</style>