<?php

/* node_modules/es5-ext/test/reg-exp/#/split/implement.js */
class __TwigTemplate_7802f36497bed80c2a71fdb41bc20bb8f6a7082e602bce08d497cada31f3ba18 extends Twig_Template
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
        $__internal_269573aeaf79ac670c32c9c2786d7b0ab3343420b88417ce8b2a1e2fe0e3e54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269573aeaf79ac670c32c9c2786d7b0ab3343420b88417ce8b2a1e2fe0e3e54b->enter($__internal_269573aeaf79ac670c32c9c2786d7b0ab3343420b88417ce8b2a1e2fe0e3e54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/split/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/split/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_269573aeaf79ac670c32c9c2786d7b0ab3343420b88417ce8b2a1e2fe0e3e54b->leave($__internal_269573aeaf79ac670c32c9c2786d7b0ab3343420b88417ce8b2a1e2fe0e3e54b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/split/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/split/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/reg-exp/#/split/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/split/implement.js");
    }
}
