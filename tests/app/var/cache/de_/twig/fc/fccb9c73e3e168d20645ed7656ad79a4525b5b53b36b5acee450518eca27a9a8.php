<?php

/* node_modules/ejs/Jakefile */
class __TwigTemplate_14f195e17063e4afb9e888ea41105bae00587588c69dd65ba4269929d2f80fce extends Twig_Template
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
        $__internal_42f4e128bd813d0decc54a0bf5059c21d0026d0bbe97c774ac24ebdb42fd91d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f4e128bd813d0decc54a0bf5059c21d0026d0bbe97c774ac24ebdb42fd91d6->enter($__internal_42f4e128bd813d0decc54a0bf5059c21d0026d0bbe97c774ac24ebdb42fd91d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ejs/Jakefile"));

        // line 1
        echo "var fs = require('fs');
var execSync = require('child_process').execSync;
var exec = function (cmd) {
  execSync(cmd, {stdio: 'inherit'});
};

/* global jake, task, desc, publishTask */

task('build', ['lint', 'clean', 'browserify', 'minify'], function () {
  console.log('Build completed.');
});

desc('Cleans browerified/minified files and package files');
task('clean', ['clobber'], function () {
  jake.rmRf('./ejs.js');
  jake.rmRf('./ejs.min.js');
  console.log('Cleaned up compiled files.');
});

desc('Lints the source code');
task('lint', function () {
  exec('./node_modules/.bin/eslint \\\"**/*.js\\\" Jakefile');
  console.log('Linting completed.');
});

task('browserify', function () {
  exec('./node_modules/browserify/bin/cmd.js --standalone ejs lib/ejs.js > ejs.js');
  console.log('Browserification completed.');
});

task('minify', function () {
  exec('./node_modules/uglify-js/bin/uglifyjs ejs.js > ejs.min.js');
  console.log('Minification completed.');
});

task('doc', function (dev) {
  jake.rmRf('out');
  var p = dev ? '-p' : '';
  exec('./node_modules/.bin/jsdoc ' + p + ' -c jsdoc.json lib/* docs/jsdoc/*');
  console.log('Documentation generated.');
});

task('docPublish', ['doc'], function () {
  fs.writeFileSync('out/CNAME', 'api.ejs.co');
  console.log('Pushing docs to gh-pages...');
  exec('./node_modules/.bin/git-directory-deploy --directory out/');
  console.log('Docs published to gh-pages.');
});

task('test', ['lint'], function () {
  exec('./node_modules/.bin/mocha');
});

publishTask('ejs', ['build'], function () {
  this.packageFiles.include([
    'Jakefile',
    'README.md',
    'LICENSE',
    'package.json',
    'ejs.js',
    'ejs.min.js',
    'lib/**'
  ]);
});

jake.Task.publish.on('complete', function () {
  console.log('Updating hosted docs...');
  console.log('If this fails, run jake docPublish to re-try.');
  jake.Task.docPublish.invoke();
});
";
        
        $__internal_42f4e128bd813d0decc54a0bf5059c21d0026d0bbe97c774ac24ebdb42fd91d6->leave($__internal_42f4e128bd813d0decc54a0bf5059c21d0026d0bbe97c774ac24ebdb42fd91d6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ejs/Jakefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var fs = require('fs');
var execSync = require('child_process').execSync;
var exec = function (cmd) {
  execSync(cmd, {stdio: 'inherit'});
};

/* global jake, task, desc, publishTask */

task('build', ['lint', 'clean', 'browserify', 'minify'], function () {
  console.log('Build completed.');
});

desc('Cleans browerified/minified files and package files');
task('clean', ['clobber'], function () {
  jake.rmRf('./ejs.js');
  jake.rmRf('./ejs.min.js');
  console.log('Cleaned up compiled files.');
});

desc('Lints the source code');
task('lint', function () {
  exec('./node_modules/.bin/eslint \\\"**/*.js\\\" Jakefile');
  console.log('Linting completed.');
});

task('browserify', function () {
  exec('./node_modules/browserify/bin/cmd.js --standalone ejs lib/ejs.js > ejs.js');
  console.log('Browserification completed.');
});

task('minify', function () {
  exec('./node_modules/uglify-js/bin/uglifyjs ejs.js > ejs.min.js');
  console.log('Minification completed.');
});

task('doc', function (dev) {
  jake.rmRf('out');
  var p = dev ? '-p' : '';
  exec('./node_modules/.bin/jsdoc ' + p + ' -c jsdoc.json lib/* docs/jsdoc/*');
  console.log('Documentation generated.');
});

task('docPublish', ['doc'], function () {
  fs.writeFileSync('out/CNAME', 'api.ejs.co');
  console.log('Pushing docs to gh-pages...');
  exec('./node_modules/.bin/git-directory-deploy --directory out/');
  console.log('Docs published to gh-pages.');
});

task('test', ['lint'], function () {
  exec('./node_modules/.bin/mocha');
});

publishTask('ejs', ['build'], function () {
  this.packageFiles.include([
    'Jakefile',
    'README.md',
    'LICENSE',
    'package.json',
    'ejs.js',
    'ejs.min.js',
    'lib/**'
  ]);
});

jake.Task.publish.on('complete', function () {
  console.log('Updating hosted docs...');
  console.log('If this fails, run jake docPublish to re-try.');
  jake.Task.docPublish.invoke();
});
", "node_modules/ejs/Jakefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ejs/Jakefile");
    }
}
