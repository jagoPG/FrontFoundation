<?php

/* node_modules/resolve/lib/caller.js */
class __TwigTemplate_a3fb72be2b6fb44a41972e3a2cab11f4867d9336a5af39ebf5297d768fb55e5b extends Twig_Template
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
        $__internal_c7c0cd05af9866bf913febf2c7fe94dd5ef9b80b8e02b60a8649ccac5c10d5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c0cd05af9866bf913febf2c7fe94dd5ef9b80b8e02b60a8649ccac5c10d5f4->enter($__internal_c7c0cd05af9866bf913febf2c7fe94dd5ef9b80b8e02b60a8649ccac5c10d5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/lib/caller.js"));

        // line 1
        echo "module.exports = function () {
    // see https://code.google.com/p/v8/wiki/JavaScriptStackTraceApi
    var origPrepareStackTrace = Error.prepareStackTrace;
    Error.prepareStackTrace = function (_, stack) { return stack; };
    var stack = (new Error()).stack;
    Error.prepareStackTrace = origPrepareStackTrace;
    return stack[2].getFileName();
};
";
        
        $__internal_c7c0cd05af9866bf913febf2c7fe94dd5ef9b80b8e02b60a8649ccac5c10d5f4->leave($__internal_c7c0cd05af9866bf913febf2c7fe94dd5ef9b80b8e02b60a8649ccac5c10d5f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/lib/caller.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function () {
    // see https://code.google.com/p/v8/wiki/JavaScriptStackTraceApi
    var origPrepareStackTrace = Error.prepareStackTrace;
    Error.prepareStackTrace = function (_, stack) { return stack; };
    var stack = (new Error()).stack;
    Error.prepareStackTrace = origPrepareStackTrace;
    return stack[2].getFileName();
};
", "node_modules/resolve/lib/caller.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/lib/caller.js");
    }
}
