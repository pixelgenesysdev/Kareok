<?php 
include __DIR__ . '/../includes/head.php';
?>

<div id="box-main">
    
     <div class="event-leader-wrapper">
        <div class="top-bar-page d-flex">
            <button class="back-button" onclick="goBack()"><i class="fa-solid fa-arrow-left"></i> Leaderboard</button>
        </div>

        <div id="leaderboard">
    
        </div>




</div>



<script>

const leaderboardData  = [
  { name: "Adison Press", votes: 283, avatar: "avatar1.png" },
  { name: "Ruben Geidt", votes: 255, avatar: "avatar1.png" },
  { name: "Jakob Levin", votes: 234, avatar: "avatar1.png" },
  { name: "Aaron Guerrero", votes: 230, avatar: "avatar1.png" },
  { name: "Andrea Garcia", votes: 210, avatar: "avatar1.png" },
  { name: "Denise Russell", votes: 130, avatar: "avatar1.png" },
  { name: "Larry Marshall", votes: 530, avatar: "avatar1.png" },
  { name: "Patrick Ellis", votes: 230, avatar: "avatar1.png" },
];

const leaderboardContainer = document.getElementById("leaderboard");

// Sort users descending by votes
leaderboardData.sort((a, b) => b.votes - a.votes);

const maxVotes = leaderboardData[0].votes;  // after sort, first has max votes

function createUserRow(user, rank, isTop) {
  const percentage = ((user.votes / maxVotes) * 100).toFixed(2);

  return `
    <div class="leaderboard-row">
      <div class="rank">
        <span class="rank-number">${rank}</span> 
      </div>
      <div class="avatar">
        ${isTop ? '<span class="crown">👑</span>' : ''}
        <img src="<?php echo SITE_URL; ?>assets/images/${user.avatar}" alt="${user.name}" />
      </div>
      <div class="name">${user.name}</div>
      <div class="progress-bar-container">
        <div class="progress-bar" style="width: ${percentage}%;"></div>
      </div>
      <div class="votes">${user.votes} Votes</div>
    </div>
  `;
}



leaderboardContainer.innerHTML = leaderboardData
  .map((user, index) => createUserRow(user, index + 1, index === 0))
  .join("");


</script>





<?php 
include __DIR__ . '/../includes/footer.php';
?>