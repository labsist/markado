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
| id | filetype | ext | title | description | parent_id | user | group | permission |update_time | create_time |
| ------------- | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: | :-------------: |:-------------: |
| 1 | dir | NULL | Apps Root (_www) | Aplication Default Folder | 0 | _www | _www | 755 | | |

#file tree

>     _www [title] [description] [permission] [user] [group] [permission]
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
>>>>>> **`{#MODULEFOLDER#}`**
>>>>>>> _`{#MODULEFILE#}`_ 

>>>>> **markado**
>>>>>> **`{#MODULEFOLDER#}`**
>>>>>>> _`{#MODULEFILE#}`_ 


>>>> **frontend**
>>>>> **default**

>>>> **mobil**
>>>>> **default**

>>>> **ext**
>>>>> **default**

[domain]: (http://kardesyazilim.net "Kardeş Yazlım Danışmanlık Hizmetleri")
</MTMarkdownOptions>