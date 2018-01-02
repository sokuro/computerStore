<?php
    require_once(ROOT.'/Controllers/Controller.php');
    require_once(ROOT.'/Helpers/Helper.php');
    require_once(ROOT.'/Models/Product.php');
    require_once(ROOT.'/Models/SearchResult.php');

class SearchController extends Controller
{

    protected $template;

    public function actionShow($params)
    {
        $name = $params[0];
        $this->template = "index";

        $this->viewBag['products'] = Product::getProductByName($name);

        $this->getView("Search", $this->template);
    }

    public function actionError()
    {
        $this->template = "error";

        $this->getView("Search", $this->template);
    }

//    public function doSearch($value)
//    {
//        $this->template = "index";
//
//        if ($value) {
//
//            $product = new Product();
//            $product->name = $_GET['query'];
//
//            $products = Product::getProductByName($product->name);
//            $searchResults = array();
//
//            foreach ($products as $product) {
//                $searchResults[] = new SearchResultWidget($product);
//            }
//            echo json_encode($searchResults);
//
//            $this->getView("Search", $this->template);
//        }
//    }

}

?>