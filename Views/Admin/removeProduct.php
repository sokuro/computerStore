<?php
    require_once(ROOT."/Views/Shared/header.php");
?>

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
        <div class="section-content">
            <?php if(isset($this->viewBag['products'])):?>
                <?php foreach($this->viewBag['products'] as $key=>$value): ?>
                    <article>
                        <div class="article-image">
                            <img src="<?= $value->image ;?>">
                        </div>
                        <div class="article-description">
                        <span>
                            <a href="<?=UrlHelper::getProductUrl($value->id)?>">
                                <h2><?=$value->name?></h2>
                            </a>
                        </span>
                            <span>Price: <?=$value->price?> CHF</span>
                            <p>Specification: <?=$value->descrEN?></p>
                        </div>
                        <form action="/admin/removeProductById/<?= $value->id?>" method="get">
                            <div class="article-remove">
                                <input type="hidden" value="<?= $value->id?>">
                                <button type="remove" class="btn3">Remove</button>
                            </div>
                        </form>
                    </article>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    </section>
    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    </aside>
</main>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>