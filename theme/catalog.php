<?php
include "config/config.php";



?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <script src="https://kit.fontawesome.com/0e58e287aa.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="headerMenu container">
            <div class="logoGroup">
                <a href="index.html"><img src="img/Group 2.svg" alt="logo"></a>
                <form action="###"><img src="img/Forma 1.svg" alt="search"></form>
            </div>
            <div class="burgerGroup">
                <a href="#"><img src="img/burger.svg" alt="menu"></a>
                <a href="#"><img src="img/Forma 1-1.svg" alt="login"></a>
                <a href="#"><img src="img/Forma 1-2.svg" alt="basket"></a>
            </div>
        </div>
    </header>
    <div class="breadcrumb">
        <div class="newArrivals">
            <a href="#" class="newArrivalsLink">NEW ARRIVALS</a>
        </div>
        <div class="breadcrumb_menu">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Men</a></li>
                    <li class="breadcrumb-item active" aria-current="page">NEW ARRIVALS</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="container">
        <div class="filterBox">
            <div class="filter">
                <details>
                    <summary>
                        <p class="filter_text">FILTER</p>

                        <img class="filter__img" src="img/filter.svg" alt="filterImg">
                        <img class="filter__img filter_imgRed" src="img/filterRed.png" alt="filterImgRed">
                    </summary>
                    <div class="detailsDox">
                        <details class="dropDetails">
                            <summary class="summaryHeader">CATEGORY

                            </summary>
                        </details>
                        <details class="dropDetails">
                            <summary class="summaryHeader">BRAND

                            </summary>
                        </details>
                        <details class="dropDetails">
                            <summary class="summaryHeader">DESIGNER

                            </summary>
                        </details>
                    </div>
                </details>

            </div>
            <div class="dropdownMenu">

                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        TRENDING NOW
                                        <div class="imgBox">
                                            <img class="dropImage" src="img/Vector.png" alt="arrow">
                                        </div>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        SIZE
                                        <div class="imgBox">
                                            <img class="dropImage" src="img/Vector.png" alt="arrow">
                                        </div>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        PRICE
                                        <div class="imgBox">
                                            <img class="dropImage" src="img/Vector.png" alt="arrow">
                                        </div>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>


            </div>
            <div class="invisibleBlock"></div>

        </div>
        <div class="items_box">
            <?php
            foreach ($row as $rows){?>
            <div class="item_card">
                <a href="#" class="item-link">
                    <img class="item_img" src="img/<?= $rows['image']?>"> 
                    <div class="txt-box">
                        <h2 class="card_heading"><?= strtoupper($rows['title'])?></h2>
                        <div class="card_description"><?= $rows['description']?></div>
                        <div class="card_price">RUR<?= $rows['price']?></div>
                    </div>
                    <div class="add-box">
                        <a href="#" class="add">
                            <img class="add-img" src="img/Forma 1-2.svg" alt="cart">
                            <p class="add-txt">Add to Cart</p>
                        </a>
                    </div>
            </div>
        <?php
        
    }
        ?>
            
        </div>
        <a href="?contr=catalog&act=show&param=<?=$count+3?>" class="browseLink">
            <button class="browseButton">Show more...</button>
        </a>
            </section>
    <footer>
        <div class="upper">
            <div class="footer container">
                <div class="footHeader delivery">
                    <img src="img/Forma 1.png" height="40px" alt="delivery">
                    <h4 class="footerHead">Free Delivery</h4>
                    <p class="footerHead footHeadText">Worldwide delivery on all. Authorit tively morph next-generation
                        innov tion
                        with
                        extensive models.</p>
                </div>
                <div class="footHeader discount">
                    <img src="img/Forma 1-1.png" alt="discount">
                    <h4 class="footerHead">Sales & discounts</h4>
                    <p class="footerHead footHeadText">Worldwide delivery on all. Authorit tively morph next-generation
                        innov tion
                        with
                        extensive models.</p>
                </div>
                <div class="footHeader assurance">
                    <img src="img/Forma 1-2.png" height="40px" alt="assurance">
                    <h4 class="footerHead">Quality assurance</h4>
                    <p class="footerHead footHeadText">Worldwide delivery on all. Authorit tively morph next-generation
                        innov tion
                        with
                        extensive models.</p>
                </div>
            </div>


        </div>
        <div class="middle">
            <div class="middle_bg"></div>
            <div class="feedback">
                <div class="FBfigure">
                    <img src="img/Intersect.png" alt="feedback photo" class="feedbackImage">
                    <p class="feedback_text">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus
                        condimentum“</p>
                </div>
            </div>
            <div class="subscribe">
                <h5>SUBSCRIBE</h5>
                <p class="subscribe_text">FOR OUR NEWSLETTERS AND PROMOTION</p>
                <div class="subscribeBox">
                    <form action="#" class="subscribeForm">
                        <input type="email" class="leftSub" placeholder="Enter Your Email">
                        <button class="rightSub">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="bottom container">
                <div class="copyright">&copy; 2021 All rights reserved</div>
                <div class="icons">
                    <div class="icon-box"><i class="fab fa-facebook-f"></i></div>
                    <div class="icon-box"><i class="fab fa-instagram-square"></i></div>
                    <div class="icon-box"><i class="fab fa-pinterest-p"></i></div>
                    <div class="icon-box"><i class="fab fa-twitter"></i></div>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>
</body>

</html>