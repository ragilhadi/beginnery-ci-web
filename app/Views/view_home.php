<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?=base_url('styles/reset.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/home/home.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/globalcss.css');?>">
    <!-- <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/home/home.css">
    <link rel="stylesheet" href="styles/globalcss.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            <?php if (logged_in()) : ?>
                <a class="link" href='/blog'>Dashboard</a>
                <a class="link" href='/logout'>Logout</a>
            <?php else: ?>
                <a class="link" href='/login'>Login</a>
            <?php endif; ?>
        </div>
    </nav>
    <div class="home-header">
        <img src='<?=base_url('src/img/huda.png');?>' alt='huda ahmad' class='huda-img'/>
        <!-- <img src='src/img/huda.png' alt='huda ahmad' class='huda-img'/> -->
        <div class='header-container'>
            <h1 class="text-header">
                Find your <span class="key">Passion</span>,<br/>
                Follow your <span class="notable">Future.</span>
            </h1>
            <p class="text-description">
                Educational Platform for beginners who are interested in creative Industry!
            </p>
            <button class="button-primary">
                Shall We Begin
            </button>
        </div>
    </div>
    <div class="welcome-container">
        <div class="text-welcome-container">
            <h2>
                Selamat datang di <br/>
                <span class="key">Beginnery</span> &#x2015
            </h2>
            <p text-description>
                Beginnery adalah platform pendidikan bagi kalian yang ingin mempelajari industri kreatif. Disini, anda dapat menemukan minat melalui konten pendidikan online yang dikemas menarik dan yang terpenting GRATIS!
            </p>
        </div>
        <img src='<?=base_url('src/img/beginnery.png');?>' alt='beginnery' class="beginnery-img" />
        <!-- <img src='src/img/beginnery.png' alt='beginnery' class="beginnery-img" /> -->
    </div>
    <div class="class-container">
        <h2>Class Showcase</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, aspernatur.</p>
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