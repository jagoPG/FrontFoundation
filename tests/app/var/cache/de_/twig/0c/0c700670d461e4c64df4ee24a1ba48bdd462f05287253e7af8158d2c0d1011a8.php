<?php

/* node_modules/fsevents/node_modules/fstream/lib/get-type.js */
class __TwigTemplate_4bb3ec65ff71b36c4ca18986be153f765bd22b7bf886b5ee14bfb3ad93e74d69 extends Twig_Template
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
        $__internal_a406c6989ee88381489925db5eac9222373b653663ceaf264cfcb78d95781554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a406c6989ee88381489925db5eac9222373b653663ceaf264cfcb78d95781554->enter($__internal_a406c6989ee88381489925db5eac9222373b653663ceaf264cfcb78d95781554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/fstream/lib/get-type.js"));

        // line 1
        echo "module.exports = getType

function getType (st) {
  var types = [
    'Directory',
    'File',
    'SymbolicLink',
    'Link', // special for hardlinks from tarballs
    'BlockDevice',
    'CharacterDevice',
    'FIFO',
    'Socket'
  ]
  var type

  if (st.type && types.indexOf(st.type) !== -1) {
    st[st.type] = true
    return st.type
  }

  for (var i = 0, l = types.length; i < l; i++) {
    type = types[i]
    var is = st[type] || st['is' + type]
    if (typeof is === 'function') is = is.call(st)
    if (is) {
      st[type] = true
      st.type = type
      return type
    }
  }

  return null
}
";
        
        $__internal_a406c6989ee88381489925db5eac9222373b653663ceaf264cfcb78d95781554->leave($__internal_a406c6989ee88381489925db5eac9222373b653663ceaf264cfcb78d95781554_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/fstream/lib/get-type.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = getType

function getType (st) {
  var types = [
    'Directory',
    'File',
    'SymbolicLink',
    'Link', // special for hardlinks from tarballs
    'BlockDevice',
    'CharacterDevice',
    'FIFO',
    'Socket'
  ]
  var type

  if (st.type && types.indexOf(st.type) !== -1) {
    st[st.type] = true
    return st.type
  }

  for (var i = 0, l = types.length; i < l; i++) {
    type = types[i]
    var is = st[type] || st['is' + type]
    if (typeof is === 'function') is = is.call(st)
    if (is) {
      st[type] = true
      st.type = type
      return type
    }
  }

  return null
}
", "node_modules/fsevents/node_modules/fstream/lib/get-type.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/fstream/lib/get-type.js");
    }
}
