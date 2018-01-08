<?php
    require_once(ROOT."/Views/Shared/header.php");
?>

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
                            <a href="<?=UrlHelper::getProductUrl($value->id)?>">
                                <h2><?=$value->name?></h2>
                            </a>
                        </span>
                            <span>Price: <?=$value->price?> CHF</span>
                            <p>Specification: <?=$value->descrEN?></p>
                        </div>
                        <form action="/admin/removeProduct/<?= $value->id?>" method="get">
                            <div class="article-remove">
                                <input type="hidden" value="<?= $value->id?>">
                                <button type="remove" class="btn">Remove</button>
                            </div>
                        </form>
                    </article>

<!--                    <input class="btn" type="submit" name="Add Product" value="--><?//=Localizer::translate('Add Product')?><!--">                    -->
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    </section>
    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    </aside>
</main>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>