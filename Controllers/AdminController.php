<?php
require_once(ROOT.'/Controllers/Controller.php');
require_once(ROOT.'/Models/Product.php');
require_once(ROOT.'/Models/Admin.php');


class AdminController extends Controller
{
    protected $template;


    public function actionShow()
    {

        $this->template = "index";

//        $this->viewBag['menuItemsAdmin'] = Admin::showElements();

        $this->getView("Admin", $this->template);
    }

    public function actionAddProduct()
    {
//        Helper::varDebug($_POST);
        $this->viewBag['menuItems'] = Category::getFirstLevelCategories();

        if(!isset($_POST['name']) && !isset($_POST['descrEN']) && !isset($_POST['descrDE']) && !isset($_POST['descrFR']) && !isset($_POST['price']) && !isset($_POST['brandId']) && !isset($_POST['categoryId']) && !isset($_POST['image'])){
            $this->template = "addProduct";
            $this->getView("Admin", $this->template);
        }else{
            $errors = $this->formValidateProduct($_POST);

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

                $this->template = "index";
            }

            $this->getView("Admin", $this->template);
        }
    }

    public function actionAddUser()
    {
        if(!isset($_POST['username']) && !isset($_POST['password']) && !isset($_POST['firstName']) && !isset($_POST['lastName']) && !isset($_POST['email'])){
            $this->template = "addUser";
            $this->getView("Admin", $this->template);
        }else{
            $errors = $this->formValidateUser($_POST);

            if (count($errors) !== 0){
                $this->viewBag["errors"] = $errors;
                $this->template = "addUser";
            }else{
                $user = new User();
                $user->email = $_POST['email'];
                $user->password = Helper::getHash($_POST['password']);
                $user->username = $_POST['username'];
                $user->firstName = $_POST['firstName'];
                $user->lastName = $_POST['lastName'];
                $user->id = User::create($user);

                $this->template = "index";
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

    public function actionError()
    {
        $this->template = "error";

        $this->getView("Admin", $this->template);
    }


}