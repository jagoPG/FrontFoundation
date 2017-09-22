<?php

/* node_modules/is-callable/package.json */
class __TwigTemplate_f04f01a4c633f548daa24417b6e69e7ec18b50c9c32ab8e4fab257113adf82d8 extends Twig_Template
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
        $__internal_7524d4cd2544b2457cb4fea948cc38093c06e6fe3b231a486ba5c29954c9c14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7524d4cd2544b2457cb4fea948cc38093c06e6fe3b231a486ba5c29954c9c14a->enter($__internal_7524d4cd2544b2457cb4fea948cc38093c06e6fe3b231a486ba5c29954c9c14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-callable/package.json"));

        // line 1
        echo "{
\t\"name\": \"is-callable\",
\t\"version\": \"1.1.3\",
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
\t\"description\": \"Is this JS value callable? Works with Functions and GeneratorFunctions, despite ES6 @@toStringTag.\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"test\": \"npm run lint && npm run tests-only && npm run security\",
\t\t\"tests-only\": \"parallelshell 'npm run test:stock' 'npm run test:staging'\",
\t\t\"test:stock\": \"node test.js\",
\t\t\"test:staging\": \"node --es-staging test.js\",
\t\t\"coverage\": \"covert test.js\",
\t\t\"coverage-quiet\": \"covert test.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"jscs\": \"jscs *.js\",
\t\t\"eslint\": \"eslint *.js\",
\t\t\"eccheck\": \"editorconfig-tools check *.js **/*.js > /dev/null\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/is-callable.git\"
\t},
\t\"keywords\": [
\t\t\"Function\",
\t\t\"function\",
\t\t\"callable\",
\t\t\"generator\",
\t\t\"generator function\",
\t\t\"arrow\",
\t\t\"arrow function\",
\t\t\"ES6\",
\t\t\"toStringTag\",
\t\t\"@@toStringTag\"
\t],
\t\"dependencies\": {},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.4.0\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"jscs\": \"^2.10.1\",
\t\t\"editorconfig-tools\": \"^0.1.1\",
\t\t\"nsp\": \"^2.2.0\",
\t\t\"eslint\": \"^2.2.0\",
\t\t\"@ljharb/eslint-config\": \"^2.1.1\",
\t\t\"make-arrow-function\": \"^1.1.0\",
\t\t\"make-generator-function\": \"^1.1.0\",
\t\t\"semver\": \"^5.1.0\",
\t\t\"foreach\": \"^2.0.5\",
\t\t\"parallelshell\": \"^2.0.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test.js\",
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
        
        $__internal_7524d4cd2544b2457cb4fea948cc38093c06e6fe3b231a486ba5c29954c9c14a->leave($__internal_7524d4cd2544b2457cb4fea948cc38093c06e6fe3b231a486ba5c29954c9c14a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-callable/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"name\": \"is-callable\",
\t\"version\": \"1.1.3\",
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
\t\"description\": \"Is this JS value callable? Works with Functions and GeneratorFunctions, despite ES6 @@toStringTag.\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"test\": \"npm run lint && npm run tests-only && npm run security\",
\t\t\"tests-only\": \"parallelshell 'npm run test:stock' 'npm run test:staging'\",
\t\t\"test:stock\": \"node test.js\",
\t\t\"test:staging\": \"node --es-staging test.js\",
\t\t\"coverage\": \"covert test.js\",
\t\t\"coverage-quiet\": \"covert test.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"jscs\": \"jscs *.js\",
\t\t\"eslint\": \"eslint *.js\",
\t\t\"eccheck\": \"editorconfig-tools check *.js **/*.js > /dev/null\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/is-callable.git\"
\t},
\t\"keywords\": [
\t\t\"Function\",
\t\t\"function\",
\t\t\"callable\",
\t\t\"generator\",
\t\t\"generator function\",
\t\t\"arrow\",
\t\t\"arrow function\",
\t\t\"ES6\",
\t\t\"toStringTag\",
\t\t\"@@toStringTag\"
\t],
\t\"dependencies\": {},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.4.0\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"jscs\": \"^2.10.1\",
\t\t\"editorconfig-tools\": \"^0.1.1\",
\t\t\"nsp\": \"^2.2.0\",
\t\t\"eslint\": \"^2.2.0\",
\t\t\"@ljharb/eslint-config\": \"^2.1.1\",
\t\t\"make-arrow-function\": \"^1.1.0\",
\t\t\"make-generator-function\": \"^1.1.0\",
\t\t\"semver\": \"^5.1.0\",
\t\t\"foreach\": \"^2.0.5\",
\t\t\"parallelshell\": \"^2.0.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test.js\",
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

", "node_modules/is-callable/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-callable/package.json");
    }
}
