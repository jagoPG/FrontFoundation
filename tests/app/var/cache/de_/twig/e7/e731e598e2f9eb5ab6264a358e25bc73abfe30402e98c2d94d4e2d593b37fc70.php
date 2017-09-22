<?php

/* node_modules/console-browserify/test/static/test-adapter.js */
class __TwigTemplate_c31f811d5ba8a8d54dbc2ca08c0c75b08f7ffb69d60f3d34d9e7703c11de24df extends Twig_Template
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
        $__internal_9d5bfc55a3cbdaed26c0835ee46a6b08d62f2afe7bc9fafa35d383c3524c1c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5bfc55a3cbdaed26c0835ee46a6b08d62f2afe7bc9fafa35d383c3524c1c67->enter($__internal_9d5bfc55a3cbdaed26c0835ee46a6b08d62f2afe7bc9fafa35d383c3524c1c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/console-browserify/test/static/test-adapter.js"));

        // line 1
        echo "(function () {
    var Testem = window.Testem
    var regex = /^((?:not )?ok) (\\d+) (.+)\$/

    Testem.useCustomAdapter(tapAdapter)

    function tapAdapter(socket){
        var results = {
            failed: 0
            , passed: 0
            , total: 0
            , tests: []
        }

        socket.emit('tests-start')

        Testem.handleConsoleMessage = function(msg){
            var m = msg.match(regex)
            if (m) {
                var passed = m[1] === 'ok'
                var test = {
                    passed: passed ? 1 : 0,
                    failed: passed ? 0 : 1,
                    total: 1,
                    id: m[2],
                    name: m[3],
                    items: []
                }

                if (passed) {
                    results.passed++
                } else {
                    console.error(\"failure\", m)

                    results.failed++
                }

                results.total++

                // console.log(\"emitted test\", test)
                socket.emit('test-result', test)
                results.tests.push(test)
            } else if (msg === '# ok' || msg.match(/^# tests \\d+/)){
                // console.log(\"emitted all test\")
                socket.emit('all-test-results', results)
            }

            // return false if you want to prevent the console message from
            // going to the console
            // return false
        }
    }
}())
";
        
        $__internal_9d5bfc55a3cbdaed26c0835ee46a6b08d62f2afe7bc9fafa35d383c3524c1c67->leave($__internal_9d5bfc55a3cbdaed26c0835ee46a6b08d62f2afe7bc9fafa35d383c3524c1c67_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/console-browserify/test/static/test-adapter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function () {
    var Testem = window.Testem
    var regex = /^((?:not )?ok) (\\d+) (.+)\$/

    Testem.useCustomAdapter(tapAdapter)

    function tapAdapter(socket){
        var results = {
            failed: 0
            , passed: 0
            , total: 0
            , tests: []
        }

        socket.emit('tests-start')

        Testem.handleConsoleMessage = function(msg){
            var m = msg.match(regex)
            if (m) {
                var passed = m[1] === 'ok'
                var test = {
                    passed: passed ? 1 : 0,
                    failed: passed ? 0 : 1,
                    total: 1,
                    id: m[2],
                    name: m[3],
                    items: []
                }

                if (passed) {
                    results.passed++
                } else {
                    console.error(\"failure\", m)

                    results.failed++
                }

                results.total++

                // console.log(\"emitted test\", test)
                socket.emit('test-result', test)
                results.tests.push(test)
            } else if (msg === '# ok' || msg.match(/^# tests \\d+/)){
                // console.log(\"emitted all test\")
                socket.emit('all-test-results', results)
            }

            // return false if you want to prevent the console message from
            // going to the console
            // return false
        }
    }
}())
", "node_modules/console-browserify/test/static/test-adapter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/console-browserify/test/static/test-adapter.js");
    }
}
