<?php

namespace  App;

class History
{
    private $list = [];

    public function push(EditorState $state)
    {
        $this->list[] = $state;
    }

    public function pop()
    {
        return array_pop($this->list);
    }
}