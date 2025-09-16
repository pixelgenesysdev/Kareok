<div id="popup-box" style="display: none;">
    <div class="inner-popup">
        <div class="box-pop">
            <div class="closeicon">
                <i class="fa-solid fa-xmark" style="cursor: pointer;"></i>
            </div>
            <div class="icon">
                <img id="popup-icon" src="<?php echo SITE_URL; ?>assets/images/popup-success.png" alt="">
            </div>
            <h4 class="title">Success</h4>
            <p class="message">Message</p>
            <button id="continueBtnpopup" class="btn btn-primary"  >OK</button>
        </div>
    </div>
</div>






<script>

    // Get the popup box and close icon elements
    const popupBox = document.getElementById('popup-box');
    const closeIcon = document.querySelector('.closeicon i');

    // Function to show the popup with a custom message 
    function showPopup(message='Your action was successful!', type = 'success', title = 'Success', btnText = 'OK' , redirecttopage = '#') {
        const messageElem = popupBox.querySelector('.message');
        const titleElem = popupBox.querySelector('.title');
        const btnElem = document.getElementById('continueBtnpopup');

        messageElem.textContent = message;
        titleElem.textContent = title;
        btnElem.textContent = btnText;

        btnElem.onclick = () => {
            window.location.href = redirecttopage;
            hidePopup();
        }

        // You can customize the icon based on the type (success, error, info)
        const iconElem = popupBox.querySelector('.icon img');
        if (type === 'success') {
            iconElem.src = '<?php echo SITE_URL; ?>assets/images/popup-success.png';
            closeIcon.style.display = 'none';
        } else if (type === 'error') {
            iconElem.src = '<?php echo SITE_URL; ?>assets/images/popup-error.png';
        } else if (type === 'info') {
            iconElem.src = '<?php echo SITE_URL; ?>assets/images/popup-error.png';
        }
        else if (type === 'time') {
            iconElem.src = '<?php echo SITE_URL; ?>assets/images/popup-time.png';
        }
        popupBox.style.display = 'flex';
    }

    // Function to hide the popup
    function hidePopup() {
        popupBox.style.display = 'none';
    }

    // Event listener for the close icon
    closeIcon.addEventListener('click', hidePopup);

    // Example usage: Show the popup with a custom message
    // showPopup('Your action was successful!');

</script>


<style>
    div#popup-box {
    position: fixed;
    background-color: #191270d4;
    width: 100vw;
    height: 100vh;
    display: flex;
    top:0;
    align-items: center;
    justify-content: center;
    text-align: center;
    backdrop-filter: blur(7px);
    z-index: 9999;
}
button#continueBtnpopup {
    padding: 10px 50px 12px;
    margin-top: 20px;
}
img#popup-icon {
    width: 110px;
    margin-bottom: 30px;
}
div#popup-box .box-pop {
    background: white;
    padding: 40px 40px;
    max-width: 450px;
    width: 100%;
    min-width: 340px;
    position: relative;
    border-radius: 23px;
    min-height: 290px;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
}

div#popup-box .box-pop h4.title {
    font-weight: 600;
}

div#popup-box .box-pop .closeicon {
    position: absolute;
    right: 20px;
    top: 20px;
}

div#popup-box .box-pop .closeicon i {
    font-size: 28px;
    font-weight: 800;
}

</style>