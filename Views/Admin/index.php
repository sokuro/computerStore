<?php
    require_once(ROOT."/Views/Shared/header.php");
?>


<html lang="<?=$_SESSION['lang']?>">
    <main class="row reverse-sm">
        <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="section-content">

                <div>
                    <a href="add">
                        <button type="button" class="btn"><?=Localizer::translate('Add Product')?></button>
                    </a>
                </div>

                <div>
                    <a href="add">
                        <button type="button" class="btn"><?=Localizer::translate('Add Category')?></button>
                    </a>
                </div>

                <div>
                    <a href="add">
                        <button type="button" class="btn"><?=Localizer::translate('Add User')?></button>
                    </a>
                </div>

            </div>
        </section>
        <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <!--            --><?php
    //            if(isset($this->viewBag['cartItems']))
    //                ShoppingCart::widget($this->viewBag['cartItems'])
    //            ?>
        </aside>
    </main>
</html>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>