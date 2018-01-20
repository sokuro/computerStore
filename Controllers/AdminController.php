<?php
require_once(ROOT.'/Controllers/Controller.php');
require_once(ROOT.'/Models/Product.php');
require_once(ROOT.'/Models/Admin.php');


class AdminController extends Controller
{
    protected $template;


    public function actionIndex()
    {

        $this->template = "index";

        $this->getView("Admin", $this->template);
    }

    public function actionAddProduct()
    {
//        $this->viewBag['menuItems'] = Category::getFirstLevelCategories();

        if(!isset($_POST['name']) && !isset($_POST['descrEN']) && !isset($_POST['descrDE']) && !isset($_POST['descrFR']) && !isset($_POST['price']) && !isset($_POST['brandId']) && !isset($_POST['categoryId']) && !isset($_POST['image'])){
            $this->template = "addproduct";
            $this->getView("Admin", $this->template);
        }else{
            $errors = $this->formValidateProduct($_POST);

            if (count($errors) !== 0){
                $this->viewBag["errors"] = $errors;
                $this->template = "addproduct";
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

                $this->template = "index";
            }

            $this->getView("Admin", $this->template);
        }
    }

    /**
     * Necessary to avoid Hostinger 500 Server Error!
     *
     * Entry View, still without an ID as a delete parameter
     */
    public function actionRemoveProduct(){

        $this->viewBag['products'] = Product::getAllProducts();

        $this->template = "removeproduct";

        $this->getView("Admin", $this->template);
    }

    /**
     * The actual ActionMethod to delete a property with an ID
     */
    public function actionRemoveProductById($params){

        $this->viewBag['products'] = Product::getAllProducts();

        $this->template = "removeproduct";

//        Helper::varDebug($params);

        if ($params > 0) {

            $productId = (int)$params[0];

            $product = Product::getById($productId);

            if(is_int($productId) && $product !== null) {
                Product::deleteById($productId);
            }

            $this->getView("Admin", $this->template);
        }

    }

    public function actionAddCategory()
    {
//        $this->viewBag['menuItems'] = Category::getFirstLevelCategories();

        if(!isset($_POST['nameEN']) && !isset($_POST['nameDE']) && !isset($_POST['nameFR']) && !isset($_POST['parentId'])) {
            $this->template = "addcategory";
            $this->getView("Admin", $this->template);
        }else{
            $errors = $this->formValidateCategory($_POST);

            if (count($errors) !== 0){
                $this->viewBag["errors"] = $errors;
                $this->template = "addcategory";
            }else{
                $category = new Category();
                $category->nameEN = $_POST['nameEN'];
                $category->nameDE = $_POST['nameDE'];
                $category->nameFR = $_POST['nameFR'];
                $category->parentId = $_POST['parentId'];
                $category->id = Category::create($category);

                $this->template = "index";
            }

            $this->getView("Admin", $this->template);
        }
    }

    /**
     * Necessary to avoid Hostinger 500 Server Error!
     *
     * Entry View, still without an ID as a delete parameter
     */
    public function actionRemoveCategory(){

        $this->viewBag['categories'] = Category::getAll();

        $this->template = "removecategory";

        $this->getView("Admin", $this->template);
    }

    /**
     * The actual ActionMethod to delete a property with an ID
     */
    public function actionRemoveCategoryById($params){

        $this->viewBag['categories'] = Category::getAll();

        $this->template = "removecategory";

        if ($params > 0) {

            $categoryId = (int)$params[0];

            $category = Category::get($categoryId);

            if(is_int($categoryId) && $category !== null) {
                Category::deleteById($categoryId);
            }

            $this->getView("Admin", $this->template);
        }

    }

    public function actionAddUser()
    {
//        Helper::varDebug($_POST);

        if(!isset($_POST['username']) && !isset($_POST['password']) && !isset($_POST['firstName']) && !isset($_POST['lastName']) && !isset($_POST['email'])){
            $this->template = "adduser";
            $this->getView("Admin", $this->template);
        }else{
            $errors = $this->formValidateUser($_POST);

            if (count($errors) !== 0){
                $this->viewBag["errors"] = $errors;
                $this->template = "adduser";
            }else{
                $user = new User();
                $user->email = $_POST['email'];
                $user->password = Helper::getHash($_POST['password']);
                $user->username = $_POST['username'];
                $user->firstName = $_POST['firstName'];
                $user->lastName = $_POST['lastName'];
                $user->roleId = $_POST['roleId'];
                $user->id = User::create($user);

                $this->template = "index";
            }

            $this->getView("Admin", $this->template);
        }
    }

    /**
     * Necessary to avoid Hostinger 500 Server Error!
     *
     * Entry View, still without an ID as a delete parameter
     */
    public function actionRemoveUser() {

        $this->viewBag['users'] = User::getAllUsers();

        $this->template = "removeuser";

        $this->getView("Admin", $this->template);
    }

    /**
     * The actual ActionMethod to delete a property with an ID
     */
    public function actionRemoveUserById($params){

        $this->viewBag['users'] = User::getAllUsers();

        $this->template = "removeuser";

        if ($params > 0) {

            $userId = (int)$params[0];

            $user = User::getUserById($userId);

            if(is_int($userId) && $user !== null) {
                User::deleteById($userId);
            }

            $this->getView("Admin", $this->template);
        }

    }

    private function formValidateProduct($array){
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


    private function formValidateUser($array){
        $errors = array();

        if (filter_var($array["email"], FILTER_VALIDATE_EMAIL)){
            if(User::getByEmail($array["email"]) !== null)
                $errors[] = "user with this email already exist";
        }else{
            $errors[] = "email is invalid";
        }

        if(strlen($array["username"]) <= 0)
            $errors[] = "username is too short";

        if(strlen($array["password"]) < 8)
            $errors[] = "password is too short";

        if(strlen($array["firstName"]) < 1)
            $errors[] = "first name is too short";

        if(strlen($array["lastName"]) < 1)
            $errors[] = "last name is too short";

        return $errors;
    }

    private function formValidateCategory($array)
    {
        $errors = array();

        if(strlen($array["nameEN"]) <= 0)
            $errors[] = "nameEN is too short";

        if(strlen($array["nameDE"]) <= 0)
            $errors[] = "nameDE is too short";

        if(strlen($array["nameFR"]) <= 0)
            $errors[] = "nameFR is too short";

        if(strlen($array["parentId"]) <= 0)
            $errors[] = "parentId is too short";

        return $errors;
    }

    public function actionError()
    {
        $this->template = "error";

        $this->getView("Admin", $this->template);
    }



}