<?php

/* node_modules/node-libs-browser/mock/net.js */
class __TwigTemplate_2b7321057f331a6b0f4849e0958bbbad8b4c07cfded3033452035a24a379a3d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f42c71149eee07aba2ab5bd3e606e8b76bdbf01539aa9ed6b95d1eddffd22ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42c71149eee07aba2ab5bd3e606e8b76bdbf01539aa9ed6b95d1eddffd22ef5->enter($__internal_f42c71149eee07aba2ab5bd3e606e8b76bdbf01539aa9ed6b95d1eddffd22ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-libs-browser/mock/net.js"));

        // line 1
        echo "exports.createServer =
exports.createConnection =
exports.connect =
function () {};

exports.isIP =
exports.isIPv4 =
exports.isIPv6 =
function () { return true };

";
        
        $__internal_f42c71149eee07aba2ab5bd3e606e8b76bdbf01539aa9ed6b95d1eddffd22ef5->leave($__internal_f42c71149eee07aba2ab5bd3e606e8b76bdbf01539aa9ed6b95d1eddffd22ef5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-libs-browser/mock/net.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.createServer =
exports.createConnection =
exports.connect =
function () {};

exports.isIP =
exports.isIPv4 =
exports.isIPv6 =
function () { return true };

", "node_modules/node-libs-browser/mock/net.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-libs-browser/mock/net.js");
    }
}
