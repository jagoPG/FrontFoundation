<?php

/* node_modules/parsleyjs/src/extra/validator/dateiso.js */
class __TwigTemplate_5aa8fd7c211c608d8ec1a82d56e7266744e8d86a0e81022d7bb35095c3503550 extends Twig_Template
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
        $__internal_c934f39bd06b352e04cbf4c9af8f3a56f18cbab49de602704234247a8815f8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c934f39bd06b352e04cbf4c9af8f3a56f18cbab49de602704234247a8815f8db->enter($__internal_c934f39bd06b352e04cbf4c9af8f3a56f18cbab49de602704234247a8815f8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/extra/validator/dateiso.js"));

        // line 1
        echo "// Load this after Parsley for additional comparison validators

window.Parsley.addValidator('dateiso', {
  validateString: function (value) {
    return /^(\\d{4})\\D?(0[1-9]|1[0-2])\\D?([12]\\d|0[1-9]|3[01])\$/.test(value);
  },
  priority: 256
});
";
        
        $__internal_c934f39bd06b352e04cbf4c9af8f3a56f18cbab49de602704234247a8815f8db->leave($__internal_c934f39bd06b352e04cbf4c9af8f3a56f18cbab49de602704234247a8815f8db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/extra/validator/dateiso.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load this after Parsley for additional comparison validators

window.Parsley.addValidator('dateiso', {
  validateString: function (value) {
    return /^(\\d{4})\\D?(0[1-9]|1[0-2])\\D?([12]\\d|0[1-9]|3[01])\$/.test(value);
  },
  priority: 256
});
", "node_modules/parsleyjs/src/extra/validator/dateiso.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/extra/validator/dateiso.js");
    }
}
