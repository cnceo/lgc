<?php
 function get_list_count($category, $status = 1){
     static $count; if(!isset($count[$category])){
         $count[$category] = D('Document')->listCount($category, $status);
     }
     return $count[$category];
 }
 function baseUrl($uri=''){
     $baseUrl = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://'; $baseUrl .= isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : getenv('HTTP_HOST');
     return $baseUrl.'/'.$uri;
 }
 function fopen_url($url,$postParam="") {
     $file_content = '';
     if (function_exists('curl_init')) {
         $curl_handle = curl_init();
         curl_setopt($curl_handle, CURLOPT_URL, $url);
         curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT,2);
         curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER,1);
         curl_setopt($curl_handle, CURLOPT_FAILONERROR,1);
         curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0');
         if($postParam != "") {
             curl_setopt($curl_handle, CURLOPT_POST, 1);
             curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $postParam);
         }
         $file_content = curl_exec($curl_handle);
         if($file_content === false) {
             echo 'Curl error: ' . curl_error($curl_handle); $file_content = '';
         } curl_close($curl_handle);
     } elseif (function_exists('file_get_contents')) {
         ini_set('user_agent','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0');
         $file_content = @file_get_contents($url);
     } elseif (ini_get('allow_url_fopen') && ($file = @fopen($url, 'rb'))){
         $i = 0; while (!feof($file) && $i++ < 1000) { $file_content .= strtolower(fread($file, 4096)); } fclose($file);
     } else {
         $file_content = '';
     }
     return $file_content;
 }
 function my_sort($arrays,$sort_key,$sort_order=SORT_ASC,$sort_type=SORT_NUMERIC ){
     if(is_array($arrays)){
         foreach ($arrays as $array){
             if(is_array($array)){
                 $key_arrays[] = $array[$sort_key];
             }else{
                 return false;
             }
         }
     }else{
         return false;
     }
     array_multisort($key_arrays,$sort_order,$sort_type,$arrays);
     return $arrays;
 }
 function getDates($start, $end) {
     $dt_start = strtotime($start);
     $dt_end = strtotime($end);
     $dates = array(); do {
         $dates[] = date('Y-m-d', $dt_start);
     } while (($dt_start += 86400) <= $dt_end);
     return $dates;
 }
 function cutChString($str,$length){
     $str = trim($str); $string = "";
     if(strlen($str) > $length) {
         for($i = 0 ; $i<$length ; $i++) {
             if(ord($str[$i]) > 127) {
                 $string .= $str[$i] . $str[$i+1] .$str[$i+2]; $i = $i + 2;
             } else {
                 $string .= $str[$i];
             }
         }
         $string .= "..."; return $string;
     }
     return $str;
 }