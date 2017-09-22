<?php

/* node_modules/normalize-package-data/lib/make_warning.js */
class __TwigTemplate_ed3f9a8b432993b857a4bac8bc24dd14d5276dc091d15255e9f130a093776770 extends Twig_Template
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
        $__internal_04821967e94e5a88d595b5199492db88e78de75b8e3c25eacaaa0a9fd1fa2241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04821967e94e5a88d595b5199492db88e78de75b8e3c25eacaaa0a9fd1fa2241->enter($__internal_04821967e94e5a88d595b5199492db88e78de75b8e3c25eacaaa0a9fd1fa2241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/normalize-package-data/lib/make_warning.js"));

        // line 1
        echo "var util = require(\"util\")
var messages = require(\"./warning_messages.json\")

module.exports = function() {
  var args = Array.prototype.slice.call(arguments, 0)
  var warningName = args.shift()
  if (warningName == \"typo\") {
    return makeTypoWarning.apply(null,args)
  }
  else {
    var msgTemplate = messages[warningName] ? messages[warningName] : warningName + \": '%s'\"
    args.unshift(msgTemplate)
    return util.format.apply(null, args)
  }
}

function makeTypoWarning (providedName, probableName, field) {
  if (field) {
    providedName = field + \"['\" + providedName + \"']\"
    probableName = field + \"['\" + probableName + \"']\"
  }
  return util.format(messages.typo, providedName, probableName)
}
";
        
        $__internal_04821967e94e5a88d595b5199492db88e78de75b8e3c25eacaaa0a9fd1fa2241->leave($__internal_04821967e94e5a88d595b5199492db88e78de75b8e3c25eacaaa0a9fd1fa2241_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/normalize-package-data/lib/make_warning.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var util = require(\"util\")
var messages = require(\"./warning_messages.json\")

module.exports = function() {
  var args = Array.prototype.slice.call(arguments, 0)
  var warningName = args.shift()
  if (warningName == \"typo\") {
    return makeTypoWarning.apply(null,args)
  }
  else {
    var msgTemplate = messages[warningName] ? messages[warningName] : warningName + \": '%s'\"
    args.unshift(msgTemplate)
    return util.format.apply(null, args)
  }
}

function makeTypoWarning (providedName, probableName, field) {
  if (field) {
    providedName = field + \"['\" + providedName + \"']\"
    probableName = field + \"['\" + probableName + \"']\"
  }
  return util.format(messages.typo, providedName, probableName)
}
", "node_modules/normalize-package-data/lib/make_warning.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/normalize-package-data/lib/make_warning.js");
    }
}
