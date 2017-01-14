<?php
/*
Comments are vital to clear self-expanatory code, parhaps particularly infree and open source development.

At our workshop on 10/01/2017 someone asked a question about comments in PHP. There are three different ways of marking text as a comment in PHP. All three will mean that this text is ignored by the PHP interpreter (usually mod_php). This is multi line C style comment with an opening tag on line 2 and a closing tag on line 4
*/

// This is a one-line C style comment
# This is a one line shell style comment.

// The two different forms of one-line comment do exactly the same job. They do not need a closing tag like line 4, because the comment ends at the next new-line CHARACTER. Note that this comment might WRAP onto a new line, but I have not pressed return, until now.

# Usually, it is good coding style to use either shell style comments or C style comments consistently in any one project. However, in these examples you may see both, just to remind you that both exist.

// For more info:
# http://php.net/manual/en/language.basic-syntax.comments.php

echo 'nothing to see here, its all in the comments';
?>
