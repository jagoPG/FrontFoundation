<?php

/* node_modules/es5-ext/object/normalize-options.js */
class __TwigTemplate_ca40ee904c85e64420765b6462974d906d34a58304656e9b5f6f4d2019ecd590 extends Twig_Template
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
        $__internal_8c6bb87ba9457175ff5cb02357e1d252c72f3330641928a5ad612e5225e588ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6bb87ba9457175ff5cb02357e1d252c72f3330641928a5ad612e5225e588ce->enter($__internal_8c6bb87ba9457175ff5cb02357e1d252c72f3330641928a5ad612e5225e588ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/normalize-options.js"));

        // line 1
        echo "\"use strict\";

var isValue = require(\"./is-value\");

var forEach = Array.prototype.forEach, create = Object.create;

var process = function (src, obj) {
\tvar key;
\tfor (key in src) obj[key] = src[key];
};

// eslint-disable-next-line no-unused-vars
module.exports = function (opts1 /*, …options*/) {
\tvar result = create(null);
\tforEach.call(arguments, function (options) {
\t\tif (!isValue(options)) return;
\t\tprocess(Object(options), result);
\t});
\treturn result;
};
";
        
        $__internal_8c6bb87ba9457175ff5cb02357e1d252c72f3330641928a5ad612e5225e588ce->leave($__internal_8c6bb87ba9457175ff5cb02357e1d252c72f3330641928a5ad612e5225e588ce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/normalize-options.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isValue = require(\"./is-value\");

var forEach = Array.prototype.forEach, create = Object.create;

var process = function (src, obj) {
\tvar key;
\tfor (key in src) obj[key] = src[key];
};

// eslint-disable-next-line no-unused-vars
module.exports = function (opts1 /*, …options*/) {
\tvar result = create(null);
\tforEach.call(arguments, function (options) {
\t\tif (!isValue(options)) return;
\t\tprocess(Object(options), result);
\t});
\treturn result;
};
", "node_modules/es5-ext/object/normalize-options.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/normalize-options.js");
    }
}
