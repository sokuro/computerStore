<?php
//    define("ROOT", realpath($_SERVER["DOCUMENT_ROOT"]));
    require_once(ROOT."/Views/Shared/header.php");
?>

<!--<!DOCTYPE html>-->
<!--<html>-->
<!--    <head>-->
<!--        <title>Search</title>-->
<!--        <meta charset="utf-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--        <link rel="stylesheet" href="/assets/stylesheets/search.css">-->
<!--    </head>-->
<!--    <body>-->
<!--        <div>-->
<!--            <form>-->
<!--                <div>-->
<!--                    <input type="text" id="searchWindow" placeholder="--><?//=Localizer::translate("Search")?><!--">-->
<!--                </div>-->
<!--                <div>-->
<!--                    <input type="button" name="search" id="searchItem" value="search">-->
<!--                </div>-->
<!--            </form>-->
<!---->
<!--            <ul id="items">-->
<!---->
<!--            </ul>-->
<!--        </div>-->
<!---->
<!---->
<!--        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>-->
<!--        <script src="/assets/scripts/search.js" async></script>-->
<!--    </body>-->
<!--</html>-->

<main class="row reverse-sm">
    <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="section-content">
            <?php if(isset($this->viewBag['products'])):?>
                <?php foreach($this->viewBag['products'] as $key=>$value): ?>
                    <article>
                        <div class="article-image">
                            <img src="<?= $value->image ;?>">
                        </div>
                        <div class="article-description">
                        <span>
                            <a href="<?=UrlHelper::getSearchUrl($value->name)?>">
                                <h2><?=$value->name?></h2>
                            </a>
                        </span>
                            <span>Price: <?=$value->price?> CHF</span>
                            <p>Specification: <?=$value->descrEN?></p>
                        </div>
                        <div class="article-buy">
                            <form action="/cart/add/" method="post">
                                <p><label>Count</label></p>
                                <p>
                                    <input type="number" name="count" min="1" value="1" required>
                                </p>
                                <input type="hidden" name="price" value="<?=$value->price?>">
                                <input type="hidden" name="id" value="<?=$value->id?>">
                                <input class="btn" type="submit" value="buy">
                            </form>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    </section>
    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <?php
        if(isset($this->viewBag['cartItems']))
            ShoppingCart::widget($this->viewBag['cartItems'])
        ?>
    </aside>
</main>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>