<?php

/* node_modules/fstream/lib/get-type.js */
class __TwigTemplate_469efeb2a1b5e4e87e268bb780377805b8c61343b4bdd39518bff6e736708c7c extends Twig_Template
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
        $__internal_5a8a8ac9f41910488adc1dd4caf0896e75d73a93e3ffcb49ed2aa8d51054e116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8a8ac9f41910488adc1dd4caf0896e75d73a93e3ffcb49ed2aa8d51054e116->enter($__internal_5a8a8ac9f41910488adc1dd4caf0896e75d73a93e3ffcb49ed2aa8d51054e116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream/lib/get-type.js"));

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
        
        $__internal_5a8a8ac9f41910488adc1dd4caf0896e75d73a93e3ffcb49ed2aa8d51054e116->leave($__internal_5a8a8ac9f41910488adc1dd4caf0896e75d73a93e3ffcb49ed2aa8d51054e116_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream/lib/get-type.js";
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
", "node_modules/fstream/lib/get-type.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream/lib/get-type.js");
    }
}
