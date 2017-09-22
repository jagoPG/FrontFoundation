<?php

/* node_modules/core-js/library/modules/es6.reflect.apply.js */
class __TwigTemplate_ceee4451be71d2ed6a218f96fe53059e9066f479f3bdc06f5147e7f9d9792a2d extends Twig_Template
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
        $__internal_fbeab3d4a9f01ad501995d3d29a020c87bf45f83c2f2de55f66a0b0b06406cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbeab3d4a9f01ad501995d3d29a020c87bf45f83c2f2de55f66a0b0b06406cf2->enter($__internal_fbeab3d4a9f01ad501995d3d29a020c87bf45f83c2f2de55f66a0b0b06406cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.apply.js"));

        // line 1
        echo "// 26.1.1 Reflect.apply(target, thisArgument, argumentsList)
var \$export = require('./_export');
var aFunction = require('./_a-function');
var anObject = require('./_an-object');
var rApply = (require('./_global').Reflect || {}).apply;
var fApply = Function.apply;
// MS Edge argumentsList argument is optional
\$export(\$export.S + \$export.F * !require('./_fails')(function () {
  rApply(function () { /* empty */ });
}), 'Reflect', {
  apply: function apply(target, thisArgument, argumentsList) {
    var T = aFunction(target);
    var L = anObject(argumentsList);
    return rApply ? rApply(T, thisArgument, L) : fApply.call(T, thisArgument, L);
  }
});
";
        
        $__internal_fbeab3d4a9f01ad501995d3d29a020c87bf45f83c2f2de55f66a0b0b06406cf2->leave($__internal_fbeab3d4a9f01ad501995d3d29a020c87bf45f83c2f2de55f66a0b0b06406cf2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.apply.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.1 Reflect.apply(target, thisArgument, argumentsList)
var \$export = require('./_export');
var aFunction = require('./_a-function');
var anObject = require('./_an-object');
var rApply = (require('./_global').Reflect || {}).apply;
var fApply = Function.apply;
// MS Edge argumentsList argument is optional
\$export(\$export.S + \$export.F * !require('./_fails')(function () {
  rApply(function () { /* empty */ });
}), 'Reflect', {
  apply: function apply(target, thisArgument, argumentsList) {
    var T = aFunction(target);
    var L = anObject(argumentsList);
    return rApply ? rApply(T, thisArgument, L) : fApply.call(T, thisArgument, L);
  }
});
", "node_modules/core-js/library/modules/es6.reflect.apply.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.apply.js");
    }
}
