<?php
require_once (ROOT."/Models/Product.php");

class CategoryController extends Controller
{
    protected $template;

    public function actionShow($params)
    {
        $id = $params[0];
        $this->template = "index";

        $this->viewBag['menuItems'] = Category::getFirstLevelCategories();
        $this->viewBag['categories'] = Category::getAllByParentId($id);
        $this->viewBag['products'] = Product::getByCategoryId($id);


        if(isset($_SESSION['logged_in']) && !$_SESSION['logged_in'])
            $this->viewBag['cartItems'] = CartItem::getItemsWithProducts($_SESSION['sessid']);


        $this->getView("Category", $this->template);
    }

    public function actionError()
    {
        $this->template = "error";

        $this->getView("Category", $this->template);
    }
}
?>