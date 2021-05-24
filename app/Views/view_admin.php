<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
    <link rel="stylesheet" href="<?=base_url('styles/reset.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/dashboard/admin.css');?>">
    <link rel="stylesheet" href="<?=base_url('styles/globalcss.css');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar-not-conflict" id="nav">
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
    <div class="admin-container">
        <div class="admin-text">
            <h2>Beginnery Design Class <span class="key">Admin Panel</span></h2>
        </div>
        <div class="button-container">
            <a href="/blog/form"> 
                <button  class="button-primary">Input Data</button>
            </a>
            <a href="/blog/dashboard">
                <button  class="button-secondary">Dashboard User</button>
            </a>
        </div>
                <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('berhasil');?>
                    </div>
                <?php } ?>
                
                <?php 
                    $errors = $validation->getErrors();
                    if(!empty($errors))
                    {
                        echo $validation->listErrors();
                    }
                ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                        <?php foreach($artikel as $row):?>
                    <tr>
                        <td><?=$row['id'];?></td>
                        <td><?=$row['judul'];?></td>
                        <td><?php
                            if (!empty($row["gambar"])) {
                                echo '<img src="'.base_url("assets/images/$row[gambar]").'" width="100">';
                            }
                        ?></td>
                        <td>
                            <a href="/blog/post/<?=$row['id'];?>" class="btn btn-success">View</a> | 
                            <a href="/blog/form_edit/<?=$row['id'];?>" class="btn btn-primary">Edit</a> | 
                            <a href="/blog/hapus/<?=$row['id'];?>" class="btn btn-danger">Hapus</a> 
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
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
</html>