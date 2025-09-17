<div id="box-main">
    
     <div class="event-leader-wrapper">
        <div class="top-bar-page d-flex">
            <button class="back-button" onclick="goBack()"><i class="fa-solid fa-arrow-left"></i>Team Black <div class="like" title="Vote">&#128077;</div></button>
        </div>


        <div id="user-list1" class="user-list"></div>
    </div>
</div>




<script>



            const userList1 = document.getElementById("user-list1");

            function renderUsers(users) {
            userList1.innerHTML = users.map(user => `
                <div class="user-card">
                <img class="user-avatar" src="${user.avatar}" alt="${user.name}" />
                <div class="user-info">
                    <p class="user-name">${user.name}</p>
                    <p class="user-email">${user.email}</p>
                </div>
                </div>
            `).join("");
            }

            renderUsers(users1);


</script>


<style>
    #vote-timer {
    display: flex;
    align-items: center;
    gap: 15px;
    font-weight: bold;
    margin-bottom: 20px;
    font-size: 20px;
    }

    #timer {
    background: #0d0a4c;
    color: white;
    font-family: monospace;
    padding: 5px 10px;
    border-radius: 6px;
    font-size: 1.5rem;
    letter-spacing: 2px;
    }

    #vote-timer small {
    font-weight: normal;
    font-size: 1.1rem;
    color: #555;
    }

    .user-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
    gap: 20px;
    }

    .user-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
    padding: 15px 20px;
    gap: 15px;
    display: flex;
    align-items: center;
    }

    .user-avatar {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    object-fit: cover;
    }

    .user-info {
    flex-grow: 1;
    }

    .user-name {
    font-weight: 600;
    margin: 0;
    font-size: 1rem;
    }

    .user-email {
    font-size: 0.85rem;
    color: #777;
    margin: 3px 0 0 0;
    }

    .like {
    font-size: 1.3rem;
    user-select: none;
    color: #555;
    transition: color 0.2s ease;
    font-size: 28px;
    }



</style>




