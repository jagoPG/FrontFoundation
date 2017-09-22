<?php

/* node_modules/core-js/library/modules/es7.system.global.js */
class __TwigTemplate_1de9a2077c36918dec4d52070c70a34909761c3c7bb65b5f95e6ec372f3ccd8c extends Twig_Template
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
        $__internal_7eb7666e531daffcfeff6a9230e668d8bb4948f22e2404320ef573ccc9a31f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb7666e531daffcfeff6a9230e668d8bb4948f22e2404320ef573ccc9a31f3c->enter($__internal_7eb7666e531daffcfeff6a9230e668d8bb4948f22e2404320ef573ccc9a31f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.system.global.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-global
var \$export = require('./_export');

\$export(\$export.S, 'System', { global: require('./_global') });
";
        
        $__internal_7eb7666e531daffcfeff6a9230e668d8bb4948f22e2404320ef573ccc9a31f3c->leave($__internal_7eb7666e531daffcfeff6a9230e668d8bb4948f22e2404320ef573ccc9a31f3c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.system.global.js";
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
", "node_modules/core-js/library/modules/es7.system.global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.system.global.js");
    }
}
