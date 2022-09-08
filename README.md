# Project Task (For Desygner)
A small app which  demonstrates following features :
* Authentication Module(Login/Register) for admin and user
* Admin can upload image either using Image url or file upload with multiple tags and providers
* Open API 
* Public Search (UI)
* Add images to Private library (when logged in)
* View and Remove Images in Personal Library

**And a special Consideration:**
> Desygner offers close to 200 million images. Please make sure that the system you architect continues to function smoothly as it approaches such numbers of records.


### Tools and Technologies
1. PHP (Symfony)
2. Mysql
3. Vue.js(Frontend)
4. Nginx (Web Server)
5. Elastic Search (Search Engine Server)
6. Docker (Containerization Tool)
7. Github (Version Control)

### Installation

Following steps are to be followed for installation:

***Point your command line tool to the location of your folder***

```bash
docker compose up --build
```

Until this point all the servers are now up and running . Please verify if docker is running. If failed 
Now you will have to follow some more steps to configure run time data like migrations and seeding 

 
```bash
docker  exec -it php81-container ./bin/console doctrine:migrations:migrate --no-interaction 
```
This command will simply run the migrations required
```bash
docker  exec -it php81-container ./console doctrine:fixtures:load --no-interaction
```
We run some fixtures or  seeds into database.
```bash
docker  exec -it php81-container  ./bin/console fos:elastica:populate
```
The last fixtures loaded through doctrine in  database (Mysql) ,will be initially synchronized to **Elastic search** Database

## Description on Solutions
Since one of the main objective of this task is to design architecture of the application which can support  millions of images and autocomplete search. Though working on the architecture can be seen through various perspectives and the requirement dependens upon a lots of different use cases.  
Here I have given my overview on What I have currently worked on and some description on  how we can work to scale up:

### What I implemented Here:
#### DataBase
For database we have used two types of database server. 
* **Mysql**

The use of mysql (a relational database) is because of its property of ACID. Data integrity is major characteristics of relational database so we used Mysql to maintain relation among the data and as a source of truth.

* **Elastic Search**
Unlike Mysql, Elastic search is a unstructured database which stores data as a document . It is known for analytical database and a search engine with known for its  distributed nature, speed, and scalability.

##### How it works
In the system , although source of truth is maintained for Mysql database but all data are Indexed to Elastic search server as well. So we use this data to make search where we store all the possible search columns and index them by various search method. 

When data is in low volume, there is not much difference in the system whatever database we use but once data volume increases Elastic searches has incredibly fast  data search capacity. Hence this can help us gain significant speed in terms of search in frontend


### What can be done in future
####

 
Elastic search is used here for 
1. The main feature  to make search fast is
1. Frontend on Vue.js which is a progressive Javascript library .  

2. 

