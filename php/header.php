<header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.php">
                        <span> Teamups </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Trang chủ </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="laptop.php">
                                    Laptops <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> Giới thiệu </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Liên hệ</a>
                            </li>
                        </ul>
                        <div class="user_option-box">
                            <?php
                                if (isset($_SESSION["username"])) {
                                echo '<a href="./login/users_info.php" style="text-transform: none;">';
                                echo $_SESSION["username"];
                                echo'</a>';
                                echo  '<a href="./login/logout.php">
                                            <i class="fa fa-sign-out"></i>
                                            </a>';
                                } else
                                echo '<a href="./login/login.php">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </a>' ;
                            ?>
                            <a href="cart.php" class="nav-item nav-link active">
                                <i class="fa fa-cart-plus"></i>
                                <?php

                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\" class=\"text-black bg-light\">$count</span>";
                            }else{
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                            }

                        ?>
                            </a>
                            <a href=""></a>
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <div class="search-box">
                                <form action="">
                                    <input type="text" placeholder="" />
                                    <input type="submit" value="Search" />
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        