<?php

/* node_modules/async/internal/once.js */
class __TwigTemplate_1229431dddadc390aadb7686704f83d0794b91006db0c58233a75a09100d9162 extends Twig_Template
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
        $__internal_267781dfad5a15e85957a44702537d061572b0d68ed2c4ca4718b181e1300d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267781dfad5a15e85957a44702537d061572b0d68ed2c4ca4718b181e1300d1a->enter($__internal_267781dfad5a15e85957a44702537d061572b0d68ed2c4ca4718b181e1300d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/once.js"));

        // line 1
        echo "\"use strict\";

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = once;
function once(fn) {
    return function () {
        if (fn === null) return;
        var callFn = fn;
        fn = null;
        callFn.apply(this, arguments);
    };
}
module.exports = exports[\"default\"];";
        
        $__internal_267781dfad5a15e85957a44702537d061572b0d68ed2c4ca4718b181e1300d1a->leave($__internal_267781dfad5a15e85957a44702537d061572b0d68ed2c4ca4718b181e1300d1a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/once.js";
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
exports.default = once;
function once(fn) {
    return function () {
        if (fn === null) return;
        var callFn = fn;
        fn = null;
        callFn.apply(this, arguments);
    };
}
module.exports = exports[\"default\"];", "node_modules/async/internal/once.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/once.js");
    }
}
