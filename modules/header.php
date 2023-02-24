<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/627a778e11.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Beterzitten | <?php echo ucfirst($currentPage) ?></title>
</head>

<body>
    <header class="<?php if($_404Page) echo'd-none';?>">
    <?php echo $_404Page;?>
        <nav class="navbar navbar-expand-lg container">
            <div class="container-fluid">
                <a class="navbar-brand" href="?page=home">Beterzitten</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link text-white" href="?page=home">Home</a>
                        <a class="nav-link text-white" href="?page=contact">Contact</a>
                        <?php
                            if ($loggedIn)
                            {
                                echo '<a class="nav-link text-white" href="?page=login">Uitloggen</a>';
                            } else {
                                echo '<a class="nav-link text-white" href="?page=login">Inloggen</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </nav>

        
    </header>
    <main class="bg-white">
        