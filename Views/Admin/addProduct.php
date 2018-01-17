<?php
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
                        <Select class="admin-add" name="brandId" required>
                            <option value=" "><?=Localizer::translate('Brand ID')?></option>
                            <option value=18>Adobe</option>
                            <option value =1>Asus</option>
                            <option value =3>Apple</option>
                            <option value=15>Corsair</option>
                            <option value=16>Cyberlink</option>
                            <option value=7>Dell</option>
                            <option value =4>Enermax</option>
                            <option value=11>HP</option>
                            <option value=6>HPE</option>
                            <option value=5>Lenovo</option>
                            <option value=13>Logitech</option>
                            <option value=17>Microsoft</option>
                            <option value =2>MSI</option>
                            <option value=14>Roccat</option>
                            <option value=9>Toshiba</option>
                        </Select>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    <div >
                        <Select  class="admin-add" name="categoryId" required>
                            <option value="" class="selected"><?=Localizer::translate('Category ID')?></option>
                            <option value=1><?=Localizer::translate('PC')?></option>
                            <option value=3><?=Localizer::translate('Server')?></option>
                            <option value=4><?=Localizer::translate('Peripherie')?></option>
                            <option value=5><?=Localizer::translate('Components')?></option>
                            <option value=6><?=Localizer::translate('Software')?></option>
                            <option value=7><?=Localizer::translate('Notebooks')?></option>
                            <option value=8><?=Localizer::translate('Workstation')?></option>
                        </Select>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    <div >
                        <input class="admin-add" name="image" type="text" placeholder="<?=Localizer::translate('Image')?>" value="<?= isset($_POST['image']) ? ($_POST['image']) : ('/assets/images/placeholder.png') ?>" >
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