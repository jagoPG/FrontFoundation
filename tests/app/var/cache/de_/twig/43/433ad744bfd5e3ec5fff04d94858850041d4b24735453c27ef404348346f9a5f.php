<?php

/* node_modules/core-js/es7/promise.js */
class __TwigTemplate_480a78d5ce111d537490e21afb02cdb306129dbd965c733dc6e29bae891e8c42 extends Twig_Template
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
        $__internal_aa161a555f42906dbf048e76a579a97b422e11b3103efac63b03a41e10d50b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa161a555f42906dbf048e76a579a97b422e11b3103efac63b03a41e10d50b2d->enter($__internal_aa161a555f42906dbf048e76a579a97b422e11b3103efac63b03a41e10d50b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/promise.js"));

        // line 1
        echo "require('../modules/es7.promise.finally');
require('../modules/es7.promise.try');
module.exports = require('../modules/_core').Promise;
";
        
        $__internal_aa161a555f42906dbf048e76a579a97b422e11b3103efac63b03a41e10d50b2d->leave($__internal_aa161a555f42906dbf048e76a579a97b422e11b3103efac63b03a41e10d50b2d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/promise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.promise.finally');
require('../modules/es7.promise.try');
module.exports = require('../modules/_core').Promise;
", "node_modules/core-js/es7/promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/promise.js");
    }
}
