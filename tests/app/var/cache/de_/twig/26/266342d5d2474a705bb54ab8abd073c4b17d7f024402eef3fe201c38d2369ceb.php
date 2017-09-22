<?php

/* node_modules/core-js/library/modules/es6.typed.int32-array.js */
class __TwigTemplate_78966aadaef1f70abef3751b0e42b464200f681fe98043ac97a5b0bde1d505e2 extends Twig_Template
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
        $__internal_986cb79eb6bf6bde7e7bafbfc2c7fc5e31cdb9b72faebd54696bb4f9125e7084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986cb79eb6bf6bde7e7bafbfc2c7fc5e31cdb9b72faebd54696bb4f9125e7084->enter($__internal_986cb79eb6bf6bde7e7bafbfc2c7fc5e31cdb9b72faebd54696bb4f9125e7084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.int32-array.js"));

        // line 1
        echo "require('./_typed-array')('Int32', 4, function (init) {
  return function Int32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_986cb79eb6bf6bde7e7bafbfc2c7fc5e31cdb9b72faebd54696bb4f9125e7084->leave($__internal_986cb79eb6bf6bde7e7bafbfc2c7fc5e31cdb9b72faebd54696bb4f9125e7084_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.int32-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Int32', 4, function (init) {
  return function Int32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/library/modules/es6.typed.int32-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.int32-array.js");
    }
}
