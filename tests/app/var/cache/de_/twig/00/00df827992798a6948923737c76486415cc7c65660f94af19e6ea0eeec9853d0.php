<?php

/* node_modules/core-js/modules/_set-to-string-tag.js */
class __TwigTemplate_7fa2b5839d8e2f578d9557d59ec5ea488a3afc9c036af85cb8e233360ee1e5b7 extends Twig_Template
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
        $__internal_c0d78d784a7f904ce7a3ac1b8f0898819fb3b1df087c572001b120e22146cacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d78d784a7f904ce7a3ac1b8f0898819fb3b1df087c572001b120e22146cacd->enter($__internal_c0d78d784a7f904ce7a3ac1b8f0898819fb3b1df087c572001b120e22146cacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_set-to-string-tag.js"));

        // line 1
        echo "var def = require('./_object-dp').f;
var has = require('./_has');
var TAG = require('./_wks')('toStringTag');

module.exports = function (it, tag, stat) {
  if (it && !has(it = stat ? it : it.prototype, TAG)) def(it, TAG, { configurable: true, value: tag });
};
";
        
        $__internal_c0d78d784a7f904ce7a3ac1b8f0898819fb3b1df087c572001b120e22146cacd->leave($__internal_c0d78d784a7f904ce7a3ac1b8f0898819fb3b1df087c572001b120e22146cacd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_set-to-string-tag.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var def = require('./_object-dp').f;
var has = require('./_has');
var TAG = require('./_wks')('toStringTag');

module.exports = function (it, tag, stat) {
  if (it && !has(it = stat ? it : it.prototype, TAG)) def(it, TAG, { configurable: true, value: tag });
};
", "node_modules/core-js/modules/_set-to-string-tag.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_set-to-string-tag.js");
    }
}
