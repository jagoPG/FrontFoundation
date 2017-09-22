<?php

/* node_modules/core-js/modules/es6.reflect.apply.js */
class __TwigTemplate_8098dc775d7752192d04ebcb23ed39402420313c957fe21c565ae4a11cefc750 extends Twig_Template
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
        $__internal_c9062536ad8042b0b2f35519fa328330335fd0dbc39dbeea6d54963e458df04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9062536ad8042b0b2f35519fa328330335fd0dbc39dbeea6d54963e458df04e->enter($__internal_c9062536ad8042b0b2f35519fa328330335fd0dbc39dbeea6d54963e458df04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.apply.js"));

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
        
        $__internal_c9062536ad8042b0b2f35519fa328330335fd0dbc39dbeea6d54963e458df04e->leave($__internal_c9062536ad8042b0b2f35519fa328330335fd0dbc39dbeea6d54963e458df04e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.apply.js";
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
", "node_modules/core-js/modules/es6.reflect.apply.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.apply.js");
    }
}
