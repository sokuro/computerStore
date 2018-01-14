<?php
require_once(ROOT."/Views/Shared/header.php");

    if(isset($this->viewBag["message"]))
        echo($this->viewBag["message"]);
?>

    <h2>Error</h2>

<?php

require_once(ROOT."/Views/Shared/footer.php")
?>