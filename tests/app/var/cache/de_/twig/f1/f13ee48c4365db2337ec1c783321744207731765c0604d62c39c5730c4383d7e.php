<?php

/* node_modules/core-js/modules/es6.typed.int32-array.js */
class __TwigTemplate_cab7fdd9627ca1dd7e195017f6e7db9db065466dbb3a172a889890aa783fe51d extends Twig_Template
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
        $__internal_abeb31009894c0a136df21b42fa03f003350ac3872be84fbbdc685183a6dea27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abeb31009894c0a136df21b42fa03f003350ac3872be84fbbdc685183a6dea27->enter($__internal_abeb31009894c0a136df21b42fa03f003350ac3872be84fbbdc685183a6dea27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.typed.int32-array.js"));

        // line 1
        echo "require('./_typed-array')('Int32', 4, function (init) {
  return function Int32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_abeb31009894c0a136df21b42fa03f003350ac3872be84fbbdc685183a6dea27->leave($__internal_abeb31009894c0a136df21b42fa03f003350ac3872be84fbbdc685183a6dea27_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.typed.int32-array.js";
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
", "node_modules/core-js/modules/es6.typed.int32-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.typed.int32-array.js");
    }
}
