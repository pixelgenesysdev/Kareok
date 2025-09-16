<?php 
include __DIR__ . '/../includes/head.php';
?>


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
  const cardsData = [
    {
      id: 1,
      title: 'Mearona Music Fest',
      date: 'Wed, 11 June 2025',
      time: '10:00 PM | 12:00 AM',
      location: 'Jakarta 1455 Lorem Ipsum',
      description: 'This is a high-energy rock festival featuring classic and hard rock anthems.',
      email: 'karaokeknight@gmail.com',
      phone: '0123 456 7890',
      rules: [
        {
          title: 'Round 1:',
          details: {
            'Rock Legends Only': 'Perform a rock song of any era.',
            'Classic & Hard Rock Anthems': 'Sing a song from bands like AC/DC, Led Zeppelin, or The Rolling Stones.'
          }
        }
      ],
      participants: 150,
      tags: ['Single Round', 'Friends & Family'],
      image: '<?php echo SITE_URL; ?>assets/images/leagues/league1.png',
      label: 'Ongoing',
    },
    {
      id: 2,
      title: 'Jakarta Jazz League',
      date: 'Thu, 19 June 2025',
      time: '7:00 PM | 10:00 PM',
      location: 'Bandung 2025 Jazz Street',
      description: 'A smooth jazz night for enthusiasts and professionals.',
      email: 'jazznight@gmail.com',
      phone: '0123 987 6543',
      rules: [
        {
          title: 'Round 1:',
          details: {
            'Intro Jazz': 'Perform a mellow jazz piece.'
          }
        },
        {
          title: 'Round 2:',
          details: {
            'Classic Standards': 'Perform jazz classics from the American Songbook.'
          }
        },
        {
          title: 'Round 3:',
          details: {
            'Improv Night': 'Show off your jazz improvisation skills.'
          }
        },
        {
          title: 'Round 4:',
          details: {
            'Finale': 'Collaborative jazz jam session.'
          }
        }
      ],
      participants: 120,
      tags: ['Group Stage', 'Music Lovers'],
      image: '<?php echo SITE_URL; ?>assets/images/leagues/league1.png',
      label: 'Upcoming',
    },
    {
      id: 3,
      title: 'Soul & RnB Showdown',
      date: 'Sat, 22 June 2025',
      time: '6:00 PM | 9:00 PM',
      location: 'Surabaya Harmony Hall',
      description: 'Compete with the smoothest voices in this RnB-themed battle.',
      email: 'rnbshowdown@gmail.com',
      phone: '0898 765 4321',
      rules: [
        {
          title: 'Round 1:',
          details: {
            'Classic Soul': 'Perform a song from the Motown era.'
          }
        },
        {
          title: 'Round 2:',
          details: {
            'Modern Vibes': 'Choose a recent RnB hit.'
          }
        },
        {
          title: 'Round 3:',
          details: {
            'Duet Round': 'Team up with another contestant.'
          }
        }
      ],
      participants: 90,
      tags: ['Duets', 'RnB Fans'],
      image: '<?php echo SITE_URL; ?>assets/images/leagues/league1.png',
      label: 'Upcoming',
    },
    {
      id: 4,
      title: 'Hip Hop Cypher Clash',
      date: 'Fri, 28 June 2025',
      time: '8:00 PM | 11:00 PM',
      location: 'Yogyakarta Street Arena',
      description: 'A freestyle rap battle with the city’s best underground artists.',
      email: 'hiphopclash@gmail.com',
      phone: '0856 123 9876',
      rules: [
        {
          title: 'Round 1:',
          details: {
            'Freestyle Flow': 'Spit your best freestyle bars.'
          }
        },
        {
          title: 'Round 2:',
          details: {
            'Written Bars': 'Prepare a 16-bar verse on a random topic.'
          }
        }
      ],
      participants: 110,
      tags: ['Battle', 'Freestyle'],
      image: '<?php echo SITE_URL; ?>assets/images/leagues/league1.png',
      label: 'Ongoing',
    },
    {
      id: 5,
      title: 'Acoustic Night Jam',
      date: 'Sun, 30 June 2025',
      time: '5:00 PM | 8:00 PM',
      location: 'Bali Sunset Lounge',
      description: 'A calm and cozy night of acoustic performances by solo artists.',
      email: 'acousticjam@gmail.com',
      phone: '0812 999 8888',
      // No rules section (Single round, no detailed structure)
      rules: [
        {
          title: 'Round 1',
          details: {
            'Freestyle Flow1': 'Spit your best freestyle bars.',
            'Freestyle Flow3': 'Spit your best freestyle bars.',
            'Freestyle Flow2': 'Spit your best freestyle bars.'
          }
        }
    ],
      participants: 75,
      tags: ['Solo', 'Acoustic', 'No Competition'],
      image: '<?php echo SITE_URL; ?>assets/images/leagues/league1.png',
      label: 'Upcoming',
    }
  ];


  // 🔹 Render individual card
  function cardModel(card) {
    return `
      <div class="col-md-4" style="padding: 10px;">
        <div class="league-box cardid-${card.id}" onclick="LeagueDetail(${card.id})" style="cursor: pointer;">
          <div class="image-box">
            <div class="label">${card.label}</div>
            <img src="${card.image}" alt="${card.title}">
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
              <img src="${card.image}" alt="${card.title}" class="event-image" />
              
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
                'dashboard'
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

<?php 
include __DIR__ . '/../includes/footer.php';
?>
