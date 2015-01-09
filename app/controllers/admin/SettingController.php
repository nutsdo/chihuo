<?php namespace admin;
    
    use File;
    use Config;
    class SettingController extends \Controller{
        protected $layout = "layouts.main";
        
        public function index(){
            
            $test['setting'] = 'this is a config file';
            $test['test'] = 'what can we do?';
            $test['answer'] = 'we can do everything!';
            $content = var_export($test,true);
            $content = "<?php \n return ".$content."; \n";
            //$config = File::put('../app/config/system.php',$content);
            //print_r($new);
            //return "HELLO XCODE";
            $config = Config::get('system');
            var_dump($config);
            echo $config['setting'].'</br>';
            echo $config['test'].'</br>';
            echo $config['answer'].'</br>';
        }
        
    }