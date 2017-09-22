<?php

/* node_modules/es5-ext/json/index.js */
class __TwigTemplate_d87714a73bcc706f1b955aca1ec99820c986a9f4aafe7444a16d56da4459d7d3 extends Twig_Template
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
        $__internal_9c37043a52f6151eb94ad60d9c70cca56a49ebda16772cf8f425a832775cf4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c37043a52f6151eb94ad60d9c70cca56a49ebda16772cf8f425a832775cf4de->enter($__internal_9c37043a52f6151eb94ad60d9c70cca56a49ebda16772cf8f425a832775cf4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/json/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\tsafeStringify: require(\"./safe-stringify\")
};
";
        
        $__internal_9c37043a52f6151eb94ad60d9c70cca56a49ebda16772cf8f425a832775cf4de->leave($__internal_9c37043a52f6151eb94ad60d9c70cca56a49ebda16772cf8f425a832775cf4de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/json/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = {
\tsafeStringify: require(\"./safe-stringify\")
};
", "node_modules/es5-ext/json/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/json/index.js");
    }
}
