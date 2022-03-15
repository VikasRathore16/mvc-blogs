<?php

namespace App\Controllers;

// error_reporting(0);

use App\Libraries\Controller;

class Pages extends Controller
{
    public function __construct()
    {
        //empty func
    }

    public function index()
    {
        $posts = $this->model('Posts')::find('all');
        $data = [
            'posts' => $posts
        ];
        $this->view('blogs/header');
        $this->view('blogs/main', $data);
        $this->view('blogs/footer');
    }

    public function login()
    {

        // print_r($_POST);

        $this->view('pages/login/login');
    }

    public function checkUser()
    {
        if (isset($_SESSION['admin'])) {
            $posts = $this->model('Posts')::find('all');
            $data = [
                'posts' => $posts
            ];
            $_SESSION['admin'] = 'admin';
            $this->view('pages/admin/dashboard', $data);
            die();
        }
        if (isset($_SESSION['user'])) {
            print_r((($_SESSION['user'][0])));
            die();
            $posts = $this->model('Posts')::find('all');
            $data = [
                'posts' => $posts
            ];
            $_SESSION['admin'] = 'admin';
            $this->view('pages/admin/dashboard', $data);
            die();
        }

        if (isset($_POST['submit'])) {
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            $check = $this->check($email, $password);
            if ($check[0]->role == 'Editor') {
                $_SESSION['user'] = $check;
                $user = $this->model('Users')::all(array('conditions' => array('email = ? AND password = ?', $email, $password)));
                $posts = $this->model('Posts')::all(array('conditions' => array('post_user_id = ?', $user[0]->user_id)));
                $data = [
                    'users' => $user,
                    'posts' => $posts
                ];
                $this->view('pages/profile/profile', $data);
                die();
            }
            if ($check[0]->role  == 'Admin') {
                $posts = $this->model('Posts')::find('all');
                $data = [
                    'posts' => $posts
                ];
                $_SESSION['admin'] = 'admin';
                $this->view('pages/admin/dashboard', $data);
                die();
            } else {
                $data = [
                    'check' => $check,
                ];
                $this->view('pages/login/login', $data);
            }
        }
    }

    public function users()
    {
        if ($_SESSION['admin'] == 'admin') {
            $Users = $this->model('Users')::find('all');
            $data = [
                'user' => $Users
            ];
            $this->view('pages/admin/users', $data);
        }
    }

    public function check($email, $password)
    {
        $user = $this->model('Users')::all(array('conditions' => array('email = ? AND password = ?', $email, $password)));
        if (count($user) == 0) {
            return "Account Don't Exists";
        }
        if ($user[0]->password != $password) {
            return "Password Don't match";
        }
        if ($user[0]->status == 'Restricted') {
            return "Wait for Approval";
        }
        return ($user);
    }

    public function signup()
    {
        $this->view('pages/signup/signup');
    }

    public function addUser()
    {
        $user = $_POST ?? array();
        if (isset($user['submit'])) {
            if ($user['password'] != $user['confirm']) {
                $data = [
                    'msg' => "Password Doesn't Match"
                ];
                $this->view('pages/signup/signup', $data);
                die();
            }

            $new = $this->model('Users');
            $new->username = $user['name'];
            $new->email = $user['email'];
            $new->password = $user['password'];
            $email = $new::all(array('conditions' => array('email = ?', $user['email'])));

            if (count($email) != 0) {
                $data = [
                    'msg' => "Email Exists . Please use another email address"
                ];
                $this->view('pages/signup/signup', $data);
                die();
            }


            if ($new->save()) {
                $data = [
                    'msg' => "Thanks for Sign Up wait for Account Approval. After Approval you can login from below link"
                ];
                $this->view('pages/signup/signup', $data);
            }
        }
        // $this->view('pages/signup/signup');
    }




    public function signout()
    {
        $this->view('pages/signout/signout');
    }



    public function publish()
    {
        print_r($_POST['blog_id']);
        $blog_id = $_POST['blog_id'];
        echo "helo";
        // $publish = $this->model('posts')::all();
        $post = $this->model('Posts')::find($blog_id);
        $post->status = 'Published';
        $post->save();
    }
    public function pending()
    {
        print_r($_POST['blog_id']);
        $blog_id = $_POST['blog_id'];
        echo "helo";
        // $publish = $this->model('posts')::all();
        $post = $this->model('Posts')::find($blog_id);
        $post->status = 'Pending';
        $post->save();
    }
    public function deletePost()
    {
        print_r($_POST['blog_id']);
        $blog_id = $_POST['blog_id'];
        echo "helo";
        $post = $this->model('Posts')::find($blog_id);
        $post->delete();
    }

    public function trendingPost()
    {
        print_r($_POST['blog_id']);
        $blog_id = $_POST['blog_id'];
        $val = $_POST['val'];
        echo $val;
        echo "helo";
        $post = $this->model('Posts')::find($blog_id);
        $post->update_attributes(array('trending' => $val));
    }

    public function viewPost()
    {
        $blog_id = $_POST['blog_id'];
        print_r($blog_id);

        $article = $this->model('Posts')::find($blog_id);
        $data = [
            'article' => $article
        ];
        $this->view('pages/admin/article', $data);
        // echo json_encode($post);
    }

    public function deleteUser()
    {

        $user_id = $_POST['user_id'];

        $user = $this->model('Users')::find($user_id);
        $user->delete();
    }
    public function approveUser()
    {

        $user_id = $_POST['user_id'];

        $user = $this->model('Users')::find($user_id);

        $user->update_attributes(array('status' => 'Approved'));
        $user->save();
    }

    public function restrictUser()
    {

        $user_id = $_POST['user_id'];

        $user = $this->model('Users')::find($user_id);

        $user->update_attributes(array('status' => 'Restrict'));
        $user->save();
    }

    public function profile()
    {
        $this->view('pages/profile/newblog');
    }

    public function addPost()
    {
        
    }
}
