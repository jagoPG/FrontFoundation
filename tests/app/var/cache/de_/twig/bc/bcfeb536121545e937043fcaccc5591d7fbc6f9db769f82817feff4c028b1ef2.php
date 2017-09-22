<?php

/* node_modules/cross-spawn/lib/util/escapeArgument.js */
class __TwigTemplate_4e1413c9010a405ebd3ee5636933763af554077527d59101e9a98983fabe3f2e extends Twig_Template
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
        $__internal_7367dc1dbe49aa6cf59481fbfd9330d6c3391da1caafba5d251d2272a438e42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7367dc1dbe49aa6cf59481fbfd9330d6c3391da1caafba5d251d2272a438e42e->enter($__internal_7367dc1dbe49aa6cf59481fbfd9330d6c3391da1caafba5d251d2272a438e42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cross-spawn/lib/util/escapeArgument.js"));

        // line 1
        echo "'use strict';

function escapeArgument(arg, quote) {
    // Convert to string
    arg = '' + arg;

    // If we are not going to quote the argument,
    // escape shell metacharacters, including double and single quotes:
    if (!quote) {
        arg = arg.replace(/([()%!^<>&|;,\"'\\s])/g, '^\$1');
    } else {
        // Sequence of backslashes followed by a double quote:
        // double up all the backslashes and escape the double quote
        arg = arg.replace(/(\\\\*)\"/g, '\$1\$1\\\\\"');

        // Sequence of backslashes followed by the end of the string
        // (which will become a double quote later):
        // double up all the backslashes
        arg = arg.replace(/(\\\\*)\$/, '\$1\$1');

        // All other backslashes occur literally

        // Quote the whole thing:
        arg = '\"' + arg + '\"';
    }

    return arg;
}

module.exports = escapeArgument;
";
        
        $__internal_7367dc1dbe49aa6cf59481fbfd9330d6c3391da1caafba5d251d2272a438e42e->leave($__internal_7367dc1dbe49aa6cf59481fbfd9330d6c3391da1caafba5d251d2272a438e42e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cross-spawn/lib/util/escapeArgument.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

function escapeArgument(arg, quote) {
    // Convert to string
    arg = '' + arg;

    // If we are not going to quote the argument,
    // escape shell metacharacters, including double and single quotes:
    if (!quote) {
        arg = arg.replace(/([()%!^<>&|;,\"'\\s])/g, '^\$1');
    } else {
        // Sequence of backslashes followed by a double quote:
        // double up all the backslashes and escape the double quote
        arg = arg.replace(/(\\\\*)\"/g, '\$1\$1\\\\\"');

        // Sequence of backslashes followed by the end of the string
        // (which will become a double quote later):
        // double up all the backslashes
        arg = arg.replace(/(\\\\*)\$/, '\$1\$1');

        // All other backslashes occur literally

        // Quote the whole thing:
        arg = '\"' + arg + '\"';
    }

    return arg;
}

module.exports = escapeArgument;
", "node_modules/cross-spawn/lib/util/escapeArgument.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cross-spawn/lib/util/escapeArgument.js");
    }
}
