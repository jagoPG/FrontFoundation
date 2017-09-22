<?php

/* node_modules/string.prototype.trim/implementation.js */
class __TwigTemplate_dbaba9a74fa2dcfb76dabcca40c290f66150fa35250e1a3bf0658e257220fdcc extends Twig_Template
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
        $__internal_3e17fdf9ed0e765b94eb1375e4048659bf22400c875c05f0bfd3ce6ac7f1ac7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e17fdf9ed0e765b94eb1375e4048659bf22400c875c05f0bfd3ce6ac7f1ac7b->enter($__internal_3e17fdf9ed0e765b94eb1375e4048659bf22400c875c05f0bfd3ce6ac7f1ac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string.prototype.trim/implementation.js"));

        // line 1
        echo "'use strict';

var bind = require('function-bind');
var ES = require('es-abstract/es5');
var replace = bind.call(Function.call, String.prototype.replace);

var leftWhitespace = /^[\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\xA0\\u1680\\u180E\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200A\\u202F\\u205F\\u3000\\u2028\\u2029\\uFEFF]+/;
var rightWhitespace = /[\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\xA0\\u1680\\u180E\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200A\\u202F\\u205F\\u3000\\u2028\\u2029\\uFEFF]+\$/;

module.exports = function trim() {
\tvar S = ES.ToString(ES.CheckObjectCoercible(this));
\treturn replace(replace(S, leftWhitespace, ''), rightWhitespace, '');
};
";
        
        $__internal_3e17fdf9ed0e765b94eb1375e4048659bf22400c875c05f0bfd3ce6ac7f1ac7b->leave($__internal_3e17fdf9ed0e765b94eb1375e4048659bf22400c875c05f0bfd3ce6ac7f1ac7b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string.prototype.trim/implementation.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var bind = require('function-bind');
var ES = require('es-abstract/es5');
var replace = bind.call(Function.call, String.prototype.replace);

var leftWhitespace = /^[\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\xA0\\u1680\\u180E\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200A\\u202F\\u205F\\u3000\\u2028\\u2029\\uFEFF]+/;
var rightWhitespace = /[\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\xA0\\u1680\\u180E\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200A\\u202F\\u205F\\u3000\\u2028\\u2029\\uFEFF]+\$/;

module.exports = function trim() {
\tvar S = ES.ToString(ES.CheckObjectCoercible(this));
\treturn replace(replace(S, leftWhitespace, ''), rightWhitespace, '');
};
", "node_modules/string.prototype.trim/implementation.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string.prototype.trim/implementation.js");
    }
}
