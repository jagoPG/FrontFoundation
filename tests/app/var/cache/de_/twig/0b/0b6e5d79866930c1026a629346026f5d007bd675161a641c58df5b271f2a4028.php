<?php

/* node_modules/core-js/library/modules/es7.string.pad-end.js */
class __TwigTemplate_f67e21842f55c2c6c8fd6260fea02977bef1687571c93cf83e042a2b1089645b extends Twig_Template
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
        $__internal_927f54a26f746787c9eb9eb74d8049f70828f04c80c0b2664affd5f308921c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927f54a26f746787c9eb9eb74d8049f70828f04c80c0b2664affd5f308921c5b->enter($__internal_927f54a26f746787c9eb9eb74d8049f70828f04c80c0b2664affd5f308921c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.string.pad-end.js"));

        // line 1
        echo "'use strict';
// https://github.com/tc39/proposal-string-pad-start-end
var \$export = require('./_export');
var \$pad = require('./_string-pad');

\$export(\$export.P, 'String', {
  padEnd: function padEnd(maxLength /* , fillString = ' ' */) {
    return \$pad(this, maxLength, arguments.length > 1 ? arguments[1] : undefined, false);
  }
});
";
        
        $__internal_927f54a26f746787c9eb9eb74d8049f70828f04c80c0b2664affd5f308921c5b->leave($__internal_927f54a26f746787c9eb9eb74d8049f70828f04c80c0b2664affd5f308921c5b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.string.pad-end.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://github.com/tc39/proposal-string-pad-start-end
var \$export = require('./_export');
var \$pad = require('./_string-pad');

\$export(\$export.P, 'String', {
  padEnd: function padEnd(maxLength /* , fillString = ' ' */) {
    return \$pad(this, maxLength, arguments.length > 1 ? arguments[1] : undefined, false);
  }
});
", "node_modules/core-js/library/modules/es7.string.pad-end.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.string.pad-end.js");
    }
}
