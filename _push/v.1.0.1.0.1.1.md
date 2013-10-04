<MTMarkdownOptions output='raw'>


| id | value | update_time | create_time |
| ------------- |:-------------: |:-------------: |:-------------: |
| title | Yazılım Dili|  | |
| isChild | true | | |
| standart | PSR-0 | | |
| version | v.1.3b | | |

[Kardeş Yazilim ve Danışmanlık Hizmetleri][domain]

#systems requirements
| id | config | title | description | version | type | update_time | create_time |
| ------------- | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: |
| 1 | _srv | Apache |Server version: Apache/2.2.24 (Unix) Server built:   Jul  7 2013 18:05:17 | 2.2.24 | service | | |
| 2 | _lag | PHP | PHP 5.5.4 (cli) (built: Oct  1 2013 08:26:14) Copyright (c) 1997-2013 The PHP Group Zend Engine v2.5.0, Copyright (c) 1998-2013 Zend Technologieswith Xdebug v2.2.2, Copyright (c) 2002-2013, by Derick Rethan| 5.5.4 | language |  | |
| 3 | _sql | MYSQL | Welcome to the MySQL monitor.  Commands end with ; or \g. Your MySQL connection id is 1 Server version: 5.6.14 MySQL Community Server (GPL) | 5.6.14 | service | | |

#document root (_www)
| id | type | ext | name |title | description | parent_id | user | group | permission |
| ------------- | :-------------: |:-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | 
| 1 | dir | _www | NULL| Apps Root (_www) | Aplication Default Folder | 0 | _www | _www | 755 |

#file tree

>     _www [title] [description] [permission] [user] [group] 
>> **apps** [title] [description] [permission] [user] [group]
>>> **_core** [title] [description] [permission] [user] [group]
>>>> **`{#MODULEFOLDER#}`** [title] [description] [permission] [user] [group]
>>>>> _`{#MODULEFILE#}`_ [title] [description] [permission] [user] [group]

>>> **_etc** [title] [description] [permission] [user] [group]
>>>> **locale** [title] [description] [permission] [user] [group]
>>>>> **`{#MODULEFOLDER#}`** [title] [description] [permission] [user] [group]
>>>>>> _`{#MODULEFILE#}`_ [title] [description] [permission] [user] [group]

>>>>> _`{#CORECONFIGFILE#}`_ [title] [description] [permission] [user] [group]

>>>>> _`{#BOOTLOADERFILE#}`_ [title] [description] [permission] [user] [group]

>>>>> _`{#DBCONFIGFILE#}`_ [title] [description] [permission] [user] [group]

>>>>> **lang** [title] [description] [permission] [user] [group]

>>>>>> **`{#LANGFOLDER#}`** [title] [description] [permission] [user] [group]
 
>>>>>>> _`{#LANGFILE#}`_ [title] [description] [permission] [user] [group]

>>> **_urs** [title] [description] [permission] [user] [group]
>>>> **admin**
>>>>> **default**
>>>>>> **`{#EXTENDMODULEFOLDER#}`**
>>>>>>> _`{#EXTENDMODULEFILE#}`_ 

>>>>> **markado**
>>>>>> **`{#EXTENDMODULEFOLDER#}`**
>>>>>>> _`{#EXTENDMODULEFILE#}`_ 


>>>> **frontend**
>>>>> **default**
>>>>>> **`{#EXTENDMODULEFOLDER#}`**
>>>>>>> _`{#EXTENDMODULEFILE#}`_ 

>>>>> **markado**
>>>>>> **`{#EXTENDMODULEFOLDER#}`**
>>>>>>> _`{#EXTENDMODULEFILE#}`_ 

>>>> **mobil**
>>>>> **default**
>>>>>> **`{#EXTENDMODULEFOLDER#}`**
>>>>>>> _`{#EXTENDMODULEFILE#}`_ 

>>>>> **markado**
>>>>>> **`{#EXTENDMODULEFOLDER#}`**
>>>>>>> _`{#EXTENDMODULEFILE#}`_ 

>>>> **ext**
>>>>> **default**
>>>>>> **`{#EXTENDMODULEFOLDER#}`**
>>>>>>> _`{#EXTENDMODULEFILE#}`_ 

>>>>> **markado**
>>>>>> **`{#EXTENDMODULEFOLDER#}`**
>>>>>>> _`{#EXTENDMODULEFILE#}`_ 

>>**skins**
>>>**admin**
>>>> **default**
>>>>> **`{#CSSFOLDER#}`**
>>>>>> _`{#CSSFILE#}`_

>>>>> **`{#JSFOLDER#}`**
>>>>>> _`{#JSFILE#}`_
 
