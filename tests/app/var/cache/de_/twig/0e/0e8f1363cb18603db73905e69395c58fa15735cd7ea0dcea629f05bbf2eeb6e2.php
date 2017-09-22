<?php

/* node_modules/core-js/modules/library/_redefine.js */
class __TwigTemplate_bf07b0b7bdb8fc5d210e612b0ee175276a72ca4805ee0dab2e4370b4ec3fe9cb extends Twig_Template
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
        $__internal_ef8f9eeec96bd6214bae34ddd49dbf9dc163710b6db391db499b41304149cc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8f9eeec96bd6214bae34ddd49dbf9dc163710b6db391db499b41304149cc5f->enter($__internal_ef8f9eeec96bd6214bae34ddd49dbf9dc163710b6db391db499b41304149cc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/library/_redefine.js"));

        // line 1
        echo "module.exports = require('./_hide');
";
        
        $__internal_ef8f9eeec96bd6214bae34ddd49dbf9dc163710b6db391db499b41304149cc5f->leave($__internal_ef8f9eeec96bd6214bae34ddd49dbf9dc163710b6db391db499b41304149cc5f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/library/_redefine.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./_hide');
", "node_modules/core-js/modules/library/_redefine.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/library/_redefine.js");
    }
}
