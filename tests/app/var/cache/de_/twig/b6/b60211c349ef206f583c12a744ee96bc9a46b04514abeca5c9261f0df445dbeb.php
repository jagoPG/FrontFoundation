<?php

/* node_modules/core-js/library/modules/es6.string.bold.js */
class __TwigTemplate_629cd657dd837d8d614eba9dc491cc434a987eed5231f85656346ca25312f671 extends Twig_Template
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
        $__internal_b95cfc8a3a085e4208de94a40773a86f4ef762b5a18bb45cbee4843939e962b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95cfc8a3a085e4208de94a40773a86f4ef762b5a18bb45cbee4843939e962b0->enter($__internal_b95cfc8a3a085e4208de94a40773a86f4ef762b5a18bb45cbee4843939e962b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.bold.js"));

        // line 1
        echo "'use strict';
// B.2.3.5 String.prototype.bold()
require('./_string-html')('bold', function (createHTML) {
  return function bold() {
    return createHTML(this, 'b', '', '');
  };
});
";
        
        $__internal_b95cfc8a3a085e4208de94a40773a86f4ef762b5a18bb45cbee4843939e962b0->leave($__internal_b95cfc8a3a085e4208de94a40773a86f4ef762b5a18bb45cbee4843939e962b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.bold.js";
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
", "node_modules/core-js/library/modules/es6.string.bold.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.bold.js");
    }
}
