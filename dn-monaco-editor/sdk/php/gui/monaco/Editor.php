<?php

namespace php\gui\monaco;

abstract class Editor
{
    /**
     * @var string
     */
    public string $currentTheme, $currentLanguage;

    public bool $readOnly;

    /**
     * @var Document
     */
    public Document $document;

    /**
     * @return ViewController
     */
    public function getViewController(): ViewController
    {
    }

    /**
     * @return bool
     */
    public function isInitialized(): bool
    {
    }

    /**
     * @return array
     */
    public function getSelection(): array
    {
    }

    /**
     * @param array $range
     */
    public function setSelection(array $range)
    {
    }

    /**
     * @param int $lineNumber
     * @param int $type
     */
    public function revealLine(int $lineNumber, int $type = 0): void
    {
    }

    /**
     * @param int $lineNumber
     * @param int $type
     */
    public function revealLineInCenter(int $lineNumber, int $type = 0): void
    {
    }

    /**
     * @param int $lineNumber
     * @param int $type
     */
    public function revealLineInCenterIfOutsideViewport(int $lineNumber, int $type = 0): void
    {
    }

    /**
     * @param int $lineNumber
     * @param int $type
     */
    public function revealPosition(int $lineNumber, int $type = 0): void
    {
    }

    /**
     * @param string $language
     * @param callable $callback (array): CompletionItem
     */
    public function registerCompletionItemProvider(string $language, callable $callback)
    {
    }
}
