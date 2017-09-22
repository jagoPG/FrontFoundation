<?php

/* node_modules/fsevents/node_modules/jodid25519/lib/utils.js */
class __TwigTemplate_bd9942d56877c3c5d79331e51e2fde529ddc4fc71573e2a7e47005960c9b4898 extends Twig_Template
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
        $__internal_664cf285b50862b55d5b38ddf3dd2b8d6f3986158819534fc5dbdb18b413d162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664cf285b50862b55d5b38ddf3dd2b8d6f3986158819534fc5dbdb18b413d162->enter($__internal_664cf285b50862b55d5b38ddf3dd2b8d6f3986158819534fc5dbdb18b413d162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jodid25519/lib/utils.js"));

        // line 1
        echo "\"use strict\";
/**
 * @fileOverview
 * A collection of general utility functions..
 */

/*
 * Copyright (c) 2011, 2012, 2014 Ron Garret
 * Copyright (c) 2007, 2013, 2014 Michele Bini
 * Copyright (c) 2014 Mega Limited
 * under the MIT License.
 *
 * Authors: Guy K. Kloss, Michele Bini, Ron Garret
 *
 * You should have received a copy of the license along with this program.
 */

var core = require('./core');

    /**
     * @exports jodid25519/utils
     * A collection of general utility functions..
     *
     * @description
     * A collection of general utility functions..
     */
    var ns = {};

    var _HEXCHARS = \"0123456789abcdef\";

    function _hexencode(vector) {
        var result = [];
        for (var i = vector.length - 1; i >= 0; i--) {
            var value = vector[i];
            result.push(_HEXCHARS.substr((value >>> 12) & 0x0f, 1));
            result.push(_HEXCHARS.substr((value >>> 8) & 0x0f, 1));
            result.push(_HEXCHARS.substr((value >>> 4) & 0x0f, 1));
            result.push(_HEXCHARS.substr(value & 0x0f, 1));
        }
        return result.join('');
    }

    function _hexdecode(vector) {
        var result = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        for (var i = vector.length - 1, l = 0; i >= 0; i -= 4) {
            result[l] = (_HEXCHARS.indexOf(vector.charAt(i)))
                      | (_HEXCHARS.indexOf(vector.charAt(i - 1)) << 4)
                      | (_HEXCHARS.indexOf(vector.charAt(i - 2)) << 8)
                      | (_HEXCHARS.indexOf(vector.charAt(i - 3)) << 12);
            l++;
        }
        return result;
    }

    var _BASE32CHARS = \"abcdefghijklmnopqrstuvwxyz234567\";

    var _BASE32VALUES = (function () {
        var result = {};
        for (var i = 0; i < _BASE32CHARS.length; i++) {
            result[_BASE32CHARS.charAt(i)] = i;
        }
        return result;
    })();

    function _base32encode(n) {
        var c;
        var r = \"\";
        for (c = 0; c < 255; c += 5) {
            r = _BASE32CHARS.substr(core.getbit(n, c)
                                    + (core.getbit(n, c + 1) << 1)
                                    + (core.getbit(n, c + 2) << 2)
                                    + (core.getbit(n, c + 3) << 3)
                                    + (core.getbit(n, c + 4) << 4), 1)
                                    + r;
        }
        return r;
    }

    function _base32decode(n) {
        var c = 0;
        var r = core.ZERO();
        var l = n.length;
        for (c = 0; (l > 0) && (c < 255); c += 5) {
            l--;
            var v = _BASE32VALUES[n.substr(l, 1)];
            core.setbit(r, c, v & 1);
            v >>= 1;
            core.setbit(r, c + 1, v & 1);
            v >>= 1;
            core.setbit(r, c + 2, v & 1);
            v >>= 1;
            core.setbit(r, c + 3, v & 1);
            v >>= 1;
            core.setbit(r, c + 4, v & 1);
           }
        return r;
    }

    function _map(f, l) {
        var result = new Array(l.length);
        for (var i = 0; i < l.length; i++) {
            result[i] = f(l[i]);
        }
        return result;
    }

    function _chr(n) {
        return String.fromCharCode(n);
    }

    function _ord(c) {
        return c.charCodeAt(0);
    }

    function _bytes2string(bytes) {
        return _map(_chr, bytes).join('');
    }

    function _string2bytes(s) {
        return _map(_ord, s);
    }


    // Expose some functions to the outside through this name space.

    /**
     * Encodes an array of unsigned 8-bit integers to a hex string.
     *
     * @function
     * @param vector {array}
     *     Array containing the byte values.
     * @returns {string}
     *     String containing vector in a hexadecimal representation.
     */
    ns.hexEncode = _hexencode;


    /**
     * Decodes a hex string to an array of unsigned 8-bit integers.
     *
     * @function
     * @param vector {string}
     *     String containing vector in a hexadecimal representation.
     * @returns {array}
     *     Array containing the byte values.
     */
    ns.hexDecode = _hexdecode;


    /**
     * Encodes an array of unsigned 8-bit integers using base32 encoding.
     *
     * @function
     * @param vector {array}
     *     Array containing the byte values.
     * @returns {string}
     *     String containing vector in a hexadecimal representation.
     */
    ns.base32encode = _base32encode;


    /**
     * Decodes a base32 encoded string to an array of unsigned 8-bit integers.
     *
     * @function
     * @param vector {string}
     *     String containing vector in a hexadecimal representation.
     * @returns {array}
     *     Array containing the byte values.
     */
    ns.base32decode = _base32decode;


    /**
     * Converts an unsigned 8-bit integer array representation to a byte string.
     *
     * @function
     * @param vector {array}
     *     Array containing the byte values.
     * @returns {string}
     *     Byte string representation of vector.
     */
    ns.bytes2string = _bytes2string;


    /**
     * Converts a byte string representation to an array of unsigned
     * 8-bit integers.
     *
     * @function
     * @param vector {array}
     *     Array containing the byte values.
     * @returns {string}
     *     Byte string representation of vector.
     */
    ns.string2bytes = _string2bytes;

module.exports = ns;
";
        
        $__internal_664cf285b50862b55d5b38ddf3dd2b8d6f3986158819534fc5dbdb18b413d162->leave($__internal_664cf285b50862b55d5b38ddf3dd2b8d6f3986158819534fc5dbdb18b413d162_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jodid25519/lib/utils.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";
/**
 * @fileOverview
 * A collection of general utility functions..
 */

/*
 * Copyright (c) 2011, 2012, 2014 Ron Garret
 * Copyright (c) 2007, 2013, 2014 Michele Bini
 * Copyright (c) 2014 Mega Limited
 * under the MIT License.
 *
 * Authors: Guy K. Kloss, Michele Bini, Ron Garret
 *
 * You should have received a copy of the license along with this program.
 */

var core = require('./core');

    /**
     * @exports jodid25519/utils
     * A collection of general utility functions..
     *
     * @description
     * A collection of general utility functions..
     */
    var ns = {};

    var _HEXCHARS = \"0123456789abcdef\";

    function _hexencode(vector) {
        var result = [];
        for (var i = vector.length - 1; i >= 0; i--) {
            var value = vector[i];
            result.push(_HEXCHARS.substr((value >>> 12) & 0x0f, 1));
            result.push(_HEXCHARS.substr((value >>> 8) & 0x0f, 1));
            result.push(_HEXCHARS.substr((value >>> 4) & 0x0f, 1));
            result.push(_HEXCHARS.substr(value & 0x0f, 1));
        }
        return result.join('');
    }

    function _hexdecode(vector) {
        var result = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        for (var i = vector.length - 1, l = 0; i >= 0; i -= 4) {
            result[l] = (_HEXCHARS.indexOf(vector.charAt(i)))
                      | (_HEXCHARS.indexOf(vector.charAt(i - 1)) << 4)
                      | (_HEXCHARS.indexOf(vector.charAt(i - 2)) << 8)
                      | (_HEXCHARS.indexOf(vector.charAt(i - 3)) << 12);
            l++;
        }
        return result;
    }

    var _BASE32CHARS = \"abcdefghijklmnopqrstuvwxyz234567\";

    var _BASE32VALUES = (function () {
        var result = {};
        for (var i = 0; i < _BASE32CHARS.length; i++) {
            result[_BASE32CHARS.charAt(i)] = i;
        }
        return result;
    })();

    function _base32encode(n) {
        var c;
        var r = \"\";
        for (c = 0; c < 255; c += 5) {
            r = _BASE32CHARS.substr(core.getbit(n, c)
                                    + (core.getbit(n, c + 1) << 1)
                                    + (core.getbit(n, c + 2) << 2)
                                    + (core.getbit(n, c + 3) << 3)
                                    + (core.getbit(n, c + 4) << 4), 1)
                                    + r;
        }
        return r;
    }

    function _base32decode(n) {
        var c = 0;
        var r = core.ZERO();
        var l = n.length;
        for (c = 0; (l > 0) && (c < 255); c += 5) {
            l--;
            var v = _BASE32VALUES[n.substr(l, 1)];
            core.setbit(r, c, v & 1);
            v >>= 1;
            core.setbit(r, c + 1, v & 1);
            v >>= 1;
            core.setbit(r, c + 2, v & 1);
            v >>= 1;
            core.setbit(r, c + 3, v & 1);
            v >>= 1;
            core.setbit(r, c + 4, v & 1);
           }
        return r;
    }

    function _map(f, l) {
        var result = new Array(l.length);
        for (var i = 0; i < l.length; i++) {
            result[i] = f(l[i]);
        }
        return result;
    }

    function _chr(n) {
        return String.fromCharCode(n);
    }

    function _ord(c) {
        return c.charCodeAt(0);
    }

    function _bytes2string(bytes) {
        return _map(_chr, bytes).join('');
    }

    function _string2bytes(s) {
        return _map(_ord, s);
    }


    // Expose some functions to the outside through this name space.

    /**
     * Encodes an array of unsigned 8-bit integers to a hex string.
     *
     * @function
     * @param vector {array}
     *     Array containing the byte values.
     * @returns {string}
     *     String containing vector in a hexadecimal representation.
     */
    ns.hexEncode = _hexencode;


    /**
     * Decodes a hex string to an array of unsigned 8-bit integers.
     *
     * @function
     * @param vector {string}
     *     String containing vector in a hexadecimal representation.
     * @returns {array}
     *     Array containing the byte values.
     */
    ns.hexDecode = _hexdecode;


    /**
     * Encodes an array of unsigned 8-bit integers using base32 encoding.
     *
     * @function
     * @param vector {array}
     *     Array containing the byte values.
     * @returns {string}
     *     String containing vector in a hexadecimal representation.
     */
    ns.base32encode = _base32encode;


    /**
     * Decodes a base32 encoded string to an array of unsigned 8-bit integers.
     *
     * @function
     * @param vector {string}
     *     String containing vector in a hexadecimal representation.
     * @returns {array}
     *     Array containing the byte values.
     */
    ns.base32decode = _base32decode;


    /**
     * Converts an unsigned 8-bit integer array representation to a byte string.
     *
     * @function
     * @param vector {array}
     *     Array containing the byte values.
     * @returns {string}
     *     Byte string representation of vector.
     */
    ns.bytes2string = _bytes2string;


    /**
     * Converts a byte string representation to an array of unsigned
     * 8-bit integers.
     *
     * @function
     * @param vector {array}
     *     Array containing the byte values.
     * @returns {string}
     *     Byte string representation of vector.
     */
    ns.string2bytes = _string2bytes;

module.exports = ns;
", "node_modules/fsevents/node_modules/jodid25519/lib/utils.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jodid25519/lib/utils.js");
    }
}
