

<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/detailcard.css">

<div id="box-main">
  <div id="discover-page-content">
    <div id="league-boxes" class="league-boxes d-flex flex-wrap">
      <!-- Cards will render here -->
    </div>
    <div id="league-detail" style="display: none;">
      <!-- League details will render here -->
    </div>
  </div>
</div>

<script>
  const leagueBoxesContainer = document.getElementById('league-boxes');
  const leagueDetailContainer = document.getElementById('league-detail');

  // 🔹 Updated cardsData with per-round rules
  


  // 🔹 Render individual card
  function cardModel(card) {
    return `
      <div class="col-md-4" style="padding: 10px;">
        <div class="league-box cardid-${card.id}" onclick="LeagueDetail(${card.id})" style="cursor: pointer;">
          <div class="image-box">
            <div class="label">${card.label}</div>
            <img src="<?php echo SITE_URL; ?>assets/images/leagues/${card.image}" alt="${card.title}">
            <div class="tags">
              ${card.tags.map(tag => `<span>${tag}</span>`).join('')}
            </div>
          </div>
          <div class="details">
            <h3 class="title">${card.title}</h3>
            <span class="location"><i class="fa-solid fa-location-dot"></i> ${card.location}</span>
            <div class="participants">
              <img src="<?php echo SITE_URL; ?>assets/images/leagues/participants-icon.png" alt="" class="participants-icon">
              <span class="participants-count">${card.participants} Participants</span>
            </div>
            <span class="date">${card.date}</span>
          </div>
        </div>
      </div>
    `;
  }

  // 🔹 Render round content dynamically
        function renderRoundContent(rules, index) {
        const round = rules[index];
        if (!round) return '<p>No rules available for this round.</p>';

        return `
            <h4>Round Rules</h4>
            <ul>
            ${Object.entries(round.details).map(([title, desc]) => `
                <li><strong>${title}:</strong> ${desc}</li>
            `).join('')}
            </ul>
        `;
        }


  // 🔹 Show detailed view
  function LeagueDetail(cardId) {
    const card = cardsData.find(c => c.id === cardId);
    if (!card) return;

    leagueBoxesContainer.style.setProperty('display', 'none', 'important');
    leagueDetailContainer.style.setProperty('display', 'block', 'important');

    leagueDetailContainer.innerHTML = `
      <div class="event-detail-wrapper">
        <button class="back-button" onclick="LeagueDetailClose()"><i class="fa-solid fa-arrow-left"></i> Details</button>
        <div class="event-detail-card">
          <!-- Left -->
          <div class="event-left">
            <div class="event-image-container">
              <img src="<?php echo SITE_URL; ?>assets/images/leagues/${card.image}" alt="${card.title}" class="event-image" />
              
              <div class="event-footer">
                <div class="event-tags">
                    ${card.tags.map(tag => `<span class="tag-pill">${tag}</span>`).join('')}
                </div>
                <div class="event-titles">
                  <div class="event-subtitle">The Blackout</div>
                  <div class="event-title">${card.title}</div>
                </div>
                <div class="event-meta">
                  <div class="event-meta-box">  
                    <span class="event-date"><i class="fa-regular fa-calendar"></i> ${card.date}</span>
                    <span class="event-time"><i class="fa-regular fa-clock"></i> ${card.time}</span>
                  </div>
                  <span class="event-location"><i class="fa-solid fa-location-dot"></i> ${card.location}</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Right -->
          <div class="event-right">
            <div class="section">
              <h4>Description</h4>
              <p>${card.description}</p>
            </div>

            <div class="section contact-section">
              <h4>Contacting Us:</h4>
              <p><strong>Email:</strong> <a href="mailto:${card.email}">${card.email}</a></p>
              <p><strong>Phone:</strong> <a href="tel:${card.phone}">${card.phone}</a></p>
            </div>

            <div class="section rounds-section">
              <div class="round-buttons">
                ${(card.rules || []).map((round, i) =>`
                  <button class="round-btn ${i === 0 ? 'active' : ''}" onclick="showRound(${card.id}, ${i})">
                    ${round.title}
                  </button>
                `).join('')}
              </div>
              <div id="round-content-${card.id}" class="round-description">
                ${renderRoundContent(card.rules, 0)}
              </div>
            </div>

            <div class="section">
              <h4>Participants:</h4>
              <div class="participants-row">
                <img src="<?php echo SITE_URL; ?>assets/images/leagues/participants-icon.png" />
                <span class="extra-participants">+${card.participants - 3}</span>
              </div>
            </div>

            <div class="action-buttons">
              <button class="btn accept-btn">Accept</button>
              <button class="btn reject-btn">Reject</button>
            </div>
            <div class="action-buttons">
              <button class="btn vote-btn">Vote Now</button>
            </div>
          </div>
        </div>
      </div>
    `;

         // Add event listener for reject button after content is loaded
        const rejectBtn = leagueDetailContainer.getElementsByClassName('reject-btn')[0];
        if (rejectBtn) {
            rejectBtn.addEventListener('click', () => {
            showPopup(
                'Voting is not open right now', 
                'time', 
                'Time Out!', 
                'OK',
                '',
            );
            });
        }

  }

  // 🔹 Handle round tab switching
  function showRound(cardId, index) {
    const card = cardsData.find(c => c.id === cardId);
    if (!card) return;

    // Update active buttons
    const buttons = document.querySelectorAll(`#league-detail .round-btn`);
    buttons.forEach((btn, i) => {
      btn.classList.toggle('active', i === index);
    });

    // Update rule content
    const container = document.getElementById(`round-content-${cardId}`);
    container.innerHTML = renderRoundContent(card.rules, index);
  }

  // 🔹 Go back to card list
  function LeagueDetailClose() {
    leagueDetailContainer.style.setProperty('display', 'none', 'important');
    leagueBoxesContainer.style.setProperty('display', 'flex', 'important');
  }

  // 🔹 Load cards on page load
  window.addEventListener('load', () => {
    leagueBoxesContainer.innerHTML = cardsData.map(cardModel).join('');
  });

    



  
</script>

