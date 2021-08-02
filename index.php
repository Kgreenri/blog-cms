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
        function getPostTitlesFromDatabase() {
            //TODO in Module 4
            // get this data from database instead of hardcoding it
            $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
            return $postTitles;
        }
    ?>

<ul>
    <?php
        $postTitles = getPostTitlesFromDatabase();

        foreach($postTitles as $postTitle) {
            echo "<li><a href='post.php'>" . $postTitle . "</a></li";
        }
    ?>
</ul>

echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "'>" . $postTitle . "</a></l1>";
</main>
<footer>
</footer>


</body>
</html>