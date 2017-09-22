<?php

/* node_modules/core-js/modules/_enum-bug-keys.js */
class __TwigTemplate_4e7f17621e778d9ed294ece51caf4e7d05b9372ffa2b9e9a44630ddcd78bbd0a extends Twig_Template
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
        $__internal_706fc52bb7d681ec6ba7ff27d30be7843c926658e86282cb24791fe8e27e5aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706fc52bb7d681ec6ba7ff27d30be7843c926658e86282cb24791fe8e27e5aca->enter($__internal_706fc52bb7d681ec6ba7ff27d30be7843c926658e86282cb24791fe8e27e5aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_enum-bug-keys.js"));

        // line 1
        echo "// IE 8- don't enum bug keys
module.exports = (
  'constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf'
).split(',');
";
        
        $__internal_706fc52bb7d681ec6ba7ff27d30be7843c926658e86282cb24791fe8e27e5aca->leave($__internal_706fc52bb7d681ec6ba7ff27d30be7843c926658e86282cb24791fe8e27e5aca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_enum-bug-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// IE 8- don't enum bug keys
module.exports = (
  'constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf'
).split(',');
", "node_modules/core-js/modules/_enum-bug-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_enum-bug-keys.js");
    }
}
