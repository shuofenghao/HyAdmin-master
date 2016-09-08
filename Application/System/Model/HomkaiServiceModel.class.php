<?php
namespace System\Model;

/**
 * Homkai's Service Model
 * @author Homkai
 */
class HomkaiServiceModel{
	
	/**
	 * 分组下拉框 - 班级
	 * @param $clsArr 班级范围数组
	 * @return array
	 */
	public static function getClassOptg($clsArr){
		$where = array('college_id'=>ss_clgid(), 'status'=>1);//传入登入者的学院id
		
		if(isset($clsArr)){
			$where['id']=array('in', $clsArr);//in为sql语句中的范围查询
		} 
				
		$arr = M('class')
		         ->where($where)
		         ->order('grade asc')
		         ->getField('id,name,grade');
		     //根据学院id找出这个学院的人的id（待考证）,name（班级名字）,grade（年级）并升序排序
		$data = array();
		
		if(is_array($arr))//判断是否取到
			foreach ($arr as $k=>$v){
				$data[$v['grade'].'级'][$k] = $v['name'];
			}
			//'几年级几班'的形式构建二维数组data以年级为第一维、班级为第二维
		return $data;
	}
	/**
	 * 设置用户头像HTML
	 * @param number $id 头像fileId
	 * @return string
	 */
	public static function getAvatarTpl($id){
		return '<div class="img-thumbnail">
		           <div style="width:200px;height:200px;background:url('.avatar_file($id).') no-repeat;background-size:cover;">
		           </div>
		        </div>';
	}
}