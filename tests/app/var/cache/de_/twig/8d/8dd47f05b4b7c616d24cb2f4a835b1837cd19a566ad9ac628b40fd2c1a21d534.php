<?php

/* node_modules/es5-ext/function/#/to-string-tokens.js */
class __TwigTemplate_806b94578126eba110422ccb69244d2822a8cfb435efc7404d4d7c851f390841 extends Twig_Template
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
        $__internal_1bd5f2d5b96dc246b83b50316b6c0668416763e11da24131a5d4b1200cec0972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd5f2d5b96dc246b83b50316b6c0668416763e11da24131a5d4b1200cec0972->enter($__internal_1bd5f2d5b96dc246b83b50316b6c0668416763e11da24131a5d4b1200cec0972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/#/to-string-tokens.js"));

        // line 1
        echo "\"use strict\";

var validFunction = require(\"../valid-function\");

var re1 = /^\\s*function[\\0-')-\\uffff]*\\(([\\0-(*-\\uffff]*)\\)\\s*\\{([\\0-\\uffff]*)\\}\\s*\$/
  , re2 = /^\\s*\\(?([\\0-'*-\\uffff]*)\\)?\\s*=>\\s*(\\{?[\\0-\\uffff]*\\}?)\\s*\$/;

module.exports = function () {
\tvar str = String(validFunction(this)), data = str.match(re1);
\tif (!data) {
\t\tdata = str.match(re2);
\t\tif (!data) throw new Error(\"Unrecognized string format\");
\t\tdata[1] = data[1].trim();
\t\tif (data[2][0] === \"{\") data[2] = data[2].trim().slice(1, -1);
\t}
\treturn { args: data[1], body: data[2] };
};
";
        
        $__internal_1bd5f2d5b96dc246b83b50316b6c0668416763e11da24131a5d4b1200cec0972->leave($__internal_1bd5f2d5b96dc246b83b50316b6c0668416763e11da24131a5d4b1200cec0972_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/#/to-string-tokens.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var validFunction = require(\"../valid-function\");

var re1 = /^\\s*function[\\0-')-\\uffff]*\\(([\\0-(*-\\uffff]*)\\)\\s*\\{([\\0-\\uffff]*)\\}\\s*\$/
  , re2 = /^\\s*\\(?([\\0-'*-\\uffff]*)\\)?\\s*=>\\s*(\\{?[\\0-\\uffff]*\\}?)\\s*\$/;

module.exports = function () {
\tvar str = String(validFunction(this)), data = str.match(re1);
\tif (!data) {
\t\tdata = str.match(re2);
\t\tif (!data) throw new Error(\"Unrecognized string format\");
\t\tdata[1] = data[1].trim();
\t\tif (data[2][0] === \"{\") data[2] = data[2].trim().slice(1, -1);
\t}
\treturn { args: data[1], body: data[2] };
};
", "node_modules/es5-ext/function/#/to-string-tokens.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/#/to-string-tokens.js");
    }
}
