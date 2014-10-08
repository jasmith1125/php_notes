<?php

/* include external files */

/* four possible commands */

include
<?php include './includes/paragraph.html'; ?> /* when using html snippet, don't include the doctype, head, etc. in snippet */

include_once  /* used in conditional statements */

require /* if file can't be found, server just shows warning errors */

require_once // used in conditional statements

//use include for files that aren't critical

//use require_once for files that define custom functions

//use a document relative path when include

//links inside a server-side include should be relative to the site root