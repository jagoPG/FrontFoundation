<?php

/* node_modules/core-js/library/fn/string/virtual/fontsize.js */
class __TwigTemplate_920c131542c38b4788f7eab7f09840a42800181114de30d7719c8ad0d79e43c4 extends Twig_Template
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
        $__internal_65aa993c10f671755db4f8c545781d0cdebea3bdee574ab0589b8f3f864c7fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65aa993c10f671755db4f8c545781d0cdebea3bdee574ab0589b8f3f864c7fec->enter($__internal_65aa993c10f671755db4f8c545781d0cdebea3bdee574ab0589b8f3f864c7fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/fontsize.js"));

        // line 1
        echo "require('../../../modules/es6.string.fontsize');
module.exports = require('../../../modules/_entry-virtual')('String').fontsize;
";
        
        $__internal_65aa993c10f671755db4f8c545781d0cdebea3bdee574ab0589b8f3f864c7fec->leave($__internal_65aa993c10f671755db4f8c545781d0cdebea3bdee574ab0589b8f3f864c7fec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/fontsize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.fontsize');
module.exports = require('../../../modules/_entry-virtual')('String').fontsize;
", "node_modules/core-js/library/fn/string/virtual/fontsize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/fontsize.js");
    }
}
