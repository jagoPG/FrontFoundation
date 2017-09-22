<?php

/* node_modules/core-js/fn/string/virtual/blink.js */
class __TwigTemplate_40131b67ff6bcde18c9c7c0ad65157e75007af53fe1eebb5272bc7f32e209a3a extends Twig_Template
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
        $__internal_09e041688ce789e509f3e1d38abefac2cf1f933b05b38943970a6bb27271926d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e041688ce789e509f3e1d38abefac2cf1f933b05b38943970a6bb27271926d->enter($__internal_09e041688ce789e509f3e1d38abefac2cf1f933b05b38943970a6bb27271926d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/blink.js"));

        // line 1
        echo "require('../../../modules/es6.string.blink');
module.exports = require('../../../modules/_entry-virtual')('String').blink;
";
        
        $__internal_09e041688ce789e509f3e1d38abefac2cf1f933b05b38943970a6bb27271926d->leave($__internal_09e041688ce789e509f3e1d38abefac2cf1f933b05b38943970a6bb27271926d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/blink.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.blink');
module.exports = require('../../../modules/_entry-virtual')('String').blink;
", "node_modules/core-js/fn/string/virtual/blink.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/blink.js");
    }
}
