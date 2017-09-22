<?php

/* node_modules/es-abstract/helpers/isPrimitive.js */
class __TwigTemplate_7a147d04f485e20df7bd345b72a0a455be48a452b174ec8ed1a4ab8100c2abc5 extends Twig_Template
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
        $__internal_aeaf450a0b3153512a7dbd20dca0b105b26039ae0ac51acaac35d74106c1cf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeaf450a0b3153512a7dbd20dca0b105b26039ae0ac51acaac35d74106c1cf0f->enter($__internal_aeaf450a0b3153512a7dbd20dca0b105b26039ae0ac51acaac35d74106c1cf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/helpers/isPrimitive.js"));

        // line 1
        echo "module.exports = function isPrimitive(value) {
\treturn value === null || (typeof value !== 'function' && typeof value !== 'object');
};
";
        
        $__internal_aeaf450a0b3153512a7dbd20dca0b105b26039ae0ac51acaac35d74106c1cf0f->leave($__internal_aeaf450a0b3153512a7dbd20dca0b105b26039ae0ac51acaac35d74106c1cf0f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/helpers/isPrimitive.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function isPrimitive(value) {
\treturn value === null || (typeof value !== 'function' && typeof value !== 'object');
};
", "node_modules/es-abstract/helpers/isPrimitive.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/helpers/isPrimitive.js");
    }
}
