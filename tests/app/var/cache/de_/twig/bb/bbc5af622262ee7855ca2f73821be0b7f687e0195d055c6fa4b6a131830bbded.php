<?php

/* node_modules/shebang-command/index.js */
class __TwigTemplate_556f285fcea7f655e9e5b1867ab2f8272510bfc85c3181cd8bcf7432032b6581 extends Twig_Template
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
        $__internal_4c24f1e6ba8bab4a2a66d1850b17ca7374195c61a55d2402245de4cdd8b0f641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c24f1e6ba8bab4a2a66d1850b17ca7374195c61a55d2402245de4cdd8b0f641->enter($__internal_4c24f1e6ba8bab4a2a66d1850b17ca7374195c61a55d2402245de4cdd8b0f641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/shebang-command/index.js"));

        // line 1
        echo "'use strict';
var shebangRegex = require('shebang-regex');

module.exports = function (str) {
\tvar match = str.match(shebangRegex);

\tif (!match) {
\t\treturn null;
\t}

\tvar arr = match[0].replace(/#! ?/, '').split(' ');
\tvar bin = arr[0].split('/').pop();
\tvar arg = arr[1];

\treturn (bin === 'env' ?
\t\targ :
\t\tbin + (arg ? ' ' + arg : '')
\t);
};
";
        
        $__internal_4c24f1e6ba8bab4a2a66d1850b17ca7374195c61a55d2402245de4cdd8b0f641->leave($__internal_4c24f1e6ba8bab4a2a66d1850b17ca7374195c61a55d2402245de4cdd8b0f641_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/shebang-command/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var shebangRegex = require('shebang-regex');

module.exports = function (str) {
\tvar match = str.match(shebangRegex);

\tif (!match) {
\t\treturn null;
\t}

\tvar arr = match[0].replace(/#! ?/, '').split(' ');
\tvar bin = arr[0].split('/').pop();
\tvar arg = arr[1];

\treturn (bin === 'env' ?
\t\targ :
\t\tbin + (arg ? ' ' + arg : '')
\t);
};
", "node_modules/shebang-command/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/shebang-command/index.js");
    }
}
