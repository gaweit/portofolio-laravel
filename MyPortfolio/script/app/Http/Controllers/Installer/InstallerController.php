<?php

namespace App\Http\Controllers\Installer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;
use DB;

class InstallerController extends Controller
{

    public function preinstall()
    {
       
        
    }


    public function install()
    {

        try {
          DB::connection()->getPdo();
          if(DB::connection()->getDatabaseName()){
            return redirect()->route(404);
          }else{
            $phpversion = phpversion();
            $mbstring = extension_loaded('mbstring');
            $bcmath = extension_loaded('bcmath');
            $ctype = extension_loaded('ctype');
            $json = extension_loaded('json');
            $openssl = extension_loaded('openssl');
            $pdo = extension_loaded('pdo');
            $tokenizer = extension_loaded('tokenizer');
            $xml = extension_loaded('xml');

            $info = [
                'phpversion' => $phpversion,
                'mbstring' => $mbstring,
                'bcmath' => $bcmath,
                'ctype' => $ctype,
                'json' => $json,
                'openssl' => $openssl,
                'pdo' => $pdo,
                'tokenizer' => $tokenizer,
                'xml' => $xml,
            ];
            return view('installer.requirments',compact('info'));
          }
        } catch (\Exception $e) {
            $phpversion = phpversion();
            $mbstring = extension_loaded('mbstring');
            $bcmath = extension_loaded('bcmath');
            $ctype = extension_loaded('ctype');
            $json = extension_loaded('json');
            $openssl = extension_loaded('openssl');
            $pdo = extension_loaded('pdo');
            $tokenizer = extension_loaded('tokenizer');
            $xml = extension_loaded('xml');

            $info = [
                'phpversion' => $phpversion,
                'mbstring' => $mbstring,
                'bcmath' => $bcmath,
                'ctype' => $ctype,
                'json' => $json,
                'openssl' => $openssl,
                'pdo' => $pdo,
                'tokenizer' => $tokenizer,
                'xml' => $xml,
            ];
            return view('installer.requirments',compact('info'));
        }
  
    	
    }

    public function info()
    {
    	try {
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
            return redirect()->route(404);
          }else{
            return view('installer.info');
          }
        } catch (\Exception $e) {
            return view('installer.info');
        }   
        
    }

    public function send(Request $request)
    {

     	$myfiles = __DIR__;
     	$main = substr($myfiles,0,-30).'.env';
     	$myfile = fopen($main, "w") or die("Unable to open file!");
		$txt = "APP_NAME=".$request->app_name."\n";
		fwrite($myfile, $txt);
		$txt = "APP_ENV=local\nAPP_KEY=base64:Oi572DPX0FLExElNRpb9e0/8AIk4WJ1bt3zcsMiXyDI=\nAPP_DEBUG=false\nAPP_URL=".$request->app_url."\n\nLOG_CHANNEL=stack\n\nDB_CONNECTION=mysql\nDB_HOST=".$request->db_host."\nDB_PORT=3306\nDB_DATABASE=".$request->db_name."\nDB_USERNAME=".$request->db_user."\nDB_PASSWORD=".$request->db_pass."\n\nBROADCAST_DRIVER=log\nCACHE_DRIVER=file\nQUEUE_CONNECTION=sync\nSESSION_DRIVER=file\nSESSION_LIFETIME=120\n\nREDIS_HOST=127.0.0.1\nREDIS_PASSWORD=null\nREDIS_PORT=6379\n\nMAIL_DRIVER=".$request->mail_driver."\nMAIL_HOST=".$request->mail_host."\nMAIL_PORT=".$request->mail_port."\nMAIL_USERNAME=".$request->mail_user."\nMAIL_PASSWORD=".$request->mail_pass."\nMAIL_ENCRYPTION=".$request->mail_enc."\nMAIL_FROM_ADDRESS=".$request->mail_address."\nMAIL_FROM_NAME=".$request->mail_form."\n\nAWS_ACCESS_KEY_ID=\nAWS_SECRET_ACCESS_KEY=\nAWS_DEFAULT_REGION=us-east-1\nAWS_BUCKET=\n\nPUSHER_APP_ID=\nPUSHER_APP_KEY=\nPUSHER_APP_SECRET=\nPUSHER_APP_CLUSTER=mt1\n\nMIX_PUSHER_APP_KEY=\nMIX_PUSHER_APP_CLUSTER=\n\n MAILCHIMP_APIKEY=\n MAILCHIMP_LIST_ID=\n";
		fwrite($myfile, $txt);
		fclose($myfile);

		return redirect()->route('install.check',$request->method);
    }
    

    public function check($param)
    {
        
        try {
          DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                if ($param=='install') {
                   \Artisan::call('migrate:fresh');
                   \Artisan::call('db:seed');
                   return redirect()->route('welcome');
                }
                 
                 else{
                    return redirect()->route('welcome');
                 }
                
            }else{
                die("Could not find the database. Please check your configuration.");
            }
        } catch (\Exception $e) {
            return redirect()->route('install.info')->with('status','Could not find the database. Please check your configuration.');
        }
        
    }
}
