<?php

namespace php\gui\monaco;

use php\gui\layout\UXRegion;

class MonacoEditor extends UXRegion {

    /**
     * @return Editor
     */
    public function getEditor(): Editor {
    }

    /**
     * @param callable $onLoad
     */
    public function setOnLoad(callable $onLoad)
    {
    }
}
