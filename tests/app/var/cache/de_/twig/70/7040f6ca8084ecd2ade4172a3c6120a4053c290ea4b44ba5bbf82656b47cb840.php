<?php

/* node_modules/string.prototype.trim/package.json */
class __TwigTemplate_e49dfd609d67c3f613160ecaeccbe36ee1a08bf18bcfb1e5ddc6099861783174 extends Twig_Template
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
        $__internal_131461e8740a0c99c562e45bf310c26490b63fd5c94352d851f2cfe70acd80af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131461e8740a0c99c562e45bf310c26490b63fd5c94352d851f2cfe70acd80af->enter($__internal_131461e8740a0c99c562e45bf310c26490b63fd5c94352d851f2cfe70acd80af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string.prototype.trim/package.json"));

        // line 1
        echo "{
\t\"name\": \"string.prototype.trim\",
\t\"version\": \"1.1.2\",
\t\"author\": {
\t\t\"name\": \"Jordan Harband\",
\t\t\"email\": \"ljharb@gmail.com\",
\t\t\"url\": \"http://ljharb.codes\"
\t},
\t\"contributors\": [
\t\t{
\t\t\t\"name\": \"Jordan Harband\",
\t\t\t\"email\": \"ljharb@gmail.com\",
\t\t\t\"url\": \"http://ljharb.codes\"
\t\t}
\t],
\t\"description\": \"ES5 spec-compliant shim for String.prototype.trim\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"test\": \"npm run lint && es-shim-api --bound && npm run tests-only && npm run security\",
\t\t\"tests-only\": \"npm run test:shimmed && npm run test:module\",
\t\t\"test:shimmed\": \"node test/shimmed.js\",
\t\t\"test:module\": \"node test/index.js\",
\t\t\"coverage\": \"covert test/*.js\",
\t\t\"coverage-quiet\": \"covert test/*.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"eslint\": \"eslint test/*.js *.js\",
\t\t\"jscs\": \"jscs test/*.js *.js\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/es-shims/String.prototype.trim.git\"
\t},
\t\"keywords\": [
\t\t\"String.prototype.trim\",
\t\t\"string\",
\t\t\"ES5\",
\t\t\"shim\",
\t\t\"trim\",
\t\t\"polyfill\",
\t\t\"es-shim API\"
\t],
\t\"dependencies\": {
\t\t\"define-properties\": \"^1.1.2\",
\t\t\"es-abstract\": \"^1.5.0\",
\t\t\"function-bind\": \"^1.0.2\"
\t},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.4.0\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"jscs\": \"^2.9.0\",
\t\t\"nsp\": \"^2.2.0\",
\t\t\"eslint\": \"^1.10.3\",
\t\t\"semver\": \"^5.1.0\",
\t\t\"replace\": \"^0.3.0\",
\t\t\"@ljharb/eslint-config\": \"^1.6.1\",
\t\t\"@es-shims/api\": \"^1.0.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test/index.js\",
\t\t\"browsers\": [
\t\t\t\"iexplore/9.0..latest\",
\t\t\t\"firefox/4.0..6.0\",
\t\t\t\"firefox/15.0..latest\",
\t\t\t\"firefox/nightly\",
\t\t\t\"chrome/4.0..10.0\",
\t\t\t\"chrome/20.0..latest\",
\t\t\t\"chrome/canary\",
\t\t\t\"opera/11.6..latest\",
\t\t\t\"opera/next\",
\t\t\t\"safari/5.0..latest\",
\t\t\t\"ipad/6.0..latest\",
\t\t\t\"iphone/6.0..latest\",
\t\t\t\"android-browser/4.2\"
\t\t]
\t},
\t\"engines\": {
\t\t\"node\": \">= 0.4\"
\t}
}
";
        
        $__internal_131461e8740a0c99c562e45bf310c26490b63fd5c94352d851f2cfe70acd80af->leave($__internal_131461e8740a0c99c562e45bf310c26490b63fd5c94352d851f2cfe70acd80af_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string.prototype.trim/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"name\": \"string.prototype.trim\",
\t\"version\": \"1.1.2\",
\t\"author\": {
\t\t\"name\": \"Jordan Harband\",
\t\t\"email\": \"ljharb@gmail.com\",
\t\t\"url\": \"http://ljharb.codes\"
\t},
\t\"contributors\": [
\t\t{
\t\t\t\"name\": \"Jordan Harband\",
\t\t\t\"email\": \"ljharb@gmail.com\",
\t\t\t\"url\": \"http://ljharb.codes\"
\t\t}
\t],
\t\"description\": \"ES5 spec-compliant shim for String.prototype.trim\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"test\": \"npm run lint && es-shim-api --bound && npm run tests-only && npm run security\",
\t\t\"tests-only\": \"npm run test:shimmed && npm run test:module\",
\t\t\"test:shimmed\": \"node test/shimmed.js\",
\t\t\"test:module\": \"node test/index.js\",
\t\t\"coverage\": \"covert test/*.js\",
\t\t\"coverage-quiet\": \"covert test/*.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"eslint\": \"eslint test/*.js *.js\",
\t\t\"jscs\": \"jscs test/*.js *.js\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/es-shims/String.prototype.trim.git\"
\t},
\t\"keywords\": [
\t\t\"String.prototype.trim\",
\t\t\"string\",
\t\t\"ES5\",
\t\t\"shim\",
\t\t\"trim\",
\t\t\"polyfill\",
\t\t\"es-shim API\"
\t],
\t\"dependencies\": {
\t\t\"define-properties\": \"^1.1.2\",
\t\t\"es-abstract\": \"^1.5.0\",
\t\t\"function-bind\": \"^1.0.2\"
\t},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.4.0\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"jscs\": \"^2.9.0\",
\t\t\"nsp\": \"^2.2.0\",
\t\t\"eslint\": \"^1.10.3\",
\t\t\"semver\": \"^5.1.0\",
\t\t\"replace\": \"^0.3.0\",
\t\t\"@ljharb/eslint-config\": \"^1.6.1\",
\t\t\"@es-shims/api\": \"^1.0.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test/index.js\",
\t\t\"browsers\": [
\t\t\t\"iexplore/9.0..latest\",
\t\t\t\"firefox/4.0..6.0\",
\t\t\t\"firefox/15.0..latest\",
\t\t\t\"firefox/nightly\",
\t\t\t\"chrome/4.0..10.0\",
\t\t\t\"chrome/20.0..latest\",
\t\t\t\"chrome/canary\",
\t\t\t\"opera/11.6..latest\",
\t\t\t\"opera/next\",
\t\t\t\"safari/5.0..latest\",
\t\t\t\"ipad/6.0..latest\",
\t\t\t\"iphone/6.0..latest\",
\t\t\t\"android-browser/4.2\"
\t\t]
\t},
\t\"engines\": {
\t\t\"node\": \">= 0.4\"
\t}
}
", "node_modules/string.prototype.trim/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string.prototype.trim/package.json");
    }
}
