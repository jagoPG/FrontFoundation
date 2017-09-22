<?php

/* node_modules/core-js/fn/number/virtual/index.js */
class __TwigTemplate_8afe9b6f155582dbf81a7834bad5f7e49493d7b06fa4b3f557928fffea065f51 extends Twig_Template
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
        $__internal_454afad904265320c44aa399f17100973211fc9ba87001dc8c71d79a6fd86721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454afad904265320c44aa399f17100973211fc9ba87001dc8c71d79a6fd86721->enter($__internal_454afad904265320c44aa399f17100973211fc9ba87001dc8c71d79a6fd86721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/virtual/index.js"));

        // line 1
        echo "require('../../../modules/core.number.iterator');
var \$Number = require('../../../modules/_entry-virtual')('Number');
\$Number.iterator = require('../../../modules/_iterators').Number;
module.exports = \$Number;
";
        
        $__internal_454afad904265320c44aa399f17100973211fc9ba87001dc8c71d79a6fd86721->leave($__internal_454afad904265320c44aa399f17100973211fc9ba87001dc8c71d79a6fd86721_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/virtual/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/core.number.iterator');
var \$Number = require('../../../modules/_entry-virtual')('Number');
\$Number.iterator = require('../../../modules/_iterators').Number;
module.exports = \$Number;
", "node_modules/core-js/fn/number/virtual/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/virtual/index.js");
    }
}
