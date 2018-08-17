<?php
 namespace Admin\Controller;
 use User\Api\UserApi;
 class UserController extends AdminController {
     public function index(){
         $nickname = I('nickname');
         $map['status'] = array('egt',0);
         if(is_numeric($nickname)){
             $map['uid|nickname']= array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
         }
         else{
             $map['nickname'] = array('like', '%'.(string)$nickname.'%');
         }
         $list = $this->lists('Member', $map);
         int_to_string($list);
         $this->assign('_list', $list);
         $this->meta_title = '用户信息'; $this->display();
     }
     public function updateNickname(){
         $nickname = M('Member')->getFieldByUid(UID, 'nickname');
         $this->assign('nickname', $nickname);
         $this->meta_title = '修改昵称'; $this->display();
     }
     public function submitNickname(){
         $nickname = I('post.nickname');
         $password = I('post.password');
         empty($nickname) && $this->error('请输入昵称');
         empty($password) && $this->error('请输入密码');
         $User = new UserApi();
         $uid = $User->login(UID, $password, 4); ($uid == -2) && $this->error('密码不正确'); $Member = D('Member');
         $data = $Member->create(array('nickname'=>$nickname));
         if(!$data){ $this->error($Member->getError());
         }
         $res = $Member->where(array('uid'=>$uid))->save($data);
         if($res){
             $user = session('user_auth');
             $user['username'] = $data['nickname'];
             session('user_auth', $user); session('user_auth_sign', data_auth_sign($user));
             $this->success('修改昵称成功！');
         }else{
             $this->error('修改昵称失败！');
         }
     }
         public function updatePassword(){
         $this->meta_title = '修改密码'; $this->display();
     }
     public function submitPassword(){
         $password = I('post.old');
         empty($password) && $this->error('请输入原密码');
         $data['password'] = I('post.password');
         empty($data['password']) && $this->error('请输入新密码');
         $repassword = I('post.repassword');
         empty($repassword) && $this->error('请输入确认密码');
         if($data['password'] !== $repassword){
             $this->error('您输入的新密码与确认密码不一致');
         }
         $Api = new UserApi();
         $res = $Api->updateInfo(UID, $password, $data);
         if($res['status']){
             $this->success('修改密码成功！');
         }else{ $this->error($res['info']);
         }
     }
     public function action(){
         $Action = M('Action')->where(array('status'=>array('gt',-1)));
         $list = $this->lists($Action); int_to_string($list);
         Cookie('__forward__',$_SERVER['REQUEST_URI']);
         $this->assign('_list', $list); $this->meta_title = '用户行为';
         $this->display();
     }
     public function addAction(){
         $this->meta_title = '新增行为';
         $this->assign('data',null);
         $this->display('editaction');
     }
     public function editAction(){
         $id = I('get.id'); empty($id) && $this->error('参数不能为空！');
         $data = M('Action')->field(true)->find($id); $this->assign('data',$data);
         $this->meta_title = '编辑行为'; $this->display();
     }
     public function saveAction(){
         $res = D('Action')->update();
         if(!$res){
             $this->error(D('Action')->getError());
         }else{
             $this->success($res['id']?'更新成功！':'新增成功！', Cookie('__forward__'));
         } } public function changeStatus($method=null){ $id = array_unique((array)I('id',0)); if( in_array(C('USER_ADMINISTRATOR'), $id)){ $this->error("不允许对超级管理员执行该操作!"); } $id = is_array($id) ? implode(',',$id) : $id; if ( empty($id) ) { $this->error('请选择要操作的数据!'); } $map['uid'] = array('in',$id); switch ( strtolower($method) ){ case 'forbiduser': $this->forbid('Member', $map ); break; case 'resumeuser': $this->resume('Member', $map ); break; case 'deleteuser': $this->delete('Member', $map ); break; default: $this->error('参数非法'); } } public function add($username = '', $password = '', $repassword = '', $email = ''){ if(IS_POST){ if($password != $repassword){ $this->error('密码和重复密码不一致！'); } $User = new UserApi; $uid = $User->register($username, $password, $email); if(0 < $uid){ $user = array('uid' => $uid, 'nickname' => $username, 'status' => 1); if(!M('Member')->add($user)){ $this->error('用户添加失败！'); } else { $this->success('用户添加成功！',U('index')); } } else { $this->error($this->showRegError($uid)); } } else { $this->meta_title = '新增用户'; $this->display(); } } private function showRegError($code = 0){ switch ($code) { case -1: $error = '用户名长度必须在16个字符以内！'; break; case -2: $error = '用户名被禁止注册！'; break; case -3: $error = '用户名被占用！'; break; case -4: $error = '密码长度必须在6-30个字符之间！'; break; case -5: $error = '邮箱格式不正确！'; break; case -6: $error = '邮箱长度必须在1-32个字符之间！'; break; case -7: $error = '邮箱被禁止注册！'; break; case -8: $error = '邮箱被占用！'; break; case -9: $error = '手机格式不正确！'; break; case -10: $error = '手机被禁止注册！'; break; case -11: $error = '手机号被占用！'; break; default: $error = '未知错误'; } return $error; } public function feedback(){ $Feedback = D('Feedback')->where(array('fed_status'=>array('gt',-1))); $list = $Feedback->select(); int_to_string($list); Cookie('__forward__',$_SERVER['REQUEST_URI']); $this->assign('_list', $list); $this->meta_title = '用户反馈'; $this->display(); } public function viewfeedback(){ $id = I('get.id'); empty($id) && $this->error('参数不能为空！'); $data = M('Feedback')->field(true)->find($id); $this->assign('data',$data); $this->meta_title = '查看用户反馈'; $this->display(); } public function notiedFeedback(){ $id = I('get.id'); empty($id) && $this->error('参数不能为空！'); if(M('Feedback')->execute("update __PREFIX__feedback set fed_status=2 where fed_id={$id} and fed_status=1")!==false ) { $this->success("标记为已处理","",""); }else{ $this->error("标记失败, 重刷新后重试","",""); } } public function deleteFeedback(){ $id = I('get.id'); empty($id) && $this->error('参数不能为空！'); if(M('Feedback')->execute("update __PREFIX__feedback set fed_status=-1 where fed_id={$id} and fed_status!=-1")!==false ) { $this->success("删除成功","",""); }else{ $this->error("删除失败, 重刷新后重试","",""); } }



 }