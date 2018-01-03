<?php
require_once(ROOT.'/Controllers/Controller.php');
require_once(ROOT.'/Models/Product.php');


class AdminController extends Controller
{
    protected $template;

//    public function actionShow($product)
    public function actionShow()
    {
//        $product = $params[0];
//        $product = new Product();

        $this->template = "index";

//        $this->viewBag['products'] = Product::create($product);

        $this->getView("Admin", $this->template);
    }

    public function actionAdd()
    {
//        Helper::varDebug($_POST);
        $this->viewBag['menuItems'] = Category::getFirstLevelCategories();

        if(!isset($_POST['name']) && !isset($_POST['descrEN']) && !isset($_POST['descrDE']) && !isset($_POST['descrFR']) && !isset($_POST['price']) && !isset($_POST['brandId']) && !isset($_POST['categoryId']) && !isset($_POST['image'])){
            $this->template = "addProduct";
            $this->getView("Admin", $this->template);
        }else{
            $errors = $this->formValidate($_POST);

            if (count($errors) !== 0){
                $this->viewBag["errors"] = $errors;
                $this->template = "addProduct";
            }else{
                $product = new Product();
                $product->name = $_POST['name'];
                $product->descrEN = $_POST['descrEN'];
                $product->descrDE = $_POST['descrDE'];
                $product->descrFR = $_POST['descrFR'];
                $product->price = $_POST['price'];
                $product->brandId = $_POST['brandId'];
                $product->categoryId = $_POST['categoryId'];
                $product->image = $_POST['image'];
                $product->id = Product::create($product);

                $this->template = "addProduct";
            }

            $this->getView("Admin", $this->template);
        }
    }

    private function formValidate($array){
        $errors = array();

        if(strlen($array["name"]) <= 0)
            $errors[] = "name is too short";

        if(strlen($array["descrEN"]) <= 0)
            $errors[] = "description EN is too short";

        if(strlen($array["descrDE"]) <= 0)
            $errors[] = "description DE is too short";

        if(strlen($array["descrFR"]) <= 0)
            $errors[] = "description FR is too short";

        if(strlen($array["price"]) <= 0)
            $errors[] = "price is set to 0";

        if(strlen($array["brandId"]) < 1)
            $errors[] = "brandId is too short";

        if(strlen($array["categoryId"]) < 1)
            $errors[] = "categoryId is too short";

        if(strlen($array["image"]) <= 0)
            $errors[] = "image is too short";

        return $errors;
    }

    public function actionError()
    {
        $this->template = "error";

        $this->getView("Admin", $this->template);
    }

}