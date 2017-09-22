<?php

/* node_modules/browserify-des/modes.js */
class __TwigTemplate_49b0b9d74ea9fb40f2bf1aa05527541d3e317077242613536f02ad1492d34d67 extends Twig_Template
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
        $__internal_e2996609a62a6a6c0d708e2ca4cb2c030967020c477461adf32af547ddc3cab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2996609a62a6a6c0d708e2ca4cb2c030967020c477461adf32af547ddc3cab1->enter($__internal_e2996609a62a6a6c0d708e2ca4cb2c030967020c477461adf32af547ddc3cab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-des/modes.js"));

        // line 1
        echo "exports['des-ecb'] = {
  key: 8,
  iv: 0
}
exports['des-cbc'] = exports.des = {
  key: 8,
  iv: 8
}
exports['des-ede3-cbc'] = exports.des3 = {
  key: 24,
  iv: 8
}
exports['des-ede3'] = {
  key: 24,
  iv: 0
}
exports['des-ede-cbc'] = {
  key: 16,
  iv: 8
}
exports['des-ede'] = {
  key: 16,
  iv: 0
}
";
        
        $__internal_e2996609a62a6a6c0d708e2ca4cb2c030967020c477461adf32af547ddc3cab1->leave($__internal_e2996609a62a6a6c0d708e2ca4cb2c030967020c477461adf32af547ddc3cab1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-des/modes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports['des-ecb'] = {
  key: 8,
  iv: 0
}
exports['des-cbc'] = exports.des = {
  key: 8,
  iv: 8
}
exports['des-ede3-cbc'] = exports.des3 = {
  key: 24,
  iv: 8
}
exports['des-ede3'] = {
  key: 24,
  iv: 0
}
exports['des-ede-cbc'] = {
  key: 16,
  iv: 8
}
exports['des-ede'] = {
  key: 16,
  iv: 0
}
", "node_modules/browserify-des/modes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-des/modes.js");
    }
}
