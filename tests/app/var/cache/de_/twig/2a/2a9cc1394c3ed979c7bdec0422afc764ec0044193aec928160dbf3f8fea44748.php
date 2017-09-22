<?php

/* node_modules/async/internal/onlyOnce.js */
class __TwigTemplate_a6c93e7f831b59711940e8f6a286041a8dea1e26822efb1b2f892744fe79ba21 extends Twig_Template
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
        $__internal_a9012ea8668dce9f8d2206777e1162b76ed48240e5e1eeb9dc79e54c58e607f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9012ea8668dce9f8d2206777e1162b76ed48240e5e1eeb9dc79e54c58e607f5->enter($__internal_a9012ea8668dce9f8d2206777e1162b76ed48240e5e1eeb9dc79e54c58e607f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/onlyOnce.js"));

        // line 1
        echo "\"use strict\";

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = onlyOnce;
function onlyOnce(fn) {
    return function () {
        if (fn === null) throw new Error(\"Callback was already called.\");
        var callFn = fn;
        fn = null;
        callFn.apply(this, arguments);
    };
}
module.exports = exports[\"default\"];";
        
        $__internal_a9012ea8668dce9f8d2206777e1162b76ed48240e5e1eeb9dc79e54c58e607f5->leave($__internal_a9012ea8668dce9f8d2206777e1162b76ed48240e5e1eeb9dc79e54c58e607f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/onlyOnce.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = onlyOnce;
function onlyOnce(fn) {
    return function () {
        if (fn === null) throw new Error(\"Callback was already called.\");
        var callFn = fn;
        fn = null;
        callFn.apply(this, arguments);
    };
}
module.exports = exports[\"default\"];", "node_modules/async/internal/onlyOnce.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/onlyOnce.js");
    }
}
