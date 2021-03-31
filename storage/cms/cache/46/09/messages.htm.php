<?php 
class Cms6064246ba4213400113273_fbab18b6ea980804602d861d6d9b3863Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $this['messages'] = RainLab\Translate\Models\Message::all();
}
}
