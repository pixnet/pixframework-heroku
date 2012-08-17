pixframework-heroku
===================
* initial
1. copy all files here to your repository
2. fetch pixframework from http://github.com/pixnet/pixframrwork to ./libs/pixframework
3. use '''heroku config:set LD\_LIBRARY\_PATH=/app/php/ext:/app/apache/lib''

* how to create table
1. deploy your code to heroku
2. use '''heroku run "~/bin/php ~/www/prompt.php'''
3. use '''ModelName::createTable()''' in Pix\_Prompt
