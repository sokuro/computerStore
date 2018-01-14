<?php
    require_once(ROOT."/Views/Shared/header.php");
?>

<main class="row reverse-sm">
    <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="section-content">
            <?php if(isset($this->viewBag['categories'])):?>
                <?php foreach($this->viewBag['categories'] as $key=>$value): ?>
                    <article>
                        <div class="article-description">
                            <span>
                                <a href="<?=UrlHelper::getCategoryUrl($value->id)?>">
                                    <h2><?=$value->nameEN?></h2>
                                </a>
                            </span>
                        </div>
                        <form action="/admin/removeCategory/<?= $value->id?>" method="get">
                            <div class="article-remove">
                                <input type="hidden" value="<?= $value->id?>">
                                <button type="remove" class="btn">Remove</button>
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