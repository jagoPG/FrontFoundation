<?php

/* node_modules/core-js/library/modules/es6.typed.float32-array.js */
class __TwigTemplate_69627c3bddea9085cfff120b2e64f2a3202836cfbaabc905c0de506e41bcc866 extends Twig_Template
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
        $__internal_ce5e2b9f57af5951c80e9e8dcb91018005ed6085f24e5093bbf196360e4ecf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5e2b9f57af5951c80e9e8dcb91018005ed6085f24e5093bbf196360e4ecf3b->enter($__internal_ce5e2b9f57af5951c80e9e8dcb91018005ed6085f24e5093bbf196360e4ecf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.float32-array.js"));

        // line 1
        echo "require('./_typed-array')('Float32', 4, function (init) {
  return function Float32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_ce5e2b9f57af5951c80e9e8dcb91018005ed6085f24e5093bbf196360e4ecf3b->leave($__internal_ce5e2b9f57af5951c80e9e8dcb91018005ed6085f24e5093bbf196360e4ecf3b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.float32-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Float32', 4, function (init) {
  return function Float32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/library/modules/es6.typed.float32-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.float32-array.js");
    }
}
