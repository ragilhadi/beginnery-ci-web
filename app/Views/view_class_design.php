<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('styles/reset.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/class-post/class-post.css');?>">
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
        </div>
    </nav>

    <div class="class-wrapper">
                <div class="text-wrapper">
                    <h1>
                        Design Cycle
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt assumenda vel consequuntur accusantium, optio autem.
                    </p>
                </div>
            <img src='<?=base_url('src/img/graphicCycle.png');?>' alt='class-img' class="classes-img" />
    </div>

    <h2 class="sub-title">Class Content</h2>

    
    
    <div class='posts-list'>
        <?php foreach($artikel as $row):?>
            <a href="post/<?=$row['id'];?>" class="wrapper-post">
                <div class="post-container">
                    <h4><?=$row['judul'];?></h4>
                    <p><?=$row['isi'];?></p>
                </div>
            </a>
        <?php endforeach;?>
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