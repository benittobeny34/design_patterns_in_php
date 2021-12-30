<?php

namespace  App;

class EditorState
{
    private  $content;

    public function __construct($content)
    {
       $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
}