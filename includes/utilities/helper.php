<?php
namespace WPVIM\Utilities;

if (!defined('ABSPATH')) {
    exit;
}

class Helper {
    public static function instance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new self();
        }
        return $instance;
    }

    public function get_ip()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }

    public function get_user_agent()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public function get_referer()
    {
        return $_SERVER['HTTP_REFERER'] ?? '';
    }

    public function get_current_page()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function get_current_time()
    {
        return current_time('mysql');
    }

    public function is_bot()
    {
        $user_agent = $this->get_user_agent();
        $bots = ['bot', 'spider', 'crawl', 'curl', 'wget'];
        foreach ($bots as $bot) {
            if (stripos($user_agent, $bot) !== false) {
                return true;
            }
        }
        return false;
    }
}