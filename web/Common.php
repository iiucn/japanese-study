<?php

namespace IEcho;

use Symfony\Component\HttpFoundation\Response;

class Common
{
    public static function template($template = '')
    {
        if ('' == $template) {
            throw new \Exception('template not exists:' . $template);
        }

        // 模板不存在 抛出异常
        $templateFile = __DIR__ . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR . $template . '.tpl.php';
        if (!is_file($templateFile)) {
            throw new \Exception('template not exists:' . $view);
        }

        return $templateFile;
    }

    public static function showView($view = '', $vars = [])
    {
        if ('' == $view) {
            return new Response('');
        }
        // 页面缓存
        ob_start();
        ob_implicit_flush(false);

        // 渲染输出
        $template = self::template($view);

        try {
            if (isset($vars['template'])) {
                $__template__ = $template;
                extract($vars, EXTR_OVERWRITE);
                unset($vars);
                include $__template__;
            } else {
                extract($vars, EXTR_OVERWRITE);
                unset($vars);
                include $template;
            }
        } catch (\Exception $e) {
            ob_end_clean();
            throw $e;
        }

        // 获取并清空缓存
        $content = ob_get_clean();

        (new Response($content))->send();
    }
}