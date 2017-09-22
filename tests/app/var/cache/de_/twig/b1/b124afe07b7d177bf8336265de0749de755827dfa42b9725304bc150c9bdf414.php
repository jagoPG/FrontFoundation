<?php

/* node_modules/core-js/modules/es6.reflect.own-keys.js */
class __TwigTemplate_cb1c8cf74057726135baaea8d44979cbd746286c44f6ad040df657183244acfe extends Twig_Template
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
        $__internal_0e4a4a3582dedf69ebee8285fc985d4f7b2b27a24258cca3665772f24f040ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4a4a3582dedf69ebee8285fc985d4f7b2b27a24258cca3665772f24f040ef7->enter($__internal_0e4a4a3582dedf69ebee8285fc985d4f7b2b27a24258cca3665772f24f040ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.own-keys.js"));

        // line 1
        echo "// 26.1.11 Reflect.ownKeys(target)
var \$export = require('./_export');

\$export(\$export.S, 'Reflect', { ownKeys: require('./_own-keys') });
";
        
        $__internal_0e4a4a3582dedf69ebee8285fc985d4f7b2b27a24258cca3665772f24f040ef7->leave($__internal_0e4a4a3582dedf69ebee8285fc985d4f7b2b27a24258cca3665772f24f040ef7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.own-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.11 Reflect.ownKeys(target)
var \$export = require('./_export');

\$export(\$export.S, 'Reflect', { ownKeys: require('./_own-keys') });
", "node_modules/core-js/modules/es6.reflect.own-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.own-keys.js");
    }
}
