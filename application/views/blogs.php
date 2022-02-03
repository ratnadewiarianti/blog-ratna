<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Artikel Terbaru</h1>
    <h3>
    <a href="<?= site_url ('blog/add');?>"> + Tambah Artikel </a>
    <br>
    <form>
        <input type="text" name="find">
        <button type="submit">Cari</button>
    </form>
    </h3>
    
    <?php foreach($blogs as $key => $blog) :?>
    <div class="blog">
        <h2>
            <a href="<?= site_url ('blog/detail/'.$blog['url']); ?>"><?=$blog['title']; ?></a>
        </h2>
        <h3>
        <a href="<?= site_url ('blog/edit/'.$blog['id']);?>"> Edit </a>
        
        <a href="<?= site_url ('blog/delete/'.$blog['id']);?>"> Delete  </a>
        </h3>    
    <?= $blog['content']; 
     endforeach; ?>
</body>
</html>
