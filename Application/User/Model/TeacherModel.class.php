<?php
namespace User\Model;
use System\Model\UserModel;
use System\Model\HomkaiServiceModel;

/**
 * 教工管理模型
 *
 * @author Homkai QQ:345887894
 */
class TeacherModel extends UserModel {

	/**
	 * @overrides
	 */
	protected function initTableName(){
		return 'teacher';//所连表
	}
	
	/**
	 * @overrides
	 * 配置标题和副标题
	 */
	protected function initInfoOptions() {
		$infoOptions = array (
				'title' => '死者',//标题
				'subtitle' => '查看系统中的死者用户'//副标题 
		);
		
		return $infoOptions;
	}
	
	/**
	 * @overrides
	 *
	 * 1、'asscociate'为连表操作，格式遵循以下规则：
	 * '所连表名称|当前表字段|所连表字段|想从所连表取出的字段（用逗号隔开）'。(这里链接的是user表)
	 * 
	 * 2、'where'是对数据表里的数据进行筛选
	 */
	protected function initSqlOptions() {
		$sqlOptions  = array (
				//取teacher表中的user_id字段与user表中的id字段关联的数据
				'associate' => array (
						'user|user_id|id|user_no,roles,name,sex,phone,login_last_time,avatar_file,status user_status'
				),
				'where' => array (
						'user.college_id'=>ss_clgid(),
						'status'=>1,
						'user_id'=>array('gt',10000),
				)
		);
		
		return $sqlOptions;
	}
	/**
	 * @overrides
	 */
	protected function initPageOptions() {
		//前台左下角的编辑和删除
		return array (
				'deleteType'=> 'status|9',
				'actions' 	=> array (
						'edit' => array (
								'title' => '编辑',
								'max' => 1 
						),
						'delete' => array (
								'title' => '删除',								
								'confirm' => true 
						)
				),
				'tips'		=> array(
						'add'	=> '新增用户初始密码123456'
				),
				'order'		=>	'user.login_last_time desc',
				'tablesWrite'=>array(
						'user'=>'id',
						$this->getTableNameHy()=>array('user_id'=>'user')
				),
		);
	}
	/**
	 * @overrides
	 */
	protected function initFieldsOptions() {
		return array (
				'name' => array (
						'title' => '姓名',
						'table' => 'user',
						'list' => array (
							'order' => 'CONVERT(user.name USING gbk)',
							'callback'=>array(
								  'tplReplace','{callback}'=>array('val_decrypt'),
					               C('TPL_DETAIL_BTN'),
					               '{#}'
					        ),
						'search' => array (
										'query' => 'like' ,
								) 
						),
						'form' => array (
								'validate' => array (
										'required' => true,
										'minlength' => 2 
								)
						)
				),
				'roles' => array (
						'form'=>array(
								'fill'=>array(
										'add'=>array('value', ',31,')
								),
						)
				),
				'job' => array (
						'title' => '职务',
						'form' => array (
								'type' => 'text',
								'validate' => array (
										'required' => true
								) 
						) 
				),
				'user_no'=>array(
						'title'=>'教工号',
						'table'=>'user',
						'list'=>array(
								'hidden'=>true
						),
						'form'=>array(
								'validate'=>array(
										'required'=>true
								)
						),	
				),
        /*'sex'为字段名*/
				'sex' => array (
						'title' => '性别',
						//前台显示表头显示的性别
						'table' => 'user',
						//这个字段来自那张表
						'list' => array (
								'search' => array (
										'type' => 'select' 
								) 
						),
				/*
				  list是列表页的显示，search是列表上面那个检索，
				  type是指一个一下拉框形式展现的检索
				*/
						'form' => array (
								'type' => 'select',
								'validate' => array (
										'required' => true 
								) 
						)
			    /*
			       form是表单里的内容，就是点击了新增或编辑弹出的那个表单，type是表现形式，'validate指这个字段为表单必填项'
			     */ 
				),
				'phone' => array (
						'title' => '电话',
						'table' => 'user',
						'list' => array (
								'order' => false ,
								'callback'=>array('val_decrypt')
						) ,
						'form'=>array(
								'validate'=>array(
										'number'=>true,
										'minlength'=>7,
										'maxlength'=>11
								),
								'fill'=>array(
										'both'=>array('val_encrypt')
								),
								'callback'=>array('val_decrypt')
						)
				),
				'login_last_time' => array (
						'title' => '上次登录',
						'list' => array (
								'callback' =>array('to_time')
						) 
				),
				'avatar_file'=>array(
						'table'=>'user',
						'form'=>array(
								'title'	=>'头像',
								'type'=>'file',
								'file'=>array(
										'ext'=>'jpg,png'
								),
								'fill'=>array(
										'both'=>array('val_encrypt','{callback}'=>array('writeFile'),'{#}')
								)
						)
				),
				'remark' => array (
						'form' => array (
								'title' => '备注',
								'type' => 'textarea' 
						) 
				),
				'college_id'=>array(
						'table'=>'user',
						'form'=>array(
							'fill'=>array(
									'both'=>array('value',ss_clgid())
							)
						),
				),
				'password'=>array(
						'table'=>'user',
						'form'=>array(
								'title'=>'密码',
								'add'=>false,
								'fill'=>array(
										'edit'=>array('pwdEncrypt'),
										'add'=>array('value','da3RZTZoQzhjcY0n4lboRUSCatsskH7lzZrVxUZpmy84Pv16lWfDUVSoTNqSC3G4Nc7cvJIS43MHMJ9GYwXHyqIW62HGag2NKwFZ1rhJ_5bFdzjp845gwChjkzz6sIaM'),
								)
						)
				),
				'user_status'=>array(
						'list' => array (
								'title' => '账号状态',
								'width' => '30',
								'callback' => array('status'),
								'orderdir'=>'hy.status'
						),
				),
				'status' => array (
						'table'=>'user',
						'form'=>array(
								'title' => '账号状态',
								'callback' => array('value','{:user_status}'),
								'type'=>'select',
								'options'=>array(1=>'正常','00'=>'禁用'),
								'style'=>'no-bs-select'
						)
				)
		);
	}
	
    public function detail($pk){
		$associate=array(
				'user|user_id|id|user_no,name,sex,phone,roles,email,login_last_time,login_times,avatar_file'		
		);
		$arr=$this->associate($associate)->where(array('user.id'=>$pk))->find();
		return array('table'=>array(
				'base'=>array(
						'title'=>'基础信息',
						'icon'=>'fa-list-alt',
						'style'=>'green',
						'value'=>array(
								'姓名：'=>val_decrypt($arr['name']),
								'性别：'=>$arr['sex'],
								'电话：'=>val_decrypt($arr['phone']),
								'邮箱：'=>$arr['email']
						)
				), 
				'teacher'=>array(
						'title'=>'教工信息',
						'icon'=>'fa-book',
						'style'=>'purple',
						'value'=>array(
								'教工号：'=>$arr['user_no'],
								'职务：'=>$arr['job'],
								'备注：'=>$arr['remark']
						)
				), 
				'user'=>array(
						'title'=>'账号信息',
						'icon'=>'fa-user',
						'style'=>'yellow',
						'value'=>array(
								'头像：'=>HomkaiServiceModel::getAvatarTpl($arr['avatar_file']),
								'上次登录：'=>to_time($arr['login_last_time']),
								'累计登录：'=>($arr['login_times']?:0).'次',
						)
				)
		));
	}
}
