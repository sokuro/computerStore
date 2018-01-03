<?php
    require_once(ROOT."/Views/Shared/header.php");
?>


<html lang="<?=$_SESSION['lang']?>">
    <main class="row reverse-sm">
        <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="section-content">

                <div>
                    <a href="addProduct">
                        <button type="button" class="btn"><?=Localizer::translate('Add Product')?></button>
                    </a>
                    <a href="removeProduct">
                        <button type="button" class="btn"><?=Localizer::translate('Remove Product')?></button>
                    </a>
                </div>

                <div>
                    <a href="addCategory">
                        <button type="button" class="btn"><?=Localizer::translate('Add Category')?></button>
                    </a>
                    <a href="removeCategory">
                        <button type="button" class="btn"><?=Localizer::translate('Remove Category')?></button>
                    </a>
                </div>

                <div>
                    <a href="addUser">
                        <button type="button" class="btn"><?=Localizer::translate('Add User')?></button>
                    </a>
                    <a href="removeUser">
                        <button type="button" class="btn"><?=Localizer::translate('Remove User')?></button>
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