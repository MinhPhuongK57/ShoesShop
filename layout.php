<?php
    if($isIndex == true)
    {
        include $level.com__path.'head__index.php';
    }
    if($isProducts == true)
    {
        include $level.com__path.'head__products.php';
    }
    if($isDetails == true)
    {
        include $level.com__path.'head__details.php';
    }
    if($isRegister == true)
    {
        include $level.com__path.'head__register.php';
    }
    if($isContact == true)
    {
        include $level.com__path.'head__contact.php';
    }
    if($isLogin == true)
    {
        include $level.com__path.'head__login.php';
    }
    if($isChangeAccount == true)
    {
        include $level.com__path.'head__change-account.php';
    }
    //Header__website
    include $level.hea__path.'top__header.php';
    include $level.hea__path.'mid__header.php';
    include $level.hea__path.'bottom__header.php';
    //Header__website/
    
    //Index
    if($isIndex == true)
    {
        include $level.com__path.'index__slider.php';
        include $level.com__path.'index__price-rage.php';
        include $level.com__path.'index__content--left.php';
        include $level.com__path.'index__content--right.php';
    }

    //Products
    if($isProducts == true)
    {
        include $level.com__path.'products__content--left.php';
        include $level.com__path.'products__content--right.php';
        include $level.com__path.'products__list-items.php';
    }

    //Details
    if($isDetails == true)
    {
        include $level.com__path.'details__product--slider.php';
        include $level.com__path.'details--left__info.php';
        include $level.com__path.'details--right.php';
        include $level.com__path.'details__product--listpreview.php';
    }

    //Register
    if($isRegister == true)
    {
        include $level.com__path.'register__content.php';
    }

    //Contact
    if($isContact == true)
    {
        include $level.com__path.'contact__info.php';
    }

    //Login
    if($isLogin == true)
    {
        include $level.com__path.'login__content.php';
        include $level.com__path.'login__content--left.php';
        include $level.com__path.'login__content--right.php';
    }
    if($isChangeAccount == true)
    {
        include $level.com__path.'account__content.php';
    }
    //Footer__website
    include $level.com__path.'bottom-content__info.php';
    include $level.foo__path.'footer.php';
    //Footer__website/
?>