1)create index.php , put html code, use gradient css and etc
more
create forms (justify-content-center);copy 1-st div class form group to create the new one
2)create operations.php - for function inputFields (give 4 parameters), create variable element and put the part of html code (with divs and etc); use back slash \ after and before"";
so use function to create repeatedly 
more
require_once operations.php into index.php above all in php code
3) in index.php comment divs like <!-- --> after form action
4) next php code to put operations (give 4 values)
5) print in operations php echo
6) put autocomplete into operations in values
7) in index repeat function 2 more times+change to mobile etc;the 3rd one - images
8) remove divs comments + create btn after function
9) create DB image_upload_project with 1 table registration with 4 columns
10) create connect.php tp connect with DB; create varaible $con with mysqli)connect (localhost, root,password if u have one, +DB name)
more
check the condition of/else echo connected/else die(mysqli_error variable con)
11) inside index change form action to display.php + method=post
more change in btn type button to submit
12) create display.php - copy html code till body
13) change condition in connect.php to !$con,delete else
14) include into display.php ./connect/php 
more write condition like if isset$ global variable posy with array submit
more write username amd mobile;image with global variable$_files with array file
more echo username/mobile with 
15) in index.php write in from action entype='multipart/form-data'
MORE 
16) to display image i have to PRINT_R $image in display.php
more create 1 variable for $image_file_name = $image with attribute name
more - print_r image_file_name
more - create image_file_error = $image with attribute error
print_r
17) write the extensions + create if conds with new variable where are images anf var image_file_name
18) create images folder in project folder
19) copy alert alert succes from bootstrap site and put it into displey in echo instead of echo data inserted
20) INSIDE DISPLAY.PHP body write user data as table (again from bootstrap)