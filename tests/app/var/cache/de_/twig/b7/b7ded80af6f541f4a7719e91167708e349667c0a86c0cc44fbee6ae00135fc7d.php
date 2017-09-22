<?php

/* node_modules/core-js/modules/es6.string.link.js */
class __TwigTemplate_25343bb937c1675c0a9458f158e0efb2eecfdb13b365f1bbffe6cbe95f2511c1 extends Twig_Template
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
        $__internal_4c3e76264d4ae00c0a8a50d4f05333a4bdc3755e008a570a36a471647688e959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3e76264d4ae00c0a8a50d4f05333a4bdc3755e008a570a36a471647688e959->enter($__internal_4c3e76264d4ae00c0a8a50d4f05333a4bdc3755e008a570a36a471647688e959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.link.js"));

        // line 1
        echo "'use strict';
// B.2.3.10 String.prototype.link(url)
require('./_string-html')('link', function (createHTML) {
  return function link(url) {
    return createHTML(this, 'a', 'href', url);
  };
});
";
        
        $__internal_4c3e76264d4ae00c0a8a50d4f05333a4bdc3755e008a570a36a471647688e959->leave($__internal_4c3e76264d4ae00c0a8a50d4f05333a4bdc3755e008a570a36a471647688e959_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.link.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.10 String.prototype.link(url)
require('./_string-html')('link', function (createHTML) {
  return function link(url) {
    return createHTML(this, 'a', 'href', url);
  };
});
", "node_modules/core-js/modules/es6.string.link.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.link.js");
    }
}
