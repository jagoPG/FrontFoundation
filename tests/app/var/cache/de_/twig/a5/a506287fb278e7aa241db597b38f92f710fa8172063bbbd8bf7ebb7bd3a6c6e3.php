<?php

/* node_modules/fstream/examples/symlink-write.js */
class __TwigTemplate_99dfbd0d00c7baa5c8dddb95d979698a9eafc7d95413267f467c90df41a90847 extends Twig_Template
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
        $__internal_6714829e300e1433e33ff8868d5651c825398b45949d26bae97fd81af1b7d631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6714829e300e1433e33ff8868d5651c825398b45949d26bae97fd81af1b7d631->enter($__internal_6714829e300e1433e33ff8868d5651c825398b45949d26bae97fd81af1b7d631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream/examples/symlink-write.js"));

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
        
        $__internal_6714829e300e1433e33ff8868d5651c825398b45949d26bae97fd81af1b7d631->leave($__internal_6714829e300e1433e33ff8868d5651c825398b45949d26bae97fd81af1b7d631_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream/examples/symlink-write.js";
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
", "node_modules/fstream/examples/symlink-write.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream/examples/symlink-write.js");
    }
}
