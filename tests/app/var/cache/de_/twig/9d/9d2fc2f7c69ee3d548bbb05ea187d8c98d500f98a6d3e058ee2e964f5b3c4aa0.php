<?php

/* node_modules/es5-ext/function/#/spread.js */
class __TwigTemplate_5880080acc3bfaeec6de3883804b4e1710b1ac1a78fa58eb0f00d365c7a7ab78 extends Twig_Template
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
        $__internal_7dfe1d6145ac89df88d7dbd2975cc1ca3256e2711e58973767f5582cafa28446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfe1d6145ac89df88d7dbd2975cc1ca3256e2711e58973767f5582cafa28446->enter($__internal_7dfe1d6145ac89df88d7dbd2975cc1ca3256e2711e58973767f5582cafa28446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/#/spread.js"));

        // line 1
        echo "\"use strict\";

var callable = require(\"../../object/valid-callable\")

  , apply = Function.prototype.apply;

module.exports = function () {
\tvar fn = callable(this);
\treturn function (args) {
 return apply.call(fn, this, args);
};
};
";
        
        $__internal_7dfe1d6145ac89df88d7dbd2975cc1ca3256e2711e58973767f5582cafa28446->leave($__internal_7dfe1d6145ac89df88d7dbd2975cc1ca3256e2711e58973767f5582cafa28446_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/#/spread.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var callable = require(\"../../object/valid-callable\")

  , apply = Function.prototype.apply;

module.exports = function () {
\tvar fn = callable(this);
\treturn function (args) {
 return apply.call(fn, this, args);
};
};
", "node_modules/es5-ext/function/#/spread.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/#/spread.js");
    }
}
