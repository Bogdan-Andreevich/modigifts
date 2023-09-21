<?php
class ControllerExtensionModuleNotifyVisitorswebbanner extends Controller {

	public function index($setting = null) {
		$this->load->language('extension/module/notify_visitors_webbanner');
		$data['brandID'] =$setting['brandID'];
		$data['secretKey'] = $setting['secretKey'];
		if(!empty($data['brandID'])){
			return $this->load->view('extension/module/notify_visitors_webbanner', $data);
		}
				
	}
}
?>