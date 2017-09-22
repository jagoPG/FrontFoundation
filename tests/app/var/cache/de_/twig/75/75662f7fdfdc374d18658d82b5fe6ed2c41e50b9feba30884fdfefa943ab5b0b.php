<?php

/* node_modules/core-js/fn/object/define-setter.js */
class __TwigTemplate_4b9964a0b79312d5693d7defefb3aaa698734b6a719dda9668469925c78cd27a extends Twig_Template
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
        $__internal_0599c10ba2cc83d23916900d35fb83b0e6c03ac2042ad4a1aa6cf327e3210c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0599c10ba2cc83d23916900d35fb83b0e6c03ac2042ad4a1aa6cf327e3210c20->enter($__internal_0599c10ba2cc83d23916900d35fb83b0e6c03ac2042ad4a1aa6cf327e3210c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/define-setter.js"));

        // line 1
        echo "require('../../modules/es7.object.define-setter');
module.exports = require('../../modules/_core').Object.__defineSetter__;
";
        
        $__internal_0599c10ba2cc83d23916900d35fb83b0e6c03ac2042ad4a1aa6cf327e3210c20->leave($__internal_0599c10ba2cc83d23916900d35fb83b0e6c03ac2042ad4a1aa6cf327e3210c20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/define-setter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.object.define-setter');
module.exports = require('../../modules/_core').Object.__defineSetter__;
", "node_modules/core-js/fn/object/define-setter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/define-setter.js");
    }
}
