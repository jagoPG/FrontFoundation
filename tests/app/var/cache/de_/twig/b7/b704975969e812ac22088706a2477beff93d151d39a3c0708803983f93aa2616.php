<?php

/* node_modules/core-js/fn/dom-collections/index.js */
class __TwigTemplate_c05d23c4d865f084db32555999c3e3c9a3c77df2761d940007df62906d8ab9ba extends Twig_Template
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
        $__internal_d8bc6243faeb7d081ca7016f03187d4ffaa4ffaf672355b22581fc5a3e2f2906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bc6243faeb7d081ca7016f03187d4ffaa4ffaf672355b22581fc5a3e2f2906->enter($__internal_d8bc6243faeb7d081ca7016f03187d4ffaa4ffaf672355b22581fc5a3e2f2906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/dom-collections/index.js"));

        // line 1
        echo "require('../../modules/web.dom.iterable');
var \$iterators = require('../../modules/es6.array.iterator');
module.exports = {
  keys: \$iterators.keys,
  values: \$iterators.values,
  entries: \$iterators.entries,
  iterator: \$iterators.values
};
";
        
        $__internal_d8bc6243faeb7d081ca7016f03187d4ffaa4ffaf672355b22581fc5a3e2f2906->leave($__internal_d8bc6243faeb7d081ca7016f03187d4ffaa4ffaf672355b22581fc5a3e2f2906_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/dom-collections/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/web.dom.iterable');
var \$iterators = require('../../modules/es6.array.iterator');
module.exports = {
  keys: \$iterators.keys,
  values: \$iterators.values,
  entries: \$iterators.entries,
  iterator: \$iterators.values
};
", "node_modules/core-js/fn/dom-collections/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/dom-collections/index.js");
    }
}
