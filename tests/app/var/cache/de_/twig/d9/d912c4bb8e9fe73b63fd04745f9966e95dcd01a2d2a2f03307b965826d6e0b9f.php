<?php

/* node_modules/es5-ext/object/primitive-set.js */
class __TwigTemplate_122c83f918dc006107cea31f0ca16a4be1b0f15137b2a648f0cd228a336303bf extends Twig_Template
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
        $__internal_ea5592f543de7c058e6adb191478191e596a9bc54b5af2354e9e4ae2fe8cb367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5592f543de7c058e6adb191478191e596a9bc54b5af2354e9e4ae2fe8cb367->enter($__internal_ea5592f543de7c058e6adb191478191e596a9bc54b5af2354e9e4ae2fe8cb367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/primitive-set.js"));

        // line 1
        echo "\"use strict\";

var forEach = Array.prototype.forEach, create = Object.create;

// eslint-disable-next-line no-unused-vars
module.exports = function (arg /*, …args*/) {
\tvar set = create(null);
\tforEach.call(arguments, function (name) {
\t\tset[name] = true;
\t});
\treturn set;
};
";
        
        $__internal_ea5592f543de7c058e6adb191478191e596a9bc54b5af2354e9e4ae2fe8cb367->leave($__internal_ea5592f543de7c058e6adb191478191e596a9bc54b5af2354e9e4ae2fe8cb367_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/primitive-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var forEach = Array.prototype.forEach, create = Object.create;

// eslint-disable-next-line no-unused-vars
module.exports = function (arg /*, …args*/) {
\tvar set = create(null);
\tforEach.call(arguments, function (name) {
\t\tset[name] = true;
\t});
\treturn set;
};
", "node_modules/es5-ext/object/primitive-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/primitive-set.js");
    }
}
