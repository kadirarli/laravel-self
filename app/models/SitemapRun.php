<?php namespace Kadirarli\SEO;

class SitemapRun
{
    public $generator;

    public function __construct($generator){
        $this->generator = $generator;
    }

    public function run(){
        return $this->index();
    }

    public function index(){
        $this->generator->addRaw(
            array(
                  'location'         => '/sitemap-posts.xml',
                  'last_modified'    => '2013-12-28',
                  'change_frequency' => 'weekly',
                  'priority'         => '0.95'
            )
        );
        return $this->response($this->generator->generate());
    }

    public function posts(){
        $this->generator->addRaw(
          array(
              'location'         => 'example.com',
              'last_modified'    => '2013-01-28',
              'change_frequency' => 'weekly',
              'priority'         => '0.65'
          )
        );
        $this->generator->addRaw(
          array(
              'location'         => 'example.com/test',
              'last_modified'    => '2013-12-28',
              'change_frequency' => 'weekly',
              'priority'         => '0.95'
          )
        );
        $this->generator->addRaw(
          array(
              'location'         => 'example.com/test/2',
              'last_modified'    => '2013-12-25',
              'change_frequency' => 'weekly',
              'priority'         => '0.99'
          )
        );
        return $this->response($this->generator->generate());
    }
    
    private function response($sitemap){
        return Response::make($sitemap, 200, array('Content-Type' => 'text/xml'));
    }
}