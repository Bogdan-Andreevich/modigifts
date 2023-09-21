<?php
class ControllerExtensionModuleCookies extends Controller {
    private $error = array();
  
	const DEFAULT_MODULE_SETTINGS = [
		'name' => 'Cookie agreement',
		'message' => 'By using this website you give permission to use cookies for your best shopping expirence',
		'button_text' => 'Understood',
		'bg_colour' => '#ffc520',
        'text_colour' => '#fff',
        'informations_text' => 'More Information',
        'config_cookies_informations' => 0,
        'show_type' => 1,
		'status' => 1
	];
    
	
	public function index() {  
		if (!isset($this->request->get['module_id'])) {
			$module_id = $this->addModule();
			$this->response->redirect($this->url->link('extension/module/cookies','&user_token='.$this->session->data['user_token'].'&module_id='.$module_id));
		} else {
		   $this->editModule($this->request->get['module_id']);
		}
		

	}
		private function addModule() {
		$this->load->model('setting/module');
	
		$this->model_setting_module->addModule('cookies', self::DEFAULT_MODULE_SETTINGS);
		
		return $this->db->getLastId();
	}
	protected function editModule($module_id) {
		$this->load->model('setting/module');
		
		/* Set page title */
		$this->load->language('extension/module/cookies');
		$this->document->setTitle($this->language->get('heading_title'));
		
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate()) {
			$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			
			$this->session->data['success'] = $this->language->get('text_success');
						
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
		$data = array(); 
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/cookies', 'user_token=' . $this->session->data['user_token'], true)
		);
		
		$module_setting = $this->model_setting_module->getModule($module_id);
		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} else {
			$data['name'] = $module_setting['name'];
		}
		if (isset($this->request->post['message'])) {
			$data['message'] = $this->request->post['message'];
		} else {
			$data['message'] = $module_setting['message'];
		}
		if (isset($this->request->post['bg_colour'])) {
			$data['bg_colour'] = $this->request->post['bg_colour'];
		} else {
			$data['bg_colour'] = $module_setting['bg_colour'];
		}
      		if (isset($this->request->post['text_colour'])) {
			$data['text_colour'] = $this->request->post['text_colour'];
		} else {
			$data['text_colour'] = $module_setting['text_colour'];
		} 
                        if (isset($this->request->post['show_type'])) {
                        $data['show_type'] = $this->request->post['show_type'];
                } else {
                        $data['show_type'] = $module_setting['show_type'];
                }
        
                if (isset($this->request->post['informations_text'])) {
                        $data['informations_text'] = $this->request->post['informations_text'];
                } else {
                        $data['informations_text'] = $module_setting['informations_text'];
                }


                        if (isset($this->request->post['config_cookies_informations'])) {
                        $data['config_cookies_informations'] = $this->request->post['config_cookies_informations'];
                } else {
                        $data['config_cookies_informations'] = $module_setting['config_cookies_informations'];
                }

		        $this->load->model('catalog/information');

                $data['informations'] = $this->model_catalog_information->getInformations();

		
		if (isset($this->request->post['button_text'])) {
			$data['button_text'] = $this->request->post['button_text'];
		} else {
			$data['button_text'] = $module_setting['button_text'];
		}
		
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} else {
			$data['status'] = $module_setting['status'];
		} 
		$data['action']['cancel'] = $this->url->link('marketplace/extension', 'user_token='.$this->session->data['user_token'].'&type=module');
		$data['action']['save'] = "";
		$data['error'] = $this->error;	
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$htmlOutput = $this->load->view('extension/module/cookies', $data);
		$this->response->setOutput($htmlOutput);
	}
  
    public function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/cookies')) {
			$this->error['permission'] = true;
			return false;
		}
		
		if (!utf8_strlen($this->request->post['name'])) {
			$this->error['name'] = true;
		}
		if (!utf8_strlen($this->request->post['message'])) {
			$this->error['message'] = true;
		}
		if (!utf8_strlen($this->request->post['bg_colour'])) {
			$this->error['bg_colour'] = true;
		}
        if (!utf8_strlen($this->request->post['text_colour'])) {
			$this->error['text_colour'] = true;
		}
		
		if (!utf8_strlen($this->request->post['button_text'])) {
			$this->error['button_text'] = true;
		}
		
		return empty($this->error);
}
 
    public function install() {

  $this->load->model('setting/setting');
    $this->model_setting_setting->editSetting('module_cookies', ['module_cookies_status'=>1]);
 
	}
 
    public function uninstall() {

 $this->load->model('setting/setting');
 $this->model_setting_setting->deleteSetting(‘module_cookies’);
 }

}
