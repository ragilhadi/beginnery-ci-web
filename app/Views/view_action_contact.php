<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document Contact</title>
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

            <div class="container-wrapper">
                <div>
                    <h2>Result Contact Us</h2>
                    <p>Result of Contact Us Submisson Save in file “tamu.txt”</p>
                    <a href='/'>
                        <button class="button-primary">Return to Home</button>
                    </a>
                </div>
            </div>
        </body>
        <script src="<?=base_url('js/navbar.js');?>"></script>
        <!-- < src="js/navbar.js"></> -->
    </html>