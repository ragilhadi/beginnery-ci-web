<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="<?=base_url('styles/reset.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/contact/contact.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/globalcss.css');?>">
    <!-- <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/globalcss.css">
    <link rel="stylesheet" href="styles/contact/contact.css"> -->
</head>
<body>
    <nav class="navbar" id="nav">
        <div class="logo">
            <img src='<?=base_url('src/icon/beginnery_icon.png');?>' class='icon' alt='beginnery_icon' />
            <!-- <img src='src/icon/beginnery_icon.png' class='icon' alt='beginnery_icon' /> -->
        </div>
        <div class="links">
            <a class="link" href="/">Home</a>
            <a class="link" href="/home/class">Class</a>
            <a class="link" href='/home/contact'>Contact Us</a>
        </div>
    </nav>

    <div class="contact-container">
        <div class="contact-description">
            <h1>Contact Us</h1>
            <p>
                Beginnery adalah platform pendidikan bagi kalian yang ingin mempelajari industri kreatif. Disini, anda dapat menemukan minat melalui konten pendidikan online yang dikemas menarik dan yang terpenting GRATIS!
            </p>
            <div class="contact">
                <div class="contact-flex">
                    <img src="<?=base_url('src/icon/call.png');?>" alt="icon-contact" />
                    <!-- <img src="src/icon/call.png" alt="icon-contact" /> -->
                    <p>+62812345678</p>
                </div>
                <div class="contact-flex">
                    <img src="<?=base_url('src/icon/mail.png');?>" alt="icon-contact" />
                    <!-- <img src="src/icon/mail.png" alt="icon-contact" /> -->
                    <p>beginnery@mail.com</p>
                </div>
                <div class="contact-flex">
                    <img src="<?=base_url('src/icon/map.png');?>" alt="icon-contact" />
                    <!-- <img src="src/icon/map.png" alt="icon-contact" /> -->
                    <p>Jl. Pegangsaan Timur No. 48</p>
                </div>

            </div>
        </div>

        <form class="contact-form" action="action-contact.php" method="post">
            <label>Nama</label>
            <input type="text" name="username" />
            <label>Email</label>
            <input name="email" type="email"/>
            <label>Message</label>
            <textarea class="text-area" name="message"></textarea>
            <button class="button-primary">Send Message</button>
        </form>

    </div>

    <div class="footer">
        <h1 class="footer-header">Unlock Your Full Potential.</h1>
        <div class="footer-wrapper">
            <div class="logo">
                <img src="<?=base_url('src/icon/beginnery_bw.png');?>" class="beginnery" alt="beginnery" />
                <!-- <img src="src/icon/beginnery_bw.png" class="beginnery" alt="beginnery" /> -->
                <p>Copyright oleh Team 7 Konohagakure</p>
            </div>
            <div class="social">
                <img src="<?=base_url('src/icon/ig.png');?>" class="icon" alt="icons" />
                <img src="<?=base_url('src/icon/twt.png');?>" class="icon" alt="icons" />
                <img src="<?=base_url('src/icon/fb.png');?>" class="icon" alt="icons" />
                <!-- <img src="src/icon/ig.png" class="icon" alt="icons" />
                <img src="src/icon/twt.png" class="icon" alt="icons" />
                <img src="src/icon/fb.png" class="icon" alt="icons" /> -->
            </div>
        </div>
    </div>
</body>
<script src="<?=base_url('js/navbar.js');?>"></script>
<!-- <script src="js/navbar.js"></script> -->


</html>