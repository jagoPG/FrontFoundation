<?php

/* node_modules/core-js/library/modules/_enum-bug-keys.js */
class __TwigTemplate_9e66d2bd2454e8b9714efce937c5f2cde9363f577721d3f283531f7ed7fc9f56 extends Twig_Template
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
        $__internal_8a4e6472069635e75ab40a3021c8d82e05ab7c0042004da5a5ea8048974c8cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4e6472069635e75ab40a3021c8d82e05ab7c0042004da5a5ea8048974c8cb8->enter($__internal_8a4e6472069635e75ab40a3021c8d82e05ab7c0042004da5a5ea8048974c8cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_enum-bug-keys.js"));

        // line 1
        echo "// IE 8- don't enum bug keys
module.exports = (
  'constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf'
).split(',');
";
        
        $__internal_8a4e6472069635e75ab40a3021c8d82e05ab7c0042004da5a5ea8048974c8cb8->leave($__internal_8a4e6472069635e75ab40a3021c8d82e05ab7c0042004da5a5ea8048974c8cb8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_enum-bug-keys.js";
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
", "node_modules/core-js/library/modules/_enum-bug-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_enum-bug-keys.js");
    }
}
