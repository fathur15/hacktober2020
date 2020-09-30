<?php
class contoh extends controller
{
    function __construct()
    {
        // $auth = $this->helper('authentication');
        if (isLogin())
            redirect(BASEURL);
    }
    function index()
    {
        $data = array(
            'page_title' => 'My Password | Login',
            'extra_css' => array(
                ['file' => '', 'position' => 'head']
            )
        );
        $this->addViews(array('user/heder/login', 'user/main/login'), $data);
        $this->render();
    }
}
