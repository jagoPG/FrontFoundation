<?php

/* node_modules/longest/index.js */
class __TwigTemplate_d32328f12e254801c577aa95937b6e44d8e832e164c2a1cc09216c94a86b6805 extends Twig_Template
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
        $__internal_fc57b8c0565558cbad7d4237decdd7b36c3c1dbdd6229f048a509d4c0da824b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc57b8c0565558cbad7d4237decdd7b36c3c1dbdd6229f048a509d4c0da824b5->enter($__internal_fc57b8c0565558cbad7d4237decdd7b36c3c1dbdd6229f048a509d4c0da824b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/longest/index.js"));

        // line 1
        echo "/*!
 * longest <https://github.com/jonschlinkert/longest>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

module.exports = function(arr) {
  if (!arr) {
    return null;
  }

  var len = arr.length;
  if (!len) {
    return null;
  }

  var c = 0;
  var i = 0;
  var ele;
  var elen;
  var res;

  for (; i < len; i++) {
    ele = arr[i].toString();
    elen = ele.length;

    if (elen > c) {
      res = ele;
      c = elen;
    }
  }

  return res;
};
";
        
        $__internal_fc57b8c0565558cbad7d4237decdd7b36c3c1dbdd6229f048a509d4c0da824b5->leave($__internal_fc57b8c0565558cbad7d4237decdd7b36c3c1dbdd6229f048a509d4c0da824b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/longest/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * longest <https://github.com/jonschlinkert/longest>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

module.exports = function(arr) {
  if (!arr) {
    return null;
  }

  var len = arr.length;
  if (!len) {
    return null;
  }

  var c = 0;
  var i = 0;
  var ele;
  var elen;
  var res;

  for (; i < len; i++) {
    ele = arr[i].toString();
    elen = ele.length;

    if (elen > c) {
      res = ele;
      c = elen;
    }
  }

  return res;
};
", "node_modules/longest/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/longest/index.js");
    }
}
