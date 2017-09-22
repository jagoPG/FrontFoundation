<?php

/* node_modules/core-js/library/modules/_set-to-string-tag.js */
class __TwigTemplate_e3bc9b34a1110f3ee5df8f0df420210c90b93c1d5c9099f02dbde21eabc9c482 extends Twig_Template
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
        $__internal_7f608766f45c6f69a87ca94475095b2c7b4047a1d110690ba3b73df0626c9dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f608766f45c6f69a87ca94475095b2c7b4047a1d110690ba3b73df0626c9dda->enter($__internal_7f608766f45c6f69a87ca94475095b2c7b4047a1d110690ba3b73df0626c9dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_set-to-string-tag.js"));

        // line 1
        echo "var def = require('./_object-dp').f;
var has = require('./_has');
var TAG = require('./_wks')('toStringTag');

module.exports = function (it, tag, stat) {
  if (it && !has(it = stat ? it : it.prototype, TAG)) def(it, TAG, { configurable: true, value: tag });
};
";
        
        $__internal_7f608766f45c6f69a87ca94475095b2c7b4047a1d110690ba3b73df0626c9dda->leave($__internal_7f608766f45c6f69a87ca94475095b2c7b4047a1d110690ba3b73df0626c9dda_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_set-to-string-tag.js";
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
", "node_modules/core-js/library/modules/_set-to-string-tag.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_set-to-string-tag.js");
    }
}
