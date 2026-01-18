<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

class GravUploadInfo extends Plugin
{
    /**
     * Restituisce le info sui limiti PHP per i Blueprint
     */
    public static function getPhpLimits()
    {
        $upload_max = ini_get('upload_max_filesize');
        $post_max = ini_get('post_max_size');
        $memory_limit = ini_get('memory_limit');

        return "⚙️ Server Limits — File Max: {$upload_max} | Post Max: {$post_max} | RAM: {$memory_limit}";
    }
}
