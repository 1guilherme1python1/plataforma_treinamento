<?php
class Core{
    public function run(){
        $url = '/';
        if(isset($_GET['url'])){
            $url .= $_GET['url']; 
        }

        $params = array();
        // setart controller
        if(!empty($url) && $url != '/'){
            $url = explode('/', $url);
            array_shift($url);

            $CurrentController = $url[0].'Controller';
            array_shift($url);
            
            //setar action
            if(isset($url[0]) && !empty($url[0])){
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            //setar parametros
            if(count($url)>0){
                $params = $url;
            }

        } else {
            $CurrentController = 'HomeController';
            $currentAction = 'index';
        }

        $controller = new $CurrentController();
        
        call_user_func_array(array($controller, $currentAction), $params);

        // echo '<hr/>';
        // echo 'Controller: '.$currentController."<br/>";
        // echo 'Action: '.$currentAction."<br/>";
        // echo 'Params: '.print_r($params);
        // 1 = Controller;
        // 2 = action;
        // 3,4,5 = parâmetros;
    }
}