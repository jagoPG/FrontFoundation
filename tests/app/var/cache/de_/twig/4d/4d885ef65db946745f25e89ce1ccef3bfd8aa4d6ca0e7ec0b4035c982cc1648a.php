<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/src/util.js */
class __TwigTemplate_c9331aa0682ab849f31e9d69defd9d32987162bf051394fc2f1e81f2b226ad92 extends Twig_Template
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
        $__internal_61e15169d413ccf679b70ab15dd6ece8cef02ab7d664fa000faddd0c674ee25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e15169d413ccf679b70ab15dd6ece8cef02ab7d664fa000faddd0c674ee25f->enter($__internal_61e15169d413ccf679b70ab15dd6ece8cef02ab7d664fa000faddd0c674ee25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/src/util.js"));

        // line 1
        echo "export function isArray(obj) {
  return Object.prototype.toString.call(obj) === \"[object Array]\"
}

// Checks if an object has a property.

export function has(obj, propName) {
  return Object.prototype.hasOwnProperty.call(obj, propName)
}
";
        
        $__internal_61e15169d413ccf679b70ab15dd6ece8cef02ab7d664fa000faddd0c674ee25f->leave($__internal_61e15169d413ccf679b70ab15dd6ece8cef02ab7d664fa000faddd0c674ee25f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/src/util.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("export function isArray(obj) {
  return Object.prototype.toString.call(obj) === \"[object Array]\"
}

// Checks if an object has a property.

export function has(obj, propName) {
  return Object.prototype.hasOwnProperty.call(obj, propName)
}
", "node_modules/acorn-dynamic-import/node_modules/acorn/src/util.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/src/util.js");
    }
}
