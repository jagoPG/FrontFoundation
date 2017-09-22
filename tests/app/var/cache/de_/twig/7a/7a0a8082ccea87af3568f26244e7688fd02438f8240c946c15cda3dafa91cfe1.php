<?php

/* node_modules/es5-ext/function/#/lock.js */
class __TwigTemplate_810fc79434b6b8b1d2a430348aaa149e185ff65474281c448c9c7a3209a44cd3 extends Twig_Template
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
        $__internal_08cf928e0c03224681ea756a8e7012a2aac1dbe299bf27003b7983ef4388bd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cf928e0c03224681ea756a8e7012a2aac1dbe299bf27003b7983ef4388bd35->enter($__internal_08cf928e0c03224681ea756a8e7012a2aac1dbe299bf27003b7983ef4388bd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/#/lock.js"));

        // line 1
        echo "\"use strict\";

var callable = require(\"../../object/valid-callable\")

  , apply    = Function.prototype.apply;

module.exports = function (/* …args*/) {
\tvar fn = callable(this)
\t  , args = arguments;

\treturn function () {
 return apply.call(fn, this, args);
};
};
";
        
        $__internal_08cf928e0c03224681ea756a8e7012a2aac1dbe299bf27003b7983ef4388bd35->leave($__internal_08cf928e0c03224681ea756a8e7012a2aac1dbe299bf27003b7983ef4388bd35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/#/lock.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var callable = require(\"../../object/valid-callable\")

  , apply    = Function.prototype.apply;

module.exports = function (/* …args*/) {
\tvar fn = callable(this)
\t  , args = arguments;

\treturn function () {
 return apply.call(fn, this, args);
};
};
", "node_modules/es5-ext/function/#/lock.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/#/lock.js");
    }
}
