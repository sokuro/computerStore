<?php
require_once(ROOT."/Views/Shared/header.php");
?>

    <main class="row reverse-sm">
        <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8" >
            <div>
                <div class="title">
                    <h3>
                        <span class="fa fa-send"></span>
                        <?=Localizer::translate('Shipping address')?>
                    </h3>
                </div>
                <div class="address">
                    <form action="/payment/confirm" method="post">
                        <div class="address-input">
                            <label><?=Localizer::translate("City")?></label>
                            <input type="text" name="city" required>
                        </div>

                        <div class="address-input">
                            <label><?=Localizer::translate("Street")?></label>
                            <input type="text" name="street" required>
                        </div>

                        <div class="address-input">
                            <label><?=Localizer::translate("State")?></label>
                            <input type="text" name="state" required>
                        </div>

                        <div class="address-input">
                            <label><?=Localizer::translate("Zip")?></label>
                            <input type="number" pattern="[0-9]{4}" name="zip" required>
                        </div>

                        <input class="btn" type="submit" value="<?=Localizer::translate('To Confirm')?>">
                    </form>
                </div>
            </div>
        </section>
        <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <?php
                if(isset($this->viewBag['topSeller']))
                    TopSellerList::widget($this->viewBag['topSeller']);
            ?>
        </aside>
    </main>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>