<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cheemy</title>
  <!-- <link rel="stylesheet" href="./style.css" type="text/css"> -->
  <style>
    body {
      padding: 0;
      margin: 0;
      font-size: 18px;
      background-color: gold;
      color: #000;
    }

    a {
      text-decoration: none;
    }

    ul {
      padding: 0;
      list-style: none;
    }

    .container {
      width: 90%;
      max-width: 800px;
      margin: 0 auto;
      padding: .5rem;
    }

    .center {
      text-align: center;
    }

    nav {
      background-color: #fff;
      /* position: fixed;
      top: 0;
      left: 0; */
      width: 100%;
    }

    nav .container {
      display: flex;
      justify-content: space-between;
      align-items: center;

    }

    .brand {
      font-size: 2rem;
      color: gold;
      font-weight: 700;
    }

    .nav-link {
      color: #fff;
      background-color: gold;
      font-size: 1.25rem;
      padding: .25rem 1rem;
      font-weight: 500;
    }

    footer p {
      color: #fff;
      text-align: center;
      font-size: 1.1rem;
    }

    form {
      max-width: 460px;
      margin: 0 auto;
    }

    form input {
      display: block;
      width: 100%;
      padding: .5rem 1rem;
      margin: .25rem 0;
      border: none;
      font-size: 1.1rem;
    }

    .button {
      cursor: pointer;
      padding: .5rem 1rem;
      width: max-content;
      font-size: 1.25rem;
      margin: .5rem auto;
      display: block;
      color: #fff;
      background-color: #000;
      border: none;
    }

    .error {
      color: red;
      font-size: 1.25rem;
    }

    main .container h2 {
      text-align: center;
      width: 100%;
    }

    main#home > .container {
      display: flex;
      justify-content: flex-start;
      flex-wrap: wrap;
      align-items: flex-start;
    }

    .cheemy {
      width: 45%;
      background-color: #fff;
      padding: 5px 20px;
      box-sizing: border-box;
      margin: 10px;
      border-radius: 10px;
    }

    .see-more {
      color: gold;
      display: block;
      width: 100%;
      text-align: right;
      font-weight: bold;
    }

    .tag {
      font-size: .75rem;
      padding: .25rem .5rem;
      line-height: 2.25rem;
      margin-bottom: .5rem;
      border: 1px solid gold;
      border-radius: 5px;
      display: inline;
      cursor: pointer;
    }

    .white-border {
      border: 2px solid #fff;
    }

    .error-404 {
      text-align: center;
    }

    .cheemy-img {
      width: 300px;
      float: right;
      margin: .5rem 2rem;
    }
  </style>
</head>

<body>
  <nav>
    <div class="container">
      <a href="index.php" class="brand">swole dodge cheemy</a>

      <ul class="nav-links">
        <li><a href="add.php" class="nav-link">Add cheemy</a></li>
      </ul>
    </div>
  </nav>