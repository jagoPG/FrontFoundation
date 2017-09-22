<?php

/* node_modules/invert-kv/index.js */
class __TwigTemplate_a89b1472f6aec8ffb016102753f9abd901990b9a1a322ddd6c7aa09463fe9343 extends Twig_Template
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
        $__internal_a569d84d744f39dc8a6cb0d365abde42791e951164623150d6f724eb20ea3ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a569d84d744f39dc8a6cb0d365abde42791e951164623150d6f724eb20ea3ed1->enter($__internal_a569d84d744f39dc8a6cb0d365abde42791e951164623150d6f724eb20ea3ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/invert-kv/index.js"));

        // line 1
        echo "'use strict';
module.exports = function (obj) {
\tif (typeof obj !== 'object') {
\t\tthrow new TypeError('Expected an object');
\t}

\tvar ret = {};

\tfor (var key in obj) {
\t\tvar val = obj[key];
\t\tret[val] = key;
\t}

\treturn ret;
};
";
        
        $__internal_a569d84d744f39dc8a6cb0d365abde42791e951164623150d6f724eb20ea3ed1->leave($__internal_a569d84d744f39dc8a6cb0d365abde42791e951164623150d6f724eb20ea3ed1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/invert-kv/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function (obj) {
\tif (typeof obj !== 'object') {
\t\tthrow new TypeError('Expected an object');
\t}

\tvar ret = {};

\tfor (var key in obj) {
\t\tvar val = obj[key];
\t\tret[val] = key;
\t}

\treturn ret;
};
", "node_modules/invert-kv/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/invert-kv/index.js");
    }
}
