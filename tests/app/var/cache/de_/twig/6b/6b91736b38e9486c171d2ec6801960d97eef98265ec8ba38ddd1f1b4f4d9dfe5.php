<?php

/* node_modules/core-js/library/modules/es6.string.link.js */
class __TwigTemplate_2911c12415d22ff0364d49d3072ee28db9fc2638944aa5c5f2710f1145f76be3 extends Twig_Template
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
        $__internal_3da7b7f838988b9a0bd45eae3a8ef329f63a51b3c66a8e9c56366722eceb62ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da7b7f838988b9a0bd45eae3a8ef329f63a51b3c66a8e9c56366722eceb62ed->enter($__internal_3da7b7f838988b9a0bd45eae3a8ef329f63a51b3c66a8e9c56366722eceb62ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.link.js"));

        // line 1
        echo "'use strict';
// B.2.3.10 String.prototype.link(url)
require('./_string-html')('link', function (createHTML) {
  return function link(url) {
    return createHTML(this, 'a', 'href', url);
  };
});
";
        
        $__internal_3da7b7f838988b9a0bd45eae3a8ef329f63a51b3c66a8e9c56366722eceb62ed->leave($__internal_3da7b7f838988b9a0bd45eae3a8ef329f63a51b3c66a8e9c56366722eceb62ed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.link.js";
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
", "node_modules/core-js/library/modules/es6.string.link.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.link.js");
    }
}
