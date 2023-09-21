<?php
class ControllerExtensionModuleCookies extends Controller {
	public function index($setting = null) {
		if ($setting && $setting['status']) {
			 $data = array();
			 $data['message'] = $setting['message'];
			 $data['button_text'] = $setting['button_text'];
			 $data['bg_colour'] = $setting['bg_colour'];
            $data['text_colour'] = $setting['text_colour'];
			 $data['informations_text'] = $setting['informations_text'];
            $data['show_type'] = $setting['show_type'];
                if ($setting['config_cookies_informations']>0) {

$data['informations_number'] = $setting['config_cookies_informations'];
$data['config_cookies_informations'] =  $this->config->get('config_url') . 'index.php?route=information/information&information_id=' . $setting['config_cookies_informations'];

                } else {
                        $data['config_cookies_informations'] = '';
                }

			return $this->load->view('extension/module/cookies', $data);
		}
	}
	
}
