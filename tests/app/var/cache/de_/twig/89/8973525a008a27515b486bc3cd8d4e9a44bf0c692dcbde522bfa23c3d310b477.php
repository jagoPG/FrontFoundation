<?php

/* node_modules/core-js/build/build.ls */
class __TwigTemplate_eada6481b634937fc99442b27f3cfe7ed5990e7dae1246359d954e826d96e865 extends Twig_Template
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
        $__internal_c446b90e473f3f646de2bb65532f22011a6e70cabe3af6273e35e4d1e187bb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c446b90e473f3f646de2bb65532f22011a6e70cabe3af6273e35e4d1e187bb1b->enter($__internal_c446b90e473f3f646de2bb65532f22011a6e70cabe3af6273e35e4d1e187bb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/build/build.ls"));

        // line 1
        echo "require! {
  '../library/fn/promise': Promise
  './config': {list, experimental, libraryBlacklist, es5SpecialCase, banner}
  fs: {readFile, writeFile, unlink}
  path: {basename, dirname, join}
  webpack, temp
}

module.exports = ({modules = [], blacklist = [], library = no, umd = on})->
  resolve, reject <~! new Promise _
  let @ = modules.reduce ((memo, it)-> memo[it] = on; memo), {}
    if @exp => for experimental => @[..] = on
    if @es5 => for es5SpecialCase => @[..] = on
    for ns of @
      if @[ns]
        for name in list
          if name.indexOf(\"#ns.\") is 0 and name not in experimental
            @[name] = on

    if library => blacklist ++= libraryBlacklist
    for ns in blacklist
      for name in list
        if name is ns or name.indexOf(\"#ns.\") is 0
          @[name] = no

    TARGET = temp.path {suffix: '.js'}

    err, info <~! webpack do
      entry: list.filter(~> @[it]).map ~>
        if library => join __dirname, '..', 'library', 'modules', it
        else join __dirname, '..', 'modules', it
      output:
        path: dirname TARGET
        filename: basename \"./#TARGET\"
    if err => return reject err

    err, script <~! readFile TARGET
    if err => return reject err

    err <~! unlink TARGET
    if err => return reject err

    if umd
      exportScript = \"\"\"
        // CommonJS export
        if (typeof module != 'undefined' && module.exports) module.exports = __e;
        // RequireJS export
        else if (typeof define == 'function' && define.amd) define(function () { return __e; });
        // Export to global object
        else __g.core = __e;
        \"\"\"
    else
      exportScript = \"\"

    resolve \"\"\"
      #banner
      !function(__e, __g, undefined){
      'use strict';
      #script
      #exportScript
      }(1, 1);
      \"\"\"";
        
        $__internal_c446b90e473f3f646de2bb65532f22011a6e70cabe3af6273e35e4d1e187bb1b->leave($__internal_c446b90e473f3f646de2bb65532f22011a6e70cabe3af6273e35e4d1e187bb1b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/build/build.ls";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require! {
  '../library/fn/promise': Promise
  './config': {list, experimental, libraryBlacklist, es5SpecialCase, banner}
  fs: {readFile, writeFile, unlink}
  path: {basename, dirname, join}
  webpack, temp
}

module.exports = ({modules = [], blacklist = [], library = no, umd = on})->
  resolve, reject <~! new Promise _
  let @ = modules.reduce ((memo, it)-> memo[it] = on; memo), {}
    if @exp => for experimental => @[..] = on
    if @es5 => for es5SpecialCase => @[..] = on
    for ns of @
      if @[ns]
        for name in list
          if name.indexOf(\"#ns.\") is 0 and name not in experimental
            @[name] = on

    if library => blacklist ++= libraryBlacklist
    for ns in blacklist
      for name in list
        if name is ns or name.indexOf(\"#ns.\") is 0
          @[name] = no

    TARGET = temp.path {suffix: '.js'}

    err, info <~! webpack do
      entry: list.filter(~> @[it]).map ~>
        if library => join __dirname, '..', 'library', 'modules', it
        else join __dirname, '..', 'modules', it
      output:
        path: dirname TARGET
        filename: basename \"./#TARGET\"
    if err => return reject err

    err, script <~! readFile TARGET
    if err => return reject err

    err <~! unlink TARGET
    if err => return reject err

    if umd
      exportScript = \"\"\"
        // CommonJS export
        if (typeof module != 'undefined' && module.exports) module.exports = __e;
        // RequireJS export
        else if (typeof define == 'function' && define.amd) define(function () { return __e; });
        // Export to global object
        else __g.core = __e;
        \"\"\"
    else
      exportScript = \"\"

    resolve \"\"\"
      #banner
      !function(__e, __g, undefined){
      'use strict';
      #script
      #exportScript
      }(1, 1);
      \"\"\"", "node_modules/core-js/build/build.ls", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/build/build.ls");
    }
}
