<?php

/* node_modules/mimic-fn/index.js */
class __TwigTemplate_eb5996a5107842339b749f2591754c3d21671876e610153719bdfaaa3e6716d0 extends Twig_Template
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
        $__internal_80f31ee010e4b24eddb1df250f1ecf9945f908ac4a5a2b0396d0a6c2c83d85c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f31ee010e4b24eddb1df250f1ecf9945f908ac4a5a2b0396d0a6c2c83d85c5->enter($__internal_80f31ee010e4b24eddb1df250f1ecf9945f908ac4a5a2b0396d0a6c2c83d85c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mimic-fn/index.js"));

        // line 1
        echo "'use strict';
module.exports = (to, from) => {
\t// TODO: use `Reflect.ownKeys()` when targeting Node.js 6
\tfor (const prop of Object.getOwnPropertyNames(from).concat(Object.getOwnPropertySymbols(from))) {
\t\tObject.defineProperty(to, prop, Object.getOwnPropertyDescriptor(from, prop));
\t}
};
";
        
        $__internal_80f31ee010e4b24eddb1df250f1ecf9945f908ac4a5a2b0396d0a6c2c83d85c5->leave($__internal_80f31ee010e4b24eddb1df250f1ecf9945f908ac4a5a2b0396d0a6c2c83d85c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mimic-fn/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = (to, from) => {
\t// TODO: use `Reflect.ownKeys()` when targeting Node.js 6
\tfor (const prop of Object.getOwnPropertyNames(from).concat(Object.getOwnPropertySymbols(from))) {
\t\tObject.defineProperty(to, prop, Object.getOwnPropertyDescriptor(from, prop));
\t}
};
", "node_modules/mimic-fn/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mimic-fn/index.js");
    }
}
