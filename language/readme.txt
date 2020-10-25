***************************
*Select your language HACK*
***************************
*  FOR XOOPS 1.0 RC3.04   *
*    By Adi Chiributa     *
*  webmaster@artistic.ro  *
*  translation: frankblack*
***************************

Über diesen Hack:
Mit diesem Hack können User die Sprache der Navigation auswählen. Dies gilt nicht
die Inhalte. Es kann eine Flaggenliste oder ein Dropdown-Menü angezeigt werden. Die
Sprachauswahl für die aktuelle Website wird in einem Cookie gespeichert.

Als erstes die Datei common.php im Ordner gegen die mitgelieferte common.php
austauschen (Backup der alten common.php wird empfohlen). Die Zeile 217 ist neu
eingefügt worden. Wenn Ihr ältere Versionen von Xoops benutzt, bitte den Code 
vergleichen oder wie unten in der englischen Anleitung beschrieben verfahren.

Das Modul ist wie gehabt zu installieren. Rechte vergeben wie gehabt. Die Anzeige-
methode wird über "Blöcke" konfiguriert.

Viel Vergnügen (für eventuelle Schäden wird nicht gehaftet)
frankblack



FIRST OF ALL, you are welcome to modify the files included as needed...

Here are some pictures: http://www.artistic.ro/xoops/h_select_language.htm

ABOUT XOOPS:
XOOPS is a dynamic OO (Object Oriented) based open source portal script written 
in PHP. XOOPS is the ideal tool for developing small to large dynamic community 
websites, intra company portals, corporate portals, weblogs and much more.

To find out more about XOOPS and what's coming, please read this document 
(http://www.xoops.org/docs/features.php) which outlines how XOOPS started and 
where it's headed.



ABOUT THIS HACK: 
This hack is intended to let the user select his own language on the fly. 
Although the XOOPS engine allows for selecting a default language, it doesn't 
allow for selecting the language "on the fly". This hack consists of a block 
which displays a list of flags, or a drop down combo (depending on the settings) 
with the current available languages. When a user selects a language, the 
information is stored in a cookie, for the current domain.

NOTE: The language changing is only for the interface! This means the 
information in the database (news/forums/etc..) will still be displayed in the 
language that the author used!

I think this should have been inside XOOPS for a long time now, but maybe the 
developers will have the kindness of including it in by "default" :-)



ABOUT THE INSTALL:
Copy the "Language" folder inside the zip file to your XOOPS modules directory.
Now edit XOOPS/include/common.php. 

RIGHT AFTER:
	include(XOOPS_ROOT_PATH."/modules/system/cache/config.php");

you must add the following lines:
	
	// ############ Include function for language selection ##############
	include(XOOPS_ROOT_PATH."/modules/language/common/functions.php");

Now make the "Select your language" block visible by all the users, and your 
site is now multi-language enabled.



CONFIGURATION:
Display mode may be either Flag List - the list of flags correspending to 
languages is displayed - or drop down list - the user select the language from a 
drop down.
Image separator is used for separating the flags (by default &nbsp;).
Images per row specifies the number of flags to be displayed on one row (5 by default).


Enjoy this hack and enjoy XOOPS.