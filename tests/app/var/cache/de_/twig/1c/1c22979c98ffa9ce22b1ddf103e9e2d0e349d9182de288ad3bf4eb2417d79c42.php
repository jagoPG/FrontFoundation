<?php

/* node_modules/core-js/library/modules/es6.string.italics.js */
class __TwigTemplate_a946f58344e71a700f9b20e4644e7e012bb94c7e97c5a208b123a4fc448a9f10 extends Twig_Template
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
        $__internal_4b3c805213c7d22fefa16a551963f695f792fe67aabdd7b515f761317d6139eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3c805213c7d22fefa16a551963f695f792fe67aabdd7b515f761317d6139eb->enter($__internal_4b3c805213c7d22fefa16a551963f695f792fe67aabdd7b515f761317d6139eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.italics.js"));

        // line 1
        echo "'use strict';
// B.2.3.9 String.prototype.italics()
require('./_string-html')('italics', function (createHTML) {
  return function italics() {
    return createHTML(this, 'i', '', '');
  };
});
";
        
        $__internal_4b3c805213c7d22fefa16a551963f695f792fe67aabdd7b515f761317d6139eb->leave($__internal_4b3c805213c7d22fefa16a551963f695f792fe67aabdd7b515f761317d6139eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.italics.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.9 String.prototype.italics()
require('./_string-html')('italics', function (createHTML) {
  return function italics() {
    return createHTML(this, 'i', '', '');
  };
});
", "node_modules/core-js/library/modules/es6.string.italics.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.italics.js");
    }
}