>>>>> **`{#IMGFOLDER#}`**
>>>>>> _`{#IMGFILE#}`_

>>>> **markado**
>>>>> **`{#CSSFOLDER#}`**
>>>>>> _`{#CSSFILE#}`_

>>>>> **`{#JSFOLDER#}`**
>>>>>> _`{#JSFILE#}`_
 
>>>>> **`{#IMGFOLDER#}`**
>>>>>> _`{#IMGFILE#}`_

>>>**frontend**
>>>> **default**
>>>>> **`{#CSSFOLDER#}`**
>>>>>> _`{#CSSFILE#}`_

>>>>> **`{#JSFOLDER#}`**
>>>>>> _`{#JSFILE#}`_
 
>>>>> **`{#IMGFOLDER#}`**
>>>>>> _`{#IMGFILE#}`_

>>>> **markado**
>>>>> **`{#CSSFOLDER#}`**
>>>>>> _`{#CSSFILE#}`_

>>>>> **`{#JSFOLDER#}`**
>>>>>> _`{#JSFILE#}`_
 
>>>>> **`{#IMGFOLDER#}`**
>>>>>> _`{#IMGFILE#}`_


>>>**mobil**
>>>> **default**
>>>>> **`{#CSSFOLDER#}`**
>>>>>> _`{#CSSFILE#}`_

>>>>> **`{#JSFOLDER#}`**
>>>>>> _`{#JSFILE#}`_
 
>>>>> **`{#IMGFOLDER#}`**
>>>>>> _`{#IMGFILE#}`_

>>>> **markado**
>>>>> **`{#CSSFOLDER#}`**
>>>>>> _`{#CSSFILE#}`_

>>>>> **`{#JSFOLDER#}`**
>>>>>> _`{#JSFILE#}`_
 
>>>>> **`{#IMGFOLDER#}`**
>>>>>> _`{#IMGFILE#}`_


>>>**ext**
>>>> **default**
>>>>> **`{#CSSFOLDER#}`**
>>>>>> _`{#CSSFILE#}`_

>>>>> **`{#JSFOLDER#}`**
>>>>>> _`{#JSFILE#}`_
 
>>>>> **`{#IMGFOLDER#}`**
>>>>>> _`{#IMGFILE#}`_

>>>> **markado**
>>>>> **`{#CSSFOLDER#}`**
>>>>>> _`{#CSSFILE#}`_

>>>>> **`{#JSFOLDER#}`**
>>>>>> _`{#JSFILE#}`_
 
>>>>> **`{#IMGFOLDER#}`**
>>>>>> _`{#IMGFILE#}`_


>>**var**
>>>**logs**
>>>>**apache**

>>>>> _`error_log`_

>>>>> _`acess_log`_

>>>>**mysql**

>>>>> _`error_log`_

>>>>> _`acess_log`_


>>>>**systems**

>>>>> _`error_log`_

>>>>> _`acess_log`_


>>>>**user**

>>>>> _`error_log`_

>>>>> _`acess_log`_

>>>>**api**

>>>>> _`error_log`_

>>>>> _`acess_log`_

>>**backup**
>>>_`[date][type][full].tar.gz`_

>>**database**
>>> **carina_master**
>>>> _`carina_master.lock`_

>>>> _`carina_master.logs`_

>>> **markado_2013**
>>>> _`markado_2013.lock`_

>>>> _`markado_2013.logs`_

>>**cache**
>>>**{#MERGEFOLDER#}**

>>>> _`{#MERGEFILE#}`_


>>**session**
>>>_`{#MERGEFILE#}`_





>>_`index.php`_

>>_`.htaccess`_

>>_`.private_key`_

>>_`version.json`_

>>_`cron.php`_

>>_`cron.sh`_

>>_`favicon.ico`_

>>_`apple[57].png`_

>>_`apple[72].png`_

>>_`apple[114].png`_

>>_`apple[144].png`_

| id | type | name | ext | title | description | parent_id | user | group | permission |
| ------------- | :------------- |:------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | 
| 2 | dir | app | NULL | Core Folder | Aplication APPS Folder | 1 | _www | _www | 755 |
| 3 | dir | _core | NULL | Core Folder | Aplication Core Folder | 2 | _www | _www | 755 |
| 4 | dir | {#DIR#} | NULL | {#FOLDER#} | Aplication Core {#MODULEFOLDER#} Folder | 3 | _www | _www | 755 |
| 5 | file | {#FILE#} | .inc | {#FILE#} | {#MODULEFILE#} | 3 | _www | _www | 644 |

[domain]: (http://kardesyazilim.net "Kardeş Yazlım Danışmanlık Hizmetleri")
</MTMarkdownOptions>