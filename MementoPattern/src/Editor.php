<?php

namespace  App;

class Editor
{
    private $content;

    public function createState() :EditorState
    {
        return new EditorState($this->content);
    }

    public function restore(EditorState $state)
    {
       return $this->content = $state->getContent();
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }
}