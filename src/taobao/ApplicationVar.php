<?php

namespace NiuGengYun\EasyTBK\taobao;

class ApplicationVar
{
	var $save_file;
	var $application  = null;
 	var $app_data    = '';
 	var $__writed    = false;

	function __construct()
 	{
    $this->save_file = __DIR__.'/httpdns.conf' ;
 		$this->application = array();
 	}

 	public function setValue($var_name,$var_value)
  {
   		if (!is_string($var_name) || empty($var_name))
    		return false;

   		$this->application[$var_name] = $var_value;
  }

  public function write(){
      $this->app_data = @serialize($this->application);
      $this->__writeToFile();
  }

 	public function getValue()
 	{
     	if (!is_file($this->save_file))
        	 $this->__writeToFile();
     	return @unserialize(@file_get_contents($this->save_file));
 	}

 	function __writeToFile()
 	{
  		$fp = @fopen($this->save_file,"w");
      if(flock($fp , LOCK_EX | LOCK_NB)){
          @fwrite($fp,$this->app_data);
          flock($fp , LOCK_UN);
      }
      @fclose($fp);
 	}
}

?>
