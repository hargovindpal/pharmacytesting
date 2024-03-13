<?php include "./public/header.php"; ?>


     <div class="card-container">
        <div class="item">
            <i class="fa-solid fa-location-dot"></i>
            <h4>OUR MAIN OFFICE</h4>
            <p>582, Kochabhawar Kanpur Road,</p>
            <p>Jhansi-284128</p>
        </div>
        <div class="item">
            <i class="fa-solid fa-phone"></i>
            <h4>PHONE NUMBER</h4>
            <p>9889094094 / 7318027770</p>
            <p>7348550088</p>
        </div>
        
        <div class="item">
            <i class="fa-solid fa-envelope"></i>
            <h4>E-MAIL</h4>
            <p>moderncollegeofpharmacyjhansi@gmail.com</p>
            <p>mpsjhansiup@gmail.com</p>
        </div>
     </div>
     <div class="reach-wrapper"> 
        <form  class="content">
            
            <div class="form-group">
                <h1>CONTACT FORM</h1>
                <div class="row">
                    <input type="email" name="email" id="email" placeholder="" autofocus>
                    <label for="email" >Your Email</label>
                </div>
            <div class="row">
                <input type="text" name="name" id="name" class="text-field" placeholder="">
                <label for="name">Your Name</label>
            </div>
            </div>
            <div class="form-group">
            <div class="row">
                <input type="text" name="contact" id="contact" placeholder="">
                <label for="contact">Contact</label>
            </div>
            </div>
            <div class="form-group">
                <div class="row">
                <textarea type="text" name="name" id="txtarea" cols="85" rows="6" placeholder=""></textarea>
                <label for="name">Message</label>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                <button type="submit" value="submit" class="submit-btn">Submit</button>
                </div>
            </div>
        </form>

        <div class="content">
                <h1>REACH US</h1>
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14408.702390040853!2d78.62610628056228!3d25.46581136985873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39777649b45b17b1%3A0x16465ccd417586a8!2sModern%20College!5e0!3m2!1sen!2sin!4v1708759571682!5m2!1sen!2sin"
                         allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>


    <?php include "./public/footer.php"; ?>