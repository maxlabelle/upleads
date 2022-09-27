<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Libraries\Template;

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
abstract class SecureBaseController extends Controller
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
    }

    public function _remap($method, ...$params)
    {
        $auth = false;
        $userId = $this->session->get('userId');
        if (!empty($userId)) {
          $query = $this->db->table('users')->getWhere(['id'=>$userId]);
          if ($query->getNumRows()) {
            $auth = true;
          }
        }
        if (!$auth) {
          return redirect()->to('/');
        }
        return $this->{$method}(...$params);
    }
}
