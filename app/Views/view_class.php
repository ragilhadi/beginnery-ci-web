<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?=base_url('styles/reset.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/class/class.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/globalcss.css');?>">
    <!-- <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/globalcss.css">
    <link rel="stylesheet" href="styles/class/class.css"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
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
                <?php if(in_groups('user')) : ?>
                <a class="link" href='/blog/dashboard'>Dashboard</a>
                <?php endif; ?>
                <?php if(in_groups('admin')) : ?>
                <a class="link" href='/blog/admin'>Dashboard</a>
                <?php endif; ?>
                <a class="link" href='/logout'>Logout</a>
            <?php else: ?>
                <a class="link" href='/login'>Login</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="class-wrapper">
        <div class="text-wrapper">
            <h1>
                Kelas Yang Tersedia <br/>
                Di <span class="key">Beginnery</span>
            </h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
            </p>
        </div>
        <img src='<?=base_url('src/img/classes.png');?>' alt='class-img' class="classes-img" />
        <!-- <img src='src/img/classes.png' alt='class-img' class="classes-img" /> -->
    </div>

    <div class="class-container">
        <h2>Class Showcase</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, aspernatur.</p>
        <div class="class-flexbox">
                    <div class='class-card'>
                        <div class='card-image'>
                            <img src="<?=base_url('src/icon/graphic-cycle.png');?>" class='icon' alt='graphic-cycle' />
                        </div>
                        <div class='card-description'>
                            <h4>Graphic Cycle : Graphic Design</h4>
                            <p>
                            Kelas design grafis untuk anda yang tertarik belajar design grafis, atau kalian yang memiliki usaha tetapi belum mengerti cara bikin logo,  kemasan dan pemasaran menarik.
                            </p>
                            <a href="/home/designClass">
                                <button class='button-primary'>Learn More</button>
                            </a>
                        </div>
                    </div>

                    <div class='class-card'>
                        <div class='coming-soon'>
                            <img src="<?=base_url('src/icon/Winner.png');?>" class='icon' alt='graphic-cycle' />
                        </div>
                        <div class='card-description'>
                            <h4>Winner : Web Develop for Beginner</h4>
                            <p>
                            Kelas Web Developer Online akan mempelajari semua aspek dalam Web Develop dari nol. Kelas terdiri dari beberapa session dari cara kerja web, design web dan database.
                            </p>
                            <button class='button-disabled'>Learn More</button>
                        </div>
                    </div>

                    <div class='class-card'>
                        <div class='coming-soon'>
                            <img src="<?=base_url('src/icon/Monolog.png');?>" class='icon' alt='graphic-cycle' />
                        </div>
                        <div class='card-description'>
                            <h4>Monologic : Let’s Talk</h4>
                            <p>
                            Konten monolog  akan membahas segala hal yang terjadi saat ini menurut sudut pandangan beginnery. Terdapat beberapa seri dengan topik, mengajarkan public speaking dengan cara yang berbeda.
                            </p>
                            <button class='button-disabled'>Learn More</button>
                        </div>
                    </div>

                    <div class='class-card'>
                        <div class='coming-soon'>
                            <img src="<?=base_url('src/icon/Creating.png');?>" class='icon' alt='graphic-cycle' />
                        </div>
                        <div class='card-description'>
                            <h4>Creating : Creative Marketing</h4>
                            <p>
                            Kelas Sharring yang membahas ilmu basic marketing dan kreatif. Mempelajari tips and trick pemasaran modern dan persaingan didunia bisnis.
                            </p>
                            <button class='button-disabled'>Learn More</button>
                        </div>
                    </div>
        </div>
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