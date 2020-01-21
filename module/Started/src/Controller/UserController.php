<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Started\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    // public function loginAction()
    // {
    //     $checkMethod = $this->getRequest();

    //     /*
    //     isGet() -> true: GET
    //     isPost() -> true: POST
    //     isXmlHttpRequest() ->true: AJAX
    //     ...
    //     */


    //     if ($checkMethod->isGet()) {
    //         $action = $this-> params()-> fromRoute('action','abc');
    //         $id = $this-> params()-> fromRoute('id',9);
    //         echo $id;
    //         echo '<br>';
    //         echo $action;
    //         echo '<br>';
    //         echo 'Using method GET';
    //     } else {
    //         $var = $this->params() ->fromPost('name', ' DUY ');
    //         echo $_POST['name'];
    //         echo $var;
    //         echo '<br>';
    //         echo 'not method GET';
    //     }

    //     // if ($checkMethod->isPost()) {
    //     //     echo 'Using method Post';
    //     // } else {
    //     //     echo 'not method Post';
    //     // }
    //     echo '<br>';
    //     echo $checkMethod->getUriString();
    //     echo '<br>';
    //     echo $checkMethod->getMethod();
    //     return false;
    // }


    public function loginAction()
    {
        $checkMethod = $this->getRequest();
        if ($checkMethod->isGet()) {
            $action = $this->params()->fromRoute('action', 'abc');
            $id = $this->params()->fromRoute('id', 0);
        } else {
            $action = 'index';
            $id = -1;
        }
        if ($id <= 0) {
            // $this->getResponse()->setStatusCode(404);
            // return;

            throw new \Exception("id $id not found");
        }
        // return new ViewModel([
        //     'id' => $id,
        //     'action' => $action
        // ]);

        //tên module/ tên controller/tên action : started/user/login

        $view = new ViewModel([
            'id' => $id,
            'action' => $action
        ]);
        $view->setTemplate('started/index/login');
        return $view;
    }
    public function logoutAction()
    {
        echo 'Logout Page';
        return false;
    }
}
