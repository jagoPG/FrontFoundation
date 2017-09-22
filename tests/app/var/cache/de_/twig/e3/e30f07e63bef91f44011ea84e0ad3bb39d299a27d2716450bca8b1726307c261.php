<?php

/* node_modules/fsevents/node_modules/fstream/examples/symlink-write.js */
class __TwigTemplate_f13ec73f99f68d12189210cdf4195fb7e05093939e15db8a64873637be075ce7 extends Twig_Template
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
        $__internal_d83046c0be5786cbf605031336bd86aeacbdf426af110834a564940f9e5cd1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83046c0be5786cbf605031336bd86aeacbdf426af110834a564940f9e5cd1ec->enter($__internal_d83046c0be5786cbf605031336bd86aeacbdf426af110834a564940f9e5cd1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/fstream/examples/symlink-write.js"));

        // line 1
        echo "var fstream = require('../fstream.js')
var notOpen = false
process.chdir(__dirname)

fstream
  .Writer({
    path: 'path/to/symlink',
    linkpath: './file',
    isSymbolicLink: true,
    mode: '0755' // octal strings supported
  })
  .on('close', function () {
    notOpen = true
    var fs = require('fs')
    var s = fs.lstatSync('path/to/symlink')
    var isSym = s.isSymbolicLink()
    console.log((isSym ? '' : 'not ') + 'ok 1 should be symlink')
    var t = fs.readlinkSync('path/to/symlink')
    var isTarget = t === './file'
    console.log((isTarget ? '' : 'not ') + 'ok 2 should link to ./file')
  })
  .end()

process.on('exit', function () {
  console.log((notOpen ? '' : 'not ') + 'ok 3 should be closed')
  console.log('1..3')
})
";
        
        $__internal_d83046c0be5786cbf605031336bd86aeacbdf426af110834a564940f9e5cd1ec->leave($__internal_d83046c0be5786cbf605031336bd86aeacbdf426af110834a564940f9e5cd1ec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/fstream/examples/symlink-write.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var fstream = require('../fstream.js')
var notOpen = false
process.chdir(__dirname)

fstream
  .Writer({
    path: 'path/to/symlink',
    linkpath: './file',
    isSymbolicLink: true,
    mode: '0755' // octal strings supported
  })
  .on('close', function () {
    notOpen = true
    var fs = require('fs')
    var s = fs.lstatSync('path/to/symlink')
    var isSym = s.isSymbolicLink()
    console.log((isSym ? '' : 'not ') + 'ok 1 should be symlink')
    var t = fs.readlinkSync('path/to/symlink')
    var isTarget = t === './file'
    console.log((isTarget ? '' : 'not ') + 'ok 2 should link to ./file')
  })
  .end()

process.on('exit', function () {
  console.log((notOpen ? '' : 'not ') + 'ok 3 should be closed')
  console.log('1..3')
})
", "node_modules/fsevents/node_modules/fstream/examples/symlink-write.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/fstream/examples/symlink-write.js");
    }
}
