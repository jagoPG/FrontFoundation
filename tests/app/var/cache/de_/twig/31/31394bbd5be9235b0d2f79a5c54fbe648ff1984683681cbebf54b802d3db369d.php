<?php

/* node_modules/normalize-package-data/lib/normalize.js */
class __TwigTemplate_c4ce18269c31fb2866b4080718ecf07068e661fe9e7f29d09815845374cf1f0b extends Twig_Template
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
        $__internal_4f2e8c27f3a9866bfde71eae4f4c9f4b55d9a4be8f172497fb3fb7b150960c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2e8c27f3a9866bfde71eae4f4c9f4b55d9a4be8f172497fb3fb7b150960c8a->enter($__internal_4f2e8c27f3a9866bfde71eae4f4c9f4b55d9a4be8f172497fb3fb7b150960c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/normalize-package-data/lib/normalize.js"));

        // line 1
        echo "module.exports = normalize

var fixer = require(\"./fixer\")
normalize.fixer = fixer

var makeWarning = require(\"./make_warning\")

var fieldsToFix = ['name','version','description','repository','modules','scripts'
                  ,'files','bin','man','bugs','keywords','readme','homepage','license']
var otherThingsToFix = ['dependencies','people', 'typos']

var thingsToFix = fieldsToFix.map(function(fieldName) {
  return ucFirst(fieldName) + \"Field\"
})
// two ways to do this in CoffeeScript on only one line, sub-70 chars:
// thingsToFix = fieldsToFix.map (name) -> ucFirst(name) + \"Field\"
// thingsToFix = (ucFirst(name) + \"Field\" for name in fieldsToFix)
thingsToFix = thingsToFix.concat(otherThingsToFix)

function normalize (data, warn, strict) {
  if(warn === true) warn = null, strict = true
  if(!strict) strict = false
  if(!warn || data.private) warn = function(msg) { /* noop */ }

  if (data.scripts &&
      data.scripts.install === \"node-gyp rebuild\" &&
      !data.scripts.preinstall) {
    data.gypfile = true
  }
  fixer.warn = function() { warn(makeWarning.apply(null, arguments)) }
  thingsToFix.forEach(function(thingName) {
    fixer[\"fix\" + ucFirst(thingName)](data, strict)
  })
  data._id = data.name + \"@\" + data.version
}

function ucFirst (string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}
";
        
        $__internal_4f2e8c27f3a9866bfde71eae4f4c9f4b55d9a4be8f172497fb3fb7b150960c8a->leave($__internal_4f2e8c27f3a9866bfde71eae4f4c9f4b55d9a4be8f172497fb3fb7b150960c8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/normalize-package-data/lib/normalize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = normalize

var fixer = require(\"./fixer\")
normalize.fixer = fixer

var makeWarning = require(\"./make_warning\")

var fieldsToFix = ['name','version','description','repository','modules','scripts'
                  ,'files','bin','man','bugs','keywords','readme','homepage','license']
var otherThingsToFix = ['dependencies','people', 'typos']

var thingsToFix = fieldsToFix.map(function(fieldName) {
  return ucFirst(fieldName) + \"Field\"
})
// two ways to do this in CoffeeScript on only one line, sub-70 chars:
// thingsToFix = fieldsToFix.map (name) -> ucFirst(name) + \"Field\"
// thingsToFix = (ucFirst(name) + \"Field\" for name in fieldsToFix)
thingsToFix = thingsToFix.concat(otherThingsToFix)

function normalize (data, warn, strict) {
  if(warn === true) warn = null, strict = true
  if(!strict) strict = false
  if(!warn || data.private) warn = function(msg) { /* noop */ }

  if (data.scripts &&
      data.scripts.install === \"node-gyp rebuild\" &&
      !data.scripts.preinstall) {
    data.gypfile = true
  }
  fixer.warn = function() { warn(makeWarning.apply(null, arguments)) }
  thingsToFix.forEach(function(thingName) {
    fixer[\"fix\" + ucFirst(thingName)](data, strict)
  })
  data._id = data.name + \"@\" + data.version
}

function ucFirst (string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}
", "node_modules/normalize-package-data/lib/normalize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/normalize-package-data/lib/normalize.js");
    }
}
