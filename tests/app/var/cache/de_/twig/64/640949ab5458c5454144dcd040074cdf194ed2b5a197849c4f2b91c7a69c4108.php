<?php

/* node_modules/core-js/library/fn/string/trim-end.js */
class __TwigTemplate_c71acf91f5704ccf944340c84452d66c1b96bef69272309b3f6b0d69f30f13c1 extends Twig_Template
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
        $__internal_6db596b34d8e49dd05858f4cedf064279f192df355053305b159a1c708645834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db596b34d8e49dd05858f4cedf064279f192df355053305b159a1c708645834->enter($__internal_6db596b34d8e49dd05858f4cedf064279f192df355053305b159a1c708645834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/trim-end.js"));

        // line 1
        echo "require('../../modules/es7.string.trim-right');
module.exports = require('../../modules/_core').String.trimRight;
";
        
        $__internal_6db596b34d8e49dd05858f4cedf064279f192df355053305b159a1c708645834->leave($__internal_6db596b34d8e49dd05858f4cedf064279f192df355053305b159a1c708645834_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/trim-end.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.string.trim-right');
module.exports = require('../../modules/_core').String.trimRight;
", "node_modules/core-js/library/fn/string/trim-end.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/trim-end.js");
    }
}
