<?php

/* node_modules/core-js/modules/es6.regexp.search.js */
class __TwigTemplate_9cfb52fd6da7fe50209f57572f1920b42d28171fdbb2c7bb669695526a2aa7ec extends Twig_Template
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
        $__internal_63c6fefa1549524da1ba3b6e10d429dba203792ed4fbf4f4848642cd0260f39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c6fefa1549524da1ba3b6e10d429dba203792ed4fbf4f4848642cd0260f39a->enter($__internal_63c6fefa1549524da1ba3b6e10d429dba203792ed4fbf4f4848642cd0260f39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.regexp.search.js"));

        // line 1
        echo "// @@search logic
require('./_fix-re-wks')('search', 1, function (defined, SEARCH, \$search) {
  // 21.1.3.15 String.prototype.search(regexp)
  return [function search(regexp) {
    'use strict';
    var O = defined(this);
    var fn = regexp == undefined ? undefined : regexp[SEARCH];
    return fn !== undefined ? fn.call(regexp, O) : new RegExp(regexp)[SEARCH](String(O));
  }, \$search];
});
";
        
        $__internal_63c6fefa1549524da1ba3b6e10d429dba203792ed4fbf4f4848642cd0260f39a->leave($__internal_63c6fefa1549524da1ba3b6e10d429dba203792ed4fbf4f4848642cd0260f39a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.regexp.search.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// @@search logic
require('./_fix-re-wks')('search', 1, function (defined, SEARCH, \$search) {
  // 21.1.3.15 String.prototype.search(regexp)
  return [function search(regexp) {
    'use strict';
    var O = defined(this);
    var fn = regexp == undefined ? undefined : regexp[SEARCH];
    return fn !== undefined ? fn.call(regexp, O) : new RegExp(regexp)[SEARCH](String(O));
  }, \$search];
});
", "node_modules/core-js/modules/es6.regexp.search.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.regexp.search.js");
    }
}
