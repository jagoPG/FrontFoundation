<?php

/* node_modules/url/util.js */
class __TwigTemplate_ef0488087ea51f1e1c3c9a7e097d473aaa597f656bbb078f2a4fac79e6cfd844 extends Twig_Template
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
        $__internal_b315af6c550a57e54701bedc3fa1df120577a78f2208a6ef34094e9ac37dd769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b315af6c550a57e54701bedc3fa1df120577a78f2208a6ef34094e9ac37dd769->enter($__internal_b315af6c550a57e54701bedc3fa1df120577a78f2208a6ef34094e9ac37dd769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/url/util.js"));

        // line 1
        echo "'use strict';

module.exports = {
  isString: function(arg) {
    return typeof(arg) === 'string';
  },
  isObject: function(arg) {
    return typeof(arg) === 'object' && arg !== null;
  },
  isNull: function(arg) {
    return arg === null;
  },
  isNullOrUndefined: function(arg) {
    return arg == null;
  }
};
";
        
        $__internal_b315af6c550a57e54701bedc3fa1df120577a78f2208a6ef34094e9ac37dd769->leave($__internal_b315af6c550a57e54701bedc3fa1df120577a78f2208a6ef34094e9ac37dd769_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/url/util.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = {
  isString: function(arg) {
    return typeof(arg) === 'string';
  },
  isObject: function(arg) {
    return typeof(arg) === 'object' && arg !== null;
  },
  isNull: function(arg) {
    return arg === null;
  },
  isNullOrUndefined: function(arg) {
    return arg == null;
  }
};
", "node_modules/url/util.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/url/util.js");
    }
}
