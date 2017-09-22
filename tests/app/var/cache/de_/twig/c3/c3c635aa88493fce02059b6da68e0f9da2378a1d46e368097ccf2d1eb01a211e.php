<?php

/* node_modules/core-js/library/modules/es6.typed.int16-array.js */
class __TwigTemplate_f092e8b488dc20a05fa461f6b84c54d11b5970a1350e304cc15ffb64cab522d2 extends Twig_Template
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
        $__internal_bf0e047d234d4ad6cc80e7b6610bb78f7ee5042c99919a99203d1e836ae95790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0e047d234d4ad6cc80e7b6610bb78f7ee5042c99919a99203d1e836ae95790->enter($__internal_bf0e047d234d4ad6cc80e7b6610bb78f7ee5042c99919a99203d1e836ae95790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.int16-array.js"));

        // line 1
        echo "require('./_typed-array')('Int16', 2, function (init) {
  return function Int16Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_bf0e047d234d4ad6cc80e7b6610bb78f7ee5042c99919a99203d1e836ae95790->leave($__internal_bf0e047d234d4ad6cc80e7b6610bb78f7ee5042c99919a99203d1e836ae95790_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.int16-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Int16', 2, function (init) {
  return function Int16Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/library/modules/es6.typed.int16-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.int16-array.js");
    }
}
