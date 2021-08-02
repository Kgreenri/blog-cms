<html>
<head>
<title>
Week 3 Assignment - Blog
</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<header>
</header>
<nav>
    <a href="index.php">HOME</a>
    <a href="post.php">POST</a>
    <a href="post-submission.php">SUBMISSION</a>
</nav>
<main>
    
    <?php
      function getPostDetailsFromDatabase() {
        $postDetails = array('title' => 'Blog Post 1',
                            'content' => 'My first blog post',
                            'date' => '01/01/2018',
                            'author' => 'christikaes');
        
                            return $postDetails;
      }
    ?>

  <?php
    $postDetails = getPostDetailsFromDatabase();
  ?>
  <h1> <?php echo $postDetails["title"]; ?> </h1>
  <div> <?php echo $postDetails["author"]; ?> </div>
  <div> <?php echo $postDetails["date"]; ?> </div>
  <div> <?php echo $postDetails["content"]; ?> </div>
</main>
<footer>
</footer>


</body>
</html>