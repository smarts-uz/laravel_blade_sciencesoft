<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Nette\Utils\Finder;
use App\Translation;
class language_scanner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scan:translations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Language scanner';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */ 
    public function handle()
    {
        $dir=resource_path('views');
        $last=[];
        foreach (Finder::findFiles('*.blade.php')->from($dir) as $key => $file) {
            $rel_path=explode('views', $file)[1];//end(preg_split('/views/',$file));
            
            $functionName="@translate_lang";
            $content = file_get_contents($file);
            $matches=[];
            if(preg_match_all("#{$functionName} *\( *((['\"])((?:\\\\\\2|.)*?)\\2)#", $content, $matches)) {
                echo 'Current file: '.$rel_path. "\xA";
                $cur_arr=$matches[3];
                $last = array_unique(array_merge ($last, $cur_arr));
                // foreach($matches[3] as $match){
                //     echo $match. "\xA";
                // }
            } 
            
        }
        //print_r($last);
        foreach($last as $key=>$item){
            echo 'Translation: '.$item. "\xA";
            Translation::updateOrCreate([
                'lang'=>'en',
                'lang_key'=>$item,
                'lang_value'=>$item
            ]);
        }
        // print_r($last);
    }
    function find_files($dir, $files = []) {
        echo 'Blade file: '.$dir;
        foreach (glob($dir."/*.blade.php") as $file) {
            echo 'Blade file: '.$file;
            if(is_dir($file)) {
                $files = $this->find_files($file, $files);
                
            }
            echo 'Blade file: '.$file;
            $content = file_get_contents($dir."/".$file);
            if(preg_match_all('/(?<=\s?@lang\(")(.*?\s?)(?="\))/', $content, $matches)) {
                $files[] = $file;
            }            
        }
        return $files;
    }


    
}
