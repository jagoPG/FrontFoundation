<?php

/* node_modules/core-js/fn/string/virtual/trim-end.js */
class __TwigTemplate_cdb1cf8736132541266a8d7041524edd8cf6b710c1e2e3a138146c010fa277cd extends Twig_Template
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
        $__internal_39c474b1dacdc9acee487ee94cb6f2d7f878da1c235e7ccf42fd5dcd4cbb0e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c474b1dacdc9acee487ee94cb6f2d7f878da1c235e7ccf42fd5dcd4cbb0e3d->enter($__internal_39c474b1dacdc9acee487ee94cb6f2d7f878da1c235e7ccf42fd5dcd4cbb0e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/trim-end.js"));

        // line 1
        echo "require('../../../modules/es7.string.trim-right');
module.exports = require('../../../modules/_entry-virtual')('String').trimRight;
";
        
        $__internal_39c474b1dacdc9acee487ee94cb6f2d7f878da1c235e7ccf42fd5dcd4cbb0e3d->leave($__internal_39c474b1dacdc9acee487ee94cb6f2d7f878da1c235e7ccf42fd5dcd4cbb0e3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/trim-end.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.trim-right');
module.exports = require('../../../modules/_entry-virtual')('String').trimRight;
", "node_modules/core-js/fn/string/virtual/trim-end.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/trim-end.js");
    }
}
