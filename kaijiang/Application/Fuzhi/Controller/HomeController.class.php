<?php
namespace Fuzhi\Controller;

use Think\Controller;
class HomeController extends Controller
{
    var $BaseUrl = '';
    var $title = '';
    var $keyword = '';
    var $description = '';
    var $tontji = '';
    public function _empty()
    {
        $this->redirect('Common/index');
    }
    protected function _initialize()
    {
        $config = api('Config/lists');
        C($config);
        $this->BaseUrl = baseUrl();
        $this->title = C('WEB_SITE_TITLE');
        $this->keyword = C('WEB_SITE_KEYWORD');
        $this->description = C('WEB_SITE_DESCRIPTION');
        $this->tontji = C('WEB_SITE_TONGJI');
        $this->assign('title', $this->title);
        $this->assign('keyword', $this->keyword);
        $this->assign('description', $this->description);
        $this->assign('tontji', $this->tontji);
        $this->assign('BaseUrl', $this->BaseUrl);
        $this->assign('WEB_SITE_AD_TOP1_PIC', C('WEB_SITE_AD_TOP1_PIC','http://kaijiang.com/'));//因为实在是找不到这个配置的值在哪，所以只能先暂时用本地的地址为它的值
        $this->assign('WEB_SITE_AD_TOP2_PIC', C('WEB_SITE_AD_TOP2_PIC','http://kaijiang.com/'));
        $this->assign('WEB_SITE_AD_TOP3_PIC', C('WEB_SITE_AD_TOP3_PIC','http://kaijiang.com/'));
        $this->assign('WEB_SITE_AD_TOP4_PIC', C('WEB_SITE_AD_TOP4_PIC','http://kaijiang.com/'));
        if (!C('WEB_SITE_CLOSE')) {
            $this->error('站点已经关闭，请稍后访问~');
        }
    }
    protected function login()
    {
        is_login() || $this->error('您还没有登录，请先登录！', U('User/login'));
    }
}