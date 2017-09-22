<?php

/* node_modules/es5-ext/string/#/starts-with/index.js */
class __TwigTemplate_08792d579e2484dcf8b062fc2dc43b3445b1ac34ee7542df54bb555861eb521a extends Twig_Template
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
        $__internal_bb840dc399b6b4ac0aa72f5176497009dec7d3b7c3eefc28573cea7787e32e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb840dc399b6b4ac0aa72f5176497009dec7d3b7c3eefc28573cea7787e32e87->enter($__internal_bb840dc399b6b4ac0aa72f5176497009dec7d3b7c3eefc28573cea7787e32e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/starts-with/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.startsWith
\t: require(\"./shim\");
";
        
        $__internal_bb840dc399b6b4ac0aa72f5176497009dec7d3b7c3eefc28573cea7787e32e87->leave($__internal_bb840dc399b6b4ac0aa72f5176497009dec7d3b7c3eefc28573cea7787e32e87_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/starts-with/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.startsWith
\t: require(\"./shim\");
", "node_modules/es5-ext/string/#/starts-with/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/starts-with/index.js");
    }
}
