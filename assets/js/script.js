const users1 = [
            { name: "Aaron Guerrero", email: "aaronguerrero@gmail.com", avatar: "https://randomuser.me/api/portraits/men/32.jpg" },
            { name: "Andrea Garcia", email: "andreagarcia@gmail.com", avatar: "https://randomuser.me/api/portraits/women/44.jpg" },
            { name: "Denise Russell", email: "deniserussell@gmail.com", avatar: "https://randomuser.me/api/portraits/women/55.jpg" },
            { name: "Larry Marshall", email: "larrymarshall@gmail.com", avatar: "https://randomuser.me/api/portraits/men/64.jpg" },
            { name: "Patrick Ellis", email: "patrickellis@gmail.com", avatar: "https://randomuser.me/api/portraits/men/71.jpg" },
            { name: "Christopher Sandoval", email: "chrissandoval@gmail.com", avatar: "https://randomuser.me/api/portraits/men/12.jpg" },
            { name: "Timothy Ellis", email: "timothyellis@gmail.com", avatar: "https://randomuser.me/api/portraits/men/8.jpg" },
            { name: "Alan Collins", email: "alancollins@gmail.com", avatar: "https://randomuser.me/api/portraits/men/90.jpg" },
            { name: "Larry Marshall", email: "larrymarshall2@gmail.com", avatar: "https://randomuser.me/api/portraits/men/33.jpg" },
            ];



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
      image: 'league1.png',
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
      image: 'league1.png',
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
      image: 'league1.png',
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
      image: 'league1.png',
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
      image: 'league1.png',
      label: 'Upcoming',
    }
  ];



function goBack() {
  window.history.back();
}