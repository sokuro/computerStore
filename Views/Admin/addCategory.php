<?php
//    define("ROOT", realpath($_SERVER["DOCUMENT_ROOT"]));
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
            <form action="/admin/addCategory" method="post">
                <div>
                    <input  class="admin-add" name="nameEN" type="text" placeholder="<?=Localizer::translate('Category Name EN')?>" value="<?= isset($_POST['nameEN']) ? $_POST['nameEN'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div class="category-add">
                    <input class="admin-add" name="nameDE" type="text" placeholder="<?=Localizer::translate('Category Name DE')?>" value="<?= isset($_POST['nameDE']) ? $_POST['nameDE'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div class="category-add">
                    <input class="admin-add" name="nameFR" type="text" placeholder="<?=Localizer::translate('Category Name FR')?>" value="<?= isset($_POST['nameFR']) ? $_POST['nameFR'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div class="category-add">
                    <!--<input class="admin-add"  name="parentId" type="text" placeholder="parentID" value="<?= isset($_POST['parentId']) ? $_POST['parentId'] : ''?>" required>-->
                    <Select class="admin-add" name="parentId" type="text" required>
                        <option value=""><?=Localizer::translate('Category level')?></option>
                        <option value="0"><?=Localizer::translate('new Superproduct')?></option>
                        <option value="1"><?=Localizer::translate('SubPC')?></option>
                    </Select>


                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>

                <input class="btn2" type="submit" name="Add Category" value="<?=Localizer::translate('Add Category')?>">
            </form>
        </div>
    </section>
    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    </aside>
</main>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>