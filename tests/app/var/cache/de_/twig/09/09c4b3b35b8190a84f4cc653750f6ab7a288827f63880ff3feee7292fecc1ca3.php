<?php

/* node_modules/core-js/fn/number/iterator.js */
class __TwigTemplate_2a5d1e7535bbf75893b2dcee00ae67553de0000084fe151d2ee77dac3394b5e0 extends Twig_Template
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
        $__internal_19a3a8971a73d5ef1f228b9bc4185a4fc4b789dea6f57974075605934205b285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a3a8971a73d5ef1f228b9bc4185a4fc4b789dea6f57974075605934205b285->enter($__internal_19a3a8971a73d5ef1f228b9bc4185a4fc4b789dea6f57974075605934205b285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/iterator.js"));

        // line 1
        echo "require('../../modules/core.number.iterator');
var get = require('../../modules/_iterators').Number;
module.exports = function (it) {
  return get.call(it);
};
";
        
        $__internal_19a3a8971a73d5ef1f228b9bc4185a4fc4b789dea6f57974075605934205b285->leave($__internal_19a3a8971a73d5ef1f228b9bc4185a4fc4b789dea6f57974075605934205b285_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.number.iterator');
var get = require('../../modules/_iterators').Number;
module.exports = function (it) {
  return get.call(it);
};
", "node_modules/core-js/fn/number/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/iterator.js");
    }
}
