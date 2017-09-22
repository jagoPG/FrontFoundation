<?php

/* node_modules/es-abstract/package.json */
class __TwigTemplate_acae296272144357ca803b9ca10770a08a5a18424b9129f0f0f8ad07cbfca50a extends Twig_Template
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
        $__internal_83e747284d9b555f27e417a724245e76ec8e40228a283236d8e8ea300b14e6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e747284d9b555f27e417a724245e76ec8e40228a283236d8e8ea300b14e6f7->enter($__internal_83e747284d9b555f27e417a724245e76ec8e40228a283236d8e8ea300b14e6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/package.json"));

        // line 1
        echo "{
\t\"name\": \"es-abstract\",
\t\"version\": \"1.8.2\",
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
\t\"description\": \"ECMAScript spec abstract operations.\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"prepublish\": \"safe-publish-latest\",
\t\t\"pretest\": \"npm run --silent lint\",
\t\t\"test\": \"npm run tests-only\",
\t\t\"posttest\": \"npm run --silent security\",
\t\t\"tests-only\": \"node test\",
\t\t\"coverage\": \"nyc npm run --silent tests-only >/dev/null 2>&1\",
\t\t\"postcoverage\": \"nyc report\",
\t\t\"lint\": \"npm run --silent jscs && npm run --silent eslint\",
\t\t\"jscs\": \"jscs test/*.js *.js\",
\t\t\"eslint\": \"eslint test/*.js *.js\",
\t\t\"eccheck\": \"editorconfig-tools check *.js **/*.js > /dev/null\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/es-abstract.git\"
\t},
\t\"keywords\": [
\t\t\"ECMAScript\",
\t\t\"ES\",
\t\t\"abstract\",
\t\t\"operation\",
\t\t\"abstract operation\",
\t\t\"JavaScript\",
\t\t\"ES5\",
\t\t\"ES6\",
\t\t\"ES7\"
\t],
\t\"dependencies\": {
\t\t\"es-to-primitive\": \"^1.1.1\",
\t\t\"function-bind\": \"^1.1.1\",
\t\t\"has\": \"^1.0.1\",
\t\t\"is-callable\": \"^1.1.3\",
\t\t\"is-regex\": \"^1.0.4\"
\t},
\t\"devDependencies\": {
\t\t\"@ljharb/eslint-config\": \"^12.2.1\",
\t\t\"editorconfig-tools\": \"^0.1.1\",
\t\t\"eslint\": \"^4.6.1\",
\t\t\"foreach\": \"^2.0.5\",
\t\t\"jscs\": \"^3.0.7\",
\t\t\"nsp\": \"^2.7.0\",
\t\t\"nyc\": \"^10.3.2\",
\t\t\"object-is\": \"^1.0.1\",
\t\t\"object.assign\": \"^4.0.4\",
\t\t\"replace\": \"^0.3.0\",
\t\t\"safe-publish-latest\": \"^1.1.1\",
\t\t\"semver\": \"^5.4.1\",
\t\t\"tape\": \"^4.8.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test/index.js\",
\t\t\"browsers\": [
\t\t\t\"iexplore/6.0..latest\",
\t\t\t\"firefox/3.0..6.0\",
\t\t\t\"firefox/15.0..latest\",
\t\t\t\"firefox/nightly\",
\t\t\t\"chrome/4.0..10.0\",
\t\t\t\"chrome/20.0..latest\",
\t\t\t\"chrome/canary\",
\t\t\t\"opera/10.0..latest\",
\t\t\t\"opera/next\",
\t\t\t\"safari/4.0..latest\",
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
        
        $__internal_83e747284d9b555f27e417a724245e76ec8e40228a283236d8e8ea300b14e6f7->leave($__internal_83e747284d9b555f27e417a724245e76ec8e40228a283236d8e8ea300b14e6f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"name\": \"es-abstract\",
\t\"version\": \"1.8.2\",
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
\t\"description\": \"ECMAScript spec abstract operations.\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"prepublish\": \"safe-publish-latest\",
\t\t\"pretest\": \"npm run --silent lint\",
\t\t\"test\": \"npm run tests-only\",
\t\t\"posttest\": \"npm run --silent security\",
\t\t\"tests-only\": \"node test\",
\t\t\"coverage\": \"nyc npm run --silent tests-only >/dev/null 2>&1\",
\t\t\"postcoverage\": \"nyc report\",
\t\t\"lint\": \"npm run --silent jscs && npm run --silent eslint\",
\t\t\"jscs\": \"jscs test/*.js *.js\",
\t\t\"eslint\": \"eslint test/*.js *.js\",
\t\t\"eccheck\": \"editorconfig-tools check *.js **/*.js > /dev/null\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/es-abstract.git\"
\t},
\t\"keywords\": [
\t\t\"ECMAScript\",
\t\t\"ES\",
\t\t\"abstract\",
\t\t\"operation\",
\t\t\"abstract operation\",
\t\t\"JavaScript\",
\t\t\"ES5\",
\t\t\"ES6\",
\t\t\"ES7\"
\t],
\t\"dependencies\": {
\t\t\"es-to-primitive\": \"^1.1.1\",
\t\t\"function-bind\": \"^1.1.1\",
\t\t\"has\": \"^1.0.1\",
\t\t\"is-callable\": \"^1.1.3\",
\t\t\"is-regex\": \"^1.0.4\"
\t},
\t\"devDependencies\": {
\t\t\"@ljharb/eslint-config\": \"^12.2.1\",
\t\t\"editorconfig-tools\": \"^0.1.1\",
\t\t\"eslint\": \"^4.6.1\",
\t\t\"foreach\": \"^2.0.5\",
\t\t\"jscs\": \"^3.0.7\",
\t\t\"nsp\": \"^2.7.0\",
\t\t\"nyc\": \"^10.3.2\",
\t\t\"object-is\": \"^1.0.1\",
\t\t\"object.assign\": \"^4.0.4\",
\t\t\"replace\": \"^0.3.0\",
\t\t\"safe-publish-latest\": \"^1.1.1\",
\t\t\"semver\": \"^5.4.1\",
\t\t\"tape\": \"^4.8.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test/index.js\",
\t\t\"browsers\": [
\t\t\t\"iexplore/6.0..latest\",
\t\t\t\"firefox/3.0..6.0\",
\t\t\t\"firefox/15.0..latest\",
\t\t\t\"firefox/nightly\",
\t\t\t\"chrome/4.0..10.0\",
\t\t\t\"chrome/20.0..latest\",
\t\t\t\"chrome/canary\",
\t\t\t\"opera/10.0..latest\",
\t\t\t\"opera/next\",
\t\t\t\"safari/4.0..latest\",
\t\t\t\"ipad/6.0..latest\",
\t\t\t\"iphone/6.0..latest\",
\t\t\t\"android-browser/4.2\"
\t\t]
\t},
\t\"engines\": {
\t\t\"node\": \">= 0.4\"
\t}
}
", "node_modules/es-abstract/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/package.json");
    }
}
