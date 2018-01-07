<?php
//    define("ROOT", realpath($_SERVER["DOCUMENT_ROOT"]));
    require_once(ROOT."/Views/Shared/header.php");
?>

<main class="row reverse-sm">
    <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="section-content">
            <form action="/admin/addProduct" method="post">
                <div>
                    <input class="admin-add" name="name" type="text" placeholder="<?=Localizer::translate('Product Name')?>" value="<?= isset($_POST['name']) ? $_POST['name'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div>
                    <input class="admin-add" name="descrEN" type="text" placeholder="<?=Localizer::translate('Description EN')?>" value="<?= isset($_POST['descrEN']) ? $_POST['descrEN'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div >
                    <input class="admin-add" name="descrDE" type="text" placeholder="<?=Localizer::translate('Description DE')?>" value="<?= isset($_POST['descrDE']) ? $_POST['descrDE'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div >
                    <input class="admin-add" name="descrFR" type="text" placeholder="<?=Localizer::translate('Description FR')?>" value="<?= isset($_POST['descrFR']) ? $_POST['descrFR'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div >
                    <input class="admin-add" name="price" type="number" placeholder="<?=Localizer::translate('Price')?>" value="<?= isset($_POST['price']) ? $_POST['price'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div>
                    <input class="admin-add" name="brandId" type="number" placeholder="<?=Localizer::translate('Brand ID')?>" value="<?= isset($_POST['brandId']) ? $_POST['brandId'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div >
                    <input class="admin-add" name="categoryId" type="number" placeholder="<?=Localizer::translate('Category ID')?>" value="<?= isset($_POST['categoryId']) ? $_POST['categoryId'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div >
                    <input class="admin-add" name="image" type="text" placeholder="<?=Localizer::translate('Image')?>" value="<?= isset($_POST['image']) ? $_POST['image'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>

                <input class="btn2" type="submit" name="Add Product" value="<?=Localizer::translate('Add Product')?>">
            </form>
        </div>
    </section>
    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    </aside>
</main>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>