<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  PDO:
  PHP DATA OBJECT (PHP EXTENSION)
  UNLIKE MYSQLI CAN BE USED WITH DIFFERENT DATABASE LANGUAGES
  DATA ACCESS LAYER
  OBJECT ORIENTED
  <a href="">->security/prepared statements</a>
  <a href="">->reusability</a>
  <a href=""></a>->Excellent error handling<a href=""></a>

  <h2>Main PDO Classes</h2>
  <ul>
    <li>PDO -Represents connection between PHO&DB</li>
    <li>PDOStatement -Represents a prepared statement and after executed an associated result</li>
    <li>PDOException -Represents errors raised by PDO</li>
  </ul>
  <h3>connexion:</h3>
  <p>$host = 'localhost';</p>
  <p>$user = 'root';</p>
  <p>$password = '';</p>
  <p>$dbname = 'pdo_post';</p>
  <p>// set DSN = 'DATA SOURCE NAME'</p>


  <?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'pdo_post';
  //set DSN
  //mysql = the driver we use
  $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
  //create a PDO instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

  #PRDO QUERY
  // $stmt = $pdo->query('SELECT * FROM POST');
  // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //   echo $row['title'] . '<br>';
  // }
  // OU
  // while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
  //   echo $row['title'] . '<br>';
  // }
  // produces => Fatal error: Uncaught Error: Cannot use object of type stdClass as array
  // can't take an object and use it as an array
  //must do row->title
  // while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
  //   echo $row->title . '<br>';
  // }

  //if we always want to get data from the db the same way, the manner can be specified as an attribute
  //   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  // now the returned value from fetch() will by default be objects
  // =>
  // while ($row = $stmt->fetch()) {
  //   echo $row->title . '<br>';
  // }
  //this can be overriden by specifying the fetch mode as used before

  #PREPARED STATEMENTS (prepare and execute)

  //FETCH MULTIPLE POSTS
  //user input
  $author = 'Zak';
  $is_published = true;
  $id = 1;
  $limit = 1;
  // 1 -Positional Params
  // $sql = ('SELECT * FROM post WHERE author = ?');
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute([$author]);
  // $posts = $stmt->fetchAll();
  // var_dump($posts);

  //limit the amount of results
  // pour ne pas faire  LIMIT 1 il faut désactiver l'émulation
  $sql = ('SELECT * FROM post WHERE author = ? && is_published = ? LIMIT ?');
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(1, $author, PDO::PARAM_STR);
  $stmt->bindParam(2, $is_published, PDO::PARAM_BOOL);
  $stmt->bindParam(3, $limit, PDO::PARAM_INT);
  $stmt->execute();
  $posts = $stmt->fetchAll();
  var_dump($posts);

  //OR
  //2 -Named Params
  // $sql = ('SELECT * FROM post WHERE author = :author');
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['author' => $author]);
  // $posts = $stmt->fetchAll();
  // var_dump($posts);

  //Named Params for multiple params:
  // $sql = ('SELECT * FROM post WHERE author = :author && is_published = :is_published');
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['author' => $author, 'is_published' => $is_published]);
  // $posts = $stmt->fetchAll();
  // var_dump($posts);

  //FETCH SINGLE POST
  // $sql = ('SELECT * FROM post WHERE id = :id');
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // $post = $stmt->fetch();
  // var_dump($post);
  // echo '<br>';
  // echo $post->body;

  //GET ROW COUNT
  // $stmt = $pdo->prepare('SELECT * FROM post WHERE author = ?');
  // $stmt->execute([$author]);
  // $postCount = $stmt->rowCount();
  // echo $postCount;

  //INSERT DATA
  // $title = 'Post Five';
  // $body = 'This is post five';
  // $author = 'Kevin';
  // $sql = 'INSERT INTO post(title, body, author) VALUES(?,?,?)';
  // $sth = $pdo->prepare($sql);
  // $sth->bindParam(1, $title, PDO::PARAM_STR);
  // $sth->bindParam(2, $body, PDO::PARAM_STR);
  // $sth->bindParam(3, $author, PDO::PARAM_STR);
  // $sth->execute();
  // echo 'post added';

  //UPDATE DATA 
  // $id = 1;
  // $body = 'This is the updated post';
  // $sql = 'UPDATE post SET body = ? WHERE id = ?';
  // $sth = $pdo->prepare($sql);
  // $sth->bindParam(1, $body, PDO::PARAM_STR);
  // $sth->bindParam(2, $id, PDO::PARAM_INT);
  // $sth->execute();
  // echo 'post updated';

  //DELETE DATA
  // $id = 3;
  // $sql = 'DELETE FROM post WHERE id = ?';
  // $sth = $pdo->prepare($sql);
  // $sth->bindParam(1, $id, PDO::PARAM_INT);
  // $sth->execute();
  // echo 'post deleted';

  // SEARCH DATA 
  // $search = '%post%';
  // $sql = 'SELECT * FROM post WHERE title LIKE ?';
  // $stmt = $pdo->prepare($sql);
  // $stmt->bindParam(1, $search, PDO::PARAM_STR);
  // $stmt->execute();
  // $posts = $stmt->fetchAll();
  // foreach ($posts as $post) {
  //   echo $post->title . '<br>';
  // }
  ?>

</body>

</html>