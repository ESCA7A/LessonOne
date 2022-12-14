<?php

namespace Engine;

class PathHandler
{
    public function replaceSlashes(string $string): string|null
    {
        return preg_replace('/\//', '\\', $string, -1);
    }

    public function removeAfterDot(array|string $data)
    {
        $simpleArray = [];

        if(is_array($data)) {
            foreach($data as $record) {
                $record = substr_replace($record , '', strrpos($record , '.'));
                $simpleArray[] = $record;
            }

            return $simpleArray;
        }

        if(is_string($data)) {

            return substr_replace($data , '', strrpos($data , '.'));
        }
    }

    public function removeWordAndBackslash(string|array $subject, string $word ): string|array|null
    {
        $simpleArray = [];

        if(is_string($subject)) {

            return preg_replace("/{$word}\\\/", '', $subject, -1);
        }

        if(is_array($subject)) {
            foreach($subject as $item) {
                $simpleArray[] = preg_replace("/{$word}\\\/", '', $subject, -1);
            }

            return $simpleArray;
        }

        return null;
    }
}