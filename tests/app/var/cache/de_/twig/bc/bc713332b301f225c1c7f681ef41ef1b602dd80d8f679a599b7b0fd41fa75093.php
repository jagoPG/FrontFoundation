<?php

/* node_modules/stream-http/lib/capability.js */
class __TwigTemplate_6309d91816a4bd28a8654252fee5899f307e8af947dadc48222e579a4317bd2a extends Twig_Template
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
        $__internal_6499b115f4beea869cb621647c3e61da3b80e76f461d77865d5e051d627f8ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6499b115f4beea869cb621647c3e61da3b80e76f461d77865d5e051d627f8ca3->enter($__internal_6499b115f4beea869cb621647c3e61da3b80e76f461d77865d5e051d627f8ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/lib/capability.js"));

        // line 1
        echo "exports.fetch = isFunction(global.fetch) && isFunction(global.ReadableStream)

exports.blobConstructor = false
try {
\tnew Blob([new ArrayBuffer(1)])
\texports.blobConstructor = true
} catch (e) {}

// The xhr request to example.com may violate some restrictive CSP configurations,
// so if we're running in a browser that supports `fetch`, avoid calling getXHR()
// and assume support for certain features below.
var xhr
function getXHR () {
\t// Cache the xhr value
\tif (xhr !== undefined) return xhr

\tif (global.XMLHttpRequest) {
\t\txhr = new global.XMLHttpRequest()
\t\t// If XDomainRequest is available (ie only, where xhr might not work
\t\t// cross domain), use the page location. Otherwise use example.com
\t\t// Note: this doesn't actually make an http request.
\t\ttry {
\t\t\txhr.open('GET', global.XDomainRequest ? '/' : 'https://example.com')
\t\t} catch(e) {
\t\t\txhr = null
\t\t}
\t} else {
\t\t// Service workers don't have XHR
\t\txhr = null
\t}
\treturn xhr
}

function checkTypeSupport (type) {
\tvar xhr = getXHR()
\tif (!xhr) return false
\ttry {
\t\txhr.responseType = type
\t\treturn xhr.responseType === type
\t} catch (e) {}
\treturn false
}

// For some strange reason, Safari 7.0 reports typeof global.ArrayBuffer === 'object'.
// Safari 7.1 appears to have fixed this bug.
var haveArrayBuffer = typeof global.ArrayBuffer !== 'undefined'
var haveSlice = haveArrayBuffer && isFunction(global.ArrayBuffer.prototype.slice)

// If fetch is supported, then arraybuffer will be supported too. Skip calling
// checkTypeSupport(), since that calls getXHR().
exports.arraybuffer = exports.fetch || (haveArrayBuffer && checkTypeSupport('arraybuffer'))

// These next two tests unavoidably show warnings in Chrome. Since fetch will always
// be used if it's available, just return false for these to avoid the warnings.
exports.msstream = !exports.fetch && haveSlice && checkTypeSupport('ms-stream')
exports.mozchunkedarraybuffer = !exports.fetch && haveArrayBuffer &&
\tcheckTypeSupport('moz-chunked-arraybuffer')

// If fetch is supported, then overrideMimeType will be supported too. Skip calling
// getXHR().
exports.overrideMimeType = exports.fetch || (getXHR() ? isFunction(getXHR().overrideMimeType) : false)

exports.vbArray = isFunction(global.VBArray)

function isFunction (value) {
\treturn typeof value === 'function'
}

xhr = null // Help gc
";
        
        $__internal_6499b115f4beea869cb621647c3e61da3b80e76f461d77865d5e051d627f8ca3->leave($__internal_6499b115f4beea869cb621647c3e61da3b80e76f461d77865d5e051d627f8ca3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/lib/capability.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.fetch = isFunction(global.fetch) && isFunction(global.ReadableStream)

exports.blobConstructor = false
try {
\tnew Blob([new ArrayBuffer(1)])
\texports.blobConstructor = true
} catch (e) {}

// The xhr request to example.com may violate some restrictive CSP configurations,
// so if we're running in a browser that supports `fetch`, avoid calling getXHR()
// and assume support for certain features below.
var xhr
function getXHR () {
\t// Cache the xhr value
\tif (xhr !== undefined) return xhr

\tif (global.XMLHttpRequest) {
\t\txhr = new global.XMLHttpRequest()
\t\t// If XDomainRequest is available (ie only, where xhr might not work
\t\t// cross domain), use the page location. Otherwise use example.com
\t\t// Note: this doesn't actually make an http request.
\t\ttry {
\t\t\txhr.open('GET', global.XDomainRequest ? '/' : 'https://example.com')
\t\t} catch(e) {
\t\t\txhr = null
\t\t}
\t} else {
\t\t// Service workers don't have XHR
\t\txhr = null
\t}
\treturn xhr
}

function checkTypeSupport (type) {
\tvar xhr = getXHR()
\tif (!xhr) return false
\ttry {
\t\txhr.responseType = type
\t\treturn xhr.responseType === type
\t} catch (e) {}
\treturn false
}

// For some strange reason, Safari 7.0 reports typeof global.ArrayBuffer === 'object'.
// Safari 7.1 appears to have fixed this bug.
var haveArrayBuffer = typeof global.ArrayBuffer !== 'undefined'
var haveSlice = haveArrayBuffer && isFunction(global.ArrayBuffer.prototype.slice)

// If fetch is supported, then arraybuffer will be supported too. Skip calling
// checkTypeSupport(), since that calls getXHR().
exports.arraybuffer = exports.fetch || (haveArrayBuffer && checkTypeSupport('arraybuffer'))

// These next two tests unavoidably show warnings in Chrome. Since fetch will always
// be used if it's available, just return false for these to avoid the warnings.
exports.msstream = !exports.fetch && haveSlice && checkTypeSupport('ms-stream')
exports.mozchunkedarraybuffer = !exports.fetch && haveArrayBuffer &&
\tcheckTypeSupport('moz-chunked-arraybuffer')

// If fetch is supported, then overrideMimeType will be supported too. Skip calling
// getXHR().
exports.overrideMimeType = exports.fetch || (getXHR() ? isFunction(getXHR().overrideMimeType) : false)

exports.vbArray = isFunction(global.VBArray)

function isFunction (value) {
\treturn typeof value === 'function'
}

xhr = null // Help gc
", "node_modules/stream-http/lib/capability.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/lib/capability.js");
    }
}
