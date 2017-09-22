<?php

/* node_modules/core-js/library/modules/es7.string.pad-start.js */
class __TwigTemplate_4eff19d2725a6a2cf5784842cb9b1df7fe9599fc40d8233a3c92b20b62619593 extends Twig_Template
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
        $__internal_6d5cd627e10e2da58229c9a3efb7cf82365f79d15520c0a0d2644a1f689b6b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5cd627e10e2da58229c9a3efb7cf82365f79d15520c0a0d2644a1f689b6b76->enter($__internal_6d5cd627e10e2da58229c9a3efb7cf82365f79d15520c0a0d2644a1f689b6b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.string.pad-start.js"));

        // line 1
        echo "'use strict';
// https://github.com/tc39/proposal-string-pad-start-end
var \$export = require('./_export');
var \$pad = require('./_string-pad');

\$export(\$export.P, 'String', {
  padStart: function padStart(maxLength /* , fillString = ' ' */) {
    return \$pad(this, maxLength, arguments.length > 1 ? arguments[1] : undefined, true);
  }
});
";
        
        $__internal_6d5cd627e10e2da58229c9a3efb7cf82365f79d15520c0a0d2644a1f689b6b76->leave($__internal_6d5cd627e10e2da58229c9a3efb7cf82365f79d15520c0a0d2644a1f689b6b76_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.string.pad-start.js";
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
  padStart: function padStart(maxLength /* , fillString = ' ' */) {
    return \$pad(this, maxLength, arguments.length > 1 ? arguments[1] : undefined, true);
  }
});
", "node_modules/core-js/library/modules/es7.string.pad-start.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.string.pad-start.js");
    }
}
