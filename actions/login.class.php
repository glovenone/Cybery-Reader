<?php 

class Login extends Action
{
    public function execute($context)
    {
        global $db, $tpl;
        $data['ismsg'] = FALSE;
	$data['msg'] = NULL;
	
	if(is_array($_GET)&&count($_GET)>0)
	{
		if($_GET['group'])
		{
			$data['ismsg'] = TRUE;
			$data['msg'] = '您的账户已经激活,请直接登录或重新注册.';
		}
	}
        if (isset($_SESSION['user']) && isset($_SESSION['user']['group']) && $_SESSION['user']['group'] != 0)
        {
		    header('location:../home/');
		}
		
		if (isset($_POST['username']) && isset($_POST['password']))
		{
		    $username = $_POST['username'];
		    $password = $_POST['password'];
		    // check
		    $password = sha1($password);
		    $result = $db->get('users', "`username`='".$username."' AND `password`='".$password."'");
		    if ($result)
		    {
		        $_SESSION['user'] = $result[0];
		        header('location:../home/?user=login');
		    }
		    else
		    {
		        $data['ismsg'] = TRUE;
		        $data['msg'] = '用户名或密码错误';
		    }
		}
		else if (isset($_GET['user']) && $_GET['user']=='false')
		{
		    $data['ismsg'] = TRUE;
		    $data['msg'] = '请先登录';
		}
		
		$tpl->render('login.html', $data);
    }
};

?>
