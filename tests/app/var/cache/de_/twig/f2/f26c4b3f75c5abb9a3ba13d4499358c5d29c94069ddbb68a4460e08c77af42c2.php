<?php

/* node_modules/core-js/library/es6/weak-set.js */
class __TwigTemplate_2302098c77222ccac405e25f2ec0b1e9ffea7c83071867abd007c0fbb909b04d extends Twig_Template
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
        $__internal_519709c56ac90f951abe365a5d36a76a2fa337d616b26462537e12678bbd63b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519709c56ac90f951abe365a5d36a76a2fa337d616b26462537e12678bbd63b1->enter($__internal_519709c56ac90f951abe365a5d36a76a2fa337d616b26462537e12678bbd63b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es6/weak-set.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-set');
module.exports = require('../modules/_core').WeakSet;
";
        
        $__internal_519709c56ac90f951abe365a5d36a76a2fa337d616b26462537e12678bbd63b1->leave($__internal_519709c56ac90f951abe365a5d36a76a2fa337d616b26462537e12678bbd63b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es6/weak-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-set');
module.exports = require('../modules/_core').WeakSet;
", "node_modules/core-js/library/es6/weak-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es6/weak-set.js");
    }
}
