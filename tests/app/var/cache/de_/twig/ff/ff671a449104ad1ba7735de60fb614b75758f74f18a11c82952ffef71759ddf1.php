<?php

/* node_modules/tape/example/stream/object.js */
class __TwigTemplate_84c0a181e6e506606ef0b87aa9e7c41a5eeb45515446e2014eff22fa91ad61a2 extends Twig_Template
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
        $__internal_ee7d12c2d13fd2b9b0acb851c9b6d43bfc4523cc7b1c0a690dc38d488c250704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7d12c2d13fd2b9b0acb851c9b6d43bfc4523cc7b1c0a690dc38d488c250704->enter($__internal_ee7d12c2d13fd2b9b0acb851c9b6d43bfc4523cc7b1c0a690dc38d488c250704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/stream/object.js"));

        // line 1
        echo "var test = require('../../');
var path = require('path');

test.createStream({ objectMode: true }).on('data', function (row) {
    console.log(JSON.stringify(row))
});

process.argv.slice(2).forEach(function (file) {
    require(path.resolve(file));
});
";
        
        $__internal_ee7d12c2d13fd2b9b0acb851c9b6d43bfc4523cc7b1c0a690dc38d488c250704->leave($__internal_ee7d12c2d13fd2b9b0acb851c9b6d43bfc4523cc7b1c0a690dc38d488c250704_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/stream/object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../');
var path = require('path');

test.createStream({ objectMode: true }).on('data', function (row) {
    console.log(JSON.stringify(row))
});

process.argv.slice(2).forEach(function (file) {
    require(path.resolve(file));
});
", "node_modules/tape/example/stream/object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/stream/object.js");
    }
}
