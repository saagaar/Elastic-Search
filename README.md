# Project Task (For Desygner)
A small app which  demonstrates following features :
* Authentication Module(Login/Register) for admin and user
* Admin can upload image either using Image url or file upload with multiple tags and providers
* Open API 
* Public Search (UI)
* Add images to Personal library (when logged in)
* View and Remove Images in Personal Library

**And a special Consideration:**
From the task document itself
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
For database we have used two types of database server. For speed as well as integrity.
* **Mysql**

The use of mysql (a relational database) is because of its property of ACID. Data integrity is major characteristics of relational database so we used Mysql to maintain relation among the data and as a source of truth.

* **Elastic Search**

Unlike Mysql, Elastic search is a unstructured database which stores data as a document . It is known for analytical database and a search engine with known for its  distributed nature, speed, and scalability.

##### How it works
In the system , although source of truth is maintained for Mysql database but all data are Indexed to Elastic search server as well. So we used Elastic server as secondary storage to use it to  search data as search engine, where we store all the possible search columns and index them as per the need. 

When data is low in volume, there is not much difference in the system performance whatever database we use but at large data and huge volumes of data elastic searches has incredibly fast  data search capacity in relation to relational database which will be used in for searches. Hence this can help us gain significant speed in terms of search. 

#### Application/Backend
Following optimization is used: 
1. Image storage can be a lot trouble in handling since they can be very large in size. Inserting Images into database is not a solution so we have saved the database in local storage and their indexes are saved in the database. 
2. Since we don't require the full sized image to be downloaded from server when displaying them so to make image light ,we  instead of saving only the original image ,we make two copies of images to save .i.e thumbnail (which is automatically resized) that is enough to display in our search and another the original image (if in case we need). Although the disk size increases and cost increases with two copies of each but today in the world disk space is a lot cheaper then bandwidth ,So we use multiple copies  to resize automatically when uploading.
3. Another problem what we addressed is that we have logically distributed the image into different folders instead of saving into a same folder.  To reduce the time that application looks up for searching 200million  images into same folder is much higher so we have separated the images folder so whenever we need a image we look up direct into the folder where application can search in much less time. 

#### Frontend 
To speed up the search and experience in frontend , following things are done:
1. Infinite Loading(type of pagination) i.e.  On demand Loading is implemented in search it can in one hand reduce the time to load and enhance user experience and in other hand help to save server bandwidth.

Though because of time and various other constraints we couldn't implement all of the things that could be done. I have tried to explain some other points that could be used to improve application performance.

### What can be done in future
#### DataBase

* **Elastic Search**
Elastic Search provides its own REST API so it could be much quicker to use . 


#### Application/Backend
Following optimization can be made:
1. We can use AWS services like S3 to make storage and reterival quicker
2. Using CDN to improve image delivery can help 
3. Dynamic image resize with cache optimization can be more flexible then to store millions of images as thumbnail as our implementation with condition that It can lead to high requirement of processing power ,which depends on various cases like number of concurrent user and so on.
4. Load Balancer  can be used to horizontally scale the server .
5. Some Image optimizer library or compression algorithm can be implemented
#### Frontend 
Following Optimization can be made:  
1. Progressive or Lazy loading feature can be added (Could not do because of time constraint)
2. Separate frontend and application server

With these techniques even integrating more servers horizontally or vertically  can assist on the performance of the application. More over the requirement can vary and none techniques are perfect for any cases. So We can understand ,experiment and learn today for improving applications  to run for tomorrow. 
