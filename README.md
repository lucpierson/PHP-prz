Easy demonstration of OpenShift online
======================================
Export in HTML your presentation, 

in front of the customer, log into openShift and explain the catalog of service

Explain him that the Presentaiton you prepared is ready, as would be an application a developper want to test

the demonstration consist in a gear creation, upload the presentation files and launch the presentation online
	he will verify that the presentation is available by accessing it from his own machine....


Prereq :
--------
   you must have an account on OpenShift.com and know your credentials


STEPS : 
-------

    1)  open presentation with libreOffice and export it in HTML, first file as index.html (file > export > hmtl) in a temp dir (to be deleted at the end)
		should be done before the customer meeting


    2) launch and valid 
[![Click to Launch](http://launch-shifter.rhcloud.com/launch/LAUNCH ON.svg)]( https://openshift.redhat.com/app/console/application_type/custom?&cartridges%5B%5D=php-5.4&initial_git_url=https://github.com/lucpierson/PHP-prz.git&name=Presentation)


    3) on the created application, 
		- click "choose Files"  and select all the files created in the tmp dir 
		- click upload
		- click on "Launch uploaded presentation"



Notes
-----
The following functionality is covered:
    first steps and Readme

to come : update CSS to add icons 


