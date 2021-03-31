<?php 
class Cms6064266151ca3058821537_137fa82e5ce4016c19f0cf724c4206d9Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
        $this->page->title = $this->post->title;
}
}
