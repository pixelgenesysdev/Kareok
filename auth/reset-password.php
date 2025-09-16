 <?php include 'includes/header.php'; ?>



<div class="col-md-6 firstcol align-items-center d-flex p-0 text-center justify-content-center">
    <div class="firstcol-wrapper">
        <div class="firstcol-box">
            <img src="./assets/img/forgot-icon.png" alt="forgot-icon" class="forgot-icon">
            <h2>Set New Password!</h2>
             <p>Must be at least 8 characters</p>
             
             <form class="signup-form form">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-lock"></i>
                            <div class="pass-box">
                                <input type="password" id="password" class="password22 toggle-password" required placeholder="Enter password">
                                <i class="fa-solid fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-lock"></i>
                            <div class="pass-box">
                                <input type="password" id="passwordConfirm"  class="password-confirm toggle-password" required placeholder="Enter password">
                                <i class="fa-solid fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
            </form>
            <button 
               id="continueBtnreset" 
               type="submit" 
               class="btn btn-primary"  >

               Reset Password</button>

            
        </div>
    </div>
</div>

<script>
const buttonreset = document.getElementById('continueBtnreset');
const passwordcheck1 = document.getElementsByClassName('password22')[0];
const passwordcheck2 = document.getElementsByClassName('password-confirm')[0];
console.log(passwordcheck1.value);

buttonreset.addEventListener('click', () => {
    const passVal = passwordcheck1.value.trim();
    const confirmVal = passwordcheck2.value.trim();
console.log(passVal);
    if (passVal === '' || confirmVal === '') {
        showPopup(
            'Please fill out all fields.', 
            'error', 
            'Error', 
            'OK',
            '#'
        );
    } else if (passVal !== confirmVal) {
        showPopup(
            'Passwords do not match, please try again.', 
            'error', 
            'Error', 
            'OK',
            '#'
        );
    } else {
        showPopup(
            'Your password has been changed successfully. Use your new password to login.', 
            'success', 
            'Password Updated!', 
            'Login',
            './welcome.php'
        );
    }
});

    



</script>


<?php include 'includes/footer.php'; ?>
