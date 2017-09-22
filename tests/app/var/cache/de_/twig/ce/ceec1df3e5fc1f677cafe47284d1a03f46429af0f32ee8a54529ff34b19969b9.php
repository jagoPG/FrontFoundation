<?php

/* node_modules/lodash/fp/array.js */
class __TwigTemplate_90d2f78f17c3de735356cb7a12d9d798f8b27ee58987e418832052f4445346ed extends Twig_Template
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
        $__internal_e521286f5f833ef2969c33550a0807413b1536b8713c6bf0338b295b49eb00b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e521286f5f833ef2969c33550a0807413b1536b8713c6bf0338b295b49eb00b5->enter($__internal_e521286f5f833ef2969c33550a0807413b1536b8713c6bf0338b295b49eb00b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/array.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../array'));
";
        
        $__internal_e521286f5f833ef2969c33550a0807413b1536b8713c6bf0338b295b49eb00b5->leave($__internal_e521286f5f833ef2969c33550a0807413b1536b8713c6bf0338b295b49eb00b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../array'));
", "node_modules/lodash/fp/array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/array.js");
    }
}
