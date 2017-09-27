<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends Controller {
    public function index(){
    	$photo = M("photo",'qn_');
		$count = $photo->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $photo->limit($Page->firstRow.','.$Page->listRows)->select();
		
		foreach ($list as $key => $value) {
			$info[$key]['photo'] = $value['vc_photo'];
		}
		$this->assign('page',$show);
		$this->assign('info',$info);
    	$this->display();
    }

    public function uploader(){
    	$setting=C('UPLOAD_SITEIMG_QINIU');
		$Upload = new \Think\Upload($setting);
		$info = $Upload->upload();
		//dump($info);
		if(!$info) {
			$this->error($Upload->getError(),U("Upload/add"));
	    }else{
	    	foreach($info as $val){
		    	$photo = M("photo",'qn_');
        		$map['vc_photo'] = $val['url'];
            	$result = $photo->add($map);
		    }

	        $this->success("添加成功",U("Upload/add"));
	    }
    }
}