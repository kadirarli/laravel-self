<?php namespace Kadirarli\SEO;

//use \Vinicius73\SEO\Generators\SitemapGenerator;

class SitemapRun
{

    /**
     * @var \Vinicius73\SEO\Generators\SitemapGenerator
     */
    public $generator;

    public function __construct($generator)
    {
        $this->generator = $generator;
    }

    /**
     * Run generator commands
     */
    public function run()
    {
        return $this->index();
    }

    public function index()
    {
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

    public function posts()
    {
        /*
        $posts = Post::all();

        foreach($posts as $post)
        {
            $images = $post->images;

            $element = array(
                      'location'         => route('route.to.post.show', $post->id),
                      'last_modified'    => $post->published_date->toW3CString(),
                      'change_frequency' => 'weekly',
                      'priority'         => '0.90'
                );

            if ($images):
                $element['images'] = array();
                foreach ($images as $image):
                    $element['images'][] = $image->url();
                endforeach;
            endif;

            $this->generator->addRaw($element);
        }

        return $this->response($this->generator->generate());
        */
        //
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
        //return $this->generator->generate();

    }

    /**
     * @param $sitemap
     *
     * @return \Illuminate\Http\Response
     */
    private function response($sitemap)
    {
        return Response::make($sitemap, 200, array('Content-Type' => 'text/xml'));
    }
}