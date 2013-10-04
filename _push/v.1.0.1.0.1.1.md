<MTMarkdownOptions output='raw'>

> ![alt text][logo]  [Kardeş Yazılım Danışmanlık Hizmetleri][domain]


>> ##### [Title](http://docs.kardesyazilim.net/grpsku/SYS) : ~~systems requirements~~, ~~folder tree~~, ~~mime/type~~, ~~file permission~~, ~~.htaccess~~  and ~~print_f($q[])~~ .


>>>  ~~**v.1.0.1.0.1.1**~~  up [v.1.0.1.0.1.2](./v.1.0.1.0.1.2.md)


>>>> **_page_**: 1 -   **_pivot_** : [(0 - {#end_sum_privot#}) / 3] (mod10)  -  **_childID_** = [v.1.0.1.0.1](./v.1.0.1.0.1.md) - **_dept_tags_** : [labs](http://labs.kardesyazilim.net , "Labs Bro Bro Yaylalar Developer") - _**help_sku**_ : _~~SYS~~_








| id |department| value | help_group_id | parent_id | pivot | update_time | create_time |
| ------------- | :-------------: | ------------- | :-------------: | ------------- | :-------------: | :-------------: | :-------------: |
| 1 | ![alt text][logo] | laps1  | SYS | 0 | 0 |NULL| NULL |

| id | value | update_time | create_time |
| ------------- |:-------------: |:-------------: |:-------------: |
| title | Yazılım Dili| NULL | NULL |
| isChild | false | NULL | NULL |
| standart | PSR-0 | NULL | NULL |
| version | v.1.3b | NULL | NULL |








[Kardeş Yazilim ve Danışmanlık Hizmetleri][domain]



| id | version | long_version | group | title | help_id | department_id | update_time | create_time |
| ------------- |:-------------: |:-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | 
| 1 | v1.0b | ~~v.1.0.1.0.1.1~~ | systems | [title]| 0001 | 1 | NULL | NULL |

---

###systems requirements

| id | config | title | description | version | type | update_time | create_time |
| ------------- | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: |
| 1 | _srv | Apache |Server version: Apache/2.2.24 (Unix) Server built:   Jul  7 2013 18:05:17 | 2.2.24 | service | NULL | NULL |
| 2 | _lag | PHP | PHP 5.5.4 (cli) (built: Oct  1 2013 08:26:14) Copyright (c) 1997-2013 The PHP Group Zend Engine v2.5.0, Copyright (c) 1998-2013 Zend Technologieswith Xdebug v2.2.2, Copyright (c) 2002-2013, by Derick Rethan| 5.5.4 | language |  NULL | NULL |
| 3 | _sql | MYSQL | Welcome to the MySQL monitor.  Commands end with ; or \g. Your MySQL connection id is 1 Server version: 5.6.14 MySQL Community Server (GPL) | 5.6.14 | service |  NULL | NULL |



| id |department| value | help_group_id | parent_id | pivot | update_time | create_time |
| ------------- | :-------------: | ------------- | :-------------: | ------------- | :-------------: | :-------------: | :-------------: |
| 2 | ![alt text][logo] | laps1  | SYS | 1 | -1 | NULL| NULL |


| id | value | update_time | create_time |
| ------------- |:-------------: |:-------------: |:-------------: |
| title | Dosya Yapısı | NULL | NULL |
| isChild | true | NULL | NULL |
| standart | PSR-0 | NULL | NULL |
| version | v.1.3b | NULL | NULL |



[Kardeş Yazilim ve Danışmanlık Hizmetleri][domain]



| id | version | long_version | group | title | help_id | department_id | update_time | create_time |
| ------------- |:-------------: |:-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | 
| 2 | v1.0b | ~~v.1.0.1.0.1.1~~ | systems | [title]_config | 0002 | 1 | NULL | NULL |



---





###document root (_www)
| id | type | ext | name |title | description | parent_id | user | group | permission |
| ------------- | :-------------: |:-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | 
| 1 | dir | _www | NULL| Apps Root (_www) | Aplication Default Folder | 0 | _www | _www | 755 |

###file tree

>     _www 
>> **apps** 
>>> **_core** 
>>>> **`{#MODULEFOLDER#}`** 
>>>>> _`{#MODULEFILE#}`_

>>> **_etc** 
>>>> **locale** 
>>>>> **`{#MODULEFOLDER#}`** 
>>>>>> _`{#MODULEFILE#}`_ 

>>>>> _`{#CORECONFIGFILE#}`_ 

>>>>> _`{#BOOTLOADERFILE#}`_ 

>>>>> _`{#DBCONFIGFILE#}`_ 

>>>>> **lang** 

>>>>>> **`{#LANGFOLDER#}`** 
 
>>>>>>> _`{#LANGFILE#}`_ 

>>> **_urs** 
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
>>>> _`markado_2013[tablename].MYI`_

>>>> _`markado_2013[tablename].MYD`_

>>>> _`markado_2013[tablename].frm`_


>>>> _`markado_2013.ext`_

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




<pre>
! : "_www default apache root folder. "
! : "*FOLDER or *FILE folder array [] "
¡ : "*hash file default : sha1, sha1_key : carina(default) "
</pre>


### variable file type and mime_type  list 

| id | value | type | ext | mime_type | update_time | create_time| 
| ------------- | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: |
|1|{#MERGEFILE#}| file | hash | text/plain | NULL | NULL|





###file type permission list



| id | type | name | ext | title | description | prnt_d | user | group | prmssn |
| ------------- | :------------- |:------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | :------------- | 
| 2 | dir | app | NULL | Core Folder | Aplication APPS Folder | 1 | _www | _www | 755 |
| 3 | dir | _core | NULL | Core Folder | Aplication Core Folder | 2 | _www | _www | 755 |
| 4 | dir | {#DIR#} | NULL | {#FOLDER#} | Aplication Core {#MODULEFOLDER#} Folder | 3 | _www | _www | 755 |
| 5 | file | {#FILE#} | .inc | {#FILE#} | {#MODULEFILE#} | 3 | _www | _www | 644 |


>>>> **_page_**: 1 -   **_pivot_** : [(0 - {#end_sum_privot#}) / 3] (mod10)  -  **_childID_** = [v.1.0.1.0.1](./v.1.0.1.0.1.md) - **_dept_tags_** : [labs](http://labs.kardesyazilim.net , "Labs Bro Bro Yaylalar Developer") - _**help_sku**_ : _~~SYS~~_


>>> ~~**v.1.0.1.0.1.1**~~  up [v.1.0.1.0.1.2](./v.1.0.1.0.1.2.md)


>> ##### [Title](http://docs.kardesyazilim.net/grpsku/SYS) : ~~systems requirements~~, ~~folder tree~~, ~~mime/type~~, ~~file permission~~, ~~.htaccess~~  and ~~print_f($q[])~~ .


> ![alt text][logo]  [Kardeş Yazılım Danışmanlık Hizmetleri][domain]                               



[domain]: (http://kardesyazilim.net "Kardeş Yazlım Danışmanlık Hizmetleri")
[logo]: http://kardesyazilim.net/kardes_yazilim_transparent_24.png "Kardeş Yazılım Danışmanlık Hizmetleri"
[logo16]: http://kardesyazilim.net/kardes_yazilim_transparent_16.png "Kardeş Yazılım Danışmanlık Hizmetleri"
</MTMarkdownOptions>