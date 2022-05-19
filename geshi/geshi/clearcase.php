<?php
	/*************************************************************************************
 * bash.php
 * --------
 * Author: Andreas Gohr (andi@splitbrain.org)
 * Copyright: (c) 2004 Andreas Gohr, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/08/20
 *
 * clearcase language file for GeSHi.
 *
 * CHANGES
 * -------
 
 * 2014/12/23 (1.0.0)
 *   -  First Release
 *
 * TODO 
 * ----------
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Clearcase',
    
    'COMMENT_SINGLE' => array('#'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        //Variables
        1 => "/\\$\\{[^\\n\\}]*?\\}/i",
        //BASH-style Heredoc
        2 => '/<<-?\s*?(\'?)([a-zA-Z0-9]+)\1\\n.*\\n\\2(?![a-zA-Z0-9])/siU',
        //Escaped String Starters
        3 => "/\\\\['\"]/siU",
        // Single-Line Shell usage: Hide the prompt at the beginning
        /* 4 => "/\A(?!#!)\s*(?>[\w:@\\/\\-\\._~]*[$#]\s?)?(?=[^\n]+\n?\Z)|^(?!#!)(\w+@)?[\w\\-\\.]+(:~?)[\w\\/\\-\\._]*?[$#]\s?/ms" */
        4 => "/\A(?!#!)(?:(?>[\w:@\\/\\-\\._~]*)[$#]\s?)(?=(?>[^\n]+)\n?\Z)|^(?!#!)(?:\w+@)?(?>[\w\\-\\.]+)(?>:~?[\w\\/\\-\\._]*?)?[$#]\s?/sm"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array("\'"),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[nfrtv\\$\\\"\n]#i",
        // $var
        2 => "#\\$[a-z_][a-z0-9_]*#i",
        // ${...}
        3 => "/\\$\\{[^\\n\\}]*?\\}/i",
        // $(...)
        4 => "/\\$\\([^\\n\\)]*?\\)/i",
        // `...`
        5 => "/`[^`]*`/"
        ),
    'KEYWORDS' => array(
        1 => array(
            'cleartool', 'ct'
            ),
        2 => array(
            'chtype', 'rmname', 'rmelem', 'find', 'rmbranch', 'rmtype',
			'mklbtype', 'mklabel' , 'mkbrtype',
			'rename', 'rmlabel','lsvob',
			'lsview', 'setview','lsvob', 'pwv', 'checkout', 'checkin', 'co', 'ci', 'lsco'
            ),
        3 => array(
            'alias', 'bg', 'bind', 'break', 'builtin', 'cd', 'command',
            'compgen', 'complete', 'continue', 'declare', 'dirs', 'disown',
            'echo', 'enable', 'eval', 'exec', 'exit', 'export', 'fc',
            'fg', 'getopts', 'hash', 'help', 'history', 'jobs', 'let',
            'local', 'logout', 'popd', 'printf', 'pushd', 'pwd', 'readonly',
            'return', 'shift', 'shopt', 'source', 'suspend', 'test', 'times',
            'trap', 'type', 'typeset', 'ulimit', 'umask', 'unalias', 'unset',
            'wait'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '!', '@', '%', '&', '*', '|', '/', '<', '>', ';;', '`'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #c20cb9; font-weight: bold;',
            3 => 'color: #7a0874; font-weight: bold;'
            ),
        'COMMENTS' => array(
            0 => 'color: #666666; font-style: italic;',
            1 => 'color: #800000;',
            2 => 'color: #cc0000; font-style: italic;',
            3 => 'color: #000000; font-weight: bold;',
            4 => 'color: #666666;'
            ),
        'ESCAPE_CHAR' => array(
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #007800;',
            3 => 'color: #007800;',
            4 => 'color: #007800;',
            5 => 'color: #780078;',
            'HARD' => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #7a0874; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;',
            'HARD' => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000; font-weight: bold;'
            ),
        'REGEXPS' => array(
            0 => 'color: #007800;',
            1 => 'color: #007800;',
            2 => 'color: #007800;',
            4 => 'color: #007800;',
            5 => 'color: #660033;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //Variables (will be handled by comment_regexps)
        0 => "\\$\\{[a-zA-Z_][a-zA-Z0-9_]*?\\}",
        //Variables without braces
        1 => "\\$[a-zA-Z_][a-zA-Z0-9_]*",
        //Variable assignment
        2 => "(?<![\.a-zA-Z_\-])([a-zA-Z_][a-zA-Z0-9_]*?)(?==)",
        //Shorthand shell variables
        4 => "\\$[*#\$\\-\\?!\d]",
        //Parameters of commands
        5 => "(?<=\s)--?[0-9a-zA-Z\-]+(?=[\s=]|<(?:SEMI|PIPE)>|$)"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'COMMENTS' => array(
            'DISALLOWED_BEFORE' => '$'
        ),
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![\.\-a-zA-Z0-9_\$\#:])",
            'DISALLOWED_AFTER' =>  "(?![\.\-a-zA-Z0-9_%=\\/:])",
            2 => array(
                'SPACE_AS_WHITESPACE' => false
                )
            )
        )
);

?>