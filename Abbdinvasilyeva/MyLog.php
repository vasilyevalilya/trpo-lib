<?php namespace Abbdinvasilyeva;

use core\LogAbstract;
use core\LogInterface;


Class MyLog extends LogAbstract implements LogInterface {

    public function _log(String $str){
        $this->log[]=$str;
    }

    /**
     * @param String $str строка для записи в массив лога
     */
    public static function log(String $str): void {
        self::Instance()->_log($str);
	}
    
    public function _write(){
        
        foreach($this->log as $value){
            echo $value."\n";
        }
        $d = new \DateTime();
        $file = "./Log/". $d->format('d-m-Y\TH_i_s_u').".log";
        if (!is_dir('./Log/'))
        {
            mkdir("./Log/");
        }
        file_put_contents($file, $this->log);
        
    }
    
    public static function write(): void {
        self::Instance()->_write();
    }

}

?>