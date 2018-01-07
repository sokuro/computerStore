<?php
    require_once(ROOT."/Views/Shared/header.php"); ?>
<html lang="<?=$_SESSION['lang']?>">
    <main class="row reverse-sm">
        <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="section-content">
                    <a href="addProduct" class="linkadmin">
                       <?=Localizer::translate('Add Product')?>
                    </a>
                    <a href="removeProduct" class="linkadmin">
                        <?=Localizer::translate('Remove Product')?>
                    </a>
                    <a href="addCategory" class="linkadmin">
                        <?=Localizer::translate('Add Category')?>
                    </a>
                    <a href="removeCategory" class="linkadmin">
                        <?=Localizer::translate('Remove Category')?>
                    </a>
                    <a href="addUser" class="linkadmin">
                        <?=Localizer::translate('Add User')?>
                    </a>
                    <a href="removeUser" class="linkadmin">
                        <?=Localizer::translate('Remove User')?>
                    </a>
            </div>

<!--altes-->


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