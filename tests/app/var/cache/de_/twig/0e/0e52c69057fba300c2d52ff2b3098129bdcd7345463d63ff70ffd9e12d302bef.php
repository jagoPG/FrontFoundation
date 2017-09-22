<?php

/* node_modules/browserify-aes/modes/ecb.js */
class __TwigTemplate_169c76881da53855a75b79279ab9080111b783a3b3ab464939782fb6e0695b95 extends Twig_Template
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
        $__internal_3d6c7d05cd00aadaff2099ba8ba040b6cf6f6a5a13cdd4ecd8dd4ce430289312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6c7d05cd00aadaff2099ba8ba040b6cf6f6a5a13cdd4ecd8dd4ce430289312->enter($__internal_3d6c7d05cd00aadaff2099ba8ba040b6cf6f6a5a13cdd4ecd8dd4ce430289312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-aes/modes/ecb.js"));

        // line 1
        echo "exports.encrypt = function (self, block) {
  return self._cipher.encryptBlock(block)
}

exports.decrypt = function (self, block) {
  return self._cipher.decryptBlock(block)
}
";
        
        $__internal_3d6c7d05cd00aadaff2099ba8ba040b6cf6f6a5a13cdd4ecd8dd4ce430289312->leave($__internal_3d6c7d05cd00aadaff2099ba8ba040b6cf6f6a5a13cdd4ecd8dd4ce430289312_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-aes/modes/ecb.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.encrypt = function (self, block) {
  return self._cipher.encryptBlock(block)
}

exports.decrypt = function (self, block) {
  return self._cipher.decryptBlock(block)
}
", "node_modules/browserify-aes/modes/ecb.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-aes/modes/ecb.js");
    }
}
