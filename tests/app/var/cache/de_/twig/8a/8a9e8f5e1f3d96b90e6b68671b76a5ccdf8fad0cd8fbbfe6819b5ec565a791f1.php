<?php

/* node_modules/es5-ext/object/set-prototype-of/index.js */
class __TwigTemplate_9e1f9ff30ff3e50b2ce26192ccf8f2a3a98f0745e8975069dda908014ea9cbc2 extends Twig_Template
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
        $__internal_9a64d86733c135f9c2c658da31412263bc11685ad29fc953a81fefef51460417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a64d86733c135f9c2c658da31412263bc11685ad29fc953a81fefef51460417->enter($__internal_9a64d86733c135f9c2c658da31412263bc11685ad29fc953a81fefef51460417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/set-prototype-of/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Object.setPrototypeOf
\t: require(\"./shim\");
";
        
        $__internal_9a64d86733c135f9c2c658da31412263bc11685ad29fc953a81fefef51460417->leave($__internal_9a64d86733c135f9c2c658da31412263bc11685ad29fc953a81fefef51460417_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/set-prototype-of/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Object.setPrototypeOf
\t: require(\"./shim\");
", "node_modules/es5-ext/object/set-prototype-of/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/set-prototype-of/index.js");
    }
}
