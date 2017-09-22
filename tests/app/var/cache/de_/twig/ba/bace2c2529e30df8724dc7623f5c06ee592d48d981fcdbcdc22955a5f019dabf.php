<?php

/* node_modules/core-js/modules/es6.string.bold.js */
class __TwigTemplate_818ea8c6b3203ac9d67d0dc2cfc8b22c1f6caef7471024f47190a2dbff14b2ef extends Twig_Template
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
        $__internal_c98afee6a4b406416c9b8b447620b174cf69a559b8320a8f6dd41cb50c63c6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98afee6a4b406416c9b8b447620b174cf69a559b8320a8f6dd41cb50c63c6c6->enter($__internal_c98afee6a4b406416c9b8b447620b174cf69a559b8320a8f6dd41cb50c63c6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.bold.js"));

        // line 1
        echo "'use strict';
// B.2.3.5 String.prototype.bold()
require('./_string-html')('bold', function (createHTML) {
  return function bold() {
    return createHTML(this, 'b', '', '');
  };
});
";
        
        $__internal_c98afee6a4b406416c9b8b447620b174cf69a559b8320a8f6dd41cb50c63c6c6->leave($__internal_c98afee6a4b406416c9b8b447620b174cf69a559b8320a8f6dd41cb50c63c6c6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.bold.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.5 String.prototype.bold()
require('./_string-html')('bold', function (createHTML) {
  return function bold() {
    return createHTML(this, 'b', '', '');
  };
});
", "node_modules/core-js/modules/es6.string.bold.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.bold.js");
    }
}
