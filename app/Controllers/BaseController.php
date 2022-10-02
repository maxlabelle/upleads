<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Libraries\Template;
use App\Models\SettingsModel;
use App\Models\UsersModel;
use App\Models\CampaignsModel;
use App\Models\PagesModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['misc'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        $this->session = \Config\Services::session();
        $this->db = \Config\Database::connect();
        $this->template = new Template();
        $this->request = \Config\Services::request();

        $this->settingsModel = new SettingsModel();
        $this->usersModel = new UsersModel();
        $this->campaignsModel = new CampaignsModel();
        $this->pagesModel = new PagesModel();

        $this->merchant_url_slug = false;
        $current_domain = $_SERVER['SERVER_NAME'];
        $settings = $this->settingsModel->getWhereSingle(['merchant_domain'=>$current_domain]);
        if ($settings) {
          $config = config(App::class);
          $config->baseURL = $current_domain;
          $this->merchant_url_slug = $settings->merchant_url_slug;
        }
    }
}
