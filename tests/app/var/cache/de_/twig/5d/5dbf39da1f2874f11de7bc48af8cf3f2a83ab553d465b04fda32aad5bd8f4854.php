<?php

/* node_modules/pbkdf2/lib/default-encoding.js */
class __TwigTemplate_a3c728655961634485b9c6f878ee600f39c1ad29ea8e6ac619bca740900034c0 extends Twig_Template
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
        $__internal_39b7a74e1c2576086b0d95a94a93952772b52eaba1e6e2d0019a23bb44bb0713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b7a74e1c2576086b0d95a94a93952772b52eaba1e6e2d0019a23bb44bb0713->enter($__internal_39b7a74e1c2576086b0d95a94a93952772b52eaba1e6e2d0019a23bb44bb0713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pbkdf2/lib/default-encoding.js"));

        // line 1
        echo "var defaultEncoding
/* istanbul ignore next */
if (process.browser) {
  defaultEncoding = 'utf-8'
} else {
  var pVersionMajor = parseInt(process.version.split('.')[0].slice(1), 10)

  defaultEncoding = pVersionMajor >= 6 ? 'utf-8' : 'binary'
}
module.exports = defaultEncoding
";
        
        $__internal_39b7a74e1c2576086b0d95a94a93952772b52eaba1e6e2d0019a23bb44bb0713->leave($__internal_39b7a74e1c2576086b0d95a94a93952772b52eaba1e6e2d0019a23bb44bb0713_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pbkdf2/lib/default-encoding.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var defaultEncoding
/* istanbul ignore next */
if (process.browser) {
  defaultEncoding = 'utf-8'
} else {
  var pVersionMajor = parseInt(process.version.split('.')[0].slice(1), 10)

  defaultEncoding = pVersionMajor >= 6 ? 'utf-8' : 'binary'
}
module.exports = defaultEncoding
", "node_modules/pbkdf2/lib/default-encoding.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pbkdf2/lib/default-encoding.js");
    }
}
