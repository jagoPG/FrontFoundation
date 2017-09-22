<?php

/* node_modules/es5-ext/array/from/index.js */
class __TwigTemplate_d9a949c2daf251d41bebbd6e3d2f37c792533f00974fedff6c04f0d756397c65 extends Twig_Template
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
        $__internal_62ecbbe85abd46041fcea8c7393b632163561a8919dcd90513ecb5492aad41f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ecbbe85abd46041fcea8c7393b632163561a8919dcd90513ecb5492aad41f9->enter($__internal_62ecbbe85abd46041fcea8c7393b632163561a8919dcd90513ecb5492aad41f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/from/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.from
\t: require(\"./shim\");
";
        
        $__internal_62ecbbe85abd46041fcea8c7393b632163561a8919dcd90513ecb5492aad41f9->leave($__internal_62ecbbe85abd46041fcea8c7393b632163561a8919dcd90513ecb5492aad41f9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/from/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.from
\t: require(\"./shim\");
", "node_modules/es5-ext/array/from/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/from/index.js");
    }
}
