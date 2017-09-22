<?php

/* node_modules/core-js/modules/es7.system.global.js */
class __TwigTemplate_403bbde74c9dca9e792525c3ebb4200135cfe4737ff0ebc39f8aab777f264d73 extends Twig_Template
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
        $__internal_4a302845435bd9372d55ef9f3f6705f3f6eaefbbd9e4b39c9f2ca48cb5de441f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a302845435bd9372d55ef9f3f6705f3f6eaefbbd9e4b39c9f2ca48cb5de441f->enter($__internal_4a302845435bd9372d55ef9f3f6705f3f6eaefbbd9e4b39c9f2ca48cb5de441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.system.global.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-global
var \$export = require('./_export');

\$export(\$export.S, 'System', { global: require('./_global') });
";
        
        $__internal_4a302845435bd9372d55ef9f3f6705f3f6eaefbbd9e4b39c9f2ca48cb5de441f->leave($__internal_4a302845435bd9372d55ef9f3f6705f3f6eaefbbd9e4b39c9f2ca48cb5de441f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.system.global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/tc39/proposal-global
var \$export = require('./_export');

\$export(\$export.S, 'System', { global: require('./_global') });
", "node_modules/core-js/modules/es7.system.global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.system.global.js");
    }
}
