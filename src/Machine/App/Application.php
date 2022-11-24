<?php
namespace Machine\App;

use app\Database\Database;
use Exception;
use Machine\Auth\Auth;
use Machine\Container\Container;
use Machine\gDebug\Debug;
use Machine\Http\Response;
use Machine\Log\Log;
use Machine\Routing\Route;
use Machine\Seo\Seo;

class Application
{
    /**
     * The gCoffee framework version.
     *
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * The base path for the Laravel installation.
     *
     * @var string
     */
    protected $rootPath;

    /**
     * The custom database path defined by the developer.
     *
     * @var string
     */
    protected $databasePath;

    /**
     * The custom storage path defined by the developer.
     *
     * @var string
     */
    protected $storagePath;

    // CREATE a VARIABLE
    //static public string $ROOT_DIR;

    public Response $response;
    public Route $route;
    public Auth $auth;
    public Log $log;
    public Seo $seo;
    public Database $db;
    public array $user;
    public static Application $app;
    /**
     * @var mixed
     */
    public $controller = null;


    /**
     * Application constructor.
     * @param $rootPath
     */
    public function __construct($rootPath = null)
    {
        if ($rootPath) {
            $this->setRootPath($rootPath);
        }

        self::$app       = $this;

        $this->baseServiceProvider();
    }


    protected function baseServiceProvider()
    {
        $this->response     = new Response();
        $this->seo          = new Seo();
        $this->db           = new Database();
        $this->route        = new Route();
        $this->auth         = new Auth();
        $this->log          = new Log();

        $this->user = Auth::$auth->userOnSession();
    }


    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }

    /**
     * Set the base path for the application.
     *
     * @param  string  $rootPath
     * @return $this
     */
    public function setRootPath($rootPath)
    {
        $this->rootPath = rtrim($rootPath, '\/');

        return $this;
    }

    /**
     * Get the root path of the gCoffee installation.
     *
     * @param  string  $path
     * @return string
     */
    public function rootPath($path = '')
    {
        return $this->rootPath.($path != '' ? DIRECTORY_SEPARATOR.$path : '');
    }

    /**
     * Get the path to the database directory.
     *
     * @param  string  $path
     * @return string
     */
    public function databasePath($path = '')
    {
        return ($this->databasePath ?: $this->rootPath.DIRECTORY_SEPARATOR.'database').($path != '' ? DIRECTORY_SEPARATOR.$path : '');
    }

    /**
     * Get the path to the storage directory.
     *
     * @param  string  $path
     * @return string
     */
    public function storagePath($path = '')
    {
        return ($this->storagePath ?: $this->rootPath.DIRECTORY_SEPARATOR.'storage')
            .($path != '' ? DIRECTORY_SEPARATOR.$path : '');
    }

    /**
     * Get the path to the resources directory.
     *
     * @param  string  $path
     * @return string
     */
    public function resourcePath($path = '')
    {
        return $this->rootPath.DIRECTORY_SEPARATOR.'resources'.($path != '' ? DIRECTORY_SEPARATOR.$path : '');
    }
    
    

    /**
     * @throws Exception
     */
    public function run()
    {
        try {

            echo Route::$route->Web()->loading();

        }catch (Exception){

            try {

                echo Auth::$auth->Route()->loading();

            }catch (Exception $e){

                $this->response->setStatusCode($e->getCode());
//                echo view('errors/'. $e->getCode());
            }

        }
    }

}