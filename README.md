leafy_php_fiber
===============

yum php 
    username: 'dummy', // replaced with dummy 
    password: 'user',   // password //user 

    http://localhost/~stanzheng/code/nbt/leaf_php_fiber/proxy_lk.php?url=http://nefms.nbtsolutions.net/api/?service=wms&request=GetMap
&version= 1.1.1
&layers=l_burlington_telecom
&SRS=EPSG:4326
&bbox=-125,24,-67,50
&width=400 
&height=300
&user=nefportal&pwd=olfk$90

---
The real request

http://nefms.nbtsolutions.net/api/?SPHERICALMERCATOR=true&LAYERS=lh_centurylink&TRANSPARENT=TRUE&FORMAT=image%2Fpng&SERVICE=WMS&VERSION=1.1.1&REQUEST=GetMap&STYLES=&SRS=EPSG%3A900913&BBOX=-18817124.993832,3536568.1049742,-3730290.1011178,6119528.1644274&WIDTH=1542&HEIGHT=264&user=nefportal&pwd=olfk$90