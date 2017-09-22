<?php

/* node_modules/core-js/modules/es6.reflect.has.js */
class __TwigTemplate_e8543423a6a1ef1f3eac583db37afe1abf3453a4532c6b7e54b775d9043d6f87 extends Twig_Template
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
        $__internal_61465c08ffd14847c2d5260393bdad385016734b9bbb799d6c9d20545bef15dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61465c08ffd14847c2d5260393bdad385016734b9bbb799d6c9d20545bef15dc->enter($__internal_61465c08ffd14847c2d5260393bdad385016734b9bbb799d6c9d20545bef15dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.has.js"));

        // line 1
        echo "// 26.1.9 Reflect.has(target, propertyKey)
var \$export = require('./_export');

\$export(\$export.S, 'Reflect', {
  has: function has(target, propertyKey) {
    return propertyKey in target;
  }
});
";
        
        $__internal_61465c08ffd14847c2d5260393bdad385016734b9bbb799d6c9d20545bef15dc->leave($__internal_61465c08ffd14847c2d5260393bdad385016734b9bbb799d6c9d20545bef15dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.has.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.9 Reflect.has(target, propertyKey)
var \$export = require('./_export');

\$export(\$export.S, 'Reflect', {
  has: function has(target, propertyKey) {
    return propertyKey in target;
  }
});
", "node_modules/core-js/modules/es6.reflect.has.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.has.js");
    }
}
