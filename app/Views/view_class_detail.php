<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('styles/reset.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/detail/detail.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/globalcss.css');?>">
    <!-- <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/globalcss.css">
    <link rel="stylesheet" href="styles/detail/detail.css"> -->
    <title>Detail Class</title>
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
                        Graphic Cycle : Graphic Design &#x2015
                    </h1>
                    <p>
                    Kelas design grafis untuk anda yang tertarik belajar design grafis, atau kalian yang memiliki usaha tetapi belum mengerti cara bikin logo,  kemasan dan pemasaran menarik.
                    </p>
                    <div class="button-container">
                        <a href="/blog/designCycle">
                            <button class="button-primary">Learn Now</button>
                        </a>
                        <a href="#content">
                        <button class="button-secondary">Explore Now</button>
                        </a>
                    </div>
                </div>
                <img src="<?=base_url('src/img/graphicCycle.png');?>" alt='class-img' class="classes-img" />
            </div>

            <div class="class-description" id="content">
                <img src="<?=base_url('src/img/design.jpg');?>" class="class-img" alt="class-design" />
                <div class="class-text">
                    <h2>Kelas apa ini ?</h2>
                    <p>
                    Disini kamu akan belajar menguasai tools Adobe Illustrator secara detail hingga belajar praktek mengikuti membuat desain dari sejumlah studi kasus yang sudah disediakan di kelas ini. Materi di kelas ini disusun dari dasar dan terstruktur agar mudah dipaham
                    </p>
                    <div class="class-icon">
                        <div class="icon-flex">
                            <h4>Format Kelas</h4>
                            <div class="icon-horizontal">
                                <img src="<?=base_url('src/icon/icon-video.png');?>" class="icon" alt="icon" />
                                <!-- <img src="src/icon/icon-video.png" class="icon" alt="icon" /> -->
                                <p>Video Online</p>
                            </div>
                        </div>

                        <div class="icon-flex">
                            <h4>Harga Kelas</h4>
                            <div class="icon-horizontal">
                                <img src="<?=base_url('src/icon/icon-dollar.png');?>" class="icon" alt="icon" />
                                <!-- <img src="src/icon/icon-dollar.png" class="icon" alt="icon" /> -->
                                <p>Free</p>
                            </div>
                        </div>

                        <div class="icon-flex">
                            <h4>Kapasitas Kelas</h4>
                            <div class="icon-horizontal">
                                <img src="<?=base_url('src/icon/icon-people.png');?>" class="icon" alt="icon" />
                                <!-- <img src="src/icon/icon-people.png" class="icon" alt="icon" /> -->
                                <p>200</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="class-user">
                <div class="user-text">
                    <h2>Untuk siapa kelas ini ?</h2>
                    <p>Kelas design grafis untuk anda yang tertarik belajar design grafis, atau kalian yang memiliki usaha tetapi belum mengerti cara bikin logo,  kemasan dan pemasaran menarik.</p>
                </div>
                <img src="<?=base_url('src/img/graphic-designer.jpg');?>" class="user-img" alt="user-img" />
            </div>

            <div class="class-mentor">
                <h2>Siapa yang mengajar ?</h2>
                <p>Kenali Mentor kami yang sudah berpengalaman pada bidangnya</p>
                <img src='<?=base_url('src/img/huda.png');?>' class="mentor" alt="mentor" />
                <h3>Hudaahmad Hidayatullah</h3>
                <p>Seorang yang berkeininan menjadi raja bajak laut</p>
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