<?php

/* node_modules/es-abstract/index.js */
class __TwigTemplate_eab59ca52d6fbc7d6f81faae76a78cfc99fc4ab20e1d20f55e8b19fc930ffcce extends Twig_Template
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
        $__internal_139fc8c16b6b7bdc6c65a95e92976a04016ab27836c3236999fb68030d195846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139fc8c16b6b7bdc6c65a95e92976a04016ab27836c3236999fb68030d195846->enter($__internal_139fc8c16b6b7bdc6c65a95e92976a04016ab27836c3236999fb68030d195846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/index.js"));

        // line 1
        echo "'use strict';

var assign = require('./helpers/assign');

var ES5 = require('./es5');
var ES2015 = require('./es2015');
var ES2016 = require('./es2016');
var ES2017 = require('./es2017');

var ES = {
\tES5: ES5,
\tES6: ES2015,
\tES2015: ES2015,
\tES7: ES2016,
\tES2016: ES2016,
\tES2017: ES2017
};
assign(ES, ES5);
delete ES.CheckObjectCoercible; // renamed in ES6 to RequireObjectCoercible
assign(ES, ES2015);

module.exports = ES;
";
        
        $__internal_139fc8c16b6b7bdc6c65a95e92976a04016ab27836c3236999fb68030d195846->leave($__internal_139fc8c16b6b7bdc6c65a95e92976a04016ab27836c3236999fb68030d195846_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var assign = require('./helpers/assign');

var ES5 = require('./es5');
var ES2015 = require('./es2015');
var ES2016 = require('./es2016');
var ES2017 = require('./es2017');

var ES = {
\tES5: ES5,
\tES6: ES2015,
\tES2015: ES2015,
\tES7: ES2016,
\tES2016: ES2016,
\tES2017: ES2017
};
assign(ES, ES5);
delete ES.CheckObjectCoercible; // renamed in ES6 to RequireObjectCoercible
assign(ES, ES2015);

module.exports = ES;
", "node_modules/es-abstract/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/index.js");
    }
}
