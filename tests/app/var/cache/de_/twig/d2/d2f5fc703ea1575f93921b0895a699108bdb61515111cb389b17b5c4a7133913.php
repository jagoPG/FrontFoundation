<?php

/* node_modules/duplexer/index.js */
class __TwigTemplate_1a5bf10471436bbe732d00d6f2e1621ba6ae256ab2ad4d63eeafe7a00694fa07 extends Twig_Template
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
        $__internal_cf5dcbe62ad8e0771b4788a33a98b5b6bf23df2e683bd370b7a1b714a03f4dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5dcbe62ad8e0771b4788a33a98b5b6bf23df2e683bd370b7a1b714a03f4dfe->enter($__internal_cf5dcbe62ad8e0771b4788a33a98b5b6bf23df2e683bd370b7a1b714a03f4dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/duplexer/index.js"));

        // line 1
        echo "var Stream = require(\"stream\")
var writeMethods = [\"write\", \"end\", \"destroy\"]
var readMethods = [\"resume\", \"pause\"]
var readEvents = [\"data\", \"close\"]
var slice = Array.prototype.slice

module.exports = duplex

function forEach (arr, fn) {
    if (arr.forEach) {
        return arr.forEach(fn)
    }

    for (var i = 0; i < arr.length; i++) {
        fn(arr[i], i)
    }
}

function duplex(writer, reader) {
    var stream = new Stream()
    var ended = false

    forEach(writeMethods, proxyWriter)

    forEach(readMethods, proxyReader)

    forEach(readEvents, proxyStream)

    reader.on(\"end\", handleEnd)

    writer.on(\"drain\", function() {
      stream.emit(\"drain\")
    })

    writer.on(\"error\", reemit)
    reader.on(\"error\", reemit)

    stream.writable = writer.writable
    stream.readable = reader.readable

    return stream

    function proxyWriter(methodName) {
        stream[methodName] = method

        function method() {
            return writer[methodName].apply(writer, arguments)
        }
    }

    function proxyReader(methodName) {
        stream[methodName] = method

        function method() {
            stream.emit(methodName)
            var func = reader[methodName]
            if (func) {
                return func.apply(reader, arguments)
            }
            reader.emit(methodName)
        }
    }

    function proxyStream(methodName) {
        reader.on(methodName, reemit)

        function reemit() {
            var args = slice.call(arguments)
            args.unshift(methodName)
            stream.emit.apply(stream, args)
        }
    }

    function handleEnd() {
        if (ended) {
            return
        }
        ended = true
        var args = slice.call(arguments)
        args.unshift(\"end\")
        stream.emit.apply(stream, args)
    }

    function reemit(err) {
        stream.emit(\"error\", err)
    }
}
";
        
        $__internal_cf5dcbe62ad8e0771b4788a33a98b5b6bf23df2e683bd370b7a1b714a03f4dfe->leave($__internal_cf5dcbe62ad8e0771b4788a33a98b5b6bf23df2e683bd370b7a1b714a03f4dfe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/duplexer/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Stream = require(\"stream\")
var writeMethods = [\"write\", \"end\", \"destroy\"]
var readMethods = [\"resume\", \"pause\"]
var readEvents = [\"data\", \"close\"]
var slice = Array.prototype.slice

module.exports = duplex

function forEach (arr, fn) {
    if (arr.forEach) {
        return arr.forEach(fn)
    }

    for (var i = 0; i < arr.length; i++) {
        fn(arr[i], i)
    }
}

function duplex(writer, reader) {
    var stream = new Stream()
    var ended = false

    forEach(writeMethods, proxyWriter)

    forEach(readMethods, proxyReader)

    forEach(readEvents, proxyStream)

    reader.on(\"end\", handleEnd)

    writer.on(\"drain\", function() {
      stream.emit(\"drain\")
    })

    writer.on(\"error\", reemit)
    reader.on(\"error\", reemit)

    stream.writable = writer.writable
    stream.readable = reader.readable

    return stream

    function proxyWriter(methodName) {
        stream[methodName] = method

        function method() {
            return writer[methodName].apply(writer, arguments)
        }
    }

    function proxyReader(methodName) {
        stream[methodName] = method

        function method() {
            stream.emit(methodName)
            var func = reader[methodName]
            if (func) {
                return func.apply(reader, arguments)
            }
            reader.emit(methodName)
        }
    }

    function proxyStream(methodName) {
        reader.on(methodName, reemit)

        function reemit() {
            var args = slice.call(arguments)
            args.unshift(methodName)
            stream.emit.apply(stream, args)
        }
    }

    function handleEnd() {
        if (ended) {
            return
        }
        ended = true
        var args = slice.call(arguments)
        args.unshift(\"end\")
        stream.emit.apply(stream, args)
    }

    function reemit(err) {
        stream.emit(\"error\", err)
    }
}
", "node_modules/duplexer/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/duplexer/index.js");
    }
}
