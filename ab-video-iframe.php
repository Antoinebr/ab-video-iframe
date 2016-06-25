<?php

class abVideoIframe
{

  private $url;

  public function __construct($url){

    $this->url = $url;

  }

  public function get_video(){

    if( strpos($this->url, 'youtube.com') !== false ){

      return '<iframe class="iframe-video center-block" frameborder="0" width="100%"  height="519"  style="max-width:1200px;" src="https://www.youtube.com/embed/'.$this->get_youtube_id($this->url).'?rel=0"  allowfullscreen></iframe>';

      }elseif( strpos($this->url, 'dailymotion.com') !== false ){

        return  '<iframe  class="iframe-video center-block" frameborder="0" width="100%" height="519" style="max-width:1200px;" src="//www.dailymotion.com/embed/video/'.$this->get_dailymotion_id($this->url).'" allowfullscreen></iframe>';

      }

    }



    private function get_youtube_id($url){
      parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
      return $my_array_of_vars['v'];
    }


    private function get_dailymotion_id($url){
      return strtok(basename($url), '_');
    }


  }
