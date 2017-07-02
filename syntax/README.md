yUML.me Plugin for DokuWiki
=============

Creating class diagram, use case diagram or activity diagram in your page with following syntax in the marker yUML.

The new version is by Pavel Laupe Dvořák <pavel@laupe.me> (https://github.com/Laupe/dokuwiki-plugin-yuml).

The new version includes a correction of the docuwiki syntax and the simplification of the full plugin code.

Plugin is fork from by StevenGhyselbrecht (https://github.com/StevenGhyselbrecht/dokuwiki-plugin-yuml).
Thanks for the original version that you probably did not have time to develop further.

All documentation for this plugin can be found at https://github.com/Laupe/dokuwiki-plugin-yuml

If you install this plugin manually, make sure it is installed in lib/plugins/yuml/
if the folder is called different it will not work!

Please refer to http://www.dokuwiki.org/plugins for additional info on how to install plugins in DokuWiki.

This is my first Dokuwiki-plugin. Feedback is appreciated.

As per the original, this plugin currently only supports use case, class diagrams and activity diagrams.

Examples
------------

usecase
------------

Examples of syntaxes can be found at
https://yuml.me/diagram/scruffy/usecase/draw
https://yuml.me/diagram/scruffy/usecase/samples

```
<usecase [plain|nofunky|scruffy[;]][dir:[td|lr][;]][scale:75]>
	Use case diagram code here!
</usecase>
```


classdiagram
------------

Examples of syntaxes can be found at
https://yuml.me/diagram/scruffy/class/draw
https://yuml.me/diagram/scruffy/class/samples

```
<classdiagram [plain|nofunky|scruffy[;]][dir:[td|lr][;]][scale:75]>
	Class diagram code here!
</classdiagram>
```


activitydiagram
------------

Examples of syntaxes can be found at
https://yuml.me/diagram/scruffy/activity/draw
https://yuml.me/diagram/scruffy/activity/samples

```
<activitydiagram [plain|nofunky|scruffy[;]][dir:[td|lr][;]][scale:75]>
	Activity diagram code here!
</activitydiagram>
```

Copyright
----
Copyright (C) Pavel Laupe Dvořák <pavel@laupe.me>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; version 2 of the License

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

See the COPYING file in your DokuWiki folder for details