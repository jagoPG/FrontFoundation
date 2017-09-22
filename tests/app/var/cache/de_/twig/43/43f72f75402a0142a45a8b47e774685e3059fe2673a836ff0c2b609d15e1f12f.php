<?php

/* node_modules/core-js/fn/string/virtual/italics.js */
class __TwigTemplate_89c11da071a8e0c8a93cef4d801a3221b4841f1957830ed7ba2df85a47615aef extends Twig_Template
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
        $__internal_d1f3c4642721c60fb2090bcaec5077da906cda8b273e1f9943412260395b8f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f3c4642721c60fb2090bcaec5077da906cda8b273e1f9943412260395b8f28->enter($__internal_d1f3c4642721c60fb2090bcaec5077da906cda8b273e1f9943412260395b8f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/italics.js"));

        // line 1
        echo "require('../../../modules/es6.string.italics');
module.exports = require('../../../modules/_entry-virtual')('String').italics;
";
        
        $__internal_d1f3c4642721c60fb2090bcaec5077da906cda8b273e1f9943412260395b8f28->leave($__internal_d1f3c4642721c60fb2090bcaec5077da906cda8b273e1f9943412260395b8f28_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/italics.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.italics');
module.exports = require('../../../modules/_entry-virtual')('String').italics;
", "node_modules/core-js/fn/string/virtual/italics.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/italics.js");
    }
}
