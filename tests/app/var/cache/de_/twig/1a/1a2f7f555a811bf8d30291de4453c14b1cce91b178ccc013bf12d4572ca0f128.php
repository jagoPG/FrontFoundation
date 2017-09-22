<?php

/* node_modules/center-align/index.js */
class __TwigTemplate_668d66ea3d700186ec8948d5a693f4e4855ecb66cc12e879d39b882053dd30ad extends Twig_Template
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
        $__internal_71543218e8382212eaee375be469a0c5c349e1e522f7042429e9314250a65564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71543218e8382212eaee375be469a0c5c349e1e522f7042429e9314250a65564->enter($__internal_71543218e8382212eaee375be469a0c5c349e1e522f7042429e9314250a65564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/center-align/index.js"));

        // line 1
        echo "/*!
 * center-align <https://github.com/jonschlinkert/center-align>
 *
 * Copycenter (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var utils = require('./utils');

module.exports = function centerAlign(val) {
  return utils.align(val, function (len, longest) {
    return Math.floor((longest - len) / 2);
  });
};
";
        
        $__internal_71543218e8382212eaee375be469a0c5c349e1e522f7042429e9314250a65564->leave($__internal_71543218e8382212eaee375be469a0c5c349e1e522f7042429e9314250a65564_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/center-align/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * center-align <https://github.com/jonschlinkert/center-align>
 *
 * Copycenter (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var utils = require('./utils');

module.exports = function centerAlign(val) {
  return utils.align(val, function (len, longest) {
    return Math.floor((longest - len) / 2);
  });
};
", "node_modules/center-align/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/center-align/index.js");
    }
}
