<?php

/* node_modules/es5-ext/math/cosh/index.js */
class __TwigTemplate_71da5754c761497b231f6a8a5ca43794b5805fd83b9186c9b8e4366af00b90ff extends Twig_Template
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
        $__internal_0ab321d07b8271194bbb215164175b9f7b06ed0d254b033e04a131797ac41a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab321d07b8271194bbb215164175b9f7b06ed0d254b033e04a131797ac41a72->enter($__internal_0ab321d07b8271194bbb215164175b9f7b06ed0d254b033e04a131797ac41a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/cosh/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.cosh
\t: require(\"./shim\");
";
        
        $__internal_0ab321d07b8271194bbb215164175b9f7b06ed0d254b033e04a131797ac41a72->leave($__internal_0ab321d07b8271194bbb215164175b9f7b06ed0d254b033e04a131797ac41a72_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/cosh/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.cosh
\t: require(\"./shim\");
", "node_modules/es5-ext/math/cosh/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/cosh/index.js");
    }
}
