<?php

/* node_modules/es6-set/is-native-implemented.js */
class __TwigTemplate_6062a1d4ebff333d23ad11c153868870387284fd1b2be41033b1bc610108706b extends Twig_Template
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
        $__internal_0fcd3683e7ae05c19e297e1f03bf1b0f84eb1a05f20b8f0d66ae7c116c150b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fcd3683e7ae05c19e297e1f03bf1b0f84eb1a05f20b8f0d66ae7c116c150b9c->enter($__internal_0fcd3683e7ae05c19e297e1f03bf1b0f84eb1a05f20b8f0d66ae7c116c150b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/is-native-implemented.js"));

        // line 1
        echo "// Exports true if environment provides native `Set` implementation,
// whatever that is.

'use strict';

module.exports = (function () {
\tif (typeof Set === 'undefined') return false;
\treturn (Object.prototype.toString.call(Set.prototype) === '[object Set]');
}());
";
        
        $__internal_0fcd3683e7ae05c19e297e1f03bf1b0f84eb1a05f20b8f0d66ae7c116c150b9c->leave($__internal_0fcd3683e7ae05c19e297e1f03bf1b0f84eb1a05f20b8f0d66ae7c116c150b9c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/is-native-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Exports true if environment provides native `Set` implementation,
// whatever that is.

'use strict';

module.exports = (function () {
\tif (typeof Set === 'undefined') return false;
\treturn (Object.prototype.toString.call(Set.prototype) === '[object Set]');
}());
", "node_modules/es6-set/is-native-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/is-native-implemented.js");
    }
}
