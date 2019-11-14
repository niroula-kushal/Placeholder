<?php
namespace Coffee\Placeholder;

class PlaceholderManager
{
    private static $placeholders = [];

    public static function captureStart($key) {
        $placeholder = self::getPlaceholderByKey($key);
        $placeholder->captureStart();
    }

    public static function captureEnd($key) {
        $placeholder = self::getPlaceholderByKey($key);
        $placeholder->captureEnd();
    }

    public static function getContent($key) {
        return self::getPlaceholderByKey($key)->getContent();
    }

    public static function getPlaceholderByKey($key): Placeholder {
        $placeholder = self::$placeholders[$key] ?? null;
        if ($placeholder) return $placeholder;
        self::$placeholders[$key] = new Placeholder($key);
        return self::$placeholders[$key];
    }
}