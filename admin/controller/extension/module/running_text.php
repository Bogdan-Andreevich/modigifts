<?php
class ControllerExtensionModuleRunningText extends Controller {
    public function index() {
        $this->load->language('extension/module/running_text');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/module/running_text');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_extension_module_running_text->editText($this->request->post['text']);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/module/running_text', 'user_token=' . $this->session->data['user_token'], true));
        }

        $data['text'] = $this->model_extension_module_running_text->getText();


        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_form'] = $this->language->get('text_form');
        $data['text_running_text'] = $this->language->get('text_running_text');

        $data['entry_text'] = $this->language->get('entry_text');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        $data['action'] = $this->url->link('extension/module/running_text', 'user_token=' . $this->session->data['user_token'], true);

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
            'href' => $this->url->link('extension/module/running_text', 'user_token=' . $this->session->data['user_token'], true)
        );

        if (isset($this->request->post['text'])) {
            $data['text'] = $this->request->post['text'];
        }

        $data['error'] = '';

        if (isset($this->error['warning'])) {
            $data['error'] = $this->error['warning'];
        }

        $data['user_token'] = $this->session->data['user_token'];

        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        

        $this->response->setOutput($this->load->view('extension/module/running_text', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/running_text')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}