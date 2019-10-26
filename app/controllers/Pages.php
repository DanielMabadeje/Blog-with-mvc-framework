<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Pages extends Controller
{
    public function __construct()
    { }
    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => "App to share posts"
        ];
        $this->view('pages/about', $data);
    }
    public function Index(Type $var = null)
    {
        if (isLoggedIn()) {
            redirect('posts');
        }
        $data = [
            'title' => 'Posts',
            'description' => "A simple social blog built on Mabadeje's mvc framework"
        ];
        $this->view('pages/index', $data);
    }
}
